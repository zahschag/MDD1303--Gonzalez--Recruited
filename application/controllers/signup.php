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
		public function create()
	{
		$users = array(
			'user_id' => $this->input->post('id'),
			'user_fullname' => $this->input->post('fullname'),
			'lastname' => $this->input->post('lastname'),
			'email' => $this->input->post('email'),
			'user_name' => $this->input->post('username'),
			'user_password' => $this->input->post('password')
		);
		$this->load->model('Signup_model');
		$this->Signup_model->newuser($users);
	}
	public function update()
	{
		$users = array(
			'email' => $email,
			'user_password' => $password
		);
		$this->Signup_model->userupdate($users);
	}
	
	public function delete(){
		
		$this->Signup_model->deleteuser();
		$this->index(); 
		}
}

/*End of signup.php */
/*Location: ./application/controllers/signup.php */
?>
