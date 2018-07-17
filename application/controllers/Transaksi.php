<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function index()
	{
		$this->db->select("pesan.*,mobil.nama as mobil_nama,users.nama as users_nama");
		$this->db->join('mobil',"pesan.fk_mobil=mobil.id");
		$this->db->join('users',"pesan.fk_users=users.id");
		$data['transaksi'] = $this->db->get("pesan")->result_array();
		$this->load->view('pesan/show',$data);
	}
	public function kembali($id)
	{
		$set['status'] = 2;
		$this->db->where('id',$id);
		$this->db->update('pesan',$set);
		redirect('Transaksi','refresh');
	}
}
