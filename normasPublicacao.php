<?php

require_once 'admin/includes/init.php';
include_once LIB_CONTROLLER . DS . 'NormasPublicacaoController.class.php';
include_once LIB_UTIL . DS . 'Funcoes.class.php';
$controller = new NormasPublicacaoController();
$normas = $controller->getNormasPublicacao('2023');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Normas de Publicação</title>
    <?php include_once 'includes/metadados.php' ?>
</head>

<body>
    <?php include_once 'includes/navbar.php' ?>

    <body>
        <?php
        include_once 'includes/navbar.php';
        ?>

        <div class="container-fluid mt-5 pt-5">
            <div class="row border-bottom">
                <div class="col-12 col-md-6 background-roxo text-center text-white">

                    <h2 class="py-5 border-bottom">
                        <i class="bi bi-calendar-check pl-1"></i> Datas Importantes
                    </h2>

                    <h4 class="mt-5">Data limite para a submissão de trabalhos:</h4>
                    <p class="fs-5 mt-4 text-lowercase">
                        <?= Funcoes::getDataPorExtenso($normas->getDataLimite()) ?>
                    </p>

                    <h4 class="mt-5">Notificação aos autores:
                    </h4>
                    <p class="fs-5 mt-4 text-lowercase">
                        <?= Funcoes::getDataPorExtenso($normas->getDataNotificacaoAutor()) ?>
                    </p>

                    <h4 class="mt-5">Submissão da versão final:
                    </h4>
                    <p class="fs-5 mt-4 text-lowercase">
                        <?= Funcoes::getDataPorExtenso($normas->getDataVersaoFinal()) ?>
                    </p>

                    <h4 class="mt-5">Evento:
                    </h4>
                    <p class="fs-5 mt-4 text-lowercase">
                        <?= Funcoes::getDataPorExtenso($normas->getDataInicioEvento()) ?> à
                        <?= Funcoes::getDataPorExtenso($normas->getDataFinalEvento()) ?>
                    </p>

                    <h4 class="mt-5">Data prevista da mostra de trabalhos:
                    </h4>
                    <p class="fs-5 mt-4 text-lowercase">
                        <?= Funcoes::getDataPorExtenso($normas->getDataMostraTrabalho()) ?>
                    </p>
                </div>
                <div class="col-12 col-md-6 text-body-secondary ">
                    <h2 class="py-2">
                        Submissão
                    </h2>
                    <p class="fs-5">No sistema, cada submissão deve ser feita em
                        duas etapas: </p>
                    <ol>
                        <li>Clicar em Enviar Submissão para cadastrar o artigo e autores (lembrar de salvar o ID e a
                            senha do artigo).</li>
                        <li>Clicar em Enviar Arquivo para fazer upload do artigo (somente formato pdf).

                        </li>
                    </ol>
                    <p class="fs-5">Sistema de submissão: <a href="https://tecnoif.com.br/setif/openconf/openconf.php"
                            target="_blank" class="rounded-pill btn btn-outline-success" role="button">Clique
                            aqui</a></p>

                    <h2 class="py-2 border-top">
                        Artigos completos:
                    </h2>
                    <p class="fs-5">Os artigos completos devem possuir no máximo 12 páginas. A formatação dos artigos
                        deve seguir o modelo da SBC para artigos acadêmicos:</p>
                    <ul>
                        <li>Utilizar preferencialmente o LaTeX: <a
                                href="https://www.overleaf.com/latex/templates/sbc-conferences-template/blbxwjwzdngr"
                                target="_blank" class="rounded-pill btn bbtn-outline-success" role="button">Ver
                                template no Overleaf</a></li>
                        <li class="mt-2">Modelo SBC-Artigo formato .doc: <a
                                href="https://drive.google.com/file/d/0B_jYjhszA34iSnE2SC1OV0dVNlU/view?usp=sharing"
                                class="rounded-pill btn btn-outline-success" role=" button">Baixar template
                                .doc</a>

                        </li>
                    </ul>
                    <p class="fs-5">Sistema de submissão: <a href="https://tecnoif.com.br/setif/openconf/openconf.php"
                            target="_blank" class="rounded-pill btn btn-outline-success" role="button">Clique
                            aqui</a></p>

                    <h2 class="py-2 border-top">
                        Resumos
                    </h2>
                    <p class="fs-5">O corpo do texto do resumo deve ter 3 páginas com referência (obrigatório). Os
                        resumos devem estar também formatados de acordo com o modelo da SBC:</p>
                    <ul>
                        <li>Utilizar preferencialmente o LaTeX: <a
                                href="https://www.overleaf.com/latex/templates/sbc-conferences-template/blbxwjwzdngr"
                                target="_blank" class="rounded-pill btn btn-outline-success" role="button">Ver
                                template no Overleaf</a></li>
                        <li class="text-danger">Não incluir abstract e o resumo no modelo latex</li>
                        <li class="mt-2">Modelo SBC-Artigo formato .doc: <a
                                href="https://drive.google.com/file/d/0B_jYjhszA34iSnE2SC1OV0dVNlU/view?usp=sharing"
                                class="rounded-pill btn btn-outline-success" role=" button">Baixar template
                                .doc</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <h2 class="text-center py-3">Apresentação</h2>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 text-body-secondary ">
                    <p class="text-center fs-4">Os trabalhos aceitos deverão ser apresentados na SETIF. Os trabalhos
                        deverão
                        ser apresentados na
                        forma de apresentação oral presencialmente. Mais detalhes sobre a agenda de apresentações serão
                        divulgados após a revisão dos trabalhos submetidos.</p>
                    <h2 class="py-3 ">
                        <i class="bi bi-clock pl-1"></i> Tempo de Apresentação
                    </h2>
                    <ul style="list-style-type: none;">
                        <li>
                            -
                            <?= $normas->getTempoApresentacaoResumo() ?> minutos para resumos <br>
                        </li>
                        <li>
                            -
                            <?= $normas->getTempoApresentacaoArtigo() ?> minutos para artigos
                            completos
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <img class="img-fluid" src="./imagens/apresentacao3.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="background-verde text-white">
            <div class="container">
                <div class="row">
                    <h2 class="text-center py-3">Tópicos de Interesse</h2>
                </div>
                <div class="row py-3">
                    <?php
                    $topicosDeInteresses = $controller->getTopicosDeInteresse();
                    foreach ($topicosDeInteresses as $topicoDeInteresse):
                        ?>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                            <div class="card text-bg-dark rounded-4 card-topico mb-4" style="width: 100%">
                                <img src="<?= $topicoDeInteresse->getLinkImagem() ?>" class="card-img rounded-4">
                                <div class="card-img-overlay">
                                    <div class="h-100 row align-items-center">
                                        <div class="col text-center fs-5">
                                            <?= $topicoDeInteresse->getNome() ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
        <?php include_once 'includes/rodape.php' ?>
        <?php include_once 'includes/scripts.php' ?>
    </body>

</html>