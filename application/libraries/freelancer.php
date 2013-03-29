<?php

Class fl {
	
	private $appid = '';
	private $sec = '';
	
	
	public function __construct(){
		
		$ci =& get_instance();
      $ci->config->load('freelancer');
      $this->appid = $ci->config->item('freelancer_id');
      $this->secret = $ci->config->item('freelancer_secret');
		}
		
	
   private function load()
   {
      include_once 'freelancer/freelancer.php';
      $credentials = array(
         'appid' => $this->appid,
         'secret' => $this->sec
      );

      $this->sdk = new Freelancer($credentials);
   }      
	
}