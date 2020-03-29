<?php
	session_start();

	require_once 'Dao.php';
	$dao = new Dao();
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(empty($username) || empty($password))
	{
		$_SESSION['auth'] = false;
		$_SESSION['message'] = $username;
		header("Location: ../php/login.php");
	}
	else
	{
		$loginInfo = $dao->checkLogin($username, $password);
	
		if ($loginInfo == 1) {
			$_SESSION['auth'] = true;
			$_SESSION['message'] = "";
			$_SESSION['currentUser'] = $username;
			header("Location: ../index.php");
		} 
		else {
			$_SESSION['auth'] = false;
			$_SESSION['message'] = "Login Unsuccessful";
			header("Location: ../php/login.php");
		}
	}
?>