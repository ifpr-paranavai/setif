/**
 * SETIF 2026 - Scripts da página
 */

document.addEventListener("DOMContentLoaded", function () {
  setupCountdown();
});

/* Contagem regressiva até a data oficial do evento (horário de Brasília) */
function setupCountdown() {
  const daysEl = document.getElementById("days");
  const hoursEl = document.getElementById("hours");
  const minutesEl = document.getElementById("minutes");
  const secondsEl = document.getElementById("seconds");

  // O contador só existe na página inicial
  if (!daysEl || !hoursEl || !minutesEl || !secondsEl) return;

  const targetDate = new Date("2026-11-04T08:00:00-03:00").getTime();

  function pad(value) {
    return String(value).padStart(2, "0");
  }

  function updateCountdown() {
    const difference = Math.max(0, targetDate - Date.now());

    daysEl.innerText = pad(Math.floor(difference / 86400000));
    hoursEl.innerText = pad(Math.floor((difference % 86400000) / 3600000));
    minutesEl.innerText = pad(Math.floor((difference % 3600000) / 60000));
    secondsEl.innerText = pad(Math.floor((difference % 60000) / 1000));
  }

  updateCountdown();
  setInterval(updateCountdown, 1000);
}
