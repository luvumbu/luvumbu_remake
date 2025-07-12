<section class="galactic-net color_white">
  <h2><?= replace_element_2($title_projet[0]) ?></h2>
  <canvas id="galacticCanvas"></canvas>
</section>

<style>
.galactic-net {
  position: relative;
  background: linear-gradient(135deg, #1a1a1a, #2e2e2e);
  padding: 6rem 2rem;
  text-align: center;
  overflow: hidden;
  font-family: 'Orbitron', sans-serif;
}
.color_white {
  color: white;
  text-shadow: 1px 1px 4px white;
}
#galacticCanvas {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 400px;
  pointer-events: auto;
  z-index: 1;
}
.galactic-net h2 {
  position: relative;
  z-index: 2;
}
section {
  max-width: 100%;
  overflow-x: hidden;
  box-sizing: border-box;
}
</style>

<script>
const canvasG = document.getElementById('galacticCanvas');
const ctxG = canvasG.getContext('2d');
canvasG.width = window.innerWidth;
canvasG.height = 400;

// Créer des fourmis avec position, angle et vitesse
const ants = Array.from({ length: 50 }, () => ({
  x: Math.random() * canvasG.width,
  y: Math.random() * canvasG.height,
  angle: Math.random() * 2 * Math.PI,
  speed: 0.6 + Math.random() * 0.4,
}));

let mouse = { x: null, y: null };

// Ajoute une fourmi au clic
canvasG.addEventListener('click', (e) => {
  const rect = canvasG.getBoundingClientRect();
  const x = e.clientX - rect.left;
  const y = e.clientY - rect.top;

  ants.push({
    x,
    y,
    angle: Math.random() * 2 * Math.PI,
    speed: 0.6 + Math.random() * 0.4
  });
});

canvasG.addEventListener('mousemove', (e) => {
  const rect = canvasG.getBoundingClientRect();
  mouse.x = e.clientX - rect.left;
  mouse.y = e.clientY - rect.top;
});

canvasG.addEventListener('mouseleave', () => {
  mouse.x = null;
  mouse.y = null;
});

function animateAnts() {
  ctxG.clearRect(0, 0, canvasG.width, canvasG.height);

  for (let ant of ants) {
    // Déplacement avec zigzag subtil
    ant.angle += (Math.random() - 0.5) * 0.2;
    ant.x += Math.cos(ant.angle) * ant.speed;
    ant.y += Math.sin(ant.angle) * ant.speed;

    // Rebond aux bords
    if (ant.x < 0 || ant.x > canvasG.width) ant.angle = Math.PI - ant.angle;
    if (ant.y < 0 || ant.y > canvasG.height) ant.angle = -ant.angle;

    // Dessiner l’emoji 🐜
    ctxG.font = '16px serif';
    ctxG.fillText('🐜', ant.x, ant.y);
  }

  // Tracer des liens entre les fourmis
  for (let i = 0; i < ants.length; i++) {
    for (let j = i + 1; j < ants.length; j++) {
      const dx = ants[i].x - ants[j].x;
      const dy = ants[i].y - ants[j].y;
      const dist = Math.sqrt(dx * dx + dy * dy);
      if (dist < 60) {
        ctxG.beginPath();
        ctxG.moveTo(ants[i].x, ants[i].y);
        ctxG.lineTo(ants[j].x, ants[j].y);
        ctxG.strokeStyle = `rgba(0,255,100,${1 - dist / 60})`;
        ctxG.lineWidth = 0.5;
        ctxG.stroke();
      }
    }

    // Lien avec la souris
    if (mouse.x !== null && mouse.y !== null) {
      const dx = ants[i].x - mouse.x;
      const dy = ants[i].y - mouse.y;
      const dist = Math.sqrt(dx * dx + dy * dy);
      if (dist < 80) {
        ctxG.beginPath();
        ctxG.moveTo(ants[i].x, ants[i].y);
        ctxG.lineTo(mouse.x, mouse.y);
        ctxG.strokeStyle = `rgba(0,255,180,${1 - dist / 80})`;
        ctxG.stroke();
      }
    }
  }

  requestAnimationFrame(animateAnts);
}

animateAnts();

window.addEventListener('resize', () => {
  canvasG.width = window.innerWidth;
  canvasG.height = 400;
});
</script>
