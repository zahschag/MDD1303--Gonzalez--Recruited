<?php

class User extends CI_Model{
	var $id = 0;
	var $name = "";
	var $lastname = "";
	var $email = "";
	var $un = "";
	var $pass = "";
	
	
	public function login($un, $pass){
		//Will help find the user information in the database
		$sql = "SELECT * 
				FROM `users`
				WHERE `user_name = ?
				AND `user_password = ?`";
		//Information associated with the user will be selected from the database;		
		$user = $this->db->query($sql, array($un, $pass))->result();
		}
	public function create($user){
		
		//Will insert new user into the database
		
		$sql = "INSERT INTO `users`(user_id, user_fullname, lastname, email, user_name, user_password)
				VALUES (?,?,?,?,?, MD5(?))";
				
			//when successful will confirm the query from the database
			$done = $this->db->query($sql, $user);
			return $done ? $user : false;
		}
}