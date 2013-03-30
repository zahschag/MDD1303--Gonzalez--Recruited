<?php

class Site extends CI_controller {
	
	function index() {
		$this->load->model('data_model');
		$data['rows'] = $this->data_model->getAll();
		
		$this->load->view('include/header');
		$this->load->view('userView', $data);
		$this->load->view('include/footer');
	}
	
}