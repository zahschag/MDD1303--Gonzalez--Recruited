<?php
class Logged_user extends CI_Model{
	$this->load->db();
	private static $user;
	
	private function __construct(){}
		
	public static function user(){
		if(!isset(self::$user)){
			$ses = & get_instance();
			$ses->load->library('session');
			
			
			if(!$u = Doctrine::getTable('users')->find('user_id')){
				return FALSE;
				}
			if(!$u = Doctrine::getTable('users')->find($user_id)){
				return FALSE;
				}
		self::$user = $u;
		}
			
	return self::$user;
	}
	
}
	