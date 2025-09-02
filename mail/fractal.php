<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Fractale Arbre</title>
<style>
  body { margin: 0; background: #000; }
  canvas { display: block; margin: 0 auto; background: #111; }
</style>
</head>
<body>
<canvas id="canvas"></canvas>
<script>
const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

function drawBranch(x, y, length, angle, depth) {
    if (depth === 0) return;

    const x2 = x + length * Math.cos(angle);
    const y2 = y + length * Math.sin(angle);

    ctx.strokeStyle = `hsl(${depth * 20}, 100%, 50%)`;
    ctx.lineWidth = depth;
    ctx.beginPath();
    ctx.moveTo(x, y);
    ctx.lineTo(x2, y2);
    ctx.stroke();

    // Appels récursifs pour les branches
    drawBranch(x2, y2, length * 0.7, angle - Math.PI / 6, depth - 1);
    drawBranch(x2, y2, length * 0.7, angle + Math.PI / 6, depth - 1);
}

// Dessin initial
function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    drawBranch(canvas.width/2, canvas.height, 120, -Math.PI/2, 10);
}

draw();
</script>
</body>
</html>
