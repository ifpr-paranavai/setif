<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/setif/init.php';

$paginaAtual     = 'programacao';
$tituloPagina    = 'Programação';
$descricaoPagina = 'Programação da ' . $evento['titulo'] . ': palestras, mostra de trabalhos e minicursos '
    . 'organizados por alunos e professores do ' . $evento['local'] . '.';

require_once LIB_INCLUDES_2026 . DS . 'cabecalho.php';
?>

<main>
    <section class="page-section">
        <div class="container">

            <div class="row align-items-center justify-content-between mb-5 g-4">
                <div class="col-lg-7">
                    <span class="eyebrow eyebrow--programacao">
                        <i class="bi bi-calendar-event-fill"></i> PROGRAMAÇÃO
                    </span>
                    <h1 class="display-title">
                        Três formatos,<br>
                        <span class="text-highlight-green">uma semana</span>
                    </h1>
                    <p class="lead-text mb-0">
                        A SETIF reúne palestras, mostra de trabalhos e minicursos organizados por alunos e
                        professores do <?php echo htmlspecialchars($evento['local']); ?>.
                    </p>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="header-slogan">
                        <div>Mais conhecimento.</div>
                        <div>Mais conexões.</div>
                        <div class="slogan-highlight">Mais tecnologia.</div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mb-5">
                
                <div class="col-lg-4 col-md-6">
                    <article class="format-card format-card--clean">
                        <div class="format-badge format-badge--green mb-3">
                            <i class="bi bi-easel-fill"></i>
                        </div>
                        <h2 class="format-card-title">Palestras</h2>
                        <p class="format-card-text">
                            Ministradas por pessoas com alto conhecimento no tema escolhido, trazendo assuntos recentes e relevantes de TI para a plateia.
                        </p>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6">
                    <article class="format-card format-card--clean">
                        <div class="format-badge format-badge--red mb-3">
                            <i class="bi bi-layers-fill"></i>
                        </div>
                        <h2 class="format-card-title">Mostra de trabalhos</h2>
                        <p class="format-card-text">
                            Exposição dos projetos desenvolvidos pelos alunos dos cursos presentes no campus, aberto ao público.
                        </p>
                    </article>
                </div>

                <div class="col-lg-4 col-md-12">
                    <article class="format-card format-card--clean">
                        <div class="format-badge format-badge--ink mb-3">
                            <i class="bi bi-laptop-fill"></i>
                        </div>
                        <h2 class="format-card-title">Minicursos</h2>
                        <p class="format-card-text">
                            Preparados e ministrados pelos próprios alunos, para outros estudantes ou qualquer pessoa de fora do IFPR.
                        </p>
                    </article>
                </div>

            </div>

            <div class="cronograma-section">
                <div class="cronograma-header mb-4">
                    <div class="d-flex align-items-center gap-2 mb-1">
                        <span class="cronograma-dot"></span>
                        <h2 class="section-title mb-0">Cronograma</h2>
                    </div>
                    <p class="cronograma-subtext text-muted mb-0">
                        Acompanhe as datas e atividades da <?php echo htmlspecialchars($evento['titulo']); ?>. A grade completa será divulgada em breve no Even3.
                    </p>
                </div>

                <?php if (!empty($evento['even3_slug'])): ?>
                    <div class="even3-container">
                        <iframe
                            class="even3-frame"
                            src="https://www.even3.com.br/widget/index?evento=<?php echo urlencode($evento['even3_slug']); ?>&amp;type=session&amp;lang=pt"
                            title="Cronograma da <?php echo htmlspecialchars($evento['titulo']); ?> (Even3)"
                            loading="lazy"
                            allowfullscreen></iframe>
                    </div>
                <?php else: ?>
                    <div class="schedule-notice-card">
                        <div class="schedule-notice-top">
                            <div class="schedule-tabs">
                                <span class="schedule-tab active">Todos</span>
                                <span class="schedule-tab">Palestras</span>
                                <span class="schedule-tab">Minicursos</span>
                                <span class="schedule-tab">Competições</span>
                                <span class="schedule-tab">Mostra</span>
                            </div>
                            <div class="schedule-notice-badge">
                                <i class="bi bi-calendar-event text-success fs-5"></i>
                                <div>
                                    <strong class="d-block text-dark">Grade em breve no Even3</strong>
                                    <small class="text-muted">Assim que a programação estiver disponível, você poderá se inscrever e garantir sua participação.</small>
                                </div>
                            </div>
                        </div>
                        <div class="schedule-notice-body">
                            <div class="notice-empty-state text-center py-4">
                                <i class="bi bi-calendar2-week fs-2 text-success mb-2 d-block"></i>
                                <strong class="d-block text-dark">Nenhuma atividade disponível no momento</strong>
                                <span class="text-muted small">A programação será divulgada em breve.</span>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </section>
</main>

<canvas id="dots-canvas" class="magnetic-bg"></canvas>
<script src="assets/js/dots.js" defer></script>

<?php require_once LIB_INCLUDES_2026 . DS . 'rodape.php'; ?>