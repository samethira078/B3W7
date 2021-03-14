<div class="bootstrap-wrapper">
<div class="container">
  <div id="content" class="row">
    <?php
    foreach ($objectCRUB->grabInfo() as $rows) { ?>
      <div class="col-lg-4">
        <?php echo $rows['name']; ?>
      </div><?php
    }
    ?>

  </div>
</div>
</div>
