<?php


class Options extends CI_Controller{
	
	public function index()
	
	{
		$this->load->view('include/header');
		$this->load->view('options');
		$this->load->view('include/footer');
	}
	
	
}



?>