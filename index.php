<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/setif/init.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include_once LIB_INCLUDES_2025 . DS . 'metadados.php' ?>
</head>

<body>

    <?php
        require_once LIB_INCLUDES_2025 . DS . 'navigation.php';
    ?>
    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div id="particles-js"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="hero-content">
                        <h1 class="hero-title"><?php echo $evento['titulo']; ?></h1>
                        <p class="hero-subtitle"><?php echo $evento['subtitulo']; ?></p>
                        <p class="hero-description"><?php echo $evento['slogan']; ?></p>
                        <a href="https://www.even3.com.br/setif2025-614974/" class="btn btn-custom btn-lg">
                            <i class="bi bi-calendar-check me-2"></i>Inscreva-se Gratuitamente no Even 3
                        </a>

                        <div class="countdown-box">
                            <h3 class="countdown-title"><?php echo $evento['data']; ?></h3>
                            <p class="mb-0" style="color:#ffff">Fique atento às nossas redes sociais para a divulgação
                                da data oficial do
                                evento.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding">
        <div class="container">
            <h2 class="section-title fade-in-up">Sobre o Evento</h2>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card fade-in-up">
                        <div class="feature-icon">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <h4>Missão</h4>
                        <p>Promover o conhecimento e a troca de experiências na área de Tecnologia da Informação,
                            conectando estudantes, profissionais e pesquisadores.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card fade-in-up">
                        <div class="feature-icon">
                            <i class="bi bi-rocket-takeoff"></i>
                        </div>
                        <h4>Inovação</h4>
                        <p>Apresentar os mais recentes trabalhos e projetos desenvolvidos no âmbito dos cursos de
                            Engenharia de Software e Técnico de Informática do IFPR - Campus Paranavaíe e região.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card fade-in-up">
                        <div class="feature-icon">
                            <i class="bi bi-people"></i>
                        </div>
                        <h4>Networking</h4>
                        <p>Criar oportunidades de conexão entre a comunidade acadêmica e o mercado de trabalho,
                            fortalecendo parcerias e colaborações.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Section -->
    <section id="program" class="hero-section section-padding bg-light-custom ">
        <div class="container">
            <h2 class="section-title fade-in-up">Programação</h2>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card fade-in-up">
                        <div class="feature-icon">
                            <i class="bi bi-book"></i>
                        </div>
                        <h4>Minicursos</h4>
                        <p>Aprofunde seus conhecimentos em temas específicos da TI com instrutores especializados. Vagas
                            limitadas!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card fade-in-up">
                        <div class="feature-icon">
                            <i class="bi bi-mic"></i>
                        </div>
                        <h4>Palestras</h4>
                        <p>Conecte-se com especialistas renomados e fique por dentro das novidades e tendências do
                            mercado de tecnologia.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card fade-in-up">
                        <div class="feature-icon">
                            <i class="bi bi-trophy"></i>
                        </div>
                        <h4>Competições</h4>
                        <p>Teste suas habilidades em desafios de programação, hackathons e outras competições técnicas.
                            Prêmios incríveis!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card fade-in-up">
                        <div class="feature-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <h4>Mostra de Trabalhos</h4>
                        <p>Apresente seus projetos e pesquisas para a comunidade acadêmica e profissional. Oportunidade
                            única de visibilidade!</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <div class="alert alert-info fade-in-up" role="alert">
                        <h5 class="alert-heading"><i class="bi bi-info-circle me-2"></i>Programação Completa em Breve!
                        </h5>
                        <p class="mb-0">Acompanhe nossas redes sociais para não perder nenhuma novidade sobre a
                            programação detalhada do evento.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Section -->
    <section id="registration" class="section-padding">
        <div class="container">
            <h2 class="section-title fade-in-up">Inscrições</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="feature-card text-center fade-in-up">
                        <div class="feature-icon mx-auto">
                            <i class="bi bi-ticket-perforated"></i>
                        </div>
                        <h4>Gratuitas e Abertas</h4>
                        <p class="mb-3">As inscrições para a SETIF 2025 serão totalmente gratuitas e abertas à
                            comunidade interna e externa do IFPR.</p>
                        <div class="alert alert-warning" role="alert">
                            <strong>Abertura das inscrições: Em breve!</strong>
                        </div>
                        <p>Fique atento às nossas redes sociais e ao site oficial para não perder o prazo de inscrição.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-padding contact-section">
        <div class="container">
            <h2 class="section-title text-white fade-in-up">Local do Evento</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h3 class="mb-4 fade-in-up"><?php echo $evento['local']; ?></h3>
                    <p class="lead mb-4 fade-in-up" style="color:#ffffff;"><?php echo $evento['endereco']; ?></p>

                    <!-- Mapa incorporado do Google Maps -->
                    <div class="map-container fade-in-up">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.1691111640016!2d-52.45690082490713!3d-23.054260879151514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x949296a233a74981%3A0x8aed8519780a4c71!2sIFPR%20-%20Instituto%20Federal%20do%20Paran%C3%A1%20-%20Campus%20Paranava%C3%AD!5e0!3m2!1spt-BR!2sbr!4v1755525838778!5m2!1spt-BR!2sbr"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            class="rounded shadow" title="Localização do IFPR Campus Paranavaí">
                        </iframe>
                    </div>

                    <div class="row g-4 mt-4">
                        <div class="col-md-4">
                            <div class="contact-item justify-content-center fade-in-up">
                                <i class="bi bi-envelope-fill"></i>
                                <span><?php echo $evento['contatos']['eng-soft']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-item justify-content-center fade-in-up">
                                <i class="bi bi-envelope-fill"></i>
                                <span><?php echo $evento['contatos']['ti-info']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-item justify-content-center fade-in-up">
                                <i class="bi bi-telephone-fill"></i>
                                <span><?php echo $evento['contatos']['telefone']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    require_once LIB_INCLUDES_2025 . DS . 'footer.php';
    ?>

    <!-- Bootstrap JS -->
    <script src="2024/bibliotecas/bootstrap-5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="2025/assets/js/main.js"></script>
    <script src="2025/assets/js/effects/particles.js"></script>
    <script src="2025/assets/js/navigation.js"></script>
</body>

</html>