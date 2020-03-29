<?php
	session_start();

	require_once 'Dao.php';
	$dao = new Dao();
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$_SESSION['email1'] = $username;
	$_SESSION['pass1'] = $password;
	
	if(empty($username) || empty($password))
	{
		$_SESSION['message1'] = $username;
		header("Location: ../php/login.php");
	}
	else
	{
		$loginInfo = $dao->checkLogin($username, $password);
	
		if ($loginInfo == 1) {
			$_SESSION['message1'] = "";
			$_SESSION['currentUser'] = $username;
			header("Location: ../index.php");
		} 
		else {
			$_SESSION['message1'] = "Login Unsuccessful";
			header("Location: ../php/login.php");
		}
	}
?>