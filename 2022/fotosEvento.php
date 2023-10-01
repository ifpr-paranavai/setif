<?php 
    $currentPage = 'fotosEvento';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/setif/init.php';
    include_once LIB_CONTROLLER . DS . 'MidiaController.class.php';
    $controller = new MidiaController();    
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
    <title>Fotos</title>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap-4.4.1/css/bootstrap.min.css" />
    <style type="text/css">
    img {
        max-width: 100%;
        height: auto;
        vertical-align: top
    }

    .container img {
        max-width: 500px;
        max-height: 550px;
        margin-top: 10px;
        width: auto;
        height: auto;
    }

    .container {
        clear: both;
        margin-top: 20px;
    }
    </style>
</head>

<body>
    <?php require_once('includes/navbar.php'); ?>
    <div class="container mt-5">

        <h1 class="text-left">Imagens das edições anteriores</h1>

        <hr class="mt-2 mb-5">

        <div class="row text-center text-lg-left">
            <?php 
                $fotos = $controller->getFotos();
                foreach ($fotos as $foto):
            ?>
            <div class="col-6 col-md-4">
                <div class="thumbnail">
                    <img src="https://drive.google.com/uc?export=view&id=<?= $foto->getLink()?>" class="img-responsive"
                        alt="Setif" style="width:100%; height: 100%;">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php require_once('includes/jsImports.php'); ?>
</body>

</html>