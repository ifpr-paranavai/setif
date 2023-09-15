<?php
require_once 'admin/includes/init.php';
include_once LIB_CONTROLLER . DS . 'IndexController.class.php';

$controller = new IndexController();
$dados = $controller->getDadosPaginaInstitucional(2023);
?>



<footer class="footer py-3 bg-success text-white">
    <div class="d-flex flex-row my-4 justify-content-center">
        <i class="bi bi-person-fill d-block" style="font-size: 200%;">Contatos</i>
    </div>
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item">
            <a href="#" class="nav-link px-2 text-white">
                <i class="bi bi-envelope-at-fill" style="font-size: 150%;"></i>
                <?= $dados->getEmail() ?>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link px-2 text-white">
                <i class="bi bi-telephone-fill ms-2" style="font-size: 150%;"></i>
                <?= $dados->getTelefone() ?>
            </a>
        </li>
    </ul>

    <p class="text-center">© SETIF 2023 - Desenvolvido por Giovanna Bernadelli e Maria Eduarda F. Bruning
    </p>
</footer>