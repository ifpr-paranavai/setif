<?php
$paginas = array(
    array("index.php", "Apresentação"),
    array("normas_publicacao.php", "Normas de Publicação"),
    array("anaisEventos.php", "Anais do Evento"),
    array("corpoEditorial.php", "Corpo Editorial"),
    array("fotos.php", "Fotos")
);
$url = explode("/", $_SERVER['REQUEST_URI']);
$paginaAtual = $url[array_key_last($url)];
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary gradiente-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./imagens/logoNav.png" alt="Logo" width="100" class="d-inline-block align-text-top">
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
                            echo "text-white"; ?>" aria-current="page" href="<?= $pagina[0] ?>"><?= $pagina[1] ?></a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>