<?php
class Data_model extends CI_Model {
	function getAll() {
		$this->db->select('user_fullname, user_name');
		$this->db->from('users');
		$this->db->where('user_id', 1);
		
		$q = $this->db->get();
		
		if($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	function newuser(){
		$this->input->post('user_id');
		$this->input->post('user_fullname');
		$this->input->post('lastname');
		$this->input->post('email');
		$this->input->post('user_name');
		$this->input->post('md5(`user_passsword`)');
		}
		
	}
}