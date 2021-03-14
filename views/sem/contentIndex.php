<div class="bootstrap-wrapper">
<div class="container">
  <div id="content" class="row">
    <?php
    // Create column for each array
    foreach ($objectCRUB->grabInfo() as $rows) { ?>
      <div class="col-md-4">
        <!-- Link to ID in character.php -->
        <a id="link" href="<?php echo "character.php?id=".$rows['id']; ?>">
        <img src="
        <?php
          echo "img/".$rows['avatar'];
        ?>
        " alt="<?php $rows['name'] ?>">
        <h1> <?php echo $rows['name']; ?></h1>
        <div class="stats">
          <p><i class="fas fa-heartbeat"></i><?php echo $rows['health'] ?></p>
          <p><i class="fas fa-khanda"></i><?php echo $rows['attack'] ?></p>
          <p><i class="fas fa-shield-alt"></i><?php echo $rows['defense'] ?></p>
        </div>
        </a>
      </div><?php
    }
    ?>

  </div>
</div>
</div>
