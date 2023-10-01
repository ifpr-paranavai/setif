<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/setif/init.php';
    include_once LIB_CONTROLLER . DS . 'AnaisController.class.php';
    $controller = new AnaisController();
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Anais do Evento</title>
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
                <a href="?ano=<?= $ano ?>" style="opacity:<?= $opacidade ?>"
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

    <?php include_once LIB_INCLUDES_2023 . DS . 'rodape.php' ?>
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