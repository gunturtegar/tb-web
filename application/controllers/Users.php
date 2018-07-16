<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_m');
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['level'] = $session_data['level'];
            $current_controller = $this->router->fetch_class();
            $this->load->library('acl');
            if (!$this->acl->is_public($current_controller)) {
                if (!$this->acl->is_allowed($current_controller,$data['level'])) {
                    echo '<script>alert("Halaman ini tidak dapat di akses")</script>';
                    redirect('Login/logout','refresh');
                }
            }
        }else{
            echo '<script>alert("Login!!")</script>';
            redirect('Login');
        }
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
