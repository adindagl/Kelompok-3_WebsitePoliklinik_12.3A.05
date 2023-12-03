<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Model {

	function get_pendaftaran(){
		$result=$this->db->query("SELECT * FROM pendaftaran");
        return $result;
	}
	function get_pendaftaran_detail(){
		$result=$this->db->query("SELECT * FROM pendaftaran INNER JOIN pasien on pendaftaran.nomor_pasien=pasien.nomor_pasien INNER JOIN dokter on pendaftaran.kode_dokter=dokter.kode_dokter WHERE status='resep'");
        return $result;
	}
	function get_pendaftaran_detail_by_id($id=""){
		$result=$this->db->query("SELECT * FROM pendaftaran INNER JOIN pasien on pendaftaran.nomor_pasien=pasien.nomor_pasien INNER JOIN dokter on pendaftaran.kode_dokter=dokter.kode_dokter INNER JOIN poliklinik ON poliklinik.kode_poli=pendaftaran.kode_poli WHERE pendaftaran.no_daftar='$id'" );
        return $result;
	}
	function get_pendaftaran_rekamedis_dokter_detail_by_id($id=""){
		$result=$this->db->query("SELECT * FROM pendaftaran INNER JOIN pasien ON pendaftaran.nomor_pasien=pasien.nomor_pasien INNER JOIN rekamedis ON pendaftaran.no_daftar=rekamedis.no_daftar WHERE kode_dokter='$id'" );
        return $result;
	}
	function get_pendaftaran_rekamedis_pasien_detail_by_id($id=""){
		$result=$this->db->query("SELECT * FROM pendaftaran INNER JOIN dokter ON pendaftaran.kode_dokter=dokter.kode_dokter INNER JOIN poliklinik ON pendaftaran.kode_poli=poliklinik.kode_poli INNER JOIN rekamedis ON pendaftaran.no_daftar=rekamedis.no_daftar WHERE nomor_pasien='$id'" );
        return $result;
	}
	
	
	function get_pendaftaran_pembayaran_detail_by_id($id=""){
		$result=$this->db->query("SELECT * FROM pendaftaran INNER JOIN pasien on pendaftaran.nomor_pasien=pasien.nomor_pasien INNER JOIN dokter on pendaftaran.kode_dokter=dokter.kode_dokter INNER JOIN poliklinik ON poliklinik.kode_poli=pendaftaran.kode_poli INNER JOIN pembayaran ON pendaftaran.no_daftar=pembayaran.no_daftar WHERE pendaftaran.no_daftar='$id'" );
        return $result;
	}

	function get_pendaftaran_pembayaran_detail_filterDate($date_begin="",$date_end=""){
		$result=$this->db->query("SELECT * FROM pendaftaran INNER JOIN pasien on pendaftaran.nomor_pasien=pasien.nomor_pasien INNER JOIN dokter on pendaftaran.kode_dokter=dokter.kode_dokter INNER JOIN poliklinik ON poliklinik.kode_poli=pendaftaran.kode_poli INNER JOIN pembayaran ON pendaftaran.no_daftar=pembayaran.no_daftar WHERE tanggal>='$date_begin' and tanggal<='$date_end' " );
        return $result;

	}
	
	function get_pendaftaran_pembayaran(){
		$result=$this->db->query("SELECT * FROM pendaftaran INNER JOIN pembayaran  ON pendaftaran.no_daftar=pembayaran.no_daftar INNER join pasien on pendaftaran.nomor_pasien=pasien.nomor_pasien  ");
        return $result;
	}
	function get_pendaftaran_by_status($status=""){
		$result=$this->db->query("SELECT * FROM pendaftaran INNER JOIN pasien ON pendaftaran.nomor_pasien=pasien.nomor_pasien WHERE status='$status'");
        return $result;
	}
	function get_pendaftaran_by_status2($status="",$status2=""){
		$result=$this->db->query("SELECT * FROM pendaftaran INNER JOIN pasien ON pendaftaran.nomor_pasien=pasien.nomor_pasien WHERE status='$status' or status='$status2'");
        return $result;
	}
	function get_pendaftaran_diff_status($status=""){
		$result=$this->db->query("SELECT * FROM pendaftaran WHERE status<>'$status'");
        return $result;
	}
	function get_pendaftaran_diff_status2($status="",$status2=""){
		$result=$this->db->query("SELECT * FROM pendaftaran inner join pasien on pendaftaran.nomor_pasien=pasien.nomor_pasien  WHERE status<>'$status' and status<>'$status2'");
        return $result;
	}
	function get_max(){ 
	        $result=$this->db->query("SELECT max(no_daftar) as kode_max FROM pendaftaran");
	        return $result;
    }
    function set_pendaftaran($no_daftar="",$kode_petugas="",$kode_poli="",$kode_dokter="",$no_pasien="",$tanggal="",$no_antri="",$status=""){
		$result=$this->db->query("INSERT INTO pendaftaran VALUES('$no_daftar','$kode_petugas','$kode_poli','$kode_dokter','$no_pasien','$tanggal','$no_antri','$status')");
        return $result;	
	}
	function update_status($status="",$id=""){
		$result=$this->db->query("UPDATE pendaftaran SET status='$status' WHERE no_daftar='$id'");
        return $result;
	}
    function hitung_antrian($kode_dokter=""){
    		$date=date('Y-m-d');
			$result = $this->db->query("SELECT * FROM pendaftaran WHERE kode_dokter='$kode_dokter' and tanggal='$date'");
			$total = $result->num_rows();
			return $total;
	}
	function delete_pendaftaran($id=""){
		$result=$this->db->query("DELETE FROM pendaftaran WHERE no_daftar='$id'");
        return $result;
	}
}

/* End of file Pendaftaran.php */
/* Location: ./application/models/Pendaftaran.php */