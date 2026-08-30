<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/setif/init.php';

$paginaAtual     = 'publicacao';
$tituloPagina    = 'Publicação';
$descricaoPagina = 'Normas de submissão, corpo editorial e anais da ' . $evento['titulo']
    . ' - ' . $evento['local'] . '.';

require_once LIB_INCLUDES_2026 . DS . 'cabecalho.php';
?>

    <main>
        <section class="page-section">
            <div class="container">

                <span class="eyebrow">Publicação</span>
                <h1 class="display-title">Submissão e anais</h1>
                <p class="lead-text">
                    Regras e materiais para quem vai submeter trabalho na mostra e para quem quer
                    consultar o que já foi apresentado.
                </p>

                <div class="row g-4">

                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="<?php echo $evento['links']['equipe_editorial']; ?>" target="_blank" rel="noopener" class="card-setif">
                            <i class="bi bi-people-fill card-icon"></i>
                            <h2>Corpo editorial <i class="bi bi-box-arrow-up-right icon-external"></i></h2>
                            <p>Professores dos cursos de Engenharia de Software e Técnico em Informática do
                               IFPR Paranavaí são responsáveis pela avaliação e curadoria dos trabalhos
                               submetidos à mostra.</p>
                        </a>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="<?php echo $evento['links']['submissoes']; ?>" target="_blank" rel="noopener" class="card-setif">
                            <i class="bi bi-file-earmark-check-fill card-icon card-icon--red"></i>
                            <h2>Normas de submissão <i class="bi bi-box-arrow-up-right icon-external"></i></h2>
                            <p>Modelo de resumo, prazos e formato de envio para quem for submeter trabalho na mostra.</p>
                        </a>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="<?php echo $evento['links']['periodicos']; ?>" target="_blank" rel="noopener" class="card-setif">
                            <i class="bi bi-journal-bookmark-fill card-icon card-icon--ink"></i>
                            <h2>Anais <i class="bi bi-box-arrow-up-right icon-external"></i></h2>
                            <p>Coletânea dos trabalhos apresentados nas edições da SETIF, no portal de
                               periódicos do IFPR.</p>
                        </a>
                    </div>

                </div>

            </div>
        </section>
    </main>

<?php require_once LIB_INCLUDES_2026 . DS . 'rodape.php'; ?>
