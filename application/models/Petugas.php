<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Model {
//
	function get_petugas(){
		$result=$this->db->query("SELECT * FROM petugas");
        return $result;
	}

	function get_petugas_by_id($id){
		$result=$this->db->query("SELECT * FROM petugas WHERE kode_petugas='$id'");
        return $result;
	}
	function get_login($username,$password){
    	$result=$this->db->query("SELECT * FROM petugas WHERE username='$username' && password='$password' ");
        return $result;	
    }
    function get_max(){ 
	        $result=$this->db->query("SELECT max(kode_petugas) as kode_max FROM petugas");
	        return $result;
    }
	function set_petugas($kode_petugas="",$nama_petugas="",$alamat_petugas="",$username="",$password="",$level=""){
		$result=$this->db->query("INSERT INTO petugas VALUES('$kode_petugas','$nama_petugas','$alamat_petugas','$username','$password','$level')");
        return $result;
	}
	function update_petugas($kode_petugas="",$nama_petugas="",$alamat_petugas="",$username="",$password="",$level=""){
		$result=$this->db->query("UPDATE petugas SET nama_petugas='$nama_petugas',alamat_petugas='$alamat_petugas',username='$username',password='$password',level='$level' WHERE kode_petugas='$kode_petugas'");
        return $result;
	}
	function update_petugas_no_password($kode_petugas="",$nama_petugas="",$alamat_petugas="",$username="",$level=""){
		$result=$this->db->query("UPDATE petugas SET nama_petugas='$nama_petugas',alamat_petugas='$alamat_petugas',username='$username',level='$level' WHERE kode_petugas='$kode_petugas'");
        return $result;
	}
	function update_password($id,$password){
			$result=$this->db->query("UPDATE petugas SET password='$password' WHERE kode_petugas='$id'");
	        return $result;
	}
	function delete_petugas($id=""){
		$result=$this->db->query("DELETE FROM petugas WHERE kode_petugas='$id'");
        return $result;
	}



}

/* End of file Petugas.php */
/* Location: ./application/models/Petugas.php */