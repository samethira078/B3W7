<?php
//Grab DB
require_once 'Database.php';


class CRUB extends Database{
  // Count amount of Index in DB
  public function countID(){
    $sql = "SELECT COUNT(name) FROM characters";
    $stmt = $this->connection()->query($sql);
    $AmountIndex = $stmt->fetchColumn();
    return $AmountIndex;
  }
  // Grab all columns of each row
  public function grabInfo(){
    $sql = "SELECT * from characters";
    $stmt = $this->connection()->query($sql);
    $row = $stmt->fetchAll();
    return $row;
  }



}

?>
