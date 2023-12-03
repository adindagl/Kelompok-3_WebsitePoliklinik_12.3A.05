<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Model { //
	function get_dokter(){
		$result=$this->db->query("SELECT * FROM dokter");
        return $result;
	}
	function get_dokter_by_poli($id=""){
		$result=$this->db->query("SELECT * FROM dokter WHERE kode_poli='$id'");
        return $result;
	}
	function get_dokter_by_id($id=""){
		$result=$this->db->query("SELECT * FROM dokter WHERE kode_dokter='$id'");
        return $result;
	}
	function get_max(){ 
	        $result=$this->db->query("SELECT max(kode_dokter) as kode_max FROM dokter");
	        return $result;
    }
    function set_dokter($kode_dokter="",$kode_poli="",$nama_dokter="",$sip="",$tarif="",$nomor_telepon="",$alamat=""){
		$result=$this->db->query("INSERT INTO dokter VALUES('$kode_dokter','$kode_poli','$nama_dokter','$sip','$tarif','$nomor_telepon','$alamat')");
        return $result;
	}
	function update_dokter($kode_dokter="",$kode_poli="",$nama_dokter="",$sip="",$tarif="",$nomor_telepon="",$alamat=""){
		$result=$this->db->query("UPDATE dokter SET kode_poli='$kode_poli',nama_dokter='$nama_dokter',sip='$sip',tarif='$tarif',nomor_telepon='$nomor_telepon',alamat='$alamat' WHERE kode_dokter='$kode_dokter'");
        return $result;
	}
	function delete_dokter($id){
		 $result=$this->db->query("DELETE FROM dokter WHERE kode_dokter='$id'");
	        return $result;
	}
}

/* End of file Dokter.php */
/* Location: ./application/models/Dokter.php */