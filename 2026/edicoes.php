<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/setif/init.php';

$paginaAtual     = 'edicoes';
$tituloPagina    = 'Edições anteriores';
$descricaoPagina = 'Edições anteriores da SETIF - Semana de Tecnologia da Informação do '
    . $evento['local'] . ': 2025, 2024, 2023 e 2022.';

// Sites arquivados de cada edição, da mais recente para a mais antiga
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

                <span class="eyebrow">Edições anteriores</span>
                <h1 class="display-title mb-4">Como foram as SETIFs passadas</h1>

                <div class="row g-3">
                    <?php foreach ($edicoes as $ano => $url): ?>
                        <div class="col-6 col-md-4 col-lg-3">
                            <a href="<?php echo $url; ?>" class="edition-card">
                                <span class="edition-year"><?php echo $ano; ?></span>
                                <span class="edition-hint">Ver edição</span>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>
    </main>

<?php require_once LIB_INCLUDES_2026 . DS . 'rodape.php'; ?>
