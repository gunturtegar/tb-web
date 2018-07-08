<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
    {
       $this->load->view('users/show');
    }

    public function getAll()
    {
        $this->load->model('Users_model');
        $result = $this->Users_model->getAll(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function add(){
        $this->load->model('Users_model');
        $this->Users_model->save();
    }

    public function update()
    {
    	$this->load->model('Users_model');
        $this->Users_model->update();
    }
    public function delete()
    {
        $this->load->model('Users_model');
        $id = $this->input->post('id'); 
        $this->Users_model->delete($id);
    }
}
