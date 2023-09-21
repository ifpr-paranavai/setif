<?php

require_once 'admin/includes/init.php';
include_once LIB_CONTROLLER . DS . 'NormasPublicacaoController.class.php';
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


  </head>

  <body>
    <style>
      .custom-background {
        background-color: #464BA4;
      }

      .custom-height {
        height: 45%;
      }

      .custom-font {
        font-family: 'Open Sans', sans-serif;
      }

      .custom-color {
        color: #D9D9D9;
      }

      .link {
        width: 150px;
        height: 150px;
        border: 2px solid #183276;
        background-size: cover;
      }
    </style>
    <?php
    include_once 'includes/navbar.php';
    ?>

    <div class="container m-0 mt-5 p-0 pt-5">
      <div class="row">
        <div class="col">
          <div class="col w-40 p-2 datas importantes custom-background h-max-content d-block d-inline-block d-flex p-10px text-white d-flex flex-column p-10">

            <h1 class=" fs-3 text-white font-weight-bold mt-1 mx-auto"><img src="./imagens/time-and-calendar.png" class="mx-2" alt="">Datas Importantes</h1>
            <hr class="mx-5">

            <h4 class="mx-auto custom-font font-weight-bold mt-5">Data limite para a submissão de trabalhos:</h4>
            <h4 class="mx-auto custom-font font-weight-light mt-2 mb-5"><?= $normas->getDataLimite() ?></h4>


            <h4 class="mx-auto custom-font font-weight-bold">Notificação aos autores:</h4>
            <h4 class="mx-auto custom-font font-weight-light mt-2 mb-5"><?= $normas->getDataNotificacaoAutor() ?></h4>



            <h4 class="mx-auto custom-font font-weight-bold">Submissão da versão final:</h4>
            <h4 class="mx-auto custom-font font-weight-light mt-2 mb-5"><?= $normas->getDataVersaoFinal() ?></h4>


            <h4 class="mx-auto custom-font font-weight-bold">Evento:</h4>
            <h4 class="mx-auto custom-font font-weight-light mt-2 mb-5"><?= $normas->getDataInicioEvento() ?> à <?= $normas->getDataFinalEvento() ?></h4>


            <h4 class="mx-auto custom-font font-weight-bold">Data prevista da mostra de trabalhos:</h4>
            <h4 class="mx-auto custom-font font-weight-light mt-2 mb-5"><?= $normas->getDataMostraTrabalho() ?></h4>

          </div>
        </div>

        <div class="col mt-1">
          <div class="submissao col w-80 h-max-content d-flex p-10px d-flex flex-column mx-2">
            <h1 class="text-dark text-weight-bold">Submissão</h1>
            <h5 class="text-body-secondary text-weight-lighter">No sistema, cada submissão deve ser feita em duas etapas: <br>
              1.Clicar em Enviar Submissão para cadastrar o artigo e autores (lembrar de salvar o ID e a senha do artigo). <br>
              2.Clicar em Enviar Arquivo para fazer upload do artigo (somente formato pdf). <br>
              Sistema de sumissão: <a href="" class="rounded-pill btn btn-light btn-outline-success" role=" button">Clique aqui</a>
            </h5>
            <br>
            <h1 class="text-dark text-weight-bold">Artigos completos:</h1>
            <h5 class="text-body-secondary text-weight-lighter w-max-content">No sistema, cada submissão deve ser feita em duas etapas:
              Os artigos completos devem possuir no máximo 12 páginas. A formatação dos artigos deve seguir o modelo da SBC para artigos acadêmicos:
              Utilizar preferencialmente o LaTeX: Overleaf
              <br>
              Modelo SBC-Artigo: <a href="https://drive.google.com/file/d/0B_jYjhszA34iSnE2SC1OV0dVNlU/view?usp=sharing" class="rounded-pill btn btn-light btn-outline-success" role=" button">Clique aqui</a>
            </h5>
            <br>

            <h1 class="text-dark text-weight-bold">Resumos:</h1>
            <h5 class="text-body-secondary text-weight-lighter">No sistema, cada submissão deve ser feita em duas etapas:
              Os artigos completos devem possuir no máximo 12 páginas. A formatação dos artigos deve seguir o modelo da SBC para artigos acadêmicos:
              Utilizar preferencialmente o LaTeX: Overleaf
              Não incluir abstract e o resumo no modelo latex
              <br>
              Modelo SBC-Resumo: <a href="https://drive.google.com/file/d/1TynchfNXbA9s7D45vYHh176xOfZ7rTRy/view" class="rounded-pill btn btn-light btn-outline-success" role=" button">Clique aqui</a>
            </h5>
            <br>


          </div>

        </div>


      </div>
    </div>

    <div class="apresentacao p-10 m-0 mb-5">
      <hr class="image-line">
      <h1 class="text-dark text-weight-bold text-center">Apresentação</h1>
      <br>
      <br>
      <div class="row">
        <div class="col">
          <h2 class="text-body-secondary col w-70 px-3 text-weight-lighter text-center ms-10 me-10 d-flex flex-column">Os trabalhos aceitos deverão ser apresentados na SETIF 2022. Os trabalhos deverão ser
            apresentados na forma de apresentação\oral presencialmente. Mais detalhes sobre a agenda de apresentações serão divulgados após a revisão dos trabalhos submetidos.</h2>
          <br>

          <div class="row">
            <h2 style="margin-top: 50px" class="text-weight-bolder text-start text-dark mx-5 float-start"><img style="width: 50px" src="./imagens/relogio.png" alt="" style="vertical-align:middle"> Tempo de apresentação</h2> <br>
            <h2 class="text-body-secondary d-flex flex-column text-start mx-5">
              – <?= $normas->getTempoApresentacaoResumo() ?> minutos para resumos <br>
              – <?= $normas->getTempoApresentacaoArtigo() ?> minutos para artigos completos</h2>
          </div>

        </div>

        <div class="col">
          <img class="my-auto" style="width: 720px; margin-left: 80px;" src="./imagens/apresentacao3.jpg" alt="">
        </div>
      </div>


    </div>

    <div class="topico interesse px-5 mb-2" style="position: relative;background-color: #2EA75A; display:block; padding:10px;">

      <h1 class="fs-1 text-white font-weight-bold my-5 text-center">Tópicos de interesse</h1> <br>

      <div class="">
        <?php
        $topicosDeInteresses = $controller->getTopicosDeInteresse();
        foreach ($topicosDeInteresses as $topicoDeInteresse) :
        ?>
          <a class="btn btn-primary link rounded-4 mx-4 align-middle my-4" href="https://www.techtudo.com.br/noticias/2023/03/o-que-e-arquitetura-de-computadores-entenda-uso-do-termo-na-informatica-edinfoeletro.ghtml" role="button" style="background-image: url('<?= $topicoDeInteresse->getLinkImagem() ?>');"><br>
            <label for="" style="font-size: larger;"><?= $topicoDeInteresse->getNome() ?></label></a>
        <?php
        endforeach;
        ?>
      </div>


      <div style="margin-top: 50px;" class="">


      </div>



    </div>



    <?php include_once 'includes/rodape.php' ?>
    <?php include_once 'includes/scripts.php' ?>
  </body>

</html>