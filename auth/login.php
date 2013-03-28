<?php
class Login extends CI_Controller{

public function index()
{
	$this->load->view ('include/header');
	$this->load->view('login');
	$this->load->view('include/footer');

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$MY_username = addslashes($_POST['username']);
		$MY_password = addslashes($_POST['password']);
	
		$sql="SELECT id FROM users WHERE user_name='$MY_username' and user_passwor='$MY_password'";
		$result= mysql_query($sql);
		$row= mysql_fetch_array($result);
		$active= $row['active'];
		$count= mysql_num_rows($result);
	
		if(count==1)
		{
		session_register("MYusername");
		$_SESSION["login_user"]= $MY_username;
	
		header("location:success.php");	
		}else{
			$error= "Your Login Name or Password is invalid";
			}
	}
}
}