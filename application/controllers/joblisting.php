<?php

class Joblisting extends CI_Controller{

public function index()
	{
	//Loading the model
	$this->load->model('data_model');
	$data['rows'] = $this->data_model->getAll();
	
	//Loading the views
	$this->load->view('include/header');
	$this->load->view('joblisting', $data);
	$this->load->view('include/footer');
	}
	
}
?>