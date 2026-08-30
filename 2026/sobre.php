<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/setif/init.php';

$paginaAtual     = 'sobre';
$tituloPagina    = 'Sobre & Local';
$descricaoPagina = 'Conheça a ' . $evento['titulo'] . ' e o ' . $evento['local'] . '. Endereço: '
    . $evento['endereco'] . '.';

require_once LIB_INCLUDES_2026 . DS . 'cabecalho.php';
?>

    <main>

        <section class="photo-hero photo-hero--compact">
            <div class="container">
                <span class="eyebrow eyebrow--light">Sobre</span>
                <h1 class="display-title">O IFPR, a SETIF e o local</h1>
            </div>
        </section>

        <section class="page-section">
            <div class="container">
                <div class="row g-4">

                    <div class="col-12 col-lg-6">
                        <div class="about-block about-block--green">
                            <h2>O que é o IFPR</h2>
                            <p>O Instituto Federal do Paraná (IFPR) é uma instituição pública federal de ensino vinculada ao 
                                Ministério da Educação (MEC) por meio da Secretaria de Educação Profissional e Tecnológica (Setec). 
                                É voltada à educação superior, básica e profissional, especializada na oferta gratuita de educação 
                                profissional e tecnológica nas diferentes modalidades e níveis de ensino.</p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="about-block about-block--red">
                            <h2>O que é a SETIF</h2>
                            <p>A Semana de Tecnologia da Informação do IFPR - Campus Paranavaí (SETIF) é um evento científico que 
                                tem como objetivo reunir estudantes, professores, pesquisadores, profissionais da área de Tecnologia 
                                da Informação e a comunidade em geral, promovendo mostra de trabalhos, minicursos, palestras e competições 
                                de programação, envolvendo os cursos Técnico Integrado em Informática (Ensino Médio) e Bacharelado em Engenharia 
                                de Software (Superior).</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="local" class="page-section pt-0">
            <div class="container">
                <h2 class="section-title">Local</h2>

                <div class="row g-4 align-items-start">

                    <div class="col-12 col-lg-5">
                        <p class="venue-name"><?php echo $evento['local']; ?></p>
                        <p class="venue-address">Av. José Felipe Tequinha, 1400</p>
                        <p class="venue-address">Jardim das Nações, Paranavaí - PR</p>

                        <div class="contact-list">
                            <a href="mailto:<?php echo $evento['contatos']['eng-soft']; ?>">
                                <i class="bi bi-envelope-fill"></i><?php echo $evento['contatos']['eng-soft']; ?>
                            </a>
                            <a href="mailto:<?php echo $evento['contatos']['ti-info']; ?>">
                                <i class="bi bi-envelope-fill"></i><?php echo $evento['contatos']['ti-info']; ?>
                            </a>
                            <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $evento['contatos']['telefone']); ?>">
                                <i class="bi bi-telephone-fill"></i><?php echo $evento['contatos']['telefone']; ?>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-lg-7">
                        <iframe
                            class="map-frame"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.1691111640016!2d-52.45690082490713!3d-23.054260879151514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x949296a233a74981%3A0x8aed8519780a4c71!2sIFPR%20-%20Instituto%20Federal%20do%20Paran%C3%A1%20-%20Campus%20Paranava%C3%AD!5e0!3m2!1spt-BR!2sbr!4v1755525838778!5m2!1spt-BR!2sbr"
                            title="Localização do <?php echo $evento['local']; ?>"
                            loading="lazy"
                            allowfullscreen></iframe>
                    </div>

                </div>
            </div>
        </section>

    </main>

<?php require_once LIB_INCLUDES_2026 . DS . 'rodape.php'; ?>
