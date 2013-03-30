<?php

class Joblisting extends CI_Controller{

public function index()
	{
		$this->load->view('include/header');
		$this->load->view('include/footer');
		$this->load->library('form_validation');
		
		if($this->form_validation->run() == FALSE)
		{
			header("Location:frontpage");	
		}
		else{
			$this->load->view('joblisting');
			}
	}
}
