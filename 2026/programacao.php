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

                <span class="eyebrow">Programação</span>
                <h1 class="display-title">Três formatos, uma semana</h1>
                <p class="lead-text">
                    A SETIF reúne palestras, mostra de trabalhos e minicursos organizados por alunos
                    e professores do <?php echo $evento['local']; ?>.
                </p>

                <div class="d-flex flex-column gap-3">

                    <article class="format-card">
                        <span class="format-badge format-badge--green"><i class="bi bi-easel-fill"></i></span>
                        <div>
                            <h2>Palestras</h2>
                            <p>Ministrado por pessoas com alto conhecimento no tema escolhido trazendo assuntos recentes e relevantes de TI para a plateia.</p>
                        </div>
                    </article>

                    <article class="format-card">
                        <span class="format-badge format-badge--red"><i class="bi bi-layers-fill"></i></span>
                        <div>
                            <h2>Mostra de trabalhos</h2>
                            <p>Exposição dos projetos desenvolvidos pelos alunos dos cursos presentes no campus, aberto ao público.</p>
                        </div>
                    </article>

                    <article class="format-card">
                        <span class="format-badge format-badge--ink"><i class="bi bi-laptop-fill"></i></span>
                        <div>
                            <h2>Minicursos</h2>
                            <p>Preparados e ministrados pelos próprios alunos, para outros estudantes ou qualquer pessoa de fora do IFPR.</p>
                        </div>
                    </article>

                </div>

                <h2 class="section-title mt-5">Cronograma</h2>

                <?php if (!empty($evento['even3_slug'])): ?>
                    <iframe
                        class="even3-frame"
                        src="https://www.even3.com.br/widget/index?evento=<?php echo urlencode($evento['even3_slug']); ?>&amp;type=session&amp;lang=pt"
                        title="Cronograma da <?php echo $evento['titulo']; ?> (Even3)"
                        loading="lazy"
                        allowfullscreen></iframe>
                <?php else: ?>
                    <div class="notice-box">
                        <i class="bi bi-calendar-event"></i>
                        <h3>Grade em breve no Even3</h3>
                        <p>Assim como nas edições anteriores, o cronograma completo com dias, horários
                           e sessões.</p>
                    </div>
                <?php endif; ?>

            </div>
        </section>
    </main>

<?php require_once LIB_INCLUDES_2026 . DS . 'rodape.php'; ?>
