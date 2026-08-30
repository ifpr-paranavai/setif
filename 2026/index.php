<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/setif/init.php';

$paginaAtual = 'inicio';
require_once LIB_INCLUDES_2026 . DS . 'cabecalho.php';
?>

    <main>
        <section class="photo-hero photo-hero--fill">
            <div class="container">
                <span class="eyebrow eyebrow--light">
                    <i class="bi bi-geo-alt-fill"></i> <?php echo $evento['local']; ?>
                </span>

                <h1 class="hero-title">
                    SETIF<br><span class="hero-year">2026</span>
                </h1>

                <p class="hero-text">
                    <?php echo $evento['subtitulo']; ?>. Palestras, mostra de trabalhos e minicursos
                    feitos por quem estuda e ensina Engenharia de Software e Técnico em Informática.
                </p>

                <div class="countdown">
                    <div class="countdown-box">
                        <span class="countdown-value" id="days">00</span>
                        <span class="countdown-label">dias</span>
                    </div>
                    <div class="countdown-box">
                        <span class="countdown-value" id="hours">00</span>
                        <span class="countdown-label">horas</span>
                    </div>
                    <div class="countdown-box">
                        <span class="countdown-value" id="minutes">00</span>
                        <span class="countdown-label">min</span>
                    </div>
                    <div class="countdown-box">
                        <span class="countdown-value" id="seconds">00</span>
                        <span class="countdown-label">seg</span>
                    </div>
                </div>

                <div class="d-flex flex-wrap align-items-center gap-3">
                    <a href="<?php echo $evento['links']['inscricao']; ?>" target="_blank" rel="noopener" class="btn-setif">
                        <i class="bi bi-ticket-perforated-fill"></i> Garantir minha vaga
                    </a>
                    <span class="hero-note">04 - 06 de Novembro</span>
                </div>
            </div>
        </section>
    </main>

<?php require_once LIB_INCLUDES_2026 . DS . 'rodape.php'; ?>
