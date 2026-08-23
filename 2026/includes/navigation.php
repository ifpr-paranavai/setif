<header class="site-header">
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#inicio">
        <img src="2026/assets/images/logo-ifpr.png" alt="Logo IFPR Campus Paranavaí" class="logo-img-ifpr">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Abrir menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#inicio">Início</a></li>
          <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="#programacao">Programação</a></li>
          <li class="nav-item"><a class="nav-link" href="#inscricoes">Inscrição</a></li>
          <li class="nav-item"><a class="nav-link" href="#local">Localização</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="maisDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Mais
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="maisDropdown">
              <li><a class="dropdown-item" href="<?php echo $evento['links']['equipe_editorial']; ?>" target="_blank">Corpo Editorial</a></li>
              <li><a class="dropdown-item" href="<?php echo $evento['links']['submissoes']; ?>" target="_blank">Normas de Submissão</a></li>
              <li><a class="dropdown-item" href="<?php echo $evento['links']['anais']; ?>" target="_blank">Anais</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="<?php echo $evento['links']['ed_2025']; ?>">SETIF 2025</a></li>
              <li><a class="dropdown-item" href="<?php echo $evento['links']['ed_2024']; ?>">SETIF 2024</a></li>
              <li><a class="dropdown-item" href="<?php echo $evento['links']['ed_2023']; ?>">SETIF 2023</a></li>
              <li><a class="dropdown-item" href="<?php echo $evento['links']['ed_2022']; ?>">SETIF 2022</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
