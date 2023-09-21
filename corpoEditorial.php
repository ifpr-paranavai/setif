<?php

require_once 'admin/includes/init.php';
include_once LIB_CONTROLLER . DS . 'CorpoEditorialController.class.php';
$controller = new CorpoEditorialController();
?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Corpo Editorial</title>
    <?php include_once 'includes/metadados.php' ?>
</head>

<body>
    <?php include_once 'includes/navbar.php' ?>

    <style>
        .custom-background {
            background-color: #464BA4;
        }

        .custom-font {
            font-family: 'Open Sans', sans-serif;
        }
    </style>

    <div class="custom-background custom-font h-max-content d-block d-inline-block d-flex p-10px
     text-white d-flex flex-column p-10 w-max-content px-5 py-5 text-center mb-3">

        <div>
            <?php

            $nomes = $controller->getCorpoEditorialPorAno(2023);
            foreach ($nomes as $nome):
                if ($nome->getFuncao() == "Presidente") {

                    ?>
                    <h1 class="mx-auto font-weight-bolder">Presidente</h1>
                    <br>
                    <h2 class="mx-auto">
                        <?= $nome->getNome() ?>
                    </h2>
                    <br>
                    <br>
                    <hr>
                </div>
            <?php }endforeach; ?>

        <h1 class="mx-auto font-weight-bolder">Comitê Organizador da SETIF</h1> <br>
        <h2 class="mx-auto">

        </h2>
        <br>
        <hr>
        <h4 class="mx-auto my-2">
            Maria Eduarda Fiorenzano Bruning <br>
            Giovanna Bernadelli Souza Goes
        </h4>
                </div>
        <?php include_once 'includes/rodape.php' ?>


        <?php include_once 'includes/scripts.php' ?>

</body>

</html>