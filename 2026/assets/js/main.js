document.addEventListener("DOMContentLoaded", function () {
  lucide.createIcons();
  setupCardTilt();
  setupContactCardSpin();
  setupCountdown();
});

/* Inclinação 3D dos ícones dos cards ao passar o mouse */
function setupCardTilt() {
  document.querySelectorAll(".card").forEach(card => {
    const icon = card.querySelector(".card-icon");
    if (!icon) return;

    card.addEventListener("mousemove", (e) => {
      const rect = icon.getBoundingClientRect();
      const deltaX = e.clientX - (rect.left + rect.width / 2);
      const deltaY = e.clientY - (rect.top + rect.height / 2);

      const moveX = Math.min(Math.max(deltaX * 0.18, -14), 14);
      const moveY = Math.min(Math.max(deltaY * 0.18, -14), 14);
      const rotate = Math.min(Math.max(deltaX * 0.08, -15), 15);

      icon.style.transform = `translate3d(${moveX}px, ${moveY}px, 0) rotate(${rotate}deg) scale(1.12)`;
    });

    card.addEventListener("mouseleave", () => {
      icon.style.transform = "translate3d(0, 0, 0) rotate(0deg) scale(1)";
    });
  });
}

/* Glow + inclinação 3D dos cards de contato */
function setupContactCardSpin() {
  document.querySelectorAll(".contact-card").forEach(card => {
    const icon = card.querySelector(".icon-spin-circle");

    card.addEventListener("mousemove", (e) => {
      const rect = card.getBoundingClientRect();

      const mouseX = e.clientX - rect.left;
      const mouseY = e.clientY - rect.top;
      card.style.setProperty("--mouse-x", `${mouseX}px`);
      card.style.setProperty("--mouse-y", `${mouseY}px`);

      if (!icon) return;

      const iconRect = icon.getBoundingClientRect();
      const iconCenterX = iconRect.left + iconRect.width / 2;
      const iconCenterY = iconRect.top + iconRect.height / 2;

      const deltaX = e.clientX - iconCenterX;
      const deltaY = e.clientY - iconCenterY;

      let angleDeg = Math.atan2(deltaY, deltaX) * (180 / Math.PI);
      if (angleDeg < 0) angleDeg += 360;
      card.style.setProperty("--hue", `${angleDeg}`);

      const moveX = Math.min(Math.max(deltaX * 0.22, -18), 18);
      const moveY = Math.min(Math.max(deltaY * 0.22, -18), 18);
      const tiltX = (deltaY / rect.height) * -25;
      const tiltY = (deltaX / rect.width) * 25;

      icon.style.transform = `translate3d(${moveX}px, ${moveY}px, 15px) rotateX(${tiltX}deg) rotateY(${tiltY}deg) scale(1.15)`;
    });

    card.addEventListener("mouseleave", () => {
      if (icon) {
        icon.style.transform = "translate3d(0, 0, 0) rotateX(0deg) rotateY(0deg) scale(1)";
      }
    });
  });
}

/* Contador regressivo até a data oficial do evento (horário de Brasília) */
function setupCountdown() {
  const targetDate = new Date("2026-11-04T08:00:00-03:00").getTime();

  const daysEl = document.getElementById("days");
  const hoursEl = document.getElementById("hours");
  const minutesEl = document.getElementById("minutes");
  const secondsEl = document.getElementById("seconds");
  if (!daysEl) return;

  function updateCountdown() {
    const now = new Date().getTime();
    const difference = targetDate - now;

    if (difference <= 0) {
      daysEl.innerText = "00";
      hoursEl.innerText = "00";
      minutesEl.innerText = "00";
      secondsEl.innerText = "00";
      return;
    }

    const d = Math.floor(difference / (1000 * 60 * 60 * 24));
    const h = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const m = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
    const s = Math.floor((difference % (1000 * 60)) / 1000);

    daysEl.innerText = String(d).padStart(2, "0");
    hoursEl.innerText = String(h).padStart(2, "0");
    minutesEl.innerText = String(m).padStart(2, "0");
    secondsEl.innerText = String(s).padStart(2, "0");
  }

  setInterval(updateCountdown, 1000);
  updateCountdown();
}
