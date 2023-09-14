<?php 
    require_once 'admin/includes/init.php'; 
    include_once LIB_CONTROLLER.DS.'IndexController.class.php';

    $controller = new IndexController();
    $dados = $controller->getDadosPaginaInstitucional(2023);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="bg-success p-2 text-white" style="height: auto; width: auto;">

     <div class="d-flex flex-row mt-4">
        <div class=""><i class="bi bi-person-fill d-block" style="font-size: 200%;"></i></div>
        <div class="mx-2 fs-4 mb-2 my-2">Contatos</div>    
     </div>

     <div class="d-flex align-bottom flex-row">
      <div><i class="bi bi-envelope-at-fill" style="font-size: 150%;"> </i> </div>
      <div class="mx-2 my-2"><?= $dados->getEmail()?></div>
      
      <div><i class="bi bi-telephone-fill ms-2"  style="font-size: 150%;"></i> </div>
      <div class="mx-2 my-2"><?= $dados->getTelefone()?></div>
    </div>

</body>

</html>
