<?php
session_start();

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('SITE_ROOT', ROOT . DS . 'setif');

$evento = [
    'titulo' => 'SETIF 2026',
    'subtitulo' => 'Semana de Tecnologia da Informação do IFPR Campus Paranavaí',
    'slogan' => 'Organizada pelos Cursos de Engenharia de Software',
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
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/lucide@latest"></script>

  <style>
    :root {
      --bg-dark: #0a0d12;
      --bg-card: rgba(18, 24, 38, 0.65);
      --bg-card-hover: rgba(26, 35, 56, 0.8);
      --primary-green: #00ff88;
      --primary-cyan: #00e5ff;
      --accent-glow: rgba(0, 255, 136, 0.15);
      --text-main: #f8fafc;
      --text-muted: #94a3b8;
      --border-color: rgba(255, 255, 255, 0.1);
      --border-glow: rgba(0, 255, 136, 0.3);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Plus Jakarta Sans', sans-serif;
      scroll-behavior: smooth;
    }

    body {
      background-color: var(--bg-dark);
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
      background: rgba(10, 13, 18, 0.75);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border-bottom: 1px solid var(--border-color);
      z-index: 100;
      padding: 1rem 6%;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo-area {
      display: flex;
      align-items: center;
      gap: 16px;
    }

    .logo-img {
      height: 40px;
      width: auto;
      object-fit: contain;
      filter: drop-shadow(0 0 8px rgba(0,255,136,0.2));
    }

    .logo-divider {
      width: 1px;
      height: 26px;
      background: var(--border-color);
    }

    nav ul {
      display: flex;
      list-style: none;
      gap: 2rem;
    }

    nav a {
      color: var(--text-muted);
      text-decoration: none;
      font-size: 0.95rem;
      font-weight: 600;
      transition: all 0.3s ease;
      position: relative;
    }

    nav a:hover {
      color: var(--primary-green);
      text-shadow: 0 0 10px rgba(0, 255, 136, 0.5);
    }

    .hero {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 140px 20px 80px;
    }

    .hero-card {
      background: var(--bg-card);
      border: 1px solid var(--border-color);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      padding: 3.5rem 2.5rem;
      border-radius: 24px;
      max-width: 820px;
      box-shadow: 0 30px 60px rgba(0, 0, 0, 0.6), inset 0 1px 0 rgba(255, 255, 255, 0.1);
      position: relative;
      overflow: hidden;
    }

    .hero-card::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(0, 255, 136, 0.05) 0%, transparent 60%);
      pointer-events: none;
    }

    .hero h1 {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 3.8rem;
      font-weight: 700;
      background: linear-gradient(135deg, #ffffff 30%, var(--primary-green) 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 0.5rem;
      letter-spacing: -1.5px;
    }

    .hero .slogan-text {
      color: var(--primary-cyan);
      font-size: 1.05rem;
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

    .countdown-container {
      display: flex;
      justify-content: center;
      gap: 16px;
      margin: 1.5rem 0 2.5rem;
    }

    .countdown-box {
      background: rgba(10, 13, 18, 0.6);
      border: 1px solid var(--border-color);
      padding: 14px 20px;
      border-radius: 16px;
      min-width: 85px;
      box-shadow: inset 0 2px 4px rgba(0,0,0,0.4);
    }

    .countdown-value {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 2rem;
      font-weight: 700;
      color: var(--primary-green);
      display: block;
      text-shadow: 0 0 12px rgba(0, 255, 136, 0.4);
    }

    .countdown-label {
      font-size: 0.75rem;
      color: var(--text-muted);
      text-transform: uppercase;
      letter-spacing: 1.5px;
      font-weight: 600;
    }

    .date-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(0, 255, 136, 0.08);
      color: var(--primary-green);
      border: 1px solid rgba(0, 255, 136, 0.25);
      padding: 8px 20px;
      border-radius: 50px;
      font-size: 0.95rem;
      font-weight: 600;
      margin-bottom: 1.5rem;
      box-shadow: 0 0 15px rgba(0, 255, 136, 0.1);
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
      background: linear-gradient(135deg, var(--primary-green) 0%, #00cc6a 100%);
      color: #050a08;
      padding: 16px 32px;
      border-radius: 14px;
      font-weight: 700;
      font-size: 1rem;
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: 0 8px 25px rgba(0, 255, 136, 0.3);
    }

    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 35px rgba(0, 255, 136, 0.5);
    }

    .btn-secondary {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: rgba(255, 255, 255, 0.04);
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
      background: rgba(255, 255, 255, 0.08);
      border-color: var(--primary-green);
      transform: translateY(-3px);
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
    }

    .section-title::after {
      content: '';
      display: block;
      width: 60px;
      height: 4px;
      background: linear-gradient(90deg, var(--primary-green), var(--primary-cyan));
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
    }

    .card:hover {
      background: var(--bg-card-hover);
      transform: translateY(-6px);
      border-color: var(--border-glow);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4), 0 0 20px var(--accent-glow);
    }

    .card-icon {
      width: 56px;
      height: 56px;
      background: rgba(0, 255, 136, 0.1);
      color: var(--primary-green);
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 1.4rem;
      border: 1px solid rgba(0, 255, 136, 0.2);
    }

    .card h3 {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 1.35rem;
      margin-bottom: 0.8rem;
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
      filter: saturate(0.9) opacity(0.9);
      transition: filter 0.3s ease;
    }

    .map-frame:hover {
      filter: saturate(1) opacity(1);
    }

    .contact-links {
      display: flex;
      justify-content: center;
      gap: 16px;
      flex-wrap: wrap;
    }

    .contact-btn {
      display: flex;
      align-items: center;
      gap: 10px;
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid var(--border-color);
      color: var(--text-main);
      padding: 12px 22px;
      border-radius: 12px;
      text-decoration: none;
      font-size: 0.92rem;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .contact-btn:hover {
      background: rgba(255, 255, 255, 0.08);
      border-color: var(--primary-green);
      color: var(--primary-green);
    }

    footer {
      border-top: 1px solid var(--border-color);
      padding: 3rem 0;
      text-align: center;
      color: var(--text-muted);
      font-size: 0.9rem;
      background: rgba(10, 13, 18, 0.9);
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
      color: var(--primary-green);
    }

    @media (max-width: 768px) {
      nav { display: none; }
      .hero h1 { font-size: 2.6rem; }
      .hero-card { padding: 2.2rem 1.5rem; }
      .countdown-box { min-width: 65px; padding: 10px 12px; }
      .countdown-value { font-size: 1.4rem; }
    }
  </style>
</head>
<body>

  <!-- Novo Canvas Cyber/Cyberpunk Grid Interativo -->
  <canvas id="cyber-canvas"></canvas>

  <header>
    <div class="logo-area">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Instituto_Federal_do_Paran%C3%A1_-_Marca_Vertical_2015.svg/1200px-Instituto_Federal_do_Paran%C3%A1_-_Marca_Vertical_2015.svg.png" alt="Logo IFPR" class="logo-img">
      <div class="logo-divider"></div>
      <img src="https://tecnoif.com.br/setif/2025/assets/img/logo.png" alt="Logo SETIF" class="logo-img" onerror="this.src='https://tecnoif.com.br/setif/2024/imagens/logo.png'">
    </div>
    <nav>
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
          <div class="card-icon"><i data-lucide="file-spread-sheet"></i></div>
          <h3>Mostra de Trabalhos</h3>
          <p>Apresente seus projetos e pesquisas para a comunidade acadêmica e profissional.</p>
        </div>
      </div>
    </section>

    <section id="inscricoes" class="section-container">
      <h2 class="section-title">Inscrição</h2>
      <div class="card" style="max-width: 680px; margin: 0 auto; text-align: center;">
        <div class="card-icon" style="margin: 0 auto 1.5rem;"><i data-lucide="external-link"></i></div>
        <h3 style="font-size: 1.6rem; margin-bottom: 1rem;">Garante sua vaga na SETIF 2026</h3>
        <p style="color: var(--text-muted); margin-bottom: 2rem; line-height: 1.6;">
          As inscrições são gratuitas e abertas a toda a comunidade. Clique no botão abaixo para acessar o formulário oficial do Google Forms.
        </p>
        <a href="processa.php" target="_blank" class="btn-primary" style="padding: 18px 36px; font-size: 1.1rem;">
          <i data-lucide="file-input"></i>
          Fazer Inscrição Agora
        </a>
      </div>
    </section>

    <section id="local" class="section-container">
      <h2 class="section-title">Local do Evento</h2>
      <div class="location-card">
        <h3 style="font-family: 'Space Grotesk', sans-serif; font-size: 1.5rem;"><?php echo $evento['local']; ?></h3>
        <p style="color: var(--text-muted); margin-top: 5px;"><?php echo $evento['endereco']; ?></p>
        
        <iframe 
          class="map-frame" 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.239333917832!2d-52.4497984!3d-23.0883391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94929618f0a0d4b9%3A0x6b876356a4220b22!2sInstituto%20Federal%20do%20Paran%C3%A1%20-%20Campus%20Paranava%C3%AD!5e0!3m2!1spt-BR!2sbr!4v1700000000000!5m2!1spt-BR!2sbr" 
          allowfullscreen="" 
          loading="lazy">
        </iframe>

        <div class="contact-links">
          <a href="mailto:<?php echo $evento['contatos']['eng-soft']; ?>" class="contact-btn">
            <i data-lucide="mail"></i> <?php echo $evento['contatos']['eng-soft']; ?>
          </a>
          <a href="mailto:<?php echo $evento['contatos']['ti-info']; ?>" class="contact-btn">
            <i data-lucide="mail"></i> <?php echo $evento['contatos']['ti-info']; ?>
          </a>
          <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $evento['contatos']['telefone']); ?>" class="contact-btn">
            <i data-lucide="phone"></i> <?php echo $evento['contatos']['telefone']; ?>
          </a>
        </div>
      </div>
    </section>
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

    // 1. TIMER REGRESSIVO
    const targetDate = new Date();
    targetDate.setDate(targetDate.getDate() + 30);

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

    // 2. NOVO FUNDO ANIMADO: GRADE CYBERPUNK 3D / ONDULAÇÃO DIGITAL
    const canvas = document.getElementById('cyber-canvas');
    const ctx = canvas.getContext('2d');

    let width, height;
    let mouse = { x: -1000, y: -1000, targetX: -1000, targetY: -1000 };

    function resize() {
      width = canvas.width = window.innerWidth;
      height = canvas.height = window.innerHeight;
    }
    resize();
    window.addEventListener('resize', resize);

    window.addEventListener('mousemove', (e) => {
      mouse.targetX = e.clientX;
      mouse.targetY = e.clientY;
    });

    // Partículas de feixe digital flutuantes
    const nodeCount = 50;
    const nodes = [];

    for (let i = 0; i < nodeCount; i++) {
      nodes.push({
        x: Math.random() * window.innerWidth,
        y: Math.random() * window.innerHeight,
        size: Math.random() * 2 + 1,
        speedY: -(Math.random() * 0.6 + 0.2),
        speedX: (Math.random() - 0.5) * 0.4,
        alpha: Math.random() * 0.6 + 0.2
      });
    }

    let step = 0;

    function render() {
      ctx.clearRect(0, 0, width, height);

      // Suaviza movimento do mouse
      mouse.x += (mouse.targetX - mouse.x) * 0.05;
      mouse.y += (mouse.targetY - mouse.y) * 0.05;

      step += 0.015;

      // Desenho da Grade Digital Animada
      const gridSize = 60;
      ctx.lineWidth = 1;

      for (let x = 0; x < width; x += gridSize) {
        for (let y = 0; y < height; y += gridSize) {
          let dx = mouse.x - x;
          let dy = mouse.y - y;
          let dist = Math.sqrt(dx * dx + dy * dy);
          let maxDist = 250;

          // Efeito de onda conforme distorção do cursor
          let offset = Math.sin(step + (x + y) * 0.005) * 4;
          if (dist < maxDist) {
            let factor = (1 - dist / maxDist) * 15;
            offset -= factor;
          }

          // Pontos de interseção neon da grade
          ctx.beginPath();
          ctx.arc(x, y + offset, 1.2, 0, Math.PI * 2);
          let pointAlpha = dist < maxDist ? (1 - dist / maxDist) * 0.8 + 0.1 : 0.12;
          ctx.fillStyle = `rgba(0, 255, 136, ${pointAlpha})`;
          ctx.fill();
        }
      }

      // Desenhar feixes e partículas flutuantes para cima
      nodes.forEach(node => {
        node.y += node.speedY;
        node.x += node.speedX;

        if (node.y < 0) {
          node.y = height;
          node.x = Math.random() * width;
        }

        ctx.beginPath();
        ctx.arc(node.x, node.y, node.size, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(0, 229, 255, ${node.alpha})`;
        ctx.shadowBlur = 8;
        ctx.shadowColor = '#00e5ff';
        ctx.fill();
        ctx.shadowBlur = 0; // reseta a sombra
      });

      requestAnimationFrame(render);
    }

    render();
  </script>
</body>
</html>