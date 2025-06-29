<section class="galactic-net color_white" >
  <h2><?=   replace_element_2($title_projet[0])?></h2>
 
  <canvas id="galacticCanvas"></canvas>
</section>

<style>
.galactic-net {
  position: relative;
  background: linear-gradient(135deg, #050010, #0a0f3f);
  
  padding: 6rem 2rem;
  text-align: center;
  overflow: hidden;
  font-family: 'Orbitron', sans-serif;
}
.color_white{
  color: white;
  text-shadow: 1px 1px 4px white;
}
#galacticCanvas {
  position: absolute;
  top: 0; left: 0;
  width: 100%;
 
  pointer-events: auto; /* Important pour capter la souris */
  z-index: 1;
}
.galactic-net h2,
.galactic-net p {
  position: relative;
  z-index: 2;
}
</style>

<script>
const canvasG = document.getElementById('galacticCanvas');
const ctxG = canvasG.getContext('2d');
canvasG.width = window.innerWidth;
canvasG.height = 400;

const stars = Array.from({length: 80}, () => ({
  x: Math.random() * canvasG.width,
  y: Math.random() * canvasG.height,
  dx: (Math.random() - 0.5) * 0.8,
  dy: (Math.random() - 0.5) * 0.8
}));

let mouse = { x: null, y: null };

// Ajouter une étoile au clic
canvasG.addEventListener('click', (e) => {
  const rect = canvasG.getBoundingClientRect();
  const x = e.clientX - rect.left;
  const y = e.clientY - rect.top;

  stars.push({
    x: x,
    y: y,
    dx: (Math.random() - 0.5) * 0.8,
    dy: (Math.random() - 0.5) * 0.8
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

function animateStars() {
  ctxG.clearRect(0, 0, canvasG.width, canvasG.height);

  for (let star of stars) {
    star.x += star.dx;
    star.y += star.dy;

    if (star.x < 0 || star.x > canvasG.width) star.dx *= -1;
    if (star.y < 0 || star.y > canvasG.height) star.dy *= -1;

    ctxG.beginPath();
    ctxG.arc(star.x, star.y, 1.5, 0, Math.PI * 2);
    ctxG.fillStyle = '#00ffff88';
    ctxG.fill();
  }

  for (let i = 0; i < stars.length; i++) {
    for (let j = i + 1; j < stars.length; j++) {
      const dx = stars[i].x - stars[j].x;
      const dy = stars[i].y - stars[j].y;
      const dist = Math.sqrt(dx*dx + dy*dy);
      if (dist < 100) {
        ctxG.beginPath();
        ctxG.moveTo(stars[i].x, stars[i].y);
        ctxG.lineTo(stars[j].x, stars[j].y);
        ctxG.strokeStyle = 'rgba(0,255,255,0.05)';
        ctxG.stroke();
      }
    }

    if (mouse.x !== null && mouse.y !== null) {
      const dx = stars[i].x - mouse.x;
      const dy = stars[i].y - mouse.y;
      const dist = Math.sqrt(dx*dx + dy*dy);
      if (dist < 100) {
        ctxG.beginPath();
        ctxG.moveTo(stars[i].x, stars[i].y);
        ctxG.lineTo(mouse.x, mouse.y);
        ctxG.strokeStyle = `rgba(0,255,255,${1 - dist / 100})`;
        ctxG.stroke();
      }
    }
  }

  requestAnimationFrame(animateStars);
}

animateStars();

window.addEventListener('resize', () => {
  canvasG.width = window.innerWidth;
  canvasG.height = 400;
});
</script>



<style>
section {
  max-width: 100%;
  overflow-x: hidden;
  box-sizing: border-box;
}
</style>

