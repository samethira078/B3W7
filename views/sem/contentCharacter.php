<?php
  // Get glass
  $varResult = $objectCRUB->checkURL();
  // Check if ID exists
  if(!empty($varResult)){
    if(count($varResult) > 0){
?>
<div class="bootstrap-wrapper">
<div class="container">
  <div id="characterTitle" class="row">
    <?php
    foreach ($objectCRUB->checkURL() as $rows) { ?>
    <div class="col-md-12">
        <h1><?php echo $rows['name']; ?></h1>
    </div>
    <?php
    }  ?>
  </div>
  <div id="characterContent" class="row">
      <div class="col-md-4">
        <img src="img/<?php echo $rows['avatar']; ?>" alt="<?php echo $rows['name']; ?>">
      </div>
      <div class="col-md-3">
        <p>Health <i class="fas fa-heartbeat"><span><?php echo $rows['health'] ?></span></i></p>
        <p>Damage <i class="fas fa-khanda"><span><?php echo $rows['attack'] ?></span></i></p>
        <p>Shield <i class="fas fa-shield-alt"><span><?php echo $rows['defense'] ?></span></i></p>
        <p>Color <i class="fas fa-palette"><span><?php echo $rows['color'] ?></span></i></p>
      </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <p> <?php echo $rows['bio'] ?></p>
    </div>
  </div>

  </div>
</div>
</div>
<?php
}}
else {
  header("Location: index.php");
}
 ?>
