<?php
/**
 * Metadados do <head> das páginas da SETIF 2026.
 *
 * Cada página pode definir, antes do include:
 *   $tituloPagina    - nome da seção (ex.: 'Programação')
 *   $descricaoPagina - meta description específica
 */
$tituloPagina    = $tituloPagina    ?? '';
$descricaoPagina = $descricaoPagina ?? $evento['titulo'] . ' acontece ' . lcfirst($evento['data'])
    . ' no ' . $evento['local'] . '. ' . $evento['subtitulo']
    . ', com palestras, mostra de trabalhos e minicursos. Evento gratuito!';

$tituloCompleto = $tituloPagina !== ''
    ? $tituloPagina . ' | ' . $evento['titulo']
    : $evento['titulo'] . ' - ' . $evento['subtitulo'];

// Esta edição se referencia pelo próprio 'ed_2026', e não por 'atual': assim
// os caminhos continuam corretos depois que a SETIF 2026 virar edição passada.
$urlEdicao = $evento['links']['ed_2026'];

// URL canônica da página atual (a home não recebe sufixo)
$rotas = [
    'programacao' => 'programacao',
    'publicacao'  => 'publicacao',
    'sobre'       => 'sobre',
    'edicoes'     => 'edicoes',
];
$urlPagina = $urlEdicao . ($rotas[$paginaAtual ?? 'inicio'] ?? '');

// Canonical e Open Graph exigem URL absoluta: buscadores e redes sociais não
// resolvem caminho relativo ao raspar a página.
$urlAbsoluta = SITE_URL . $urlPagina;
$imagemSocial = SITE_URL . $urlEdicao . 'assets/images/logo-setif.png';

// Escapados uma única vez para uso em <title> e nas metatags
$tituloCompleto  = htmlspecialchars($tituloCompleto, ENT_QUOTES, 'UTF-8');
$descricaoPagina = htmlspecialchars($descricaoPagina, ENT_QUOTES, 'UTF-8');
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $tituloCompleto; ?></title>

<!-- Canonical -->
<link rel="canonical" href="<?php echo $urlAbsoluta; ?>" />

<!-- Idioma / país -->
<meta http-equiv="Content-Language" content="pt-BR" />
<meta property="og:locale" content="pt_BR" />

<!-- Meta description -->
<meta name="description" content="<?php echo $descricaoPagina; ?>" />

<!-- Robots -->
<meta name="robots" content="index, follow" />

<!-- Tema do navegador (casa com a barra escura do topo) -->
<meta name="theme-color" content="#14120f" />

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $tituloCompleto; ?>">
<meta property="og:description" content="<?php echo $evento['subtitulo']; ?>. <?php echo $evento['data']; ?>. Inscreva-se gratuitamente!">
<meta property="og:image" content="<?php echo $imagemSocial; ?>">
<meta property="og:url" content="<?php echo $urlAbsoluta; ?>">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="<?php echo $tituloCompleto; ?>" />
<meta name="twitter:description" content="<?php echo $evento['subtitulo']; ?>. <?php echo $evento['data']; ?>." />
<meta name="twitter:image" content="<?php echo $imagemSocial; ?>" />

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $urlEdicao; ?>assets/images/logo-setif.png">
<link rel="shortcut icon" href="<?php echo $urlEdicao; ?>assets/images/logo-setif.png" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php echo $urlEdicao; ?>assets/images/logo-setif.png">

<!-- Bootstrap CSS (biblioteca compartilhada, mantida na pasta de 2024) -->
<link href="<?php echo BASE_URL; ?>2024/bibliotecas/bootstrap-5.3.0/css/bootstrap.min.css" rel="stylesheet" />

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="<?php echo BASE_URL; ?>2024/bibliotecas/bootstrap-icons-1.10.5/font/bootstrap-icons.css" />

<!-- Fontes personalizadas -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@500;700;900&family=Space+Grotesk:wght@500;700&family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- CSS Customizado -->
<link rel="stylesheet" href="<?php echo $urlEdicao; ?>assets/css/main.css" />
<link rel="stylesheet" href="<?php echo $urlEdicao; ?>assets/css/navigation.css" />
<link rel="stylesheet" href="<?php echo $urlEdicao; ?>assets/css/footer.css" />
