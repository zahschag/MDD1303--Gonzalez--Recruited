<?php

class Signupmodel extends CI_Model{

	function getuserinfo(){
		$this->db->get('user_id', 5);
		$this->db->get('user_fullname');
		$this->db->get('lastname');
		$this->db->get('user_name');
		$this->db->get('mdd5(`password`)+ "user_salt"');
		$this->db->get('email');
		return $query->result();
	}
	
	function newuser(){
		
		$this->input->post('user_id');
		$this->input->post('user_fullname');
		$this->input->post('lastname');
		$this->input->post('email');
		$this->input->post('user_name');
		$this->input->post('md5(`user_passsword`)');
		}
		
	function updatepass()
	{
		$this->input->post('user_id', $id);
		$this->input->post('users', $users);
		
	}
	
	function deleteuser()
	{
		$this->db->where('user_id', $this->uri->segment(3));
		$this->db->delete('user');
	}
	
}

?>