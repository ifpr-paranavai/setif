<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/setif/init.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include_once LIB_INCLUDES_2026 . DS . 'metadados.php' ?>
</head>

<body>

    <canvas id="cyber-canvas"></canvas>

    <?php require_once LIB_INCLUDES_2026 . DS . 'navigation.php'; ?>

    <main>
        <section id="inicio" class="hero">
            <div class="hero-card">
                <h1><?php echo $evento['titulo']; ?></h1>

                <img src="2026/assets/images/logo-setif.png" alt="Logo SETIF 2026" class="hero-logo-setif">

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
                        <p>Aprofunde seus conhecimentos em temas específicos da TI.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon"><i data-lucide="presentation"></i></div>
                        <h3>Palestras</h3>
                        <p>Conecte-se com especialistas renomados e fique por dentro das novidades do mercado.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon"><i data-lucide="trophy"></i></div>
                        <h3>Competições</h3>
                        <p>Teste suas habilidades em desafios de programação e outras competições técnicas.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon"><i data-lucide="layers"></i></div>
                        <h3>Mostra de Trabalhos</h3>
                        <p>Apresente seus projetos e pesquisas para a comunidade acadêmica e profissional.</p>
                    </div>
                </div>

                <?php if (!empty($evento['even3_slug'])): ?>
                    <div class="even3-frame">
                        <iframe
                            src="https://www.even3.com.br/widget/index?evento=<?php echo urlencode($evento['even3_slug']); ?>&type=session&lang=pt"
                            id="even3_session"
                            title="Programação da <?php echo $evento['titulo']; ?> (Even3)"
                            frameborder="0"
                            allowfullscreen>
                        </iframe>
                    </div>
                <?php else: ?>
                    <div class="even3-placeholder">
                        <div class="card-icon" style="margin: 0 auto 1.2rem;"><i data-lucide="clock"></i></div>
                        <h3>Grade de horários em breve</h3>
                        <p>A programação detalhada, com dias e horários de cada atividade, será publicada aqui assim que o evento for cadastrado na Even3.</p>
                    </div>
                <?php endif; ?>
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
                    <a href="2026/processa.php" target="_blank" class="btn-primary" style="padding: 18px 36px; font-size: 1.1rem;">
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

    <?php require_once LIB_INCLUDES_2026 . DS . 'footer.php'; ?>

    <!-- Bootstrap JS (collapse do menu mobile) -->
    <script src="2024/bibliotecas/bootstrap-5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- JS da SETIF 2026 -->
    <script src="2026/assets/js/effects/canvas.js"></script>
    <script src="2026/assets/js/navigation.js"></script>
    <script src="2026/assets/js/main.js"></script>
</body>

</html>
