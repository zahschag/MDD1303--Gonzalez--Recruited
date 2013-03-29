<?php
session_start();
if(session_destroy())
{
	header("Location: login.php");	
} 
/* End of file logout.php */
/* Location: ./application/controllers/about.php */