<?php

require_once 'admin/includes/init.php';
include_once LIB_CONTROLLER . DS . 'AnaisController.class.php';
$controller = new AnaisController();
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

    <div class="container text-center my-5 py-5">
        <?php
        if (isset($_GET['ano'])):
            $artigos = $controller->getArtigosPorAno($_GET['ano']);
            ?>
            <div class="row align-items-center">
                <?php
                foreach ($artigos as $artigo):
                    ?>
                    <div class="col-12 py-2">
                        <a href="<?= $artigo->getLink() ?>" class="mx-4 fs-2 btn rounded-4 botao-anais w-100 ">
                            <?= $artigo->getTitulo() ?> </a>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>
            <?php
        else:
            ?>
            <div class="row align-items-center">
                <?php
                $anos = $controller->getAnosDasEdicoesAnteriores();
                $quantidadeEdicoes = sizeof($anos);
                $porcentagem = 1 / $quantidadeEdicoes;
                $opacidade = $porcentagem;
                foreach ($anos as $ano):

                    ?>
                    <div class="col-12 col-sm-6 col-md-3 py-2">
                        <a href="anais.php?ano=<?= $ano ?>" style="opacity:<?= $opacidade ?>"
                            class="mx-4 fs-2 btn rounded-4 botao-anais mx-10 w-45 h-45 text-center py-3 p-5">Anais
                            <?= $ano ?> </a>
                    </div>
                    <?php
                    $opacidade += $porcentagem;
                endforeach;
                ?>
            </div>
            <?php
        endif;
        ?>
    </div>

    <?php include_once 'includes/rodape.php' ?>
    <?php include_once 'includes/scripts.php' ?>
</body>

</html>