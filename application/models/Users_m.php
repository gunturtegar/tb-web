<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_m extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function getAll()
    {
        $query = $this->db->get('users');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function save()
    {
        $data= $this->input->post();
        $data['password'] = md5($data['password']);
        $this->db->insert('users', $data);
    }
    public function update()
    {
        $set= $this->input->post();
        $set['password'] = md5($set['password']);
        $this->db->where('id',$set['id']);
        $this->db->update('users', $set);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
}

/* End of file PegawaiModel.php */

?>