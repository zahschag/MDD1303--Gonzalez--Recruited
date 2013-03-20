<?php if (!defined('BASEPATH')) die();

class Login index()
{
	$this->load->view('include/header'); /*Will load the header*/
	$this->load->view('template/login');/* Will load the template of the form */
	$this->load->view('include/footer'); /*Will load the footer from the include folder in the view*/
	
}

/*End of login.php */
/*Location: ./application/controllers/login.php */