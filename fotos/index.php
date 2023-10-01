<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/setif/init.php';
  include_once LIB_CONTROLLER . DS . 'MidiaController.class.php';
  $controller = new MidiaController();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Fotos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="../2023/includes/estilo.css" rel="stylesheet">
    <link href="../2023/bibliotecas/bootstrap-5.3.0/css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700;800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../2023/imagens/favicon.png" type="image/png">
    <link rel="stylesheet" href="../2023/bibliotecas/bootstrap-icons-1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <?php
$paginas = array(
    array("../", "Edição Atual"),
    array("../anais/", "Anais do Evento"),
    array("../fotos/", "Fotos")
);
$url = explode("/", $_SERVER['REQUEST_URI']);
$paginaAtual = end($url);
?>

    <nav class="navbar navbar-expand-lg fixed-top gradiente-navbar p-0">
        <div class="container-fluid">
            <a class="navbar-brand p-0" href="../">
                <img src="../2023/imagens/logoNav.png" alt="Logo" class="img-fluid" style="height: 100px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler"
                aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="nav nav-tabs justify-content-between w-100">

                    <?php
                foreach ($paginas as $pagina) {
                    ?>
                    <li class="nav-item text-center">
                        <a class="nav-link-personalizado nav-link <?php if ($pagina[0] == $paginaAtual)
                            echo "active";
                        else
                            echo "text-white"; ?>" aria-current="page" href="<?= $pagina[0] ?>">
                            <?= $pagina[1] ?>
                        </a>
                    </li>
                    <?php
                }
                ?>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container text-center principal pt-3">

        <?php
          if (isset($_GET['ano'])):
            $ano = $_GET['ano'];
            $midias = $controller->getMidiaPorAno($ano);
        ?>

        <div id="carouselExampleDark" class="carousel carousel-dark slide overflow-hidden" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <?php
                  for ($i = 0; $i < sizeof($midias); $i++):
                    if($i == 0):
                ?>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?= $i ?>" class="active"
                    aria-current="true" aria-label="<?php $i ?>"></button>
                <?php
                    else:
                ?>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?= $i ?>"
                    aria-label="<?php $i ?>"></button>
                <?php
                    endif;
                  endfor;
                ?>
            </div>
            <div class="carousel-inner">
                <?php
                  $primeiro= true;
                foreach ($midias as $midia):
                  if($primeiro):
              ?>
                <div class="carousel-item active">
                    <img src="<?= $ano . DS . $midia->getLink()?>" class="d-block w-100 img-carousel"
                        alt="Foto do evento <?= $midia->getIdMidia()?>">
                    <div class="carousel-caption d-none d-md-block">
                        <p><?= $midia->getTitulo()?></p>
                    </div>
                </div>
                <?php
                $primeiro= false;  
                else:
              ?>
                <div class="carousel-item">
                    <img src="<?= $ano . DS . $midia->getLink()?>" class="d-block  w-100 img-carousel"
                        alt="Foto do evento <?= $midia->getIdMidia()?>">
                    <div class="carousel-caption d-none d-md-block">
                        <p><?= $midia->getTitulo()?></p>
                    </div>
                </div>
                <?php
                  endif;
                endforeach;
              ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <?php
    else:
      ?>
        <div class="row align-items-center">
            <?php
      $anos = $controller->getAnosMidia();
      $quantidadeEdicoes = sizeof($anos);
      $porcentagem = 1 / $quantidadeEdicoes;
      $opacidade = $porcentagem;
      foreach ($anos as $ano):

        ?>
            <div class="col-12 col-sm-6 col-md-3 py-2">
                <a href="?ano=<?= $ano ?>" style="opacity:<?= $opacidade ?>"
                    class="mx-4 fs-2 btn rounded-4 botao-anais mx-10 w-45 h-45 text-center py-3 p-5">Fotos
                    <?= $ano ?>
                </a>
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
    <?php include_once LIB_INCLUDES_2023 . DS . 'rodape.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="../2023/bibliotecas/bootstrap-5.3.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>