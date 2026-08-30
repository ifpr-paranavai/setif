<?php
/**
 * Barra de navegação da SETIF 2026.
 * A página ativa é informada pela variável $paginaAtual definida antes do include.
 */
$paginaAtual = $paginaAtual ?? 'inicio';

$abas = [
    'inicio'      => ['rotulo' => 'Início',        'url' => BASE_URL],
    'programacao' => ['rotulo' => 'Programação',   'url' => BASE_URL . 'programacao'],
    'publicacao'  => ['rotulo' => 'Publicação',    'url' => BASE_URL . 'publicacao'],
    'sobre'       => ['rotulo' => 'Sobre & Local', 'url' => BASE_URL . 'sobre'],
    'edicoes'     => ['rotulo' => 'Edições',       'url' => BASE_URL . 'edicoes'],
];
?>
<header class="site-header">
  <nav class="navbar navbar-expand-lg site-navbar" aria-label="Navegação principal">
    <div class="container d-flex flex-wrap align-items-center justify-content-between">

      <a class="navbar-brand brand-setif" href="<?php echo BASE_URL; ?>">
        <span class="brand-mark" aria-hidden="true">S</span>
        <span class="brand-text">SETIF<span>.26</span></span>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Abrir menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-lg-auto">
          <?php foreach ($abas as $chave => $aba): ?>
            <li class="nav-item">
              <a class="nav-link<?php echo $paginaAtual === $chave ? ' active' : ''; ?>"
                 href="<?php echo $aba['url']; ?>"
                 <?php echo $paginaAtual === $chave ? 'aria-current="page"' : ''; ?>>
                <?php echo htmlspecialchars($aba['rotulo'], ENT_QUOTES, 'UTF-8'); ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>

        <a class="btn-nav-inscricao" href="<?php echo $evento['links']['inscricao']; ?>" target="_blank" rel="noopener">
          Inscreva-se
        </a>
      </div>

    </div>
  </nav>
</header>
