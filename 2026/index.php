<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/setif/init.php';

$paginaAtual = 'inicio';
require_once LIB_INCLUDES_2026 . DS . 'cabecalho.php';
?>

<main>
    <section class="photo-hero photo-hero--fill">
        <div class="container">
            <div class="row align-items-center gy-5">
                
                <!-- Coluna da Esquerda: Informações Principais -->
                <div class="col-lg-7">

                    <!-- Badge de Data com Efeito Vidro -->
                    <div class="hero-date-badge">
                        <i class="bi bi-calendar-event"></i>
                        <span>04 A 06 DE NOVEMBRO DE <strong class="badge-year">2026</strong></span>
                    </div>

                    <h1 class="hero-title">
                        SETIF<br><span class="hero-year">2026</span>
                    </h1>

                    <p class="hero-text my-4">
                        <?php echo $evento['subtitulo']; ?>. Palestras, mostra de trabalhos e minicursos
                        feitos por quem estuda e ensina Engenharia de Software e Técnico em Informática.
                    </p>

                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <?php $temInscricao = $evento['links']['inscricao'] !== ''; ?>
                        <a class="btn-setif" href="<?php echo $temInscricao ? $evento['links']['inscricao'] : '#'; ?>"
                           <?php echo $temInscricao ? 'target="_blank" rel="noopener"' : ''; ?>>
                            <i class="bi bi-ticket-perforated-fill"></i>
                            <?php echo $temInscricao ? 'Garantir minha vaga' : 'Inscrições em breve'; ?>
                        </a>
                    </div>
                </div>

                <!-- Coluna da Direita: Contador em Liquid Glass -->
                <div class="col-lg-5">
                    <div class="liquid-glass-card">
                        
                        <div class="glass-card-header">
                            <i class="bi bi-calendar-event"></i>
                            <span class="glass-title">FALTAM PARA O EVENTO</span>
                        </div>

                        <div class="glass-countdown-grid">
                            <div class="glass-countdown-box">
                                <span class="countdown-value" id="days">00</span>
                                <span class="countdown-label">DIAS</span>
                            </div>
                            <div class="glass-countdown-box">
                                <span class="countdown-value" id="hours">00</span>
                                <span class="countdown-label">HORAS</span>
                            </div>
                            <div class="glass-countdown-box">
                                <span class="countdown-value" id="minutes">00</span>
                                <span class="countdown-label">MINUTOS</span>
                            </div>
                            <div class="glass-countdown-box">
                                <span class="countdown-value" id="seconds">00</span>
                                <span class="countdown-label">SEGUNDOS</span>
                            </div>
                        </div>

                        <div class="glass-card-divider"></div>

                        <div class="glass-card-footer">
                            <div class="glass-info-item">
                                <div class="glass-info-icon">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="glass-info-text">
                                    <span class="glass-info-title">IFPR Campus Paranavaí</span>
                                    <span class="glass-info-subtitle">Paranavaí - PR</span>
                                </div>
                            </div>

                            <div class="glass-footer-divider"></div>

                            <div class="glass-info-item">
                                <div class="glass-info-icon">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="glass-info-text">
                                    <span class="glass-info-title">Evento gratuito</span>
                                    <span class="glass-info-subtitle">Aberto à comunidade</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<?php require_once LIB_INCLUDES_2026 . DS . 'rodape.php'; ?>