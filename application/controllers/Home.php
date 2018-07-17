<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if ($this->session->userdata('logged_in') != null) {
			$this->db->where('id',$this->session->userdata('logged_in')['id']);
			$data['users'] = $this->db->get('users')->result_array()[0];
		}
		$data['mobil'] = $this->db->get('mobil')->result();
		$this->load->view('home',$data);
	}
	public function cars()
	{
		$data['mobil'] = $this->db->get('mobil')->result();
		$this->load->view('cars',$data);
	}
	public function pesan()
	{
		$date1 = DateTime::createFromFormat('m/d/Y', $this->input->post('tgl_sewa'));
		$date2 = DateTime::createFromFormat('m/d/Y', $this->input->post('tgl_kembali'));
		$data = array(
			'tgl_pesan' => date('Y-m-d'),
			'tgl_sewa' => $date1->format('Y-m-d'),
			'tgl_kembali' => $date2->format('Y-m-d'),
			'fk_mobil' => $this->input->post('mobil'),
			'fk_users' => $this->session->userdata('logged_in')['id'],
			'status' => 1
		);
		$this->db->insert('pesan',$data);
		$id = $this->db->insert_id();
		redirect('Home/complete/'.$id,'refresh');
	}
	public function complete($id)
	{
		$data['id'] = $id;
		$data['pesan'] = $this->db->where('id',$id)->get('pesan')->result()[0];
		$data['mobil'] = $this->db->where('id',$data['pesan']->fk_mobil)->get('mobil')->result()[0];
		$data['users'] = $this->db->where('id',$data['pesan']->fk_users)->get('users')->result()[0];
		$this->load->view('complete', $data);
	}
}
