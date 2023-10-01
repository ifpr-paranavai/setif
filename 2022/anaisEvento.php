<?php
    $currentPage = 'anaisEvento';
    
    require_once $_SERVER['DOCUMENT_ROOT'] . '/setif/init.php';
    include_once LIB_CONTROLLER . DS . 'AnaisController.class.php';
    $controller = new AnaisController();
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/ifpr.png" rel="icon">
    <title>Anais Evento</title>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap-4.4.1/css/bootstrap.min.css" />
    <style type="text/css">
    img {
        max-width: 100%;
        height: auto;
    }
    </style>
</head>

<body>
    <?php require_once('includes/navbar.php'); ?>
    <div class="container mt-5">
        <article>
            <div>
                <?php
                    $anos = $controller->getAnosDasEdicoesAnteriores();
                    foreach ($anos as $ano):
                ?>
                <h2 class="display-4" style="margin-top: 20px; font-size: 30px;"><a
                        href="evento.php?ano=<?php echo $ano ?>">Anais <?php echo $ano ?></a></h2>
                <hr class="mt-2 mb-5">
                <?php endforeach; ?>
            </div>
        </article>
    </div>
    <?php require_once('includes/jsImports.php'); ?>
</body>

</html>