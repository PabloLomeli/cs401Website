<?php
require_once 'KLogger.php';

class Dao {

  private $host = 's-cdbr-iron-east-01.cleardb.net';
  private $dbname = 'heroku_b2c5f55c93b1823';
  private $username = 'b2dde2f0af7810';
  private $password = 'aa1e7902';
  private $logger;

  public function __construct() {
    $this->logger = new KLogger("log.txt", KLogger::WARN);
  }

  public function getConnection() {
    try {
       $connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
    } catch (Exception $e) {
      $this->logger->LogError("Couldn't connect to the database: " . $e->getMessage());
      return null;
    }
    return $connection;
  }
 }
