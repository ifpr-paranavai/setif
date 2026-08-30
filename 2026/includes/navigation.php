<?php
/**
 * Barra de navegação da SETIF 2026.
 * A página ativa é informada pela variável $paginaAtual definida antes do include.
 */
$paginaAtual = $paginaAtual ?? 'inicio';

// Todas as rotas vivem dentro da pasta da edição (ver 'ed_2026' no init.php).
$urlEdicao = $evento['links']['ed_2026'];

$abas = [
    'inicio'      => ['rotulo' => 'Início',        'url' => $urlEdicao],
    'programacao' => ['rotulo' => 'Programação',   'url' => $urlEdicao . 'programacao'],
    'publicacao'  => ['rotulo' => 'Publicação',    'url' => $urlEdicao . 'publicacao'],
    'sobre'       => ['rotulo' => 'Sobre & Local', 'url' => $urlEdicao . 'sobre'],
    'edicoes'     => ['rotulo' => 'Edições',       'url' => $urlEdicao . 'edicoes'],
];

// Enquanto as inscrições não abrem, o link fica vazio: o botão continua sendo um
// link normal, só que apontando para '#'. Um href="" recarregaria a página.
$linkInscricao = $evento['links']['inscricao'] ?? '';
$temInscricao  = $linkInscricao !== '';
?>
<header class="site-header">
  <nav class="navbar navbar-expand-lg site-navbar" aria-label="Navegação principal">
    <div class="container d-flex flex-wrap align-items-center justify-content-between">

      <a class="navbar-brand brand-setif" href="<?php echo $urlEdicao; ?>">
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

        <a class="btn-nav-inscricao" href="<?php echo $temInscricao ? $linkInscricao : '#'; ?>"
           <?php echo $temInscricao ? 'target="_blank" rel="noopener"' : ''; ?>>
          <?php echo $temInscricao ? 'Inscreva-se' : 'Inscrições em breve'; ?>
        </a>
      </div>

    </div>
  </nav>
</header>
