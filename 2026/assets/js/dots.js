document.addEventListener("DOMContentLoaded", () => {
    const canvas = document.getElementById("dots-canvas");
    if (!canvas) return;
    const ctx = canvas.getContext("2d");

    let width, height;
    let dots = [];
    const spacing = 20;
    const baseRadius = 1.0;

    let mouse = { x: -1000, y: -1000, isDown: false };
    
    const repulseRadius = 120; 
    const repulseForce = 40;  
    let ripples = [];

    class Dot {
        constructor(x, y) {
            this.x = x;
            this.y = y;
            this.baseX = x;
            this.baseY = y;
            this.vx = 0;
            this.vy = 0;
        }

        update() {
            let dx = mouse.x - this.x;
            let dy = mouse.y - this.y;
            let distance = Math.sqrt(dx * dx + dy * dy);
            
            let targetX = this.baseX;
            let targetY = this.baseY;

            if (distance < repulseRadius && !isTouchDevice()) {
                let force = (repulseRadius - distance) / repulseRadius;
                if (mouse.isDown) force *= 1.5;
                let angle = Math.atan2(dy, dx);
                targetX = this.baseX - Math.cos(angle) * force * repulseForce;
                targetY = this.baseY - Math.sin(angle) * force * repulseForce;
            }

            ripples.forEach(ripple => {
                let rdx = ripple.x - this.x;
                let rdy = ripple.y - this.y;
                let rDist = Math.sqrt(rdx * rdx + rdy * rdy);
                if (Math.abs(rDist - ripple.radius) < 20) {
                    let rAngle = Math.atan2(rdy, rdx);
                    let intensity = Math.max(0, 1 - ripple.radius / 1000);
                    this.vx -= Math.cos(rAngle) * 8 * intensity;
                    this.vy -= Math.sin(rAngle) * 8 * intensity;
                }
            });

            let ax = (targetX - this.x) * 0.08;
            let ay = (targetY - this.y) * 0.08;
            this.vx += ax;
            this.vy += ay;
            
            this.vx *= 0.75;
            this.vy *= 0.75;

            this.x += this.vx;
            this.y += this.vy;
        }

        draw() {
            let distFromBase = Math.sqrt((this.x - this.baseX) ** 2 + (this.y - this.baseY) ** 2);
            let activeRatio = Math.min(distFromBase / 25, 1); 

            let currentRadius = baseRadius + (activeRatio * 1.5);
            let r = 0;
            let g = Math.floor(166 * activeRatio);
            let b = Math.floor(81 * activeRatio);
            let alpha = 0.3 + (activeRatio * 0.5);

            ctx.beginPath();
            ctx.arc(this.x, this.y, currentRadius, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(${r}, ${g}, ${b}, ${alpha})`;
            ctx.fill();
        }
    }

    function createDots() {
        dots = [];
        for (let x = 0; x < width; x += spacing) {
            for (let y = 0; y < height; y += spacing) {
                dots.push(new Dot(x, y));
            }
        }
    }

    function init() {
        width = window.innerWidth;
        height = window.innerHeight;
        canvas.width = width;
        canvas.height = height;
        createDots();
    }

    function animate() {
        ctx.clearRect(0, 0, width, height);
        
        ripples.forEach((ripple, index) => {
            ripple.radius += 15;
            if (ripple.radius > Math.max(width, height)) {
                ripples.splice(index, 1);
            }
        });

        dots.forEach(dot => {
            dot.update();
            dot.draw();
        });

        let activeDots = dots.filter(d => (d.x - d.baseX)**2 + (d.y - d.baseY)**2 > 20);
        
        ctx.lineWidth = 0.6;
        for (let i = 0; i < activeDots.length; i++) {
            for (let j = i + 1; j < activeDots.length; j++) {
                let d1 = activeDots[i];
                let d2 = activeDots[j];
                let dx = d1.x - d2.x;
                let dy = d1.y - d2.y;
                let distSq = dx*dx + dy*dy;
                
                if (distSq < 2000) {
                    let distFromBase1 = Math.sqrt((d1.x - d1.baseX)**2 + (d1.y - d1.baseY)**2);
                    let opacity = Math.min(distFromBase1 / 30, 0.5);
                    ctx.beginPath();
                    ctx.moveTo(d1.x, d1.y);
                    ctx.lineTo(d2.x, d2.y);
                    ctx.strokeStyle = `rgba(0, 166, 81, ${opacity})`;
                    ctx.stroke();
                }
            }
        }

        requestAnimationFrame(animate);
    }

    function isTouchDevice() {
        return (('ontouchstart' in window) || (navigator.maxTouchPoints > 0));
    }

    window.addEventListener("resize", init);
    window.addEventListener("mousemove", (e) => {
        mouse.x = e.clientX;
        mouse.y = e.clientY;
    });
    window.addEventListener("mousedown", () => mouse.isDown = true);
    window.addEventListener("mouseup", () => mouse.isDown = false);
    window.addEventListener("click", (e) => {
        ripples.push({ x: e.clientX, y: e.clientY, radius: 0 });
    });
    window.addEventListener("mouseout", () => {
        mouse.x = -1000;
        mouse.y = -1000;
        mouse.isDown = false;
    });

    init();
    animate();
});