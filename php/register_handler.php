<?php
	session_start();

	require_once 'Dao.php';
	$dao = new Dao();
	
	$username = $_POST['registerUsername'];
	$password = $_POST['registerPassword'];
	
	$email = filter_var($username, FILTER_SANITIZE_EMAIL);
	
	$validuser = 1;
	$validpass = 1;
	if(empty($username) || empty($password))
	{
		$validuser = 0;
		$validpass = 0;
		$_SESSION['auth'] = false;
		$_SESSION['message'] = "Register Unsuccessful.";
		header("Location: ../php/register.php");
	}
	
	if (!filter_var($email,FILTER_VALIDATE_EMAIL) && strlen($email) < 256) {
		$_SESSION['errorUser'] = "Please Enter Valid Email ID";
		$validuser = 0;
	}
	else
	{
		$_SESSION['errorUser'] = "";
		$validuser = 1;
	}
	if(strlen($password) < 6 && strlen($password) < 64) {
		$_SESSION['errorPass'] = "Password must be minimum of 6 characters";
		$validpass = 0;
	}
	else
	{
		$_SESSION['errorPass'] = "";
		$validpass = 1;
	}
	if($validuser == 1 && $validpass == 1)
	{
		$register = $dao->registerUser($email, $password);
	
		if ($register == 1) {
			$_SESSION['auth'] = true;
			$_SESSION['message'] = "";
			$_SESSION['justRegistered'] = 1;
			header("Location: ../index.php");
			
		} 
		else {
			$_SESSION['auth'] = false;
			$_SESSION['message'] = "Email already exists.";
			header("Location: ../php/register.php");
		}
	}
	else {
			$_SESSION['auth'] = false;
			$_SESSION['message'] = "Register Unsuccessful.";
			header("Location: ../php/register.php");
	}
?>