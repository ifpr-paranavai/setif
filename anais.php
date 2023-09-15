<?php

require_once 'admin/includes/init.php';
include_once LIB_CONTROLLER . DS . 'AnaisController.class.php';
$controller = new AnaisController();
$anos = $controller->getAnosDasEdicoesAnteriores();
print_r($anos);

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Anais do Evento</title>
    <?php include_once 'includes/metadados.php' ?>
</head>

<body>
    <?php
    include_once 'includes/navbar.php';
    ?>

    <div class="container mt-5 py-5 h-100">
        <div calss="row align-items-center">
            <?php
            $quantidadeEdicoes = sizeof($anos);
            $porcentagem = 1 / $quantidadeEdicoes;
            $opacidade = $porcentagem;
            foreach ($anos as $ano):

                ?>
                <div class="col col-sm-6 col-md-3">
                    <a href="anais.php/<?= $ano ?>" style="opacity:<?= $opacidade ?>"
                        class="mx-4 fs-2 btn rounded-4 botao-anais mx-10 w-45 h-45 text-center py-3 p-5">Anais
                        <?= $ano ?> </a>
                </div>
                <?php
                $opacidade += $porcentagem;
            endforeach;
            ?>
        </div>
    </div>
    <?php include_once 'includes/rodape.php' ?>
    <?php include_once 'includes/scripts.php' ?>
</body>

</html>