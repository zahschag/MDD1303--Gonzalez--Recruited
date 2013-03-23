<?php

include('config.php');
session_start();
$check_user= $_SESSION['login_user'];

$ses_sql = mysql_query("select username from users where user_name='$check_user'");

$row = mysql_fetch_array($ses_mysql);

$login_sess = $row['user_name'];

if(!isset($login_session))
{
	header("Location: login.php");
}
?>