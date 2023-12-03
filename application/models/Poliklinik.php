<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poliklinik extends CI_Model {
//
	function get_poli(){
		$result=$this->db->query("SELECT * FROM poliklinik");
        return $result;
	}
	function get_poli_by_id($id){
		$result=$this->db->query("SELECT * FROM poliklinik WHERE kode_poli='$id'");
        return $result;
	}
	function get_max(){ 
	        $result=$this->db->query("SELECT max(kode_poli) as kode_max FROM poliklinik");
	        return $result;
    }
	function set_poli($kode_poli="",$nama_poli="",$lantai=""){
		$result=$this->db->query("INSERT INTO poliklinik VALUES('$kode_poli','$nama_poli','$lantai')");
        return $result;
	}
	function update_poli($kode_poli="",$nama_poli="",$lantai=""){
		$result=$this->db->query("UPDATE poliklinik SET nama_poli='$nama_poli',lantai='$lantai' WHERE kode_poli='$kode_poli'");
        return $result;
	}
	function delete_poli($id=""){
		$result=$this->db->query("DELETE FROM poliklinik WHERE kode_poli='$id'");
        return $result;
	}
}

/* End of file Poliklinik.php */
/* Location: ./application/models/Poliklinik.php */