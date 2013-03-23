<?php


class Signup_model extends Model{
	
	function newuser(){
		
		$this->db->insert('users', $users);
		return;
		}
		
	function updatepass()
	{
		$this->db->where('user_id', $id);
		$this->db->update('users', $users);
		
	}
	
	function deleteuser()
	{
		$this->db->where('user_id', $this->uri->segment(3));
		$this->db->delete('user');
	}
	
}




?>