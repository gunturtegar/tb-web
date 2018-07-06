<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_m');
    }
    public function index()
    {
       $this->load->view('users/datagrid');
    }

    public function getAll()
    {
        $result = $this->Users_m->getAll(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function add(){
        $this->Users_m->save();
    }

    public function update()
    {
        $this->Users_m->update();
    }
    public function delete()
    {
        $id = $this->input->post('id'); 
        $this->Users_m->delete($id);
    }
}
