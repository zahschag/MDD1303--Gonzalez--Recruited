<?php
class Signup extends CI_Controller {

	public function index()
	{
		$this->load->model('User');
		$this->load->view('include/header'); /*Will load the header*/
		$this->load->view('signup');/* Sign up page */
		$this->load->view('include/footer'); /*Will load the footer from the include folder in the view*/
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
	/***
		The create function will prepare the 
		fields to get information passed in
		this information will be sent to 
		the database where it will be stored
		for further use
		
		The $this->input->post
	
	***/
		public function new_user()
	{
		session_start();
		$this->User->create(
		array(
			'id' => $this->input->post('id'),
			'fullname' => $this->input->post('fullname'),
			'lastname' => $this->input->post('lastname'),
			'email' => $this->input->post('email'),
			'un' => $this->input->post('username'),
			'pass' => $this->input->post('password')
			)
		);
		
	}
}
/*End of signup.php */
/*Location: ./application/controllers/signup.php */
