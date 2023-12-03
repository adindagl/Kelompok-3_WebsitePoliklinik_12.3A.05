<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tindakan extends CI_Model {

	function get_tindakan(){
		$result=$this->db->query("SELECT * FROM tindakan");
        return $result;
	}
	function get_tindakan_by_id($id){
		$result=$this->db->query("SELECT * FROM tindakan WHERE kode_tindakan='$id'");
        return $result;
	}
	function get_biaya_tindakan($id){
		$result=$this->db->query("SELECT * FROM tindakan INNER JOIN rekamedis ON tindakan.kode_tindakan=rekamedis.kode_tindakan WHERE rekamedis.no_daftar='$id'");
        return $result;
	}
	function get_max(){ 
	        $result=$this->db->query("SELECT max(kode_tindakan) as kode_max FROM tindakan");
	        return $result;
    }
	function set_tindakan($kode_tindakan="",$nama_tindakan="",$tarif=""){
		$result=$this->db->query("INSERT INTO tindakan VALUES('$kode_tindakan','$nama_tindakan','$tarif')");
        return $result;
	}
	function update_tindakan($kode_tindakan="",$nama_tindakan="",$tarif=""){
		$result=$this->db->query("UPDATE tindakan SET nama_tindakan='$nama_tindakan',tarif='$tarif' WHERE kode_tindakan='$kode_tindakan'");
        return $result;
	}
	function delete_tindakan($id=""){
		$result=$this->db->query("DELETE FROM tindakan WHERE kode_tindakan='$id'");
        return $result;
	}

}

/* End of file Tindakan.php */
/* Location: ./application/models/Tindakan.php */