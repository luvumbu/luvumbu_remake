<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Révélation Image Canvas Cercle</title>
<style>
  body {
    background: #111;
    color:#eee;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    font-family:sans-serif;
    margin:20px;
  }
  #wrap {
    position: relative;
    overflow: hidden; /* on peut cacher le débordement si souhaité */
  }
  canvas {
    display:block;
    border:2px solid #444;
    cursor:crosshair;
    border-radius:6px;
  }
  #textOverlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    text-shadow: 1px 1px 4px black;
    font-size: 48px;
    font-weight: bold;
    pointer-events: none; /* souris passe à travers */
    user-select: text;    /* texte copiable */
    white-space: nowrap;
  }
  button {
    margin-top: 10px;
    padding: 6px 12px;
    border: none;
    border-radius:6px;
    cursor: pointer;
    background:#333;
    color:#eee;
  }
</style>
</head>
<body>

<div id="wrap">
  <canvas id="canvas"></canvas>
  <div id="textOverlay">WELCOME</div>
  <button id="resetBtn">Réinitialiser</button>
</div>

<script>
const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

const imgBottom = new Image(); // image du dessous
const imgTop = new Image();    // image du dessus
imgBottom.src = '01.jpg';
imgTop.src = '02.jpg';

let loaded = 0;
const brush = 20; // rayon du cercle

function onLoad() {
  loaded++;
  if(loaded === 2){
    // dimensions internes du canvas = dimensions naturelles de l'image
    canvas.width = imgTop.naturalWidth;
    canvas.height = imgTop.naturalHeight;

    drawBoth();

    canvas.addEventListener('mousemove', drawReveal);
    canvas.addEventListener('touchmove', drawRevealTouch, {passive:false});
  }
}

imgBottom.onload = imgTop.onload = onLoad;

// Dessiner les images
function drawBoth(){
  ctx.clearRect(0,0,canvas.width,canvas.height);
  ctx.drawImage(imgBottom, 0, 0, canvas.width, canvas.height);
  ctx.drawImage(imgTop, 0, 0, canvas.width, canvas.height);
}

// Convertir coords DOM -> canvas
function domToCanvasCoords(domX, domY){
  const rect = canvas.getBoundingClientRect();
  const scaleX = canvas.width / rect.width;
  const scaleY = canvas.height / rect.height;
  return { x: (domX - rect.left)*scaleX, y: (domY - rect.top)*scaleY };
}

// Révélation cercle
function drawReveal(e){
  const p = domToCanvasCoords(e.clientX, e.clientY);
  ctx.save();
  ctx.beginPath();
  ctx.arc(p.x, p.y, brush, 0, Math.PI*2);
  ctx.clip();
  ctx.drawImage(imgBottom, 0, 0, canvas.width, canvas.height);
  ctx.restore();
}

// Touch support
function drawRevealTouch(e){
  e.preventDefault();
  for(let t of e.touches){
    const p = domToCanvasCoords(t.clientX, t.clientY);
    ctx.save();
    ctx.beginPath();
    ctx.arc(p.x, p.y, brush, 0, Math.PI*2);
    ctx.clip();
    ctx.drawImage(imgBottom, 0, 0, canvas.width, canvas.height);
    ctx.restore();
  }
}

// Reset button
document.getElementById('resetBtn').addEventListener('click', ()=>{
  drawBoth();
});
</script>

</body>
</html>
