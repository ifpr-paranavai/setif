<!doctype html>
<html lang="pt-BR">

<head>
  <title>Navbar</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="navBar.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700;800&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="imagens/" type="image/png">
</head>

<body>
  <?php
  include_once 'includes/navbar.php';
  ?>
  <div class="logosetif">

    <img class="logosetif" src="setif3.png">
  </div>

  <section class="parallax-sobre">
    <div class="container text-white">
      <h1 class="fs-1 font-weight-bold m-5 p-5 text-uppercase"> Sobre o Evento</h1>
      <h2 class="pb-5">A Semana da Tecnologia da Informação do IFPR Campus Paranavaí (SETIF) é um
        evento que acontece todos os anos na cidade de Paranavaí-PR. Além da mostra de trabalhos, este evento conta com
        minicursos, palestras e competições. Em 2022, a SETIF ocorrerá de 7 a 11 de novembro.
        Além das atividades relacionadas à tecnologia da informação, dentro da programação da SETIF ainda está previsto
        o IFTECH e o Show de Talentos.</h2>
      <h2 id="insc" class="font-weight-bold mt-5">As inscrições para as palestras e mini-cursos deverão ser
        realizadas por meio do Even3: <a class="font-weight-light text-white text-decoration-none"
          href="https://www.even3.com.br/setif-2022/">https://www.even3.com.br/setif-2022/</a></h2>
    </div>
  </section>
  <div class="image-line">
    <div class="container-fluid text-white">
      <img src="mapa.png" alt="Imagem" />
      <p>Localização</p>
    </div>
  </div>

  <section>
    <div class="container-fluid text-white">
      <div class="col-md-12">
        <iframe class="mt-4"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.1691110062343!2d-52.45651458503157!3d-23.054260884937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x949296a233a74981%3A0x8aed8519780a4c71!2sIFPR%20-%20Instituto%20Federal%20do%20Paran%C3%A1%20-%20Campus%20Paranava%C3%AD!5e0!3m2!1spt-PT!2sbr!4v1685555475394!5m2!1spt-PT!2sbr"
          frameborder="0" allowfullscreen loading="lazy" width="100%" height="450px"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>

  <section class="parallax-programacao">
         
<div id="even3-widget-session" style="width:70%;height:60%;">
<iframe
 src="https://www.even3.com.br/widget/index?evento=setif-2022&amp;type=session&amp;lang=pt"
  id="even3_session" frameborder="0" vspace="0" hspace="0" marginheight="10" marginwidth="5" 
  width="100%" scrolling="no"  style="overflow: auto; height: 999px; ">
</iframe>
</div>


    </div>
  </section>






  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>