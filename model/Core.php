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
  //Check URL if valid or not
  public function checkURL(){
    //Pattern which it should follow
    $pattern = "/^[0-9]{1,2}$/";
    $url = $_GET["id"];
    //Remove illegal characters
    $url = filter_var($url, FILTER_SANITIZE_URL);

    //Check if URL is valid
    if(preg_match($pattern, $url)){
      $sql = "SELECT * from characters WHERE id=?";
      $stmt = $this->connection()->prepare($sql);
      $stmt->execute([$url]);
      $row = $stmt->fetchAll();
      return $row;
  }
}
}
?>
