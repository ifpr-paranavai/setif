/* Fundo animado "cyber grid" com hexágonos, engrenagens e partículas */
(function () {
  const canvas = document.getElementById("cyber-canvas");
  if (!canvas) return;
  const ctx = canvas.getContext("2d");

  let width, height;
  let hexes = [];
  let gears = [];
  let nodes = [];
  let step = 0;

  let mouse = { x: -1000, y: -1000 };

  window.addEventListener("mousemove", (e) => {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
  });

  window.addEventListener("mouseout", () => {
    mouse.x = -1000;
    mouse.y = -1000;
  });

  function drawPoly(context, x, y, radius, sides, angle) {
    context.beginPath();
    for (let i = 0; i < sides; i++) {
      const a = angle + (i * 2 * Math.PI) / sides;
      const px = x + radius * Math.cos(a);
      const py = y + radius * Math.sin(a);
      if (i === 0) context.moveTo(px, py);
      else context.lineTo(px, py);
    }
    context.closePath();
  }

  function drawGear(context, x, y, radius, teeth, angle) {
    context.beginPath();
    const innerRad = radius * 0.72;
    const toothRad = radius * 1.05;
    const angleStep = (Math.PI * 2) / teeth;

    for (let i = 0; i < teeth; i++) {
      const a1 = angle + i * angleStep;
      const a2 = a1 + angleStep * 0.3;
      const a3 = a1 + angleStep * 0.7;
      const a4 = angle + (i + 1) * angleStep;

      if (i === 0) context.moveTo(x + innerRad * Math.cos(a1), y + innerRad * Math.sin(a1));
      else context.lineTo(x + innerRad * Math.cos(a1), y + innerRad * Math.sin(a1));

      context.lineTo(x + toothRad * Math.cos(a2), y + toothRad * Math.sin(a2));
      context.lineTo(x + toothRad * Math.cos(a3), y + toothRad * Math.sin(a3));
      context.lineTo(x + innerRad * Math.cos(a4), y + innerRad * Math.sin(a4));
    }
    context.closePath();

    context.moveTo(x + radius * 0.4, y);
    context.arc(x, y, radius * 0.4, 0, Math.PI * 2);
  }

  function initCanvas() {
    width = canvas.width = window.innerWidth;
    height = canvas.height = window.innerHeight;

    hexes = [];
    const numHex = Math.floor((width * height) / 45000);
    for (let i = 0; i < numHex; i++) {
      hexes.push({
        x: Math.random() * width,
        y: Math.random() * height,
        size: Math.random() * 25 + 15,
        speedY: -(Math.random() * 0.4 + 0.1),
        angle: Math.random() * Math.PI * 2,
        rotSpeed: (Math.random() - 0.5) * 0.008,
        alpha: Math.random() * 0.25 + 0.18
      });
    }

    gears = [];
    const numGears = Math.floor((width * height) / 60000);
    for (let i = 0; i < numGears; i++) {
      gears.push({
        x: Math.random() * width,
        y: Math.random() * height,
        size: Math.random() * 50 + 30,
        teeth: Math.floor(Math.random() * 6) * 2 + 8,
        speedY: -(Math.random() * 0.3 + 0.1),
        angle: Math.random() * Math.PI * 2,
        rotSpeed: (Math.random() - 0.5) * 0.005,
        alpha: Math.random() * 0.25 + 0.15
      });
    }

    nodes = [];
    const numNodes = Math.floor((width * height) / 25000);
    const colors = ["rgba(0, 229, 255,", "rgba(0, 255, 102,", "rgba(0, 136, 255,"];
    for (let i = 0; i < numNodes; i++) {
      const baseColor = colors[Math.floor(Math.random() * colors.length)];
      nodes.push({
        x: Math.random() * width,
        y: Math.random() * height,
        size: Math.random() * 2 + 1,
        speedX: (Math.random() - 0.5) * 0.4,
        speedY: -(Math.random() * 0.5 + 0.2),
        color: baseColor + " 0.8)",
        alpha: Math.random() * 0.5 + 0.2
      });
    }
  }

  window.addEventListener("resize", initCanvas);
  initCanvas();

  function render() {
    ctx.clearRect(0, 0, width, height);
    step += 0.01;

    ctx.lineWidth = 2;
    hexes.forEach(hex => {
      hex.y += hex.speedY;
      hex.angle += hex.rotSpeed;
      if (hex.y < -hex.size) {
        hex.y = height + hex.size;
        hex.x = Math.random() * width;
      }
      ctx.strokeStyle = `rgba(168, 0, 255, ${hex.alpha})`;
      ctx.beginPath();
      drawPoly(ctx, hex.x, hex.y, hex.size, 6, hex.angle);
      ctx.stroke();
    });

    ctx.lineWidth = 1.5;
    gears.forEach(gear => {
      gear.y += gear.speedY;
      gear.angle += gear.rotSpeed;
      if (gear.y < -gear.size) {
        gear.y = height + gear.size;
        gear.x = Math.random() * width;
      }
      ctx.strokeStyle = `rgba(0, 136, 255, ${gear.alpha})`;
      drawGear(ctx, gear.x, gear.y, gear.size, gear.teeth, gear.angle);
      ctx.stroke();
    });

    const gridSize = 65;
    ctx.lineWidth = 1;

    for (let x = 0; x < width; x += gridSize) {
      for (let y = 0; y < height; y += gridSize) {
        let dx = mouse.x - x;
        let dy = mouse.y - y;
        let dist = Math.sqrt(dx * dx + dy * dy);
        let maxDist = 200;

        let offset = Math.sin(step + (x + y) * 0.005) * 3;
        if (dist < maxDist) {
          let factor = (1 - dist / maxDist) * 12;
          offset -= factor;
        }

        ctx.beginPath();
        ctx.arc(x, y + offset, 1.1, 0, Math.PI * 2);
        let pointAlpha = dist < maxDist ? (1 - dist / maxDist) * 0.7 + 0.12 : 0.09;
        ctx.fillStyle = `rgba(0, 136, 255, ${pointAlpha})`;
        ctx.fill();

        if (dist < maxDist * 0.9) {
          ctx.lineWidth = 0.5;
          ctx.strokeStyle = `rgba(0, 229, 255, ${pointAlpha * 0.4})`;
          const neighbors = [[gridSize, 0], [0, gridSize], [gridSize, gridSize], [-gridSize, gridSize]];
          neighbors.forEach(neighbor => {
            const nx = x + neighbor[0];
            const ny = y + neighbor[1];
            if (nx < width && ny < height && nx > 0) {
              ctx.beginPath();
              ctx.moveTo(x, y + offset);
              ctx.lineTo(nx, ny + Math.sin(step + (nx + ny) * 0.005) * 3);
              ctx.stroke();
            }
          });
        }
      }
    }

    nodes.forEach(node => {
      node.y += node.speedY;
      node.x += node.speedX;

      if (node.y < 0) {
        node.y = height;
        node.x = Math.random() * width;
      }

      ctx.beginPath();
      ctx.arc(node.x, node.y, node.size, 0, Math.PI * 2);
      ctx.fillStyle = node.color;
      ctx.globalAlpha = node.alpha;
      ctx.shadowBlur = 10;
      ctx.shadowColor = node.color;
      ctx.fill();
      ctx.shadowBlur = 0;
      ctx.globalAlpha = 1;
    });

    requestAnimationFrame(render);
  }

  render();
})();
