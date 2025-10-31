<?php
/**
 * Navigation - SETIF 2025
 * 
 * Barra de navegação dinâmica que muda conforme a página acessada
 * 
 * @author IFPR Paranavaí - Pablo Henrique
 * @version 1.0
 */

// Verifica se estamos em uma página do dropdown
$isDropdownPage = false;
$currentPage = basename($_SERVER['PHP_SELF']);
$dropdownPages = ['corpo_editorial.php', 'normas_submissao.php', 'mostra_trabalhos.php'];

if (in_array($currentPage, $dropdownPages)) {
    $isDropdownPage = true;
}
?>

<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="2025/assets/images/logo_if.png" alt="<?php echo $evento['titulo']; ?>">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Navbar padrão -->
                <li class="nav-item">
                    <a class="nav-link" href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#program">Programação</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#registration">Inscrições</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Mais
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item"
                                href="https://tecnoif.com.br/periodicos/index.php/setif/about/editorialTeam">Corpo
                                Editorial</a></li>
                        <li><a class="dropdown-item"
                                href="https://tecnoif.com.br/periodicos/index.php/setif/about/submissions">Normas de
                                Submissão</a></li>
						<li><a class="dropdown-item"
                                href="https://docs.google.com/document/d/e/2PACX-1vReH77PrmN4qAUkzpsZPyz-E0So39UlrRiK38ccHegb_EbDQGnzNxwi6AFONn1aSF0sYYWiKmJdhqK_/pub">Programação -
                                Mostra de Trabalhos</a></li>
                        <li><a class="dropdown-item" href="https://www.tecnoif.com.br/setif/anais/">Anais Anteriores</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://tecnoif.com.br/setif/2024">SETIF 2024</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>