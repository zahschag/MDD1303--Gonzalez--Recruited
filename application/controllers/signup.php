<?php
class Signup extends CI_Controller {

	public function index()
	{
		$this->load->view('include/header'); /*Will load the header*/
		$this->load->view('signup');/* Sign up page */
		$this->load->view('include/footer'); /*Will load the footer from the include folder in the view*/
	
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
		$this->load->helper('form');
		session_start();
		$this->load->model('User');
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
		if($user){
			$this->response(
			array( "done" => "true"),
			200
		);
		}
		else{
			$this->response(
			array ("done" => "false"),
			403
			);
		}
	}
}
/*End of signup.php */
/*Location: ./application/controllers/signup.php */
