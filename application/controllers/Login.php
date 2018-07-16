<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required|trim|callback_cekDB');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			redirect('Admin','refresh');
		}
	}
	public function cekDB($username)
	{
		$password = md5($this->input->post('password'));
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$cekDB = $this->db->get('users');
		if ($cekDB->num_rows() == 1) {
			$data = $cekDB->result()[0];
			$userdata = array(
				'id' => $data->id,
				'nama' => $data->nama,
				'username' => $username,
				'level' => $data->level,
			);
			$this->session->set_userdata('logged_in',$userdata);
			return true;
		}else{
			$this->form_validation->set_message('cekDB','Username dan password tidak valid');
			return false;
		}
	}
	public function register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nik','nik','required|trim|is_unique[users.nik]');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('telp','telp','required');
		$this->form_validation->set_rules('username','Username','required|trim|is_unique[users.username]');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('register');
		} else {
			$set = $this->input->post();
			$set['password'] = md5($set['password']);
			$this->db->insert('users',$set);
			$id_insert = $this->db->insert_id();
			$this->db->where('id',$id_insert);
			$data = $this->db->get('users')->result()[0];
			$userdata = array(
				'id' => $data->id,
				'nama' => $data->nama,
				'username' => $data->username,
				'level' => $data->level
			);
			$this->session->set_userdata('logged_in',$userdata);
			redirect('Admin','refresh');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect('Home','refresh');
	}
}