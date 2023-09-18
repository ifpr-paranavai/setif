<?php
require_once 'admin/includes/init.php';
include_once LIB_CONTROLLER . DS . 'MidiaController.class.php';
$controller = new MidiaController();

// Chame a função getMidiaPorAno para obter os dados da mídia
$ano = 2023; // Substitua pelo ano desejado
$midias = $controller->getMidiaPorAno($ano);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Fotos</title>
</head>
<body>
  <section class="fotos">
    <div class="container px-auto py-5 mx-auto">
      <?php
      // Verifique se $midias não é nulo antes de usar o loop foreach
      if (!empty($midias)) {
        foreach ($midias as $midia):
      ?>
     <img class="my-auto" style="width: 720px; margin-left: 80px;" src="<?= $midia->getLink() ?>">
      <?php
        endforeach;
      } else {
        echo "Nenhuma mídia encontrada para o ano especificado.";
      }
      ?>
    </div>
  </section>
  <?php include_once 'includes/metadados.php' ?>
  <?php include_once 'includes/navbar.php' ?>
  <?php include_once 'includes/rodape.php' ?>
  <?php include_once 'includes/scripts.php' ?>
</body>
</html>
