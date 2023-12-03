<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Model {

	function get_pembayaran(){
		$result=$this->db->query("SELECT * FROM pembayaran ");
        return $result;
	}
	function set_pembayaran($no_daftar="",$total="",$bayar="",$kembali=""){
		$result=$this->db->query("INSERT INTO pembayaran VALUES('','$no_daftar','$total','$bayar','$kembali')");
        return $result;	
	}
}

/* End of file Pembayaran.php */
/* Location: ./application/models/Pembayaran.php */