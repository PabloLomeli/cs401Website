<?php

class Dao {

  private $host = 'us-cdbr-iron-east-01.cleardb.net';
  private $dbname = 'heroku_b2c5f55c93b1823';
  private $username = 'b2dde2f0af7810';
  private $password = 'aa1e7902';

  public function getConnection() {
    try {
       $connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
    } catch (Exception $e) {
      return null;
    }
    return $connection;
  }
  
  public function checkLogin($user, $pass) {
    $conn = $this->getConnection();
    $saveQuery = "select * from user where email = :user and password = :pass";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":user", $user);
    $q->bindParam(":pass", $pass);
    try {
      $q->execute();
	  $count = $q->rowCount();
	  if($count == 1)
	  {
		return 1;
	  }
	  else
	  {
		return 0;
	  }
	} 
	catch(Exception $e) { 
      echo print_r($e,1);
      exit;
    }
  }
  
  public function registerUser($user, $pass) {
    $conn = $this->getConnection();
    $saveQuery = "insert into user (email, password, access) values (:user, :pass, 0)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":user", $user);
    $q->bindParam(":pass", $pass);
	if($q->execute())
	{
		return 1;
	} 
	else
	{
	  return 0;
    }
  }
 }
