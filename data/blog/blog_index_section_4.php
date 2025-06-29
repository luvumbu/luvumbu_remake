<section class="ai-network">
  <h2>Intelligence Augmentée</h2>
  <p>Une nouvelle ère de perception assistée par les données intelligentes.</p>
  <canvas id="neuralCanvas"></canvas>
</section>

<style>
.ai-network {
  position: relative;
  background: #0d0d0d;
  color: #00ffff;
  text-align: center;
  padding: 6rem 2rem;
  overflow: hidden;
}
.ai-network h2 {
  font-size: 2.5rem;
  z-index: 2;
  position: relative;
  font-family: 'Orbitron', sans-serif;
}
.ai-network p {
  max-width: 600px;
  margin: auto;
  z-index: 2;
  position: relative;
}
#neuralCanvas {
  position: absolute;
  top: 0; left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  pointer-events: none;
}
</style>

<script>
// Simple neural network animation
const canvas = document.getElementById('neuralCanvas');
const ctx = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = 300;
const nodes = Array.from({length: 50}, () => ({
  x: Math.random() * canvas.width,
  y: Math.random() * canvas.height,
  dx: Math.random() - 0.5,
  dy: Math.random() - 0.5
}));
function animate() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  for (let node of nodes) {
    node.x += node.dx;
    node.y += node.dy;
    if (node.x < 0 || node.x > canvas.width) node.dx *= -1;
    if (node.y < 0 || node.y > canvas.height) node.dy *= -1;
    ctx.beginPath();
    ctx.arc(node.x, node.y, 2, 0, Math.PI * 2);
    ctx.fillStyle = '#00ffff';
    ctx.fill();
  }
  for (let i = 0; i < nodes.length; i++) {
    for (let j = i + 1; j < nodes.length; j++) {
      const dx = nodes[i].x - nodes[j].x;
      const dy = nodes[i].y - nodes[j].y;
      const dist = Math.sqrt(dx*dx + dy*dy);
      if (dist < 100) {
        ctx.beginPath();
        ctx.moveTo(nodes[i].x, nodes[i].y);
        ctx.lineTo(nodes[j].x, nodes[j].y);
        ctx.strokeStyle = 'rgba(0,255,255,0.1)';
        ctx.stroke();
      }
    }
  }
  requestAnimationFrame(animate);
}
animate();
</script>
