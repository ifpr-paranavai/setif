document.addEventListener("DOMContentLoaded", function () {
  setupScrollAnimations();
  setupHoverEffects();
});

/* Scroll */
function setupScrollAnimations() {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.1 }
  );

  document
    .querySelectorAll(".fade-in-up")
    .forEach((el) => observer.observe(el));
}

/* Hover */
function setupHoverEffects() {
  const cards = document.querySelectorAll(".feature-card");
  cards.forEach((card) => {
    card.addEventListener("mousemove", (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;

      card.style.setProperty("--mouse-x", `${x}px`);
      card.style.setProperty("--mouse-y", `${y}px`);

      const centerX = rect.width / 2;
      const centerY = rect.height / 2;
      const glowX = (x - centerX) / centerX;
      const glowY = (y - centerY) / centerY;
      card.style.setProperty("--glow-x", `${glowX * 20}px`);
      card.style.setProperty("--glow-y", `${glowY * 20}px`);
    });

    card.addEventListener("mouseleave", () => {
      card.style.setProperty("--glow-x", "0px");
      card.style.setProperty("--glow-y", "0px");
    });
  });
}


