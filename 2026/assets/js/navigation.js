/**
 * SETIF 2026 - Navegação
 * Fecha o menu mobile ao escolher uma aba.
 */

document.addEventListener("DOMContentLoaded", function () {
  const navbarCollapse = document.querySelector(".navbar-collapse");
  if (!navbarCollapse) return;

  document.querySelectorAll(".navbar-nav .nav-link, .btn-nav-inscricao").forEach((link) => {
    link.addEventListener("click", () => {
      if (!navbarCollapse.classList.contains("show")) return;

      const bsCollapse =
        bootstrap.Collapse.getInstance(navbarCollapse) ||
        new bootstrap.Collapse(navbarCollapse, { toggle: false });
      bsCollapse.hide();
    });
  });
});
