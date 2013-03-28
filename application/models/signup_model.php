<?php

class Signup_model extends CI_model{
private $db;
	public function __construct($mydns, $myuser, $mypass){
		try{
			$this->db = new \PDO($mydns, $myuser, $mypass);
			
			}//try function
			catch(\PDOException $l){
				var_dump($l);
			}//catch function
		}//construct function
	function getuserinfo(){
		$this->db->get('user_id', 5);
		$this->db->get('user_fullname');
		$this->db->get('lastname');
		$this->db->get('user_name');
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