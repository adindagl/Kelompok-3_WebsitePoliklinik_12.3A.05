<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//
class Cart extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('resep');
		$this->load->model('Detail_periksa');
	}


	public function index(){
		redirect($_SERVER['HTTP_REFERER']);
	}

	function add_to_cart(){ //fungsi Add To Cart
		$data = array(
			'nid' => $this->input->post('no_daftar'), 
			'id' => $this->input->post('kode'), 
			'name' => $this->input->post('nama'), 
			'qty' => $this->input->post('banyak'), 
			'price' => $this->input->post('harga'), 
			'many' => $this->input->post('berapa'), 
			'desc' => $this->input->post('ket'),

		);
		$this->cart->insert($data);
		$this->session->set_flashdata('message', '1 Item ditambahkan');
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function remove_cart($id){ //fungsi untuk menghapus item cart
		$data = array(
			'rowid' => $id, 
			'qty' => 0, 
		);
		$this->cart->update($data);
		$this->session->set_flashdata('message', '1 Item dihapus');
		redirect($_SERVER['HTTP_REFERER']);
	}

}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */