<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Poliklinik');
		$this->load->model('Dokter');
		$this->load->model('Obat');
		$this->load->model('Pasien');
		$this->load->model('Petugas');
		$this->load->model('Pendaftaran');
		$this->load->model('Rekamedis');
		$this->load->model('Pembayaran');
		$this->load->model('Resep');
		$this->load->model('Tindakan');
		$this->load->model('Detail_periksa');
	}
	
	public function index()
	{
		$this->cek_login();
		$data=array();
		$this->layout_top();
		$this->load->view('default', $data, FALSE);
		$this->layout_bottom();
	}
	public function login(){
		$data=array();
		$this->load->view('login', $data, FALSE);
	}
	public function cek_login(){
		if(empty($this->session->userdata('sesi_login'))){
			redirect('web/login');
		}
	}
	public function proses_login()
	{
		
		if(!empty($this->session->userdata('sesi_login'))){
			redirect('web');
		}else{
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$result=$this->Petugas->get_login($username,$password);
			if($result->num_rows()>0){
				$res=$result->result()[0];
				$data=array(
					'sesi_login'=>rand(0,99999),
					'kode_petugas'=>$res->kode_petugas,
					'username'=>$res->username,
					'nama'=>$res->nama_petugas,
					'level'=>$res->level,
				);
				$this->session->set_userdata($data);
				redirect('web');
			}else{
				$this->session->set_flashdata('message', 'Masukan Username dan Password yang benar');
				redirect('web/login');
			}
		}

	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('web/login');
	}
	public function pengaturan(){
	 	$this->layout_top("Pengaturan");
		$this->load->view('pengaturan', FALSE);
		$this->layout_bottom();
	}
	public function pengaturan_proses(){
		$session_set=$this->input->post('session_set');
		$password=$this->input->post('password');
		$password_ver=$this->input->post('password_ver');
		$kode_dokter=$this->session->userdata('kode_dokter');
		$kode_petugas=$this->session->userdata('kode_petugas');
			if($password==$password_ver){
				$result=$this->Petugas->update_password($kode_petugas,$password);
				if($result){
					$this->session->set_flashdata('message', 'Password berhasil di ubah');
						redirect('web/pengaturan');
				}
			}else{
					$this->session->set_flashdata('message', 'Password verifikasi tidak sama');
						redirect('web/pengaturan');
			}
	}

	public function backup(){
		$this->layout_top("Backup & Restore");
		$this->load->view('backup', FALSE);
		$this->layout_bottom();
	}
	public function to_backup(){
			$this->load->dbutil();
			$prefs = array(
		        'tables'        => array(),   // Array of tables to backup.
		        'ignore'        => array(),                     // List of tables to omit from the backup
		        'format'        => 'txt',                       // gzip, zip, txt
		        'filename'      => 'backup_file.sql',              // File name - NEEDED ONLY WITH ZIP FILES
		        'add_drop'      => TRUE,                        // Whether to add DROP TABLE statements to backup file
		        'add_insert'    => TRUE,                        // Whether to add INSERT data to backup file
		        'newline'       => "\n"                         // Newline character used in backup file
				);

			$backup=$this->dbutil->backup($prefs);

			// Load the file helper and write the file to your server
			$this->load->helper('file');
			write_file('./backup/backup_file.sql', $backup);
			// // Load the download helper and send the file to your desktop
			$this->session->set_flashdata('message', 'backup ke backup_file.sql berhasil');
			redirect('web/backup');
	}

	public function to_restore(){
		
		  $isi_file = file_get_contents("./backup/backup_file.sql");
		  $string_query = rtrim($isi_file, "\n;" );
		  $array_query = explode(";", $string_query);
		  foreach($array_query as $query)
		  {
		    $this->db->query($query);
		  }
		  $this->session->set_flashdata('message', 'restore dari backup_file.sql berhasil');
		  redirect('web/backup');
	}
	public function antrian($kode_dokter=""){
		$res=$this->Pendaftaran->hitung_antrian($kode_dokter);
		print_r($res+1);
	}
	public function an_pasien(){
		$auto=$this->Pasien->get_max()->result()[0];

		$no_pasien = $auto->kode_max;
        $noUrut = (int) substr($no_pasien, 5, 5);
        $noUrut++;
        $char = "NOPSN";
        $no_pasien = $char . sprintf("%05s", $noUrut);

        echo $no_pasien;
	}

	public function data_poli($section="",$id="")
	{
		if($section==""){
			$data=array(
			'res'=>$this->Poliklinik->get_poli()
			);
			$this->layout_top();
			$this->load->view('data_poli', $data, FALSE);
			$this->layout_bottom();
		}elseif($section=="tambah"){
			$data=array(
				'auto'=>$this->Poliklinik->get_max()->result()[0]
			);
			$this->layout_top();
			$this->load->view('data_poli_tambah',$data,false);
			$this->layout_bottom();
		}elseif($section=="modal"){
			$data=array(
			'res'=>$this->Poliklinik->get_poli()
			);
			$this->load->view('modal_poli', $data, FALSE);
		}elseif($section=="simpan"){
			$kode_poli=$this->input->post('kode_poli');
			$nama_poli=$this->input->post('nama_poli');
			$lantai=$this->input->post('lantai');
			$result=$this->Poliklinik->set_poli($kode_poli,$nama_poli,$lantai);
			if($result){
				$this->session->set_flashdata('message', 'Poli Berhasil Ditambah');
				redirect('web/data-poli');
			}
		}elseif($section=="ubah"){
			$data=array(
				'res'=>$this->Poliklinik->get_poli_by_id($id)
			);
			$this->layout_top();
			$this->load->view('data_poli_ubah',$data,false);
			$this->layout_bottom();	
		}elseif($section=="perbarui"){
			$kode_poli=$this->input->post('kode_poli');
			$nama_poli=$this->input->post('nama_poli');
			$lantai=$this->input->post('lantai');
			$result=$this->Poliklinik->update_poli($kode_poli,$nama_poli,$lantai);
				if($result){
					$this->session->set_flashdata('message', 'Poli Berhasil Diubah');
						redirect('web/data-poli');
				}
		}elseif ($section=="hapus") {
			$result=$this->Poliklinik->delete_poli($id);
			if($result){
				$this->session->set_flashdata('message', 'Poli Berhasil dihapus');
				redirect('web/data-poli');
			}
		}
		
	}
	public function data_tindakan($section="",$id="")
	{
		if($section==""){
			$data=array(
			'res'=>$this->Tindakan->get_tindakan()
			);
			$this->layout_top();
			$this->load->view('data_tindakan', $data, FALSE);
			$this->layout_bottom();
		}elseif($section=="tambah"){
			$data=array(
				'auto'=>$this->Tindakan->get_max()->result()[0]
			);
			$this->layout_top();
			$this->load->view('data_tindakan_tambah',$data,false);
			$this->layout_bottom();
		}elseif($section=="simpan"){
			$kode_tindakan=$this->input->post('kode_tindakan');
			$nama_tindakan=$this->input->post('nama_tindakan');
			$tarif=$this->input->post('tarif');
			$result=$this->Tindakan->set_tindakan($kode_tindakan,$nama_tindakan,$tarif);
			if($result){
				$this->session->set_flashdata('message', 'Tindakan Berhasil Ditambah');
				redirect('web/data-tindakan');
			}
		}elseif($section=="ubah"){
			$data=array(
				'res'=>$this->Tindakan->get_tindakan_by_id($id)
			);
			$this->layout_top();
			$this->load->view('data_tindakan_ubah',$data,false);
			$this->layout_bottom();	

		}elseif($section=="modal"){
			$data=array(
			'res'=>$this->Tindakan->get_tindakan()
			);
			$this->load->view('modal_tindakan', $data, FALSE);
		}elseif($section=="perbarui"){
			$kode_tindakan=$this->input->post('kode_tindakan');
			$nama_tindakan=$this->input->post('nama_tindakan');
			$tarif=$this->input->post('tarif');
			$result=$this->Tindakan->update_tindakan($kode_tindakan,$nama_tindakan,$tarif);
				if($result){
					$this->session->set_flashdata('message', 'Tindakan Berhasil Diubah');
						redirect('web/data-tindakan');
				}
		}elseif ($section=="hapus") {
			$result=$this->Tindakan->delete_tindakan($id);
			if($result){
				$this->session->set_flashdata('message', 'Tindakan Berhasil dihapus');
				redirect('web/data-tindakan');
			}
		}
		
	}
	public function data_dokter($section="",$id="")
	{
		if($section==""){
			$data=array(
			'res'=>$this->Dokter->get_dokter()
			);
			$this->layout_top();
			$this->load->view('data_dokter', $data, FALSE);
			$this->layout_bottom();
		}elseif($section=="tambah"){
			$data=array(
				'auto'=>$this->Dokter->get_max()->result()[0]
			);
			$this->layout_top();
			$this->load->view('data_dokter_tambah',$data,false);
			$this->layout_bottom();
		}elseif($section=="modal"){
			$data=array(
				'res'=>$this->Dokter->get_dokter_by_poli($id)
			);
			$this->load->view('modal_dokter', $data, FALSE);
		}elseif($section=="ubah"){
			$data=array(
				'res'=>$this->Dokter->get_dokter_by_id($id)
			);
			$this->layout_top();
			$this->load->view('data_dokter_ubah',$data,false);
			$this->layout_bottom();
		}elseif($section=="simpan"){
			$kode_dokter=$this->input->post('kode_dokter');
			$kode_poli=$this->input->post('kode_poli');
			$nama=$this->input->post('nama');
			$sip=$this->input->post('sip');
			$tarif=$this->input->post('tarif');
			$nomor_telepon=$this->input->post('nomor_telepon');
			$alamat=$this->input->post('alamat');
			

			
				$result=$this->Dokter->set_dokter($kode_dokter,$kode_poli,$nama,$sip,$tarif,$nomor_telepon,$alamat);
				if($result){
					$this->session->set_flashdata('message', 'Dokter Berhasil Ditambah');
						redirect('web/data-dokter');
				}
			
		}elseif($section=="perbarui"){
			$kode_dokter=$this->input->post('kode_dokter');
			$kode_poli=$this->input->post('kode_poli');
			$nama=$this->input->post('nama');
			$sip=$this->input->post('sip');
			$tarif=$this->input->post('tarif');
			$nomor_telepon=$this->input->post('nomor_telepon');
			$alamat=$this->input->post('alamat');
		
				$result=$this->Dokter->update_dokter($kode_dokter,$kode_poli,$nama,$sip,$tarif,$nomor_telepon,$alamat);
				if($result){
					$this->session->set_flashdata('message', 'Dokter Berhasil Diubah');
						redirect('web/data-dokter');
				}
			
		}elseif($section=="hapus"){
			$result=$this->Dokter->delete_dokter($id);
				$this->session->set_flashdata('message', 'Dokter Berhasil dihapus');
					redirect('web/data-dokter');
		
		}elseif($section=="detail"){
			$data=array(
				'res'=>$this->Pendaftaran->get_pendaftaran_Rekamedis_dokter_detail_by_id($id),
				
			);
			$this->layout_top('Laporan Detail Dokter');
			$this->load->view('pemeriksaan_dokter_detail',$data,FALSE);
			$this->layout_bottom();
		}
	
		
	}
	public function data_obat($section="",$id="")
	{
		if($section==""){
			$data=array(
			'res'=>$this->Obat->get_obat()
			);
			$this->layout_top();
			$this->load->view('data_obat', $data, FALSE);
			$this->layout_bottom();
		}elseif($section=="tambah"){
			$data=array(
				'auto'=>$this->Obat->get_max()->result()[0]
			);
			$this->layout_top();
			$this->load->view('data_obat_tambah',$data,false);
			$this->layout_bottom();
		}elseif($section=="ubah"){
			$data=array(
				'res'=>$this->Obat->get_obat_by_id($id)
			);
			$this->layout_top();
			$this->load->view('data_obat_ubah',$data,false);
			$this->layout_bottom();	
		}elseif($section=="modal"){
			$data=array(
				'res'=>$this->Obat->get_obat()
			);
			$this->load->view('modal_obat', $data, FALSE);
		}elseif($section=="simpan"){
			$kode_obat=$this->input->post('kode_obat');
			$nama_obat=$this->input->post('nama_obat');
			$jumlah_obat=$this->input->post('jumlah_obat');
			$jenis=$this->input->post('jenis');
			$satuan=$this->input->post('satuan');
			$harga_modal=$this->input->post('harga_modal');
			$harga=$this->input->post('harga');
			$tgl_masuk=$this->input->post('tgl_masuk');
			$result=$this->Obat->set_obat($kode_obat,$nama_obat,$jumlah_obat,$jenis,$satuan,$harga_modal,$harga,$tgl_masuk);
			if($result){
				$this->session->set_flashdata('message', 'Obat Berhasil Ditambah');
				redirect('web/data-obat');
			}
		}elseif($section=="perbarui"){
			$kode_obat=$this->input->post('kode_obat');
			$nama_obat=$this->input->post('nama_obat');
			$jumlah_obat=$this->input->post('jumlah_obat');
			$jenis=$this->input->post('jenis');
			$satuan=$this->input->post('satuan');
			$harga_modal=$this->input->post('harga_modal');
			$harga=$this->input->post('harga');
			$tgl_masuk=$this->input->post('tgl_masuk');
			$result=$this->Obat->update_obat($kode_obat,$nama_obat,$jumlah_obat,$jenis,$satuan,$harga_modal,$harga,$tgl_masuk);
			if($result){
				$this->session->set_flashdata('message', 'Obat Berhasil Diubah');
					redirect('web/data-obat');
			}	
		}elseif ($section=="hapus") {
			$result=$this->Obat->delete_obat($id);
			if($result){
				$this->session->set_flashdata('message', 'Obat Berhasil dihapus');
				redirect('web/data-obat');
			}
		}
		
	}
	public function data_pasien($section="",$id="")
	{
		if($section==""){
			$data=array(
			'res'=>$this->Pasien->get_pasien()
			);
			$this->layout_top();
			$this->load->view('data_pasien', $data, FALSE);
			$this->layout_bottom();
		}elseif($section=="tambah"){
			$data=array(
				'auto'=>$this->Pasien->get_max()->result()[0]
			);
			$this->layout_top();
			$this->load->view('data_pasien_tambah',$data,false);
			$this->layout_bottom();
		}elseif($section=="ubah"){
			$data=array(
				'res'=>$this->Pasien->get_pasien_by_id($id)
			);
			$this->layout_top();
			$this->load->view('data_pasien_ubah',$data,false);
			$this->layout_bottom();

		}elseif($section=="modal"){
			$data=array(
				'res'=>$this->Pasien->get_pasien_by_status($id)
			);
			$this->load->view('modal_pasien', $data, FALSE);

		}elseif($section=="simpan"){
			echo $nomor_pasien=$this->input->post('nomor_pasien');
			echo $nama_pasien=$this->input->post('nama_pasien');
			echo $jenis_kelamin=$this->input->post('jenis_kelamin');
			echo $alamat=$this->input->post('alamat');
			echo $tanggal_lahir=$this->input->post('tanggal_lahir');
			echo $usia=$this->input->post('usia');
			echo $nomor_telepon=$this->input->post('nomor_telepon');
			$result=$this->Pasien->set_pasien($nomor_pasien,$nama_pasien,$jenis_kelamin,$alamat,$tanggal_lahir,$usia,$nomor_telepon);
			if($result){
				$this->session->set_flashdata('message', 'Pasien Berhasil Ditambah');
				redirect('web/data-pasien');
			}
		}elseif($section=="perbarui"){
			echo $nomor_pasien=$this->input->post('nomor_pasien');
			echo $nama_pasien=$this->input->post('nama_pasien');
			echo $jenis_kelamin=$this->input->post('jenis_kelamin');
			echo $alamat=$this->input->post('alamat');
			echo $tanggal_lahir=$this->input->post('tanggal_lahir');
			echo $usia=$this->input->post('usia');
			echo $nomor_telepon=$this->input->post('nomor_telepon');
			$result=$this->Pasien->update_pasien($nomor_pasien,$nama_pasien,$jenis_kelamin,$alamat,$tanggal_lahir,$usia,$nomor_telepon);
				if($result){
					$this->session->set_flashdata('message', 'Pasien Berhasil Diubah');
						redirect('web/data-pasien');
				}
		}elseif ($section=="hapus") {
			$result=$this->Pasien->delete_pasien($id);
			if($result){
				$this->session->set_flashdata('message', 'Pasien Berhasil dihapus');
				redirect('web/data-pasien');
			}
		}elseif($section=="cetak-kartu"){
			$data=array(
				'res'=>$this->Pasien->get_pasien_by_id($id),
			);
			$this->layout_top();
			$this->load->view('cetak_kartu', $data, FALSE);
			$this->layout_bottom();
		}elseif($section=="detail"){
			$data=array(
				'res'=>$this->Pendaftaran->get_pendaftaran_rekamedis_pasien_detail_by_id($id),
				
			);
			$this->layout_top("Laporan Detail Rekamedis Pasien");
			$this->load->view('pemeriksaan_pasien_detail',$data,FALSE);
			$this->layout_bottom();
	
		}
		
		
	}
	public function data_petugas($section="",$id="")
	{
		if($section==""){
			$data=array(
				'res'=>$this->Petugas->get_petugas()
			);
			$this->layout_top();
			$this->load->view('data_petugas', $data, FALSE);
			$this->layout_bottom();
		}elseif($section=="tambah"){
			$data=array(
				'auto'=>$this->Petugas->get_max()->result()[0]
			);
			$this->layout_top();
			$this->load->view('data_petugas_tambah',$data,false);
			$this->layout_bottom();
		}elseif($section=="ubah"){
			$data=array(
				'res'=>$this->Petugas->get_petugas_by_id($id)
			);
			$this->layout_top();
			$this->load->view('data_petugas_ubah',$data,false);
			$this->layout_bottom();
		}elseif($section=="simpan"){
			$kode_petugas=$this->input->post('kode_petugas');
			$nama=$this->input->post('nama');
			$alamat=$this->input->post('alamat');
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$password_ver=$this->input->post('password_ver');
			$level=$this->input->post('level');
			if($password==$password_ver){
				$result=$this->Petugas->set_petugas($kode_petugas,$nama,$alamat,$username,$password,$level);
				if($result){
					$this->session->set_flashdata('message', 'Petugas Berhasil Ditambah');
						redirect('web/data-petugas');
				}
			}else{
				$this->session->set_flashdata('message', 'Masukan password verifikasi harus sama');
				redirect('web/data-petugas/tambah');
			}
		}elseif($section=="perbarui"){
			$kode_petugas=$this->input->post('kode_petugas');
			$nama=$this->input->post('nama');
			$alamat=$this->input->post('alamat');
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$password_ver=$this->input->post('password_ver');
			$level=$this->input->post('level');
			if(empty($password)){
				$result=$this->Petugas->update_petugas_no_password($kode_petugas,$nama,$alamat,$username,$level);
				if($result){
					$this->session->set_flashdata('message', 'Petugas Berhasil Diubah');
						redirect('web/data-petugas');
				}
			}else{
				if($password==$password_ver){
				$result=$this->Petugas->update_petugas($kode_petugas,$nama,$alamat,$username,$password,$level);
				if($result){
					$this->session->set_flashdata('message', 'Petugas Berhasil Diubah');
						redirect('web/data-petugas');
				}
			}else{
				$this->session->set_flashdata('message', 'Masukan password verifikasi harus sama');
				redirect('web/data-petugas/ubah/'.$kode_dokter);
			}
			}
		}elseif($section=="hapus"){
			$result=$this->Petugas->delete_petugas($id);
				$this->session->set_flashdata('message', 'Petugas Berhasil dihapus');
					redirect('web/data-petugas');
		}
		
	}
	public function medis_periksa($section="",$id="")
	{
		if($section==""){
			$data=array(
			'res'=>$this->Pendaftaran->get_pendaftaran_diff_status2("resep","selesai")
			);
			$this->layout_top();
			$this->load->view('medis_pemeriksaan', $data, FALSE);
			$this->layout_bottom();
		}elseif($section=="tambah"){
			$data=array(
				'id'=>$id
			);
			$this->layout_top();
			$this->load->view('medis_pemeriksaan_tambah', $data, FALSE);
			$this->layout_bottom();

		}elseif($section=="ubah"){
			$data=array(
				'id'=>$id,
				'res'=>$this->Rekamedis->get_periksa_by_id($id)
			);
			$this->layout_top();
			$this->load->view('medis_pemeriksaan_ubah', $data, FALSE);
			$this->layout_bottom();
		}elseif($section=="simpan"){
			echo $no_daftar=$this->input->post('no_daftar');
			echo $tgl_periksa=$this->input->post('tgl_periksa');
			echo $keluhan=$this->input->post('keluhan');
			echo $diagnosa=$this->input->post('diagnosa');
			//echo $nama_tindakan=$this->input->post('nama_tindakan');
			echo $tindakan=$this->input->post('kode_tindakan');
			$result=$this->Rekamedis->set_periksa($no_daftar,$tgl_periksa,$keluhan,$diagnosa,$tindakan);
			if($result){
				$this->Pendaftaran->update_status("periksa",$no_daftar);
				$this->session->set_flashdata('message', 'Rekamedis telah ditambakan');
				redirect('web/medis-periksa');
			}
		}elseif($section=="perbarui"){
			echo $no_daftar=$this->input->post('no_daftar');
			echo $tgl_periksa=$this->input->post('tgl_periksa');
			echo $keluhan=$this->input->post('keluhan');
			echo $diagnosa=$this->input->post('diagnosa');
			//echo $nama_tindakan=$this->input->post('nama_tindakan');
			echo $tindakan=$this->input->post('kode_tindakan');
			$result=$this->Rekamedis->update_periksa($no_daftar,$tgl_periksa,$keluhan,$diagnosa,$tindakan);
			if($result){
				$this->Pendaftaran->update_status("periksa",$no_daftar);
				$this->session->set_flashdata('message', 'Rekamedis telah diubah');
				redirect('web/medis-periksa');
			}
		}

		
	}
	public function medis_resep($section="",$id="")
	{
		if($section==""){
			$data=array(
			'res'=>$this->Pendaftaran->get_pendaftaran_by_status2("periksa","resep")
			);

			$this->layout_top();
			$this->load->view('medis_resep', $data, FALSE);
			$this->layout_bottom();
		}elseif($section=="kelola"){
			$data=array(
				'res'=>$this->Pendaftaran->get_pendaftaran_detail_by_id($id)
			);
			$this->layout_top();
			$this->load->view('medis_resep_kelola', $data, FALSE);
			$this->layout_bottom();
		}elseif($section=="modal"){
			$data=array(
				'res'=>$this->Resep->get_resep_detail($id)
			);
			$this->load->view('modal_resep', $data, FALSE);
		}elseif($section=="total"){
			$res=$this->Resep->get_total_resep($id);
			$res=$res->row_array();
			echo $res['jumlah_subtotal'];
		}elseif($section=="simpan"){
			$no_daftar=$this->input->post('no_daftar');
			echo $no_daftar;
			foreach ($this->cart->contents() as $items):
					if($no_daftar=$items['nid']){
						$this->Resep->set_resep($items['nid'],$items['id'],$items['qty'],$items['price'],$items['subtotal'],$items['many'],$items['desc']);
					}
			endforeach;
			$this->Pendaftaran->update_status("resep",$no_daftar);
			$this->cart->destroy(); 
			redirect('web/medis-resep/cetak/'.$no_daftar);
		}elseif($section=="cetak"){
			$data=array(
				'res'=>$this->Pendaftaran->get_pendaftaran_detail_by_id($id),
				'rec'=>$this->Resep->get_resep_detail($id)
			);
			$this->layout_top();
			$this->load->view('medis_resep_cetak', $data, FALSE);
			$this->layout_bottom();
		}
		
	}

	public function get_biaya_tindakan($id){
		$res=$this->Detail_periksa->get_total_periksa($id);
			$res=$res->row_array();
			echo $res['total_tindakan']+0;
	}

	
	public function transaksi_pendaftaran($section="",$id="",$sid="")
	{
		if($section==""){
			$data=array(
				'res'=>$this->Pendaftaran->get_pendaftaran_by_status("proses")
			);
			$this->layout_top();
			$this->load->view('transaksi_pendaftaran', $data, FALSE);
			$this->layout_bottom();
		}elseif($section=="tambah"){
			$data=array(
				'auto'=>$this->Pendaftaran->get_max()->result()[0]
			);
			$this->layout_top();
			$this->load->view('transaksi_pendaftaran_tambah', $data, FALSE);
			$this->layout_bottom();
		}elseif($section=="simpan"){
			echo $no_daftar=$this->input->post('no_daftar');
			echo $kode_petugas="KP002";
			echo $kode_poli=$this->input->post('kode_poli');
			echo $kode_dokter=$this->input->post('kode_dokter');
			echo $no_pasien=$this->input->post('no_pasien');
			echo $nama_pasien=$this->input->post('nama_pasien');
			echo $jenis_kelamin=$this->input->post('jenis_kelamin');
			echo $alamat=$this->input->post('alamat');
			echo $tanggal_lahir=$this->input->post('tanggal_lahir');
			echo $usia=$this->input->post('usia');
			echo $no_telp=$this->input->post('no_telp');
			echo $tanggal=$this->input->post('tanggal');
			echo $no_antri=$this->input->post('no_antri');
			echo $status=$this->input->post('status');
				if ($status=="baru"){
					$this->Pasien->set_pasien($no_pasien,$nama_pasien,$jenis_kelamin,$alamat,$tanggal_lahir,$usia,$no_telp,0);
				}else{
					$this->Pasien->update_status($no_pasien,0);
				}
			$result=$this->Pendaftaran->set_pendaftaran($no_daftar,$kode_petugas,$kode_poli,$kode_dokter,$no_pasien,$tanggal,$no_antri,"proses");
			if($result){
				$this->session->set_flashdata('message', 'Pendaftaran Berhasil');
				redirect('web/transaksi_pendaftaran');
			}
		}elseif($section=="modal"){
			$data=array(
				'res'=>$this->Pendaftaran->get_pendaftaran_detail()
			);
			$this->load->view('modal_pendaftaran', $data, FALSE);
		}elseif($section=="batal"){
			$result=$this->Pendaftaran->delete_pendaftaran($id);

			if($result){
				$this->Pasien->update_status($sid,1);
				redirect('web/transaksi_pendaftaran');
			}

		}
	}
	public function transaksi_pembayaran($section="",$id="")
	{
		if($section==""){
			$data=array(
				'res'=>$this->Pendaftaran->get_pendaftaran_pembayaran()
			);
			$this->layout_top();
			$this->load->view('transaksi_pembayaran', $data, FALSE);
			$this->layout_bottom();
		}elseif($section=="tambah"){
			$this->layout_top();
			$this->load->view('transaksi_pembayaran_tambah');
			$this->layout_bottom();
		}elseif($section=="simpan"){
			echo $no_daftar=$this->input->post('no_daftar');
			echo $total=$this->input->post('total');
			echo $bayar=$this->input->post('bayar');
			echo $kembali=$this->input->post('kembali');
			$result=$this->Pembayaran->set_pembayaran($no_daftar,$total,$bayar,$kembali);
			
		if($kembali < 0){
				$this->session->set_flashdata('message', 'Jumlah Uang Bayar Kurang');
				redirect($_SERVER['HTTP_REFERER']);
			} else {
				$this->Pendaftaran->update_status("selesai",$no_daftar);
				$this->session->set_flashdata('message', 'Pembayaran Berhasil');
					redirect('web/transaksi_pembayaran/bukti/'.$no_daftar);
			}

			// if($result){
			// 	$this->Pendaftaran->update_status("selesai",$no_daftar);
			// 	$this->session->set_flashdata('message', 'Pembayaran Berhasil');
			// 	redirect('web/transaksi_pembayaran/bukti/'.$no_daftar);
			// }

		}elseif($section=="bukti"){
			$data=array(
				'res'=>$this->Pendaftaran->get_pendaftaran_pembayaran_detail_by_id($id),
				'rec'=>$this->Resep->get_total_resep($id)
			);
			$this->layout_top();
			$this->load->view('transaksi_pembayaran_bukti',$data,FALSE);
			$this->layout_bottom();
		}
	}

	public function laporan_master($section="",$view="form"){
		if($section=="petugas"){
			$data=array(
			'res'=>$this->Petugas->get_petugas()
			);
			$this->layout_top("Laporan Petugas");
			$this->load->view('laporan_master_petugas', $data, FALSE);
			$this->layout_bottom();
		}elseif($section=="dokter"){
			$data=array(
			'res'=>$this->Dokter->get_dokter()
			);
			$this->layout_top("Laporan Dokter");
			$this->load->view('laporan_master_dokter', $data, FALSE);
			$this->layout_bottom();
		}elseif($section=="pasien"){
			$data=array(
			'res'=>$this->Pasien->get_pasien()
			);
			$this->layout_top("Laporan Pasien");
			$this->load->view('laporan_master_pasien', $data, FALSE);
			$this->layout_bottom();
		}elseif($section=="poliklinik"){
			$data=array(
			'res'=>$this->Poliklinik->get_poli()
			);
			$this->layout_top("Laporan Poliklinik");
			$this->load->view('laporan_master_poli', $data, FALSE);
			$this->layout_bottom();
		}elseif($section=="obat"){
			$data=array(
			'res'=>$this->Obat->get_obat()
			);
			$this->layout_top("Laporan Obat");
			$this->load->view('laporan_master_obat', $data, FALSE);
			$this->layout_bottom();
		}elseif($section=="resep" && $view=="form"){
			
			$this->layout_top("Laporan Obat Keluar");
			$this->load->view('filter_resep', FALSE);
			$this->layout_bottom();
		}elseif($section=="resep" && $view=="print"){
			$mulai=$this->input->post('mulai');
			$akhir=$this->input->post('akhir');
			$data=array(
			'res'=>$this->Resep->get_resep_detail_filterDate($mulai,$akhir)
			);
			$this->layout_top("Laporan Obat Keluar");
			$this->load->view('laporan_master_resep', $data, FALSE);
			$this->layout_bottom();
		
		
		}

	}

	public function laporan_transaksi($section="",$view="form"){

		if($section=="pendaftaran" && $view=="form"){
			
			$this->layout_top("Laporan Pendaftaran");
			$this->load->view('filter_pendaftaran', FALSE);
			$this->layout_bottom();
		}elseif($section=="pembayaran" && $view=="form"){
			
			$this->layout_top("Laporan Pembayaran");
			$this->load->view('filter_pembayaran', FALSE);
			$this->layout_bottom();
		}elseif($section=="pendaftaran" && $view=="print"){
			$mulai=$this->input->post('mulai');
			$akhir=$this->input->post('akhir');
			$data=array(
			'res'=>$this->Pendaftaran->get_pendaftaran_pembayaran_detail_filterDate($mulai,$akhir)
			);
			$this->layout_top("Laporan Pendaftaran");
			$this->load->view('laporan_transaksi_pendaftaran', $data, FALSE);
			$this->layout_bottom();
		}elseif($section=="pembayaran" && $view=="print"){
			$mulai=$this->input->post('mulai');
			$akhir=$this->input->post('akhir');
			$data=array(
			'res'=>$this->Pendaftaran->get_pendaftaran_pembayaran_detail_filterDate($mulai,$akhir)
			);
			$this->layout_top("Laporan Pembayaran");
			$this->load->view('laporan_transaksi_pembayaran', $data, FALSE);
			$this->layout_bottom();
		}

	}
	public function laporan_hasil_rm($section="",$view="form"){
		
			$data=array(
			'res'=>$this->Rekamedis->get_periksa_medis()
			);
			$this->layout_top("Laporan Hasil Rekam Medis");
			$this->load->view('laporan_hasil_rm', $data, FALSE);
			$this->layout_bottom();
	}

	// tambah detail periksa
	public function add_detail(){
		$no_daftar=$this->input->post('no_daftar');
		$kode_tindakan=$this->input->post('kode_tindakan');
		$nama_tindakan=$this->input->post('nama_tindakan');
		$ket=$this->input->post('ket');
		$this->Detail_periksa->set_periksa($no_daftar,$kode_tindakan,$nama_tindakan,$ket);
	}

	public function view_detail($id){
		$data=array(
			'res'=>$this->Detail_periksa->get_periksa_detail($id)
		);
		$this->load->view('detail_periksa', $data, FALSE);
	}
	public function modal_detail($id){
		$data=array(
			'res'=>$this->Detail_periksa->get_periksa_detail($id)
		);
		$this->load->view('modal_periksa_detail', $data, FALSE);
	}
	public function remove_detail(){
		$no=$this->input->post('no_daftar');
		$kode=$this->input->post('kode_tindakan');
		$this->Detail_periksa->delete_periksa($no,$kode);
	}

	public function layout_top($title="CliniCare"){
		$data=array(
			'title'=>$title
		);
		return $this->load->view('layout/layout_top',$data,FALSE);
	}
	public function layout_bottom(){
		$data=array();
		return $this->load->view('layout/layout_bottom',$data,FALSE);
	}

}

/* End of file Web.php */
/* Location: ./application/controllers/Web.php */