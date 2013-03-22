<?php
class Signup extends CI_Controller {
	public function index()
	{
		$this->load->view('include/header'); /*Will load the header*/
		$this->load->view('signup');/* Sign up page */
		$this->load->view('include/footer'); /*Will load the footer from the include folder in the view*/
	
	}
	public function create()
	{
		$users = array(
			'user_fullname' => $this->input->post('fullname'),
			'lastname' => $this->input->post('lastname'),
			'email' => $this->input->post('emailadd'),
			'user_name' => $this->input->post('username'),
			'user_password' => $this->input->post('password')
		);
		$this->signup_model->newuser($users);
		$this->index();	
	}
	public function update()
	{
		$users = array(
			'email' => $title,
			'user_password' => $password
		);
		$this->signup_model->userupdate($users);
	}
	
	public function delete(){
		
		$this->signup_model->deleteuser();
		$this->index(); 
		}
}
?>
/*End of signup.php */
/*Location: ./application/controllers/signup.php */