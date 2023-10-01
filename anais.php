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

    <main class="container principal">

        <?php
        if (isset($_GET['ano'])):
            $artigos = $controller->getArtigosPorAno($_GET['ano']);
            ?>
        <div class="row border-bottom text-center">
            <div class="col-12">
                <h2 class="py-3">
                    Artigos Completos
                </h2>
            </div>
        </div>
        <div class="row pt-3">
            <?php
                foreach ($artigos as $artigo):
                    if($artigo->getTipo() == Artigo::TIPO_ARTIGO):
                    ?>
            <div class="card artigo mb-3">
                <div class="card-body">
                    <h5 class="card-title"><?= $artigo->getTitulo() ?></h5>
                    <p class="card-text"><?= $artigo->getAutores() ?></p>
                    <a href="<?= $artigo->getLink() ?>" target="_blank" class="btn btn-primary">Ver Artigo</a>
                </div>
            </div>
            <?php
                    endif;
                endforeach;
                ?>
        </div>

        <div class="row border-bottom text-center">
            <div class="col-12">
                <h2 class="py-3">
                    Resumos
                </h2>
            </div>
        </div>
        <div class="row pt-3">
            <?php
                foreach ($artigos as $artigo):
                    if($artigo->getTipo() == Artigo::TIPO_RESUMO):
                    ?>
            <div class="card artigo mb-3">
                <div class="card-body">
                    <h5 class="card-title"><?= $artigo->getTitulo() ?></h5>
                    <p class="card-text"><?= $artigo->getAutores() ?></p>
                    <a href="<?= $artigo->getLink() ?>" target="_blank" class="btn btn-primary">Ver Artigo</a>
                </div>
            </div>
            <?php
                    endif;
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
    </main>

    <?php include_once 'includes/rodape.php' ?>
    <?php include_once 'includes/scripts.php' ?>
</body>

</html>