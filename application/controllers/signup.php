<?php if (!defined('BASEPATH')) die();
class Signup extends CI_Controller {
	public function index()
	{
		$this->load->view('include/header'); /*Will load the header*/
		$this->load->view('signup');/* Sign up page */
		$this->load->view('include/footer'); /*Will load the footer from the include folder in the view*/
	
	}
}

/*End of signup.php */
/*Location: ./application/controllers/signup.php */