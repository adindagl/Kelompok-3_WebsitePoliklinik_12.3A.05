<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekamedis extends CI_Model {
	//
	function get_periksa(){
		$result=$this->db->query("SELECT * FROM rekamedis");
        return $result;
	}	
	function get_periksa_medis(){
		$result=$this->db->query("SELECT * FROM rekamedis INNER JOIN pendaftaran ON pendaftaran.no_daftar=rekamedis.no_daftar INNER JOIN pasien ON pendaftaran.nomor_pasien=pasien.nomor_pasien INNER JOIN dokter ON pendaftaran.kode_dokter=dokter.kode_dokter INNER JOIN poliklinik ON pendaftaran.kode_poli=poliklinik.kode_poli INNER JOIN detail_pemeriksaan on rekamedis.no_daftar=detail_pemeriksaan.no_daftar");
        return $result;
	}	
	function get_periksa_by_id($id){
		$result=$this->db->query("SELECT * FROM rekamedis WHERE no_daftar='$id'");
        return $result;
	}	
	function set_periksa($no_daftar="",$tgl_periksa="",$keluhan="",$diagnosa="",$tindakan=""){
		$result=$this->db->query("INSERT INTO rekamedis VALUES('','$no_daftar','$tgl_periksa','$keluhan','$diagnosa')");
        return $result;	
	}
	function update_periksa($no_daftar="",$tgl_periksa="",$keluhan="",$diagnosa="",$nama_tindakan="",$tindakan=""){
		$result=$this->db->query("UPDATE rekamedis SET tgl_periksa='$tgl_periksa',keluhan='$keluhan',diagnosa='$diagnosa' WHERE no_daftar='$no_daftar'");
        return $result;	
	}

}

/* End of file rekamedis.php */
/* Location: ./application/models/rekamedis.php */