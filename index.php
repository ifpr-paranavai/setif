<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Apresentação</title>
  <?php include_once 'includes/metadados.php' ?>
</head>

<body>
  <?php
  include_once 'includes/navbar.php';
  ?>
  <section class="container logosetif">

    <img class="img-fluid logosetif" src="imagens/setifLogo.png" style="margin-left: 80px;" >
  </section>

  <section class="parallax-sobre">

    <div class="container text-white">
      <h1 class="fs-1 font-weight-bold m-5 p-5 text-uppercase text-center"> Sobre o Evento</h1>
      <h2 class="pb-5 text-center">A Semana da Tecnologia da Informação do IFPR Campus Paranavaí (SETIF) é um
        evento que acontece todos os anos na cidade de Paranavaí-PR. Além da mostra de trabalhos, este evento conta com
        minicursos, palestras e competições. Em 2022, a SETIF ocorrerá de 7 a 11 de novembro.
        Além das atividades relacionadas à tecnologia da informação, dentro da programação da SETIF ainda está previsto
        o IFTECH e o Show de Talentos.</h2>
      <h2 id="insc" class="font-weight-bold text-center pb-5 mt-5 mb-0">As inscrições para as palestras e mini-cursos deverão ser
        realizadas por meio do Even3: <a class="fw-lighter text-white text-decoration-none pb-5 mt-7" href="https://www.even3.com.br/setif-2022/">https://www.even3.com.br/setif-2022/</a></h2>

     
    </div>
  </section>

  
  <section class="parallax-programacao">
<div class="bg-white bg-opacity-50 " style="width:auto; height: 750px;">
  <div class="titulo-sessao p-2 mb-1 rounded-3 bg-white bg-opacity-50 margin-bottom-5 ">
        <h1 class="text-black fw-lighter fs-4 text-center rounded-3"> LOCALIZAÇÃO
           <i class="bi bi-geo-alt" style="color:black; font-size:20px;"></i></h1>
      </div>


    <div class="mapa">
      <iframe class="mt-0 rounded-3"   style="height: 650px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.1691110062343!2d-52.45651458503157!3d-23.054260884937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x949296a233a74981%3A0x8aed8519780a4c71!2sIFPR%20-%20Instituto%20Federal%20do%20Paran%C3%A1%20-%20Campus%20Paranava%C3%AD!5e0!3m2!1spt-PT!2sbr!4v1685555475394!5m2!1spt-PT!2sbr" frameborder="0" allowfullscreen loading="lazy" width="100%" height="450px" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>

    </div>
    /<div class="container py-5 ">
      <div class="frame-programacao text-center rounded-3">
      <div class="titulo-sessao p-2 mb-5 rounded-3 bg-white bg-opacity-50" style="width: 300px;">
        <h1 class="text-black fw-lighter fs-4 text-center rounded-3"> PROGRAMAÇÃO  <i class="bi bi-calendar"></i></h1>
      </div>
        <div id="even3-widget-session">
          <iframe class="rounded-3"src="https://www.even3.com.br/widget/index?evento=setif-2022&amp;type=session&amp;lang=pt" id="even3_session" frameborder="0" allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>
  </section>
  
  </section>
  <?php include_once 'includes/rodape.php' ?>
  <?php include_once 'includes/scripts.php' ?>
</body>

</html>