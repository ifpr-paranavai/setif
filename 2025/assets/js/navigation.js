document.querySelectorAll(".nav-link:not(.dropdown-toggle)").forEach((link) => {
  link.addEventListener("click", (e) => {
    // Verifica se o clique não foi em um item de dropdown ou no toggle
    if (
      !link.closest(".dropdown-menu") &&
      !link.classList.contains("dropdown-toggle")
    ) {
      const navbarCollapse = document.querySelector(".navbar-collapse");
      if (navbarCollapse.classList.contains("show")) {
        // Usa o Collapse do Bootstrap para fechar com animação
        const bsCollapse =
          bootstrap.Collapse.getInstance(navbarCollapse) ||
          new bootstrap.Collapse(navbarCollapse, { toggle: false });
        bsCollapse.hide();
      }
    }
  });
});
