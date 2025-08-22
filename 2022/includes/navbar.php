<div class="container-fluid px-0">
    <img src="img/setif3.png" alt="Setif">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10"
            aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarsExample10">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'index') {echo 'active';} ?>"
                        href="index.php">Apresentação</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'inscricao') {echo 'active';} ?>"
                        href="inscricao.php">Inscrições</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'programacao') {echo 'active';} ?>"
                        href="programacao.php">Programação</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://docs.google.com/document/d/e/2PACX-1vSqjrO257UjNRMqVDJ7NlpO6S3V6wsOYLVKRWwqY6_5sGyvqlO23heYvg4Q2CyQHQsAsxfQukZiEno6/pub" target="_blank">Ensalamento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'normasPublicacao') {echo 'active';} ?>"
                        href="normasPublicacao.php">Normas de Publicação</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'minicursos') {echo 'active';} ?>"
                        href="minicursos.php">Minicursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'anaisEvento') {echo 'active';} ?>"
                        href="anaisEvento.php">Anais Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'corpoEditorial') {echo 'active';} ?>"
                        href="corpoEditorial.php">Corpo Editorial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'fotosEvento') {echo 'active';} ?>"
                        href="fotosEvento.php">Fotos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($currentPage === 'cosplay') {echo 'active';} ?>"
                        href="cosplay.php">Concurso de Cosplay</a>
                </li>
            </ul>
        </div>
    </nav>
</div>