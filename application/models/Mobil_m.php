<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil_m extends CI_Model {

	public function getData()
	{
		$query = $this->db->get('mobil');
		return $query->result_array();
	}
	public function get($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('mobil');
		return $query->result_array()[0];
	}
	public function insert()
	{
		$data = array(
			'nopol' => $this->input->post('nopol'),
			'nama' => $this->input->post('nama'),
			'ket' => $this->input->post('ket'),
			'harga' => $this->input->post('harga'),
			'image' => $this->upload->data('file_name'),
		);
		$this->db->insert('mobil',$data);
	}
	public function update($id)
	{
		$set = array(
			'nopol' => $this->input->post('nopol'),
			'nama' => $this->input->post('nama'),
			'ket' => $this->input->post('ket'),
			'harga' => $this->input->post('harga'),
			'image' => $this->upload->data('file_name'),
		);
		$this->db->where('id',$id);
		$this->db->update('mobil',$set);
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('mobil');
	}
}

?>