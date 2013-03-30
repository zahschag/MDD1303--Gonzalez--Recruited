<?php


class Options extends CI_Controller{
	
	public function index()
	
	{
		$this->load->view('include/header');
		$this->load->view('options');
		$this->load->view('include/footer');
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('signup');	
		}
		else{
			$this->load->view('success');
			}
	}
	
	
}
