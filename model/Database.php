<?php

class Database{
  // Assign DB info
  protected $host = 'localhost';
  protected $user = 'root';
  protected $pass = 'z';
  protected $db = 'school';

  // Connect with DB
  protected function connection(){
    $dsn = 'mysql:host='.$this->host.';dbname='.$this->db;
    $pdo = new PDO($dsn, $this->user, $this->pass);
    // Set attribute to default fetch mode & return to array by column name
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  }
}

?>
