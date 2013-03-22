<?php

class Joblisting extends CI_Controller{

public function index()
	{

	$this->load->view('include/header');
	$this->load->view('joblisting');
	$this->load->view('include/footer');
	}
	
}
?>

/*En of file joblisting.php*/
/*Location: ./application/controllers/joblisting.php */