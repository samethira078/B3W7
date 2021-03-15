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
      $stmt = $this->connection()->prepare("SELECT * from characters WHERE id = :id");
      $stmt->bindParam(':id', $url, PDO::PARAM_INT);
      $stmt->execute();

      if($amountRows = $url){
        $row = $stmt->fetchAll();
        return $row;
      } else {
        echo "twodwkdowdw";
      }
  }
}
}

class Uploads extends Database{

}
?>
