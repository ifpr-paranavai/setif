<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/setif/init.php';

$paginaAtual     = 'edicoes';
$tituloPagina    = 'Edições Anteriores';
$descricaoPagina = 'Edições anteriores da SETIF - Semana de Tecnologia da Informação do '
    . $evento['local'] . ': 2025, 2024, 2023 e 2022.';

$edicoes = [
    '2025' => $evento['links']['ed_2025'],
    '2024' => $evento['links']['ed_2024'],
    '2023' => $evento['links']['ed_2023'],
    '2022' => $evento['links']['ed_2022'],
];

require_once LIB_INCLUDES_2026 . DS . 'cabecalho.php';
?>

<main>
    <section class="page-section">
        <div class="container">

            <span class="eyebrow">
                <i class="bi bi-journal-bookmark"></i> EDIÇÕES ANTERIORES
            </span>

            <h1 class="display-title mb-3">
                Como foram as SETIFs<br>
                <span class="text-highlight-green">passadas</span>
            </h1>

            <p class="lead-text mb-5">
                Confira as edições anteriores e relembre a trajetória de um evento que conecta conhecimento, tecnologia e pessoas.
            </p>

            <div class="row g-4 mb-4">
                <?php foreach ($edicoes as $ano => $url): ?>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <a href="<?php echo $url; ?>" class="edition-card-clean" target="_blank" rel="noopener">
                            <div class="edition-year-header">
                                <span class="edition-green-bar"></span>
                                <span class="edition-year-title"><?php echo $ano; ?></span>
                            </div>
                            <span class="edition-link-action">
                                Ver edição <i class="bi bi-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="history-feature-card">
                <div class="row align-items-center g-4">
                    <div class="col-lg-7">
                        <div class="d-flex align-items-center gap-3">
                            <div class="history-icon-box">
                                <i class="bi bi-calendar2-check"></i>
                            </div>
                            <div>
                                <h3 class="history-feature-title">Uma história de conhecimento e inovação</h3>
                                <p class="history-feature-desc">
                                    Cada edição da SETIF reforça o compromisso com a ciência, a educação e o futuro.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="d-flex align-items-center justify-content-end gap-3">
                            <svg class="circuit-line" width="140" height="40" viewBox="0 0 140 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M 0,25 L 50,25 L 70,10 L 120,10" stroke="#00a651" stroke-width="1.5" stroke-linecap="round"/>
                                <path d="M 30,25 L 45,33 L 130,33" stroke="#00a651" stroke-width="1.5" stroke-linecap="round"/>
                                <rect x="118" y="8" width="5" height="5" fill="#00a651"/>
                                <rect x="128" y="31" width="5" height="5" fill="#00a651"/>
                            </svg>

                            <div class="history-tagline">
                                <span>CONHECIMENTO</span>
                                <span>INSPIRA</span>
                                <span class="fw-bold">INOVAÇÃO</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

<canvas id="dots-canvas" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: -1; pointer-events: none;"></canvas>
<script src="assets/js/dots.js" defer></script>

<?php require_once LIB_INCLUDES_2026 . DS . 'rodape.php'; ?>