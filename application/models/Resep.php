<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep extends CI_Model {
	//membuat resep//
	function get_resep_detail($id=""){
		//resep detail//
		$result=$this->db->query("SELECT * FROM resep INNER JOIN obat ON obat.kode_obat=resep.kode_obat WHERE no_daftar='$id'");
        return $result;
	}
	
	function get_total_resep($id=""){
		//total resep//
		$result=$this->db->query("SELECT SUM(subtotal) as jumlah_subtotal FROM resep WHERE no_daftar='$id'");
        return $result;
	}
	
	function get_resep_detail_filterDate($date_begin="",$date_end=""){
		//resep detail//
		$result=$this->db->query("SELECT * FROM resep INNER JOIN pendaftaran ON resep.no_daftar=pendaftaran.no_daftar INNER JOIN obat ON resep.kode_obat=obat.kode_obat WHERE tanggal>='$date_begin' and tanggal<='$date_end' " );
        return $result;
	}
	
	function get_count_resep($id=""){
		$result=$this->db->query("SELECT count(subtotal) as count_total FROM resep WHERE no_daftar='$id'");
        return $result;
	}
	
	function set_resep($no_daftar="",$kode_obat="",$banyak="",$harga="",$subtotal="",$berapa="",$ket=""){
		$result=$this->db->query("INSERT INTO resep VALUES('','$no_daftar','$kode_obat','$banyak','$harga','$subtotal','$berapa','$ket')");
        return $result;	
	}
	
	function delete_resep($id="",$sid=""){
		//menghapus resep//
		$result=$this->db->query("DELETE FROM resep WHERE no_daftar='$id' AND kode_obat='$sid'");
        return $result;
	}

}

/* End of file Resep.php */
/* Location: ./application/models/Resep.php */
