<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $evento['titulo']; ?> - <?php echo $evento['subtitulo']; ?></title>

<!-- Canonical -->
<link rel="canonical" href="<?php echo $evento['links']['atual']; ?>" />

<!-- Idioma / país -->
<meta http-equiv="Content-Language" content="pt-BR" />
<meta property="og:locale" content="pt_BR" />

<!-- Meta description -->
<meta name="description"
    content="A <?php echo $evento['titulo']; ?> acontece <?php echo lcfirst($evento['data']); ?> no IFPR Campus Paranavaí. <?php echo $evento['subtitulo']; ?>, com palestras, minicursos e mostra de trabalhos. Evento gratuito!" />

<!-- Robots -->
<meta name="robots" content="index, follow" />

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $evento['titulo']; ?> - IFPR Campus Paranavaí">
<meta property="og:description" content="<?php echo $evento['subtitulo']; ?>. <?php echo $evento['data']; ?>. Inscreva-se gratuitamente!">
<meta property="og:image" content="<?php echo $evento['links']['atual']; ?>2026/assets/images/logo-setif.png">
<meta property="og:url" content="<?php echo $evento['links']['atual']; ?>">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="<?php echo $evento['titulo']; ?>" />
<meta name="twitter:description" content="<?php echo $evento['subtitulo']; ?>. <?php echo $evento['data']; ?>." />

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="32x32" href="2026/assets/images/logo-setif.png">
<link rel="shortcut icon" href="2026/assets/images/logo-setif.png" type="image/x-icon">
<link rel="apple-touch-icon" href="2026/assets/images/logo-setif.png">

<!-- Bootstrap CSS -->
<link href="2024/bibliotecas/bootstrap-5.3.0/css/bootstrap.min.css" rel="stylesheet" />

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="2024/bibliotecas/bootstrap-icons-1.10.5/font/bootstrap-icons.css" />

<!-- Fontes personalizadas -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">

<!-- Ícones -->
<script src="https://unpkg.com/lucide@0.462.0"></script>

<!-- CSS Customizado -->
<link rel="stylesheet" href="2026/assets/css/navigation.css" />
<link rel="stylesheet" href="2026/assets/css/main.css" />
<link rel="stylesheet" href="2026/assets/css/footer.css" />
