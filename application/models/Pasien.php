<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Model {

	function get_pasien(){
		$result=$this->db->query("SELECT * FROM pasien");
        return $result;
	}
	function get_pasien_by_status(){
		$result=$this->db->query("SELECT * FROM pasien WHERE status_pasien='0'");
        return $result;
	}
	function get_pasien_by_id($id){
		$result=$this->db->query("SELECT * FROM pasien WHERE nomor_pasien='$id'");
        return $result;
	}
	function get_max(){ 
	        $result=$this->db->query("SELECT max(nomor_pasien) as kode_max FROM pasien");
	        return $result;
    }
    function set_pasien($nomor_pasien="",$nama_pasien="",$jenis_kelamin="",$alamat="",$tanggal_lahir="",$usia="",$nomor_telepon="",$status="0"){
		$result=$this->db->query("INSERT INTO pasien VALUES('$nomor_pasien','$nama_pasien','$jenis_kelamin','$alamat','$tanggal_lahir','$usia','$nomor_telepon','$status')");
        return $result;	
	}
	function update_pasien($nomor_pasien="",$nama_pasien="",$jenis_kelamin="",$alamat="",$tanggal_lahir="",$usia="",$nomor_telepon=""){
		$result=$this->db->query("UPDATE pasien SET  nama_pasien='$nama_pasien',jenis_kelamin='$jenis_kelamin',alamat='$alamat',usia='$usia',nomor_telepon='$nomor_telepon' WHERE nomor_pasien='$nomor_pasien'");
        return $result;	
	}
	function update_status($id,$status){
		 $result=$this->db->query("UPDATE pasien SET status_pasien='$status' WHERE nomor_pasien='$id'");
	        return $result;
	}
	function delete_pasien($id){
		$result=$this->db->query("DELETE FROM pasien WHERE nomor_pasien='$id'");
        return $result;	
	}


}

/* End of file Pasien.php */
/* Location: ./application/models/Pasien.php */