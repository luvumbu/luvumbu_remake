<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Canvas plein de points</title>
<style>
  html,body { height:100%; margin:0; background:#000; overflow:hidden; }
  canvas { display:block; width:100%; height:100%; background:#000; cursor:grab; }
  canvas:active { cursor:grabbing; }
</style>
</head>
<body>
<canvas id="c"></canvas>
<script>
const canvas = document.getElementById('c');
const ctx = canvas.getContext('2d');

// Taille canvas
function resize() {
  const dpr = window.devicePixelRatio || 1;
  canvas.width = Math.floor(window.innerWidth * dpr);
  canvas.height = Math.floor(window.innerHeight * dpr);
  canvas.style.width = window.innerWidth + 'px';
  canvas.style.height = window.innerHeight + 'px';
  ctx.setTransform(dpr,0,0,dpr,0,0);
  draw();
}
window.addEventListener('resize', resize);

// Monde virtuel
const WORLD_WIDTH = 100000;
const WORLD_HEIGHT = 100000;

// Points
let pointSize = 1; // carré 3px
let numPoints = 80000; // beaucoup de points
let points = [];

function generatePoints() {
  points = [];
  for(let i=0; i<numPoints; i++){
    const x = Math.random() * WORLD_WIDTH - WORLD_WIDTH/2;
    const y = Math.random() * WORLD_HEIGHT - WORLD_HEIGHT/2;
    points.push({x,y});
  }
}
generatePoints();

// Caméra
let scale = 1;
let offsetX = canvas.width/2;
let offsetY = canvas.height/2;
let isDragging = false;
let lastX, lastY;

// Zoom molette
canvas.addEventListener('wheel', e=>{
  e.preventDefault();
  const zoomFactor = 1.1;
  const mouseX = e.offsetX;
  const mouseY = e.offsetY;
  const delta = e.deltaY<0 ? zoomFactor : 1/zoomFactor;
  offsetX = mouseX - (mouseX - offsetX)*delta;
  offsetY = mouseY - (mouseY - offsetY)*delta;
  scale *= delta;
  draw();
});

// Pan
canvas.addEventListener('mousedown', e => { isDragging=true; lastX=e.clientX; lastY=e.clientY; });
canvas.addEventListener('mouseup', ()=>isDragging=false);
canvas.addEventListener('mouseleave', ()=>isDragging=false);
canvas.addEventListener('mousemove', e=>{
  if(isDragging){
    offsetX += e.clientX - lastX;
    offsetY += e.clientY - lastY;
    lastX = e.clientX;
    lastY = e.clientY;
    draw();
  }
});

// Dessin
function draw(){
  ctx.save();
  ctx.setTransform(1,0,0,1,0,0);
  ctx.clearRect(0,0,canvas.width,canvas.height);
  ctx.restore();

  ctx.fillStyle='#000';
  ctx.fillRect(0,0,canvas.width,canvas.height);

  ctx.save();
  ctx.translate(offsetX,offsetY);
  ctx.scale(scale,scale);
  ctx.fillStyle='#fff';
  const half = pointSize/2;
  for(const p of points){
    ctx.fillRect(p.x-half, p.y-half, pointSize, pointSize);
  }
  ctx.restore();
}

// Clavier
window.addEventListener('keydown', e=>{
  if(e.key==='r'){ generatePoints(); draw(); }
  else if(e.key==='0'){ scale=1; offsetX=canvas.width/2; offsetY=canvas.height/2; draw(); }
});

resize();
</script>
</body>
</html>
