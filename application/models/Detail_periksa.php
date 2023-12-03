<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_periksa extends CI_Model {

	function get_periksa_detail($id=""){
		$result=$this->db->query("SELECT * FROM detail_pemeriksaan INNER JOIN tindakan ON tindakan.kode_tindakan=detail_pemeriksaan.kode_tindakan WHERE detail_pemeriksaan.no_daftar='$id'");
        return $result;
	}
	function get_total_periksa($id=""){
		$result=$this->db->query("SELECT SUM(tarif) as total_tindakan FROM detail_pemeriksaan INNER JOIN  tindakan ON detail_pemeriksaan.kode_tindakan=tindakan.kode_tindakan WHERE no_daftar='$id'");
        return $result;
	}
	function set_periksa($no="",$kode="",$nama_tindakan="",$ket=""){
		$result=$this->db->query("INSERT INTO detail_pemeriksaan VALUES('$no','$kode','$nama_tindakan','$ket')");
        return $result;	
	}
	function delete_periksa($no="",$kode=""){
		$result=$this->db->query("DELETE FROM detail_pemeriksaan WHERE no_daftar='$no' AND kode_tindakan='$kode'");
        return $result;
	}

}

/* End of file Detail_periksa.php */
/* Location: ./application/models/Detail_periksa.php */

