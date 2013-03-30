<?php
class Signup extends Main_Controller {


	public function __construct(){
		parent::CI_Controller();
		
		
		$this->load->helper(array("form", "url"));
		$this->load->library('form_validation');
		
	
	}

	public function index()
	{
		$this->load->view('include/header'); /*Will load the header*/
		$this->load->view('signup');/* Sign up page */
		$this->load->view('include/footer'); /*Will load the footer from the include folder in the view*/

	}
}
/*End of signup.php */
/*Location: ./application/controllers/signup.php */
