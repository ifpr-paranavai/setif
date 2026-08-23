<?php
session_start();

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('SITE_ROOT', ROOT . DS . 'setif');

$evento = [
    'titulo' => 'SETIF 2026',
    'subtitulo' => 'Semana de Tecnologia da Informação do IFPR Campus Paranavaí',
    'slogan' => 'Organizada pelos Cursos de Engenharia de Software e Técnico em Informática',
    'data' => 'De 3 a 7 de novembro de 2026',
    'local' => 'IFPR Campus Paranavaí',
    'endereco' => 'Av. José Felipe Tequinha, 1400 - Jardim das Nações, Paranavaí - PR',
    'contatos' => [
        'eng-soft' => 'es.paranavai@ifpr.edu.br',
        'ti-info' => 'ti.info.paranavai@ifpr.edu.br',
        'telefone' => '(44) 3482-0110'
    ],
    'links' => [
        'atual' => 'https://tecnoif.com.br/setif/',
        'anais' => 'https://tecnoif.com.br/setif/anais/',
        'ed_2025' => 'https://tecnoif.com.br/setif/2025/',
        'ed_2024' => 'https://tecnoif.com.br/setif/2024/',
        'ed_2023' => 'https://tecnoif.com.br/setif/2023/',
        'equipe_editorial' => 'https://tecnoif.com.br/periodicos/index.php/setif/about/editorialTeam',
        'submissoes' => 'https://tecnoif.com.br/periodicos/index.php/setif/about/submissions'
    ]
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $evento['titulo']; ?> - <?php echo $evento['subtitulo']; ?></title>
  
  <link rel="icon" type="image/png" sizes="32x32" href="img/logo-setif.png">
  <link rel="shortcut icon" href="img/logo-setif.png" type="image/x-icon">
  <link rel="apple-touch-icon" href="img/logo-setif.png">

  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $evento['titulo']; ?> - IFPR Campus Paranavaí">
  <meta property="og:description" content="<?php echo $evento['subtitulo']; ?>. <?php echo $evento['data']; ?>. Inscreva-se gratuitamente!">
  <meta property="og:image" content="<?php echo $evento['links']['atual']; ?>img/logo-setif.png">
  <meta property="og:url" content="<?php echo $evento['links']['atual']; ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/lucide@latest"></script>

  <style>
    :root {
      --bg-base: #060a0d;              
      --bg-section-alt: #0a110e;       
      
      --bg-card: rgba(10, 26, 20, 0.80); 
      --bg-card-hover: rgba(15, 38, 28, 0.92);
      
      --ifpr-green: #00a651;       
      --ifpr-green-dark: #005c28;  
      --ifpr-red: #e30613;         
      
      --logo-blue: #0088ff;        
      --logo-purple: #a800ff;      
      --logo-cyan: #00e5ff;        
      --logo-green-neon: #00ff88;  
      
      --glow-green: rgba(0, 166, 81, 0.25);
      --glow-blue: rgba(0, 136, 255, 0.20);
      --glow-purple: rgba(168, 0, 255, 0.20);
      
      --text-main: #f8fafc;            
      --text-muted: #94a3b8;          
      --border-color: rgba(255, 255, 255, 0.10);
      --border-accent: rgba(0, 166, 81, 0.35); 
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Plus Jakarta Sans', sans-serif;
      scroll-behavior: smooth;
    }

    body {
      background-color: var(--bg-base);
      color: var(--text-main);
      overflow-x: hidden;
      position: relative;
    }

    #cyber-canvas {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      z-index: -1;
      pointer-events: none;
    }

    header {
      position: fixed;
      top: 0;
      width: 100%;
      background: rgba(6, 10, 13, 0.88);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border-bottom: 1px solid var(--border-color);
      z-index: 100;
      padding: 0.8rem 6%;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo-area {
      display: flex;
      align-items: center;
    }

    .logo-img-ifpr {
      height: 80px;
      width: auto;
      object-fit: contain;
      filter: drop-shadow(0 2px 8px rgba(0, 0, 0, 0.4));
      transition: transform 0.3s ease, filter 0.3s ease;
    }

    .logo-img-ifpr:hover {
      transform: scale(1.03);
      filter: drop-shadow(0 0 12px rgba(0, 255, 136, 0.3));
    }

    nav ul {
      display: flex;
      list-style: none;
      gap: 0.9rem;
    }

    nav a {
      display: inline-block;
      color: #ffffff;
      text-decoration: none;
      font-size: 0.92rem;
      font-weight: 600;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      background: rgba(255, 255, 255, 0.05);
      padding: 8px 20px;
      border-radius: 50px;
      border: 2px solid #ffffff; 
      backdrop-filter: blur(8px);
      box-shadow: 0 0 12px rgba(255, 255, 255, 0.1);
    }

    nav a:hover {
      color: #060a0d;
      background: var(--ifpr-green);
      border-color: var(--ifpr-green);
      transform: translateY(-2px);
      box-shadow: 0 0 20px rgba(0, 166, 81, 0.5);
    }

    .mobile-menu-btn {
      display: none;
      background: transparent;
      border: none;
      color: #ffffff;
      cursor: pointer;
      padding: 8px;
      z-index: 101;
      transition: color 0.3s ease;
    }

    .mobile-menu-btn:hover {
      color: var(--logo-green-neon);
    }

    .hero {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 160px 20px 80px;
    }

    .hero-card {
      background: var(--bg-card);
      border: 1px solid var(--border-accent);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      padding: 3.5rem 2.5rem;
      border-radius: 24px;
      max-width: 840px;
      box-shadow: 0 30px 60px rgba(0, 0, 0, 0.6), 0 0 40px var(--glow-green);
      position: relative;
      overflow: hidden;
    }

    .hero h1 {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 3.8rem;
      font-weight: 700;
      background: linear-gradient(135deg, #ffffff 20%, var(--logo-green-neon) 60%, var(--logo-blue) 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 0.5rem;
      letter-spacing: -1.5px;
    }

    .hero-logo-setif {
      display: block;
      margin: 0 auto 1.5rem;
      height: 180px;
      width: auto;
      filter: drop-shadow(0 0 20px rgba(0, 166, 81, 0.35));
    }

    .hero .slogan-text {
      color: var(--logo-green-neon);
      font-size: 1.15rem;
      font-weight: 600;
      margin-bottom: 1.2rem;
      letter-spacing: 0.5px;
    }

    .hero p {
      color: var(--text-muted);
      font-size: 1.15rem;
      margin-bottom: 2rem;
      line-height: 1.6;
    }

    .date-badge {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: rgba(0, 166, 81, 0.12);
      color: var(--logo-green-neon);
      border: 1px solid rgba(0, 255, 136, 0.3);
      padding: 8px 22px;
      border-radius: 50px;
      font-size: 0.95rem;
      font-weight: 600;
      margin-bottom: 1.8rem;
      box-shadow: 0 0 20px rgba(0, 166, 81, 0.2);
    }

    .date-badge i {
      color: var(--ifpr-red);
      transition: transform 0.3s ease;
    }
    
    .date-badge:hover i {
      transform: scale(1.3) rotate(-10deg);
    }

    .countdown-container {
      display: flex;
      justify-content: center;
      gap: 16px;
      margin: 1.5rem 0 2.5rem;
    }

    .countdown-box {
      background: rgba(0, 0, 0, 0.5);
      border: 1px solid var(--border-accent);
      padding: 14px 20px;
      border-radius: 16px;
      min-width: 85px;
    }

    .countdown-value {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 2rem;
      font-weight: 700;
      color: var(--logo-green-neon);
      display: block;
      text-shadow: 0 0 12px rgba(0, 255, 136, 0.5);
    }

    .countdown-label {
      font-size: 0.75rem;
      color: var(--text-muted);
      text-transform: uppercase;
      letter-spacing: 1.5px;
      font-weight: 600;
    }

    .btn-group {
      display: flex;
      gap: 16px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .btn-primary {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      background: linear-gradient(135deg, var(--ifpr-green) 0%, var(--logo-blue) 100%);
      color: #ffffff;
      padding: 16px 32px;
      border-radius: 14px;
      font-weight: 700;
      font-size: 1rem;
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: 0 8px 25px rgba(0, 166, 81, 0.35);
    }

    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 35px rgba(0, 255, 136, 0.45);
    }

    .btn-primary i, .btn-secondary i {
      transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .btn-primary:hover i {
      transform: scale(1.25) rotate(-8deg);
    }

    .btn-secondary {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid var(--border-color);
      color: var(--text-main);
      padding: 16px 32px;
      border-radius: 14px;
      font-weight: 600;
      font-size: 1rem;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .btn-secondary:hover {
      background: rgba(255, 255, 255, 0.12);
      border-color: var(--logo-cyan);
      transform: translateY(-3px);
    }

    .btn-secondary:hover i {
      transform: scale(1.2) translateY(-2px);
    }

    .section-wrapper {
      position: relative;
    }

    .section-wrapper:nth-child(even) {
      background-color: var(--bg-section-alt);
    }

    .section-container {
      max-width: 1140px;
      margin: 0 auto;
      padding: 100px 20px;
    }

    .section-title {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 3rem;
      text-align: center;
      position: relative;
      color: #ffffff;
    }

    .section-title::after {
      content: '';
      display: block;
      width: 70px;
      height: 4px;
      background: linear-gradient(90deg, var(--ifpr-green), var(--logo-blue), var(--logo-purple));
      margin: 12px auto 0;
      border-radius: 2px;
    }

    .grid-3 {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(310px, 1fr));
      gap: 24px;
    }

    .grid-4 {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
      gap: 24px;
    }

    .card {
      background: var(--bg-card);
      border: 1px solid var(--border-color);
      border-radius: 20px;
      padding: 2.2rem;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      backdrop-filter: blur(12px);
      perspective: 800px;
    }

    .card:hover {
      background: var(--bg-card-hover);
      transform: translateY(-6px);
      border-color: var(--ifpr-green);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5), 0 0 25px var(--glow-green);
    }

    .card-icon {
      width: 60px;
      height: 60px;
      background: rgba(0, 166, 81, 0.15);
      color: var(--logo-green-neon);
      border-radius: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 1.4rem;
      border: 1px solid rgba(0, 255, 136, 0.3);
      position: relative;
      cursor: pointer;
      will-change: transform;
      transition: transform 0.15s cubic-bezier(0.2, 0, 0.2, 1), background 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 0 15px rgba(0, 166, 81, 0.2);
    }

    .card-icon svg, .card-icon i {
      width: 28px;
      height: 28px;
      transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), color 0.3s ease;
      pointer-events: none;
    }

    .card:hover .card-icon, .card-icon:hover {
      background: rgba(0, 255, 136, 0.25);
      color: #ffffff;
      border-color: var(--logo-green-neon);
      box-shadow: 0 0 30px rgba(0, 255, 136, 0.6), 0 0 12px rgba(0, 136, 255, 0.4);
    }

    .card:hover .card-icon svg, .card:hover .card-icon i {
      color: #ffffff;
      transform: scale(1.15) rotate(5deg);
    }

    .card h3 {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 1.35rem;
      margin-bottom: 0.8rem;
      color: #ffffff;
    }

    .card p {
      color: var(--text-muted);
      font-size: 0.98rem;
      line-height: 1.6;
    }

    .location-card {
      background: var(--bg-card);
      border: 1px solid var(--border-color);
      border-radius: 24px;
      padding: 3rem;
      text-align: center;
      backdrop-filter: blur(12px);
    }

    .map-frame {
      width: 100%;
      height: 380px;
      border: none;
      border-radius: 16px;
      margin: 2rem 0;
    }

    .contact-cards-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      margin-top: 2rem;
      width: 100%;
      perspective: 1000px;
    }

    .contact-card {
      position: relative;
      background: rgba(12, 19, 26, 0.85);
      border: 1px solid rgba(255, 255, 255, 0.08);
      border-radius: 20px;
      padding: 36px 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      transition: transform 0.4s cubic-bezier(0.25, 1, 0.5, 1), box-shadow 0.4s ease, background 0.3s ease;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
      overflow: hidden;
      z-index: 1;
    }

    .contact-card::before {
      content: '';
      position: absolute;
      inset: 0;
      border-radius: 20px;
      padding: 2px;
      background: radial-gradient(
        220px circle at var(--mouse-x, 50%) var(--mouse-y, 50%),
        hsl(var(--hue, 160), 100%, 50%),
        hsl(calc(var(--hue, 160) + 90), 100%, 50%),
        transparent 70%
      );
      -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
      -webkit-mask-composite: xor;
      mask-composite: exclude;
      opacity: 0;
      transition: opacity 0.35s ease;
      pointer-events: none;
      z-index: 2;
    }

    .contact-card:hover {
      transform: translateY(-6px);
      background: rgba(16, 26, 36, 0.95);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6), 
                  0 0 25px hsl(var(--hue, 160), 100%, 50%, 0.25);
    }

    .contact-card:hover::before {
      opacity: 1;
    }

    .icon-spin-wrapper {
      perspective: 800px;
      margin-bottom: 20px;
    }

    .icon-spin-circle {
      width: 68px;
      height: 68px;
      border-radius: 50%;
      background: rgba(6, 12, 18, 0.85);
      border: 1px solid rgba(0, 255, 136, 0.25);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--logo-green-neon);
      backdrop-filter: blur(10px);
      box-shadow: inset 0 0 15px rgba(0, 255, 136, 0.05),
                  0 4px 20px rgba(0, 0, 0, 0.5);
      transition: transform 0.15s cubic-bezier(0.2, 0, 0.2, 1), 
                  background 0.3s ease, 
                  border-color 0.3s ease, 
                  box-shadow 0.3s ease,
                  color 0.3s ease;
      will-change: transform;
      position: relative;
    }

    .contact-card:hover .icon-spin-circle {
      background: rgba(0, 166, 81, 0.22);
      border-color: var(--logo-green-neon);
      color: #ffffff;
      box-shadow: inset 0 0 20px rgba(0, 255, 136, 0.3),
                  0 0 25px rgba(0, 255, 136, 0.5),
                  0 0 12px rgba(0, 136, 255, 0.3);
    }

    .icon-spin-circle i, .icon-spin-circle svg {
      width: 28px;
      height: 28px;
      pointer-events: none;
      transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .contact-card:hover .icon-spin-circle i,
    .contact-card:hover .icon-spin-circle svg {
      transform: scale(1.12);
    }

    .contact-card-label {
      font-size: 0.78rem;
      text-transform: uppercase;
      letter-spacing: 1.2px;
      color: var(--text-muted);
      font-weight: 600;
      margin-bottom: 8px;
    }

    .contact-card-value {
      font-size: 1.05rem;
      font-weight: 700;
      color: #ffffff;
      word-break: break-all;
    }

    footer {
      border-top: 1px solid var(--border-color);
      padding: 3rem 0;
      text-align: center;
      color: var(--text-muted);
      font-size: 0.9rem;
      background: rgba(6, 10, 13, 0.96);
    }

    .footer-links {
      display: flex;
      justify-content: center;
      gap: 24px;
      margin-bottom: 1.2rem;
      flex-wrap: wrap;
    }

    .footer-links a {
      color: var(--text-muted);
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .footer-links a:hover {
      color: var(--logo-green-neon);
    }

    @media (max-width: 768px) {
      .mobile-menu-btn {
        display: flex;
        align-items: center;
        justify-content: center;
      }

      nav {
        position: fixed;
        top: 0;
        right: -100%;
        width: 80%;
        max-width: 300px;
        height: 100vh;
        background: rgba(6, 10, 13, 0.96);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border-left: 1px solid var(--border-accent);
        padding: 100px 24px 40px;
        transition: right 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        z-index: 99;
        box-shadow: -10px 0 30px rgba(0, 0, 0, 0.8);
      }

      nav.active {
        right: 0;
      }

      nav ul {
        flex-direction: column;
        gap: 1.2rem;
      }

      nav a {
        display: block;
        text-align: center;
        width: 100%;
        padding: 12px 20px;
        font-size: 1rem;
      }

      .hero h1 { font-size: 2.6rem; }
      .hero-card { padding: 2.2rem 1.5rem; }
      .countdown-box { min-width: 65px; padding: 10px 12px; }
      .countdown-value { font-size: 1.4rem; }
      .logo-img-ifpr { height: 60px; }
    }
  </style>
</head>
<body>

  <canvas id="cyber-canvas"></canvas>

  <header>
    <div class="logo-area">
      <img src="img/logo-ifpr.png" alt="Logo IFPR Campus Paranavaí" class="logo-img-ifpr">
    </div>

    <button class="mobile-menu-btn" id="mobile-menu-btn" aria-label="Abrir Menu">
      <i data-lucide="menu" id="menu-icon"></i>
    </button>

    <nav id="nav-menu">
      <ul>
        <li><a href="#inicio">Início</a></li>
        <li><a href="#sobre">Sobre</a></li>
        <li><a href="#programacao">Programação</a></li>
        <li><a href="#inscricoes">Inscrição</a></li>
        <li><a href="#local">Localização</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="inicio" class="hero">
      <div class="hero-card">
        <h1><?php echo $evento['titulo']; ?></h1>
        
        <img src="img/logo-setif.png" alt="Logo SETIF 2026" class="hero-logo-setif">
        
        <div class="slogan-text"><?php echo $evento['slogan']; ?></div>
        <p><?php echo $evento['subtitulo']; ?></p>
        
        <div class="date-badge">
          <i data-lucide="calendar"></i>
          <?php echo $evento['data']; ?>
        </div>

        <div class="countdown-container">
          <div class="countdown-box">
            <span class="countdown-value" id="days">00</span>
            <span class="countdown-label">Dias</span>
          </div>
          <div class="countdown-box">
            <span class="countdown-value" id="hours">00</span>
            <span class="countdown-label">Horas</span>
          </div>
          <div class="countdown-box">
            <span class="countdown-value" id="minutes">00</span>
            <span class="countdown-label">Min</span>
          </div>
          <div class="countdown-box">
            <span class="countdown-value" id="seconds">00</span>
            <span class="countdown-label">Seg</span>
          </div>
        </div>

        <div class="btn-group">
          <a href="#inscricoes" class="btn-primary">
            <i data-lucide="ticket"></i>
            Inscreva-se Gratuitamente
          </a>
          <a href="<?php echo $evento['links']['anais']; ?>" target="_blank" class="btn-secondary">
            <i data-lucide="file-text"></i>
            Acessar Anais
          </a>
        </div>
      </div>
    </section>

    <div class="section-wrapper">
      <section id="sobre" class="section-container">
        <h2 class="section-title">Sobre o Evento</h2>
        <div class="grid-3">
          <div class="card">
            <div class="card-icon"><i data-lucide="target"></i></div>
            <h3>Missão</h3>
            <p>Promover o conhecimento e a troca de experiências na área de Tecnologia da Informação, conectando estudantes, profissionais e pesquisadores.</p>
          </div>
          <div class="card">
            <div class="card-icon"><i data-lucide="lightbulb"></i></div>
            <h3>Inovação</h3>
            <p>Apresentar os mais recentes trabalhos e projetos desenvolvidos no âmbito dos cursos de Engenharia de Software e Técnico de Informática do IFPR - Campus Paranavaí e região.</p>
          </div>
          <div class="card">
            <div class="card-icon"><i data-lucide="users"></i></div>
            <h3>Networking</h3>
            <p>Criar oportunidades de conexão entre a comunidade acadêmica e o mercado de trabalho, fortalecendo parcerias e colaborações do setor tecnológico.</p>
          </div>
        </div>
      </section>
    </div>

    <div class="section-wrapper">
      <section id="programacao" class="section-container">
        <h2 class="section-title">Programação</h2>
        <div class="grid-4">
          <div class="card">
            <div class="card-icon"><i data-lucide="laptop"></i></div>
            <h3>Minicursos</h3>
            <p>Aprofunde seus conhecimentos em temas específicos da TI com instrutores especializados.</p>
          </div>
          <div class="card">
            <div class="card-icon"><i data-lucide="presentation"></i></div>
            <h3>Palestras</h3>
            <p>Conecte-se com especialistas renomados e fique por dentro das novidades do mercado.</p>
          </div>
          <div class="card">
            <div class="card-icon"><i data-lucide="trophy"></i></div>
            <h3>Competições</h3>
            <p>Teste suas habilidades em desafios de programação, hackathons e outras competições técnicas.</p>
          </div>
          <div class="card">
            <div class="card-icon"><i data-lucide="layers"></i></div>
            <h3>Mostra de Trabalhos</h3>
            <p>Apresente seus projetos e pesquisas para a comunidade acadêmica e profissional.</p>
          </div>
        </div>
      </section>
    </div>

    <div class="section-wrapper">
      <section id="inscricoes" class="section-container">
        <h2 class="section-title">Inscrição</h2>
        <div class="card" style="max-width: 680px; margin: 0 auto; text-align: center;">
          <div class="card-icon" style="margin: 0 auto 1.5rem;"><i data-lucide="external-link"></i></div>
          <h3 style="font-size: 1.6rem; margin-bottom: 1rem;">Garanta sua vaga na SETIF 2026</h3>
          <p style="color: var(--text-muted); margin-bottom: 2rem; line-height: 1.6;">
            As inscrições são gratuitas e abertas a toda a comunidade. Clique no botão abaixo para acessar o formulário oficial de inscrição.
          </p>
          <a href="processa.php" target="_blank" class="btn-primary" style="padding: 18px 36px; font-size: 1.1rem;">
            <i data-lucide="file-input"></i>
            Fazer Inscrição Agora
          </a>
        </div>
      </section>
    </div>

    <div class="section-wrapper">
      <section id="local" class="section-container">
        <h2 class="section-title">Local do Evento</h2>
        <div class="location-card">
          <h3 style="font-family: 'Space Grotesk', sans-serif; font-size: 1.5rem; color: #ffffff;"><?php echo $evento['local']; ?></h3>
          <p style="color: var(--text-muted); margin-top: 5px;"><?php echo $evento['endereco']; ?></p>
          
          <iframe 
            class="map-frame" 
            src="https://maps.google.com/maps?q=Instituto+Federal+do+Paran%C3%A1+-+Campus+Paranava%C3%AD,+Av.+Jos%C3%A9+Felipe+Tequinha,+1400+-+Jardim+das+Na%C3%A7%C3%B5es,+Paranava%C3%AD+-+PR&t=&z=16&ie=UTF8&iwloc=&output=embed" 
            allowfullscreen="" 
            loading="lazy">
          </iframe>

          <div class="contact-cards-grid">
            <a href="mailto:<?php echo $evento['contatos']['eng-soft']; ?>" class="contact-card">
              <div class="icon-spin-wrapper">
                <div class="icon-spin-circle">
                  <i data-lucide="mail"></i>
                </div>
              </div>
              <span class="contact-card-label">ENGENHARIA DE SOFTWARE</span>
              <span class="contact-card-value"><?php echo $evento['contatos']['eng-soft']; ?></span>
            </a>

            <a href="mailto:<?php echo $evento['contatos']['ti-info']; ?>" class="contact-card">
              <div class="icon-spin-wrapper">
                <div class="icon-spin-circle">
                  <i data-lucide="mail"></i>
                </div>
              </div>
              <span class="contact-card-label">TÉCNICO EM INFORMÁTICA</span>
              <span class="contact-card-value"><?php echo $evento['contatos']['ti-info']; ?></span>
            </a>

            <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $evento['contatos']['telefone']); ?>" class="contact-card">
              <div class="icon-spin-wrapper">
                <div class="icon-spin-circle">
                  <i data-lucide="phone"></i>
                </div>
              </div>
              <span class="contact-card-label">TELEFONE</span>
              <span class="contact-card-value"><?php echo $evento['contatos']['telefone']; ?></span>
            </a>
          </div>

        </div>
      </section>
    </div>
  </main>

  <footer>
    <div class="footer-links">
      <a href="<?php echo $evento['links']['equipe_editorial']; ?>" target="_blank">Corpo Editorial</a> | 
      <a href="<?php echo $evento['links']['submissoes']; ?>" target="_blank">Normas de Submissão</a> | 
      <a href="<?php echo $evento['links']['anais']; ?>" target="_blank">Anais</a>
    </div>
    <p>&copy; <?php echo date('Y'); ?> <?php echo $evento['titulo']; ?> - Semana da Tecnologia da Informação | IFPR Campus Paranavaí</p>
  </footer>

  <script>
    lucide.createIcons();

    const mobileBtn = document.getElementById('mobile-menu-btn');
    const navMenu = document.getElementById('nav-menu');
    const menuIcon = document.getElementById('menu-icon');

    if (mobileBtn && navMenu) {
      mobileBtn.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        const isActive = navMenu.classList.contains('active');
        
        if (isActive) {
          menuIcon.setAttribute('data-lucide', 'x');
        } else {
          menuIcon.setAttribute('data-lucide', 'menu');
        }
        lucide.createIcons();
      });

      navMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
          navMenu.classList.remove('active');
          menuIcon.setAttribute('data-lucide', 'menu');
          lucide.createIcons();
        });
      });
    }

    document.querySelectorAll('.card').forEach(card => {
      const icon = card.querySelector('.card-icon');
      if (!icon) return;

      card.addEventListener('mousemove', (e) => {
        const rect = icon.getBoundingClientRect();
        const deltaX = e.clientX - (rect.left + rect.width / 2);
        const deltaY = e.clientY - (rect.top + rect.height / 2);

        const moveX = Math.min(Math.max(deltaX * 0.18, -14), 14);
        const moveY = Math.min(Math.max(deltaY * 0.18, -14), 14);
        const rotate = Math.min(Math.max(deltaX * 0.08, -15), 15);

        icon.style.transform = `translate3d(${moveX}px, ${moveY}px, 0) rotate(${rotate}deg) scale(1.12)`;
      });

      card.addEventListener('mouseleave', () => {
        icon.style.transform = 'translate3d(0, 0, 0) rotate(0deg) scale(1)';
      });
    });

    document.querySelectorAll('.contact-card').forEach(card => {
      const icon = card.querySelector('.icon-spin-circle');

      card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        
        const mouseX = e.clientX - rect.left;
        const mouseY = e.clientY - rect.top;
        card.style.setProperty('--mouse-x', `${mouseX}px`);
        card.style.setProperty('--mouse-y', `${mouseY}px`);

        if (icon) {
          const iconRect = icon.getBoundingClientRect();
          const iconCenterX = iconRect.left + iconRect.width / 2;
          const iconCenterY = iconRect.top + iconRect.height / 2;

          const deltaX = e.clientX - iconCenterX;
          const deltaY = e.clientY - iconCenterY;

          let angleDeg = Math.atan2(deltaY, deltaX) * (180 / Math.PI);
          if (angleDeg < 0) angleDeg += 360;
          card.style.setProperty('--hue', `${angleDeg}`);

          const moveX = Math.min(Math.max(deltaX * 0.22, -18), 18);
          const moveY = Math.min(Math.max(deltaY * 0.22, -18), 18);
          const tiltX = (deltaY / rect.height) * -25;
          const tiltY = (deltaX / rect.width) * 25;

          icon.style.transform = `translate3d(${moveX}px, ${moveY}px, 15px) rotateX(${tiltX}deg) rotateY(${tiltY}deg) scale(1.15)`;
        }
      });

      card.addEventListener('mouseleave', () => {
        if (icon) {
          icon.style.transform = 'translate3d(0, 0, 0) rotateX(0deg) rotateY(0deg) scale(1)';
        }
      });
    });

    const targetDate = new Date("2026-11-03T08:00:00").getTime();

    function updateCountdown() {
      const now = new Date().getTime();
      const difference = targetDate - now;

      if (difference > 0) {
        const d = Math.floor(difference / (1000 * 60 * 60 * 24));
        const h = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const m = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
        const s = Math.floor((difference % (1000 * 60)) / 1000);

        document.getElementById('days').innerText = String(d).padStart(2, '0');
        document.getElementById('hours').innerText = String(h).padStart(2, '0');
        document.getElementById('minutes').innerText = String(m).padStart(2, '0');
        document.getElementById('seconds').innerText = String(s).padStart(2, '0');
      }
    }
    setInterval(updateCountdown, 1000);
    updateCountdown();

    const canvas = document.getElementById('cyber-canvas');
    const ctx = canvas.getContext('2d');

    let width, height;
    let hexes = [];
    let gears = [];
    let nodes = [];
    let step = 0;

    let mouse = { x: -1000, y: -1000 };

    window.addEventListener('mousemove', (e) => {
      mouse.x = e.clientX;
      mouse.y = e.clientY;
    });

    window.addEventListener('mouseout', () => {
      mouse.x = -1000;
      mouse.y = -1000;
    });

    function drawPoly(context, x, y, radius, sides, angle) {
      context.beginPath();
      for (let i = 0; i < sides; i++) {
        const a = angle + (i * 2 * Math.PI) / sides;
        const px = x + radius * Math.cos(a);
        const py = y + radius * Math.sin(a);
        if (i === 0) context.moveTo(px, py);
        else context.lineTo(px, py);
      }
      context.closePath();
    }

    function drawGear(context, x, y, radius, teeth, angle) {
      context.beginPath();
      const innerRad = radius * 0.72;
      const toothRad = radius * 1.05;
      const angleStep = (Math.PI * 2) / teeth;

      for (let i = 0; i < teeth; i++) {
        const a1 = angle + i * angleStep;
        const a2 = a1 + angleStep * 0.3;
        const a3 = a1 + angleStep * 0.7;
        const a4 = angle + (i + 1) * angleStep;

        if (i === 0) context.moveTo(x + innerRad * Math.cos(a1), y + innerRad * Math.sin(a1));
        else context.lineTo(x + innerRad * Math.cos(a1), y + innerRad * Math.sin(a1));

        context.lineTo(x + toothRad * Math.cos(a2), y + toothRad * Math.sin(a2));
        context.lineTo(x + toothRad * Math.cos(a3), y + toothRad * Math.sin(a3));
        context.lineTo(x + innerRad * Math.cos(a4), y + innerRad * Math.sin(a4));
      }
      context.closePath();

      context.moveTo(x + radius * 0.4, y);
      context.arc(x, y, radius * 0.4, 0, Math.PI * 2);
    }

    function initCanvas() {
      width = canvas.width = window.innerWidth;
      height = canvas.height = window.innerHeight;

      hexes = [];
      const numHex = Math.floor((width * height) / 45000);
      for (let i = 0; i < numHex; i++) {
        hexes.push({
          x: Math.random() * width,
          y: Math.random() * height,
          size: Math.random() * 25 + 15,
          speedY: -(Math.random() * 0.4 + 0.1),
          angle: Math.random() * Math.PI * 2,
          rotSpeed: (Math.random() - 0.5) * 0.008,
          alpha: Math.random() * 0.25 + 0.18
        });
      }

      gears = [];
      const numGears = Math.floor((width * height) / 60000);
      for (let i = 0; i < numGears; i++) {
        gears.push({
          x: Math.random() * width,
          y: Math.random() * height,
          size: Math.random() * 50 + 30,
          teeth: Math.floor(Math.random() * 6) * 2 + 8,
          speedY: -(Math.random() * 0.3 + 0.1),
          angle: Math.random() * Math.PI * 2,
          rotSpeed: (Math.random() - 0.5) * 0.005,
          alpha: Math.random() * 0.25 + 0.15
        });
      }

      nodes = [];
      const numNodes = Math.floor((width * height) / 25000);
      const colors = ['rgba(0, 229, 255,', 'rgba(0, 255, 102,', 'rgba(0, 136, 255,'];
      for (let i = 0; i < numNodes; i++) {
        const baseColor = colors[Math.floor(Math.random() * colors.length)];
        nodes.push({
          x: Math.random() * width,
          y: Math.random() * height,
          size: Math.random() * 2 + 1,
          speedX: (Math.random() - 0.5) * 0.4,
          speedY: -(Math.random() * 0.5 + 0.2),
          color: baseColor + ' 0.8)',
          alpha: Math.random() * 0.5 + 0.2
        });
      }
    }

    window.addEventListener('resize', initCanvas);
    initCanvas();

    function render() {
      ctx.clearRect(0, 0, width, height);
      step += 0.01;

      ctx.lineWidth = 2;
      hexes.forEach(hex => {
        hex.y += hex.speedY;
        hex.angle += hex.rotSpeed;
        if (hex.y < -hex.size) {
          hex.y = height + hex.size;
          hex.x = Math.random() * width;
        }
        ctx.strokeStyle = `rgba(168, 0, 255, ${hex.alpha})`;
        ctx.beginPath();
        drawPoly(ctx, hex.x, hex.y, hex.size, 6, hex.angle);
        ctx.stroke();
      });

      ctx.lineWidth = 1.5;
      gears.forEach(gear => {
        gear.y += gear.speedY;
        gear.angle += gear.rotSpeed;
        if (gear.y < -gear.size) {
          gear.y = height + gear.size;
          gear.x = Math.random() * width;
        }
        ctx.strokeStyle = `rgba(0, 136, 255, ${gear.alpha})`;
        drawGear(ctx, gear.x, gear.y, gear.size, gear.teeth, gear.angle);
        ctx.stroke();
      });

      const gridSize = 65;
      ctx.lineWidth = 1;

      for (let x = 0; x < width; x += gridSize) {
        for (let y = 0; y < height; y += gridSize) {
          let dx = mouse.x - x;
          let dy = mouse.y - y;
          let dist = Math.sqrt(dx * dx + dy * dy);
          let maxDist = 200;

          let offset = Math.sin(step + (x + y) * 0.005) * 3;
          if (dist < maxDist) {
            let factor = (1 - dist / maxDist) * 12;
            offset -= factor;
          }

          ctx.beginPath();
          ctx.arc(x, y + offset, 1.1, 0, Math.PI * 2);
          let pointAlpha = dist < maxDist ? (1 - dist / maxDist) * 0.7 + 0.12 : 0.09;
          ctx.fillStyle = `rgba(0, 136, 255, ${pointAlpha})`;
          ctx.fill();

          if (dist < maxDist * 0.9) {
            ctx.lineWidth = 0.5;
            ctx.strokeStyle = `rgba(0, 229, 255, ${pointAlpha * 0.4})`;
            const neighbors = [[gridSize, 0], [0, gridSize], [gridSize, gridSize], [-gridSize, gridSize]];
            neighbors.forEach(neighbor => {
              const nx = x + neighbor[0];
              const ny = y + neighbor[1];
              if (nx < width && ny < height && nx > 0) {
                ctx.beginPath();
                ctx.moveTo(x, y + offset);
                ctx.lineTo(nx, ny + Math.sin(step + (nx + ny) * 0.005) * 3);
                ctx.stroke();
              }
            });
          }
        }
      }

      nodes.forEach(node => {
        node.y += node.speedY;
        node.x += node.speedX;

        if (node.y < 0) {
          node.y = height;
          node.x = Math.random() * width;
        }

        ctx.beginPath();
        ctx.arc(node.x, node.y, node.size, 0, Math.PI * 2);
        ctx.fillStyle = node.color;
        ctx.globalAlpha = node.alpha;
        ctx.shadowBlur = 10;
        ctx.shadowColor = node.color;
        ctx.fill();
        ctx.shadowBlur = 0;
        ctx.globalAlpha = 1;
      });

      requestAnimationFrame(render);
    }

    render();
  </script>
</body>
</html>