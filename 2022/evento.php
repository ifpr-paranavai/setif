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
        <?php
            if (isset($_GET['ano'])):
                $ano = $_GET['ano'];
                $artigos = $controller->getArtigosPorAno($ano);
        ?>
        <div class="row">
            <div>
                <h3 class="display-2">Anais evento <?php echo $ano ?></h3>
                <hr class="mt-2 mb-5">
                <?php
                    foreach ($artigos as $artigo):
                ?>
                <div class="container">
                    <div class="row">
                        <p style="margin-top: 20px;"><a href="<?= $artigo->getLink() ?>"><?= $artigo->getTitulo() ?></a>
                            <br><small><?= $artigo->getTipo()?></small><br>
                            <span><?= $artigo->getAutores() ?></span>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php else: ?>
        <div style="text-align: center;">
            <p>Nenhum trabalho encontrado ;-;</p>
        </div>
        <?php endif; ?>
    </div>
    <?php require_once('includes/jsImports.php'); ?>
</body>

</html>