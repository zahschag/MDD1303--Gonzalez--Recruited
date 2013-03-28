<?php
class About extends CI_Controller {

   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('about');
      $this->load->view('include/footer');
	}
   
}

/* End of file about.php */
/* Location: ./application/controllers/about.php */