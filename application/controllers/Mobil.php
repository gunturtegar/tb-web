<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

	public function index()
	{
		$this->load->model('Mobil_m');
		$data['mobil_list'] = $this->Mobil_m->getData();
		$this->load->view('mobil/show',$data);
	}
	public function create()
	{
		$this->load->model('Mobil_m');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nopol','nopol','is_unique[mobil.nopol]|required');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('ket','ket','required');
		$this->form_validation->set_rules('harga','harga','required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('mobil/create_view');
		} else {
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '2000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('image')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('mobil/create_view',$error);
			}
			else{
				$this->Mobil_m->insert();
				$this->load->view('mobil/create_sukses');
			}
		}
	}
	public function update($id)
	{
		$this->load->model('Mobil_m');
		$this->load->library('form_validation');
		$data['mobil'] = $this->Mobil_m->get($id);
		$this->form_validation->set_rules('nopol','nopol','required');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('ket','ket','required');
		$this->form_validation->set_rules('harga','harga','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('mobil/update_view',$data);
		} else {
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '2000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('image')){
				$data['error'] = $this->upload->display_errors();
				$this->load->view('mobil/create_view',$data);
			}
			else{
				$this->Mobil_m->update($id);
				$this->load->view('mobil/update_sukses');
			}
			
		}
	}
	public function delete($id)
	{
		$this->load->model('Mobil_m');
		$this->Mobil_m->delete($id);
		$this->load->view('mobil/delete_sukses');
	}
}
