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
    <img class="logosetif" src="setif3.png">
  </section>
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
  <section class="container-fluid text-white mx-0 px-0">
    <div class="col-md-12">
      <iframe class="mt-4"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.1691110062343!2d-52.45651458503157!3d-23.054260884937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x949296a233a74981%3A0x8aed8519780a4c71!2sIFPR%20-%20Instituto%20Federal%20do%20Paran%C3%A1%20-%20Campus%20Paranava%C3%AD!5e0!3m2!1spt-PT!2sbr!4v1685555475394!5m2!1spt-PT!2sbr"
        frameborder="0" allowfullscreen loading="lazy" width="100%" height="450px"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>
  <section class="parallax-programacao">
    <div class="container py-5">
      <div class="frame-programacao">
        programação
        <div id="even3-widget-session">
          <iframe src="https://www.even3.com.br/widget/index?evento=setif-2022&amp;type=session&amp;lang=pt"
            id="even3_session" frameborder="0" allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>
  </section>
  <section style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
    <h3 style="text-align:center;">Parallax Demo</h3>
    <p>Parallax scrolling is a web site trend where the background content is moved at a different speed than the
      foreground content while scrolling. Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere
      mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim.
      Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam
      vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales
      tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam
      sociis eleifend, aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit
      proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>
  </section>
  <?php include_once 'includes/rodape.php' ?>
  <?php include_once 'includes/scripts.php' ?>
</body>

</html>