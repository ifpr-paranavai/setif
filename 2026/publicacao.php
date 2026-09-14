<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/setif/init.php';

$paginaAtual     = 'publicacao';
$tituloPagina    = 'Publicação';
$descricaoPagina = 'Normas de submissão, corpo editorial e anais da ' . htmlspecialchars($evento['titulo'])
    . ' - ' . htmlspecialchars($evento['local']) . '.';

require_once LIB_INCLUDES_2026 . DS . 'cabecalho.php';
?>

    <main>
        <section class="page-section py-5">
            <div class="container">

                <div class="row align-items-center mb-5 g-4">
                    <div class="col-lg-8">
                        <span class="eyebrow mb-2 d-inline-flex align-items-center gap-2">
                            <i class="bi bi-journal-text"></i> Publicação
                        </span>
                        <h1 class="display-title">
                            Submissão e <span class="text-success">anais</span>
                        </h1>
                        <p class="lead-text mb-0">
                            Regras e materiais para quem vai submeter trabalho na mostra e para quem quer
                            consultar o que já foi apresentado.
                        </p>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="ps-3 border-start border-3 border-success">
                            <i class="bi bi-file-earmark-text text-success fs-4 mb-2 d-block"></i>
                            <p class="mb-0 text-muted fw-medium fs-6">
                                Conhecimento que se compartilha, fortalece a ciência.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row g-4 mb-5">

                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="<?php echo htmlspecialchars($evento['links']['equipe_editorial']); ?>" target="_blank" rel="noopener" class="format-card text-decoration-none d-flex flex-column h-100">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="format-badge format-badge--green">
                                    <i class="bi bi-people-fill"></i>
                                </div>
                            </div>
                            <h2 class="format-card-title">Corpo editorial</h2>
                            <p class="format-card-text flex-grow-1">
                                Professores dos cursos de Engenharia de Software e Técnico em Informática do
                                IFPR Paranavaí são responsáveis pela avaliação e curadoria dos trabalhos
                                submetidos à mostra.
                            </p>
                            <span class="card-link-hint mt-3 text-uppercase fw-bold text-success fs-7">
                                Saiba mais <i class="bi bi-arrow-right ms-1"></i>
                            </span>
                        </a>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="<?php echo htmlspecialchars($evento['links']['submissoes']); ?>" target="_blank" rel="noopener" class="format-card text-decoration-none d-flex flex-column h-100">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="format-badge format-badge--red">
                                    <i class="bi bi-file-earmark-text-fill"></i>
                                </div>
                            </div>
                            <h2 class="format-card-title">Normas de submissão</h2>
                            <p class="format-card-text flex-grow-1">
                                Modelo de resumo, prazos e formato de envio para quem for submeter trabalho na mostra.
                            </p>
                            <span class="card-link-hint mt-3 text-uppercase fw-bold text-success fs-7">
                                Acessar normas <i class="bi bi-arrow-right ms-1"></i>
                            </span>
                        </a>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="<?php echo htmlspecialchars($evento['links']['periodicos']); ?>" target="_blank" rel="noopener" class="format-card text-decoration-none d-flex flex-column h-100">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="format-badge format-badge--ink">
                                    <i class="bi bi-journal-bookmark-fill"></i>
                                </div>
                            </div>
                            <h2 class="format-card-title">Anais</h2>
                            <p class="format-card-text flex-grow-1">
                                Coletânea dos trabalhos apresentados nas edições da SETIF, no portal de
                                periódicos do IFPR.
                            </p>
                            <span class="card-link-hint mt-3 text-uppercase fw-bold text-success fs-7">
                                Ver anais <i class="bi bi-arrow-right ms-1"></i>
                            </span>
                        </a>
                    </div>

                </div>

                <div class="pt-4 border-top">
                    <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
                        <div>
                            <h3 class="fw-bold mb-1 d-flex align-items-center gap-2">
                                <i class="bi bi-lightbulb text-success"></i> O que você verá na SETIF 2026
                            </h3>
                            <p class="text-muted mb-0 small">
                                Uma prévia das palestras, minicursos e mostra de trabalhos que farão parte do evento.
                            </p>
                        </div>
                    </div>

                    <div class="p-5 text-center bg-white rounded-4 border border-dashed border-2">
                        <div class="mb-3 text-success">
                            <i class="bi bi-easel fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-2">Vitrine em breve</h4>
                        <p class="text-muted mx-auto mb-0" style="max-width: 520px;">
                            Em breve você poderá conferir os detalhes das palestras, minicursos e a lista com o resumo dos trabalhos em exposição nesta edição.
                        </p>
                    </div>
                </div>

            </div>
        </section>
    </main>

<canvas id="dots-canvas" class="magnetic-bg"></canvas>
<script src="assets/js/dots.js" defer></script>

<?php require_once LIB_INCLUDES_2026 . DS . 'rodape.php'; ?>