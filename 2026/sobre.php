<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/setif/init.php';

$paginaAtual     = 'sobre';
$tituloPagina    = 'Sobre & Local';
$descricaoPagina = 'Conheça a ' . htmlspecialchars($evento['titulo']) . ' e o ' . htmlspecialchars($evento['local']) . '. Endereço: '
    . htmlspecialchars($evento['endereco']) . '.';

require_once LIB_INCLUDES_2026 . DS . 'cabecalho.php';
?>

    <main>

        <section class="photo-hero photo-hero--compact">
            <div class="container">
                <span class="eyebrow eyebrow--light mb-2 d-inline-flex align-items-center gap-2">
                    <i class="bi bi-geo-alt"></i> SOBRE & LOCAL
                </span>
                <h1 class="display-title">
                    O IFPR, a SETIF e o <span class="text-success">local</span>
                </h1>
                <p class="lead-text mb-0">
                    Conheça mais sobre o evento, o instituto e o espaço onde tudo acontece.
                </p>
            </div>
        </section>

        <section class="page-section py-5">
            <div class="container">
                
                <div class="row g-4 mb-4">
                    
                    <div class="col-12 col-lg-6">
                        <div class="bg-white rounded-4 p-4 p-md-5 border h-100 shadow-sm about-card">
                            <div class="d-flex align-items-center gap-3 mb-4">
                                <div class="bg-success text-white rounded-3 p-3 d-inline-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                                    <i class="bi bi-laptop fs-4"></i>
                                </div>
                                <h2 class="h3 fw-bold mb-0 text-dark">Sobre o evento</h2>
                            </div>
                            <p class="text-muted mb-3">
                                O <strong>SETIF</strong> (Semana de Tecnologia da Informação do IFPR – Campus Paranavaí) é um evento científico que tem como objetivo reunir estudantes, professores, pesquisadores, profissionais da área de tecnologia da informação e a comunidade em geral, promovendo uma mostra de trabalhos, minicursos, palestras e competições de programação, envolvendo os cursos Técnico Integrado em Informática (Ensino Médio) e Bacharelado em Engenharia de Software (Superior).
                            </p>
                            <p class="text-muted mb-0">
                                O evento busca incentivar o desenvolvimento acadêmico e profissional, fortalecendo a troca de conhecimento e o protagonismo dos estudantes na área de tecnologia e inovação.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="bg-white rounded-4 p-4 p-md-5 border h-100 shadow-sm about-card">
                            <div class="d-flex align-items-center gap-3 mb-4">
                                <div class="bg-success text-white rounded-3 p-3 d-inline-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                                    <i class="bi bi-bank fs-4"></i>
                                </div>
                                <h2 class="h3 fw-bold mb-0 text-dark">O IFPR Campus Paranavaí</h2>
                            </div>
                            <p class="text-muted mb-3">
                                O Instituto Federal do Paraná (IFPR) é uma instituição pública federal de ensino vinculada ao Ministério da Educação (MEC) por meio da Secretaria de Educação Profissional e Tecnológica (Setec).
                            </p>
                            <p class="text-muted mb-0">
                                É voltada à educação superior, básica e profissional, e oferece ensino de qualidade, com foco na formação cidadã, no desenvolvimento regional e na preparação para o mundo do trabalho, por meio de cursos técnicos, tecnológicos e superiores.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="bg-white rounded-4 p-4 p-md-5 border shadow-sm about-card">
                            <div class="row g-4 align-items-center">
                                
                                <div class="col-12 col-lg-5">
                                    <div class="d-flex align-items-center gap-3 mb-4">
                                        <div class="bg-success text-white rounded-3 p-3 d-inline-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                                            <i class="bi bi-geo-alt-fill fs-4"></i>
                                        </div>
                                        <h2 class="h3 fw-bold mb-0 text-dark">Local do evento</h2>
                                    </div>

                                    <div class="d-flex flex-column gap-3 ms-1">
                                        <div class="d-flex align-items-start gap-2">
                                            <i class="bi bi-geo-alt-fill text-success fs-5"></i>
                                            <div>
                                                <strong class="d-block text-dark"><?php echo htmlspecialchars($evento['local']); ?></strong>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start gap-2">
                                            <i class="bi bi-geo-alt text-success fs-5"></i>
                                            <div class="text-muted">
                                                Av. José Felipe Tequinha, 1400<br>
                                                Jardim das Nações, Paranavaí – PR
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-7">
                                    <div class="rounded-4 overflow-hidden border" style="min-height: 260px;">
                                        <iframe
                                            class="w-100 h-100 border-0"
                                            style="min-height: 260px;"
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.1691111640016!2d-52.45690082490713!3d-23.054260879151514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x949296a233a74981%3A0x8aed8519780a4c71!2sIFPR%20-%20Instituto%20Federal%20do%20Paran%C3%A1%20-%20Campus%20Paranava%C3%AD!5e0!3m2!1spt-BR!2sbr!4v1755525838778!5m2!1spt-BR!2sbr"
                                            title="Localização do <?php echo htmlspecialchars($evento['local']); ?>"
                                            loading="lazy"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

<canvas id="dots-canvas" class="magnetic-bg"></canvas>
<script src="assets/js/dots.js" defer></script>

<?php require_once LIB_INCLUDES_2026 . DS . 'rodape.php'; ?>