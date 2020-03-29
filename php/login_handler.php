<?php
	session_start();

	require_once 'Dao.php';
	$dao = new Dao();
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$email = filter_var($username, FILTER_SANITIZE_EMAIL);
	
	$_SESSION['email1'] = $username;
	$_SESSION['pass1'] = $password;
	
	if(empty($email) || empty($password))
	{
		$_SESSION['message1'] = "Missing form fields.";
		header("Location: ../php/login.php");
	}
	else
	{
		$loginInfo = $dao->checkLogin($email, $password);
	
		if ($loginInfo == 1) {
			$_SESSION['message1'] = "";
			$_SESSION['currentUser'] = $email;
			$_SESSION['admin'] = $dao->checkAdmin($email);
			header("Location: ../index.php");
		} 
		else {
			$_SESSION['message1'] = "Login Unsuccessful";
			header("Location: ../php/login.php");
		}
	}
?>