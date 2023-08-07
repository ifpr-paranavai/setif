<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Normas de Publicação</title>
  <?php include_once 'includes/metadados.php' ?>
</head>

<body>
  <?php include_once 'includes/navbar.php' ?>
  <?php include_once 'includes/rodape.php' ?>

  </head>

  <body>
    <?php
    include_once 'includes/navbar.php';
    ?>
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
    </style>
    <div class="container px-0 m-0">
      <div class="row">
        <div class="col">
          <div class="col w-40 datas importantes custom-background h-max-content d-block d-inline-block d-flex p-10px text-white d-flex flex-column p-10">
            <br>
            <h1 class=" fs-3 text-white font-weight-bold mt-1 mx-auto"><img src="./imagens/time-and-calendar.png" class="mx-2" alt="">Datas Importantes</h1>
            <hr class="mx-5">
            <br>
            <h4 class="mx-auto custom-font font-weight-bold">Data limite para a submissão de trabalhos:</h4>
            <h4 class="mx-auto custom-font font-weight-light">10 de Outubro de 2023</h4>
            <br>
            <br>

            <h4 class="mx-auto custom-font font-weight-bold">Notificação aos autores:</h4>
            <h4 class="mx-auto custom-font font-weight-light">24 de outubro de 2023</h4>
            <br>
            <br>

            <h4 class="mx-auto custom-font font-weight-bold">Submissão da versão final:</h4>
            <h4 class="mx-auto custom-font font-weight-light">31 de outubro de 2023</h4>
            <br>
            <br>

            <h4 class="mx-auto custom-font font-weight-bold">Evento:</h4>
            <h4 class="mx-auto custom-font font-weight-light">07 a 11 de novembro de 2023</h4>
            <br>
            <br>

            <h4 class="mx-auto custom-font font-weight-bold">Data prevista da mostra de trabalhos:</h4>
            <h4 class="mx-auto custom-font font-weight-light">07 e 09 de dezembro de 2023</h4>
            <br>
          </div>
        </div>

        <div class="col">
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
              Modelo SBC-Artigo: <a href="" class="rounded-pill btn btn-light btn-outline-success" role=" button">Clique aqui</a>
            </h5>
            <br>

            <h1 class="text-dark text-weight-bold">Resumos:</h1>
            <h5 class="text-body-secondary text-weight-lighter">No sistema, cada submissão deve ser feita em duas etapas:
              Os artigos completos devem possuir no máximo 12 páginas. A formatação dos artigos deve seguir o modelo da SBC para artigos acadêmicos:
              Utilizar preferencialmente o LaTeX: Overleaf
              Não incluir abstract e o resumo no modelo latex
              <br>
              Modelo SBC-Resumo: <a href="" class="rounded-pill btn btn-light btn-outline-success" role=" button">Clique aqui</a>
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
            <h2 style="margin-top: 50px" class="text-weight-bolder text-start text-dark mx-5 float-start"><img style="width: 50px" src="./imagens/relogio.png" alt=""> Tempo de apresentação</h2> <br>
            <h2 class="text-body-secondary d-flex flex-column text-start mx-5">
              – 5 minutos para resumos <br>
              – 10 minutos para artigos completos</h2>
          </div>

        </div>

        <div class="col">
          <img class="my-auto" style="width: 720px; margin-left: 80px;" src="./imagens/apresentacao3.jpg" alt="">
        </div>
      </div>


    </div>

    <div class="topico interesse px-5" style="position: relative;background-color: #2EA75A; display:block; padding:10px;">
      <h1 class="fs-1 text-white font-weight-bold mt-1 text-center">Tópicos de interesse</h1> <br>
      <img style="width: 150px;height: 150px;border:2px solid #183276" class="rounded-4 mx-5" src="./imagens/Eng Computadores.png">
      <img style="width: 150px;height: 150px;border:2px solid #183276" class="rounded-4 mx-5" src="./imagens/auto-robotica.png">
      <img style="width: 150px;height: 150px;border:2px solid #183276" class="rounded-4 mx-5" src="./imagens/Bd.png">
    </div>


    <?php include_once 'includes/scripts.php' ?>
  </body>

</html>