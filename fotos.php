
<?php

require_once 'admin/includes/init.php';
include_once LIB_CONTROLLER . DS . 'MidiaController.class.php';
$controller = new MidiaController();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Fotos</title>

</head>

<body>
  <session class="fotos">

    <div class="container px-auto py-5 mx-auto">
      <?php
      foreach ($midias as $midia):
        ?>
        <img class="my-auto" style="width: 720px; margin-left: 80px;" src="<?= $artigo->getLink() ?>">

    </div>
      <?php
      endforeach;
      ?>
  </session>
  <?php include_once 'includes/metadados.php' ?>
  <?php include_once 'includes/navbar.php' ?>
  <?php include_once 'includes/rodape.php' ?>
  <?php include_once 'includes/scripts.php' ?>
</body>

</html>