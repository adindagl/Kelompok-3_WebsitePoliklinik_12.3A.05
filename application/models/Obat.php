<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Model {

	function get_obat(){
		$result=$this->db->query("SELECT * FROM obat");
        return $result;
	}
	function get_obat_by_id($id){
		$result=$this->db->query("SELECT * FROM obat WHERE kode_obat='$id'");
        return $result;
	}
	function get_max(){ 
	        $result=$this->db->query("SELECT max(kode_obat) as kode_max FROM obat");
	        return $result;
    }
	function set_obat($kode_obat="",$nama_obat="",$jumlah_obat="",$jenis="",$satuan="",$harga_modal="",$harga="",$tgl_masuk=""){
		$result=$this->db->query("INSERT INTO obat VALUES('$kode_obat','$nama_obat','$jumlah_obat','$jenis','$satuan','$harga_modal','$harga','$tgl_masuk',1)");
        return $result;
	}
	function update_obat($kode_obat="",$nama_obat="",$jumlah_obat="",$jenis="",$satuan="",$harga_modal="",$harga="",$tgl_masuk=""){
		$result=$this->db->query("UPDATE obat SET nama_obat='$nama_obat',jumlah_obat='$jumlah_obat',jenis='$jenis',satuan='$satuan',harga_modal='$harga_modal',harga='$harga',tgl_masuk='$tgl_masuk' WHERE kode_obat='$kode_obat'");
        return $result;
	}
	function delete_obat($id=""){
		$result=$this->db->query("DELETE FROM obat WHERE kode_obat='$id'");
        return $result;
	}

}



/* End of file Obat.php */
/* Location: ./application/models/Obat.php */
