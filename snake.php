<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Snake - Canvas (simple)</title>
  <style>
    :root{--bg:#0b1220;--panel:#0f1724;--accent:#10b981;--muted:#94a3b8}
    html,body{height:100%;margin:0;font-family:Inter,system-ui,Segoe UI,Roboto,Arial;background:var(--bg);color:#e6eef8}
    .wrap{min-height:100vh;display:flex;align-items:center;justify-content:center;padding:20px}
    .card{background:linear-gradient(180deg, rgba(255,255,255,0.02), transparent);padding:18px;border-radius:12px;box-shadow:0 8px 30px rgba(2,6,23,0.6);width:760px;max-width:100%}
    header{display:flex;gap:12px;align-items:center;justify-content:space-between;margin-bottom:12px}
    h1{font-size:18px;margin:0}
    .controls{display:flex;gap:8px;align-items:center}
    button{background:var(--panel);border:1px solid rgba(255,255,255,0.04);color:inherit;padding:8px 10px;border-radius:8px;cursor:pointer}
    canvas{display:block;background:#071127;border-radius:8px;width:100%;height:auto}
    .meta{display:flex;gap:12px;align-items:center;margin-top:10px;color:var(--muted);font-size:14px}
    .hint{font-size:13px;color:var(--muted)}
    .score{font-weight:700;color:var(--accent)}
    @media (max-width:520px){.card{padding:12px}}
  </style>
</head>
<body>
  <div class="wrap">
    <div class="card">
      <header>
        <h1>Snake — Canvas (simple)</h1>
        <div class="controls">
          <button id="btnRestart">Redémarrer</button>
          <button id="btnPause">Pause</button>
        </div>
      </header>

      <canvas id="game" width="640" height="480"></canvas>

      <div class="meta">
        <div class="hint">Touches : ← ↑ → ↓ / A W D S — Pause: Espace</div>
        <div style="flex:1"></div>
        <div>Score: <span id="score" class="score">0</span></div>
      </div>

      <p class="hint" style="margin-top:10px">Variables faciles à modifier en haut du script : tailleCase, vitesse (ms), couleur serpent / nourriture.</p>
    </div>
  </div>

<script>
/* Jeu Snake simple — tout dans ce fichier
   Modifiez ces variables pour ajuster le gameplay */
const sizeCase = 20;        // taille d'une case en pixels
const tileCols = 32;       // nombre de cases en largeur
const tileRows = 24;       // nombre de cases en hauteur
const initialSpeed = 120;  // délai boucle jeu en ms (plus petit => plus rapide)

// Couleurs
const colorBackground = '#071127';
const colorGrid = '#0b2540';
const colorSnake = '#10b981';
const colorFood = '#ef4444';
const colorHead = '#34d399';

// --- Setup canvas ---
const canvas = document.getElementById('game');
const ctx = canvas.getContext('2d');
canvas.width = tileCols * sizeCase;
canvas.height = tileRows * sizeCase;

// Game state
let snake = [];         // tableau de segments {x,y}
let dir = {x:1,y:0};    // direction actuelle
let nextDir = {x:1,y:0};
let food = {x:0,y:0};
let score = 0;
let speed = initialSpeed;
let running = true;
let gameInterval = null;

// Initialisation
function resetGame(){
  snake = [];
  const startX = Math.floor(tileCols/2);
  const startY = Math.floor(tileRows/2);
  for(let i=0;i<4;i++){ snake.push({x:startX-i,y:startY}); }
  dir = {x:1,y:0}; nextDir = {x:1,y:0};
  placeFood();
  score = 0; updateScore();
  speed = initialSpeed;
  running = true;
  startLoop();
}

function placeFood(){
  // place la nourriture sur une case vide
  let tries=0;
  while(true){
    const fx = Math.floor(Math.random()*tileCols);
    const fy = Math.floor(Math.random()*tileRows);
    const collision = snake.some(s => s.x===fx && s.y===fy);
    if(!collision){ food={x:fx,y:fy}; break; }
    if(++tries>200) break;
  }
}

function updateScore(){ document.getElementById('score').textContent = score; }

// --- Input ---
window.addEventListener('keydown', e=>{
  const key = e.key;
  if(key==='ArrowUp' || key==='w' || key==='W') tryChangeDir(0,-1);
  if(key==='ArrowDown' || key==='s' || key==='S') tryChangeDir(0,1);
  if(key==='ArrowLeft' || key==='a' || key==='A') tryChangeDir(-1,0);
  if(key==='ArrowRight' || key==='d' || key==='D') tryChangeDir(1,0);
  if(key===' '){ togglePause(); e.preventDefault(); }
});

function tryChangeDir(x,y){
  // Empêche de faire demi-tour
  if(dir.x === -x && dir.y === -y) return;
  nextDir = {x,y};
}

// --- Game loop ---
function startLoop(){
  if(gameInterval) clearInterval(gameInterval);
  gameInterval = setInterval(step, speed);
}

function stopLoop(){ if(gameInterval) clearInterval(gameInterval); gameInterval=null; }

function togglePause(){ running = !running; document.getElementById('btnPause').textContent = running? 'Pause' : 'Reprendre';
  if(running) startLoop(); else stopLoop(); }

function step(){
  // Met à jour la direction
  dir = nextDir;
  // Calcule nouvelle tête
  const head = {x: snake[0].x + dir.x, y: snake[0].y + dir.y};
  // Wrap-around bord
  if(head.x < 0) head.x = tileCols-1;
  if(head.x >= tileCols) head.x = 0;
  if(head.y < 0) head.y = tileRows-1;
  if(head.y >= tileRows) head.y = 0;
  // Collision avec le corps ?
  if(snake.some(seg => seg.x===head.x && seg.y===head.y)){
    // Mort -> restart simple
    running = false; stopLoop();
    // petit effet puis reset
    setTimeout(resetGame, 700);
    return;
  }
  // Ajoute nouvelle tête
  snake.unshift(head);
  // Mange ?
  if(head.x===food.x && head.y===food.y){
    score += 1; updateScore();
    placeFood();
    // accélère légèrement tous les 5 points
    if(score % 5 === 0 && speed > 40){ speed = Math.max(40, speed - 8); startLoop(); }
  } else {
    // enlève la queue
    snake.pop();
  }
  draw();
}

// --- Drawing ---
function clear(){
  ctx.fillStyle = colorBackground; ctx.fillRect(0,0,canvas.width,canvas.height);
}

function drawGrid(){
  ctx.strokeStyle = colorGrid; ctx.lineWidth = 1;
  for(let x=0;x<=tileCols;x++){
    ctx.beginPath(); ctx.moveTo(x*sizeCase,0); ctx.lineTo(x*sizeCase,canvas.height); ctx.stroke();
  }
  for(let y=0;y<=tileRows;y++){
    ctx.beginPath(); ctx.moveTo(0,y*sizeCase); ctx.lineTo(canvas.width,y*sizeCase); ctx.stroke();
  }
}

function draw(){
  clear();
  // grid (optionnel)
  // drawGrid();

  // nourriture
  drawRect(food.x, food.y, colorFood);

  // serpent
  for(let i=snake.length-1;i>=0;i--){
    const seg = snake[i];
    if(i===0){ drawRect(seg.x, seg.y, colorHead); }
    else { drawRect(seg.x, seg.y, colorSnake); }
  }
}

function drawRect(tx,ty, color){
  const px = tx * sizeCase;
  const py = ty * sizeCase;
  const pad = Math.max(0, Math.floor(sizeCase*0.06));
  ctx.fillStyle = color;
  ctx.fillRect(px+pad, py+pad, sizeCase-2*pad, sizeCase-2*pad);
}

// Buttons
document.getElementById('btnRestart').addEventListener('click', ()=>{ resetGame(); });
document.getElementById('btnPause').addEventListener('click', ()=>{ togglePause(); });

// Mobile touch: détecte swipe simple
let touchStart = null;
canvas.addEventListener('touchstart', e=>{ const t = e.touches[0]; touchStart = {x:t.clientX, y:t.clientY}; });
canvas.addEventListener('touchend', e=>{
  if(!touchStart) return;
  const t = e.changedTouches[0];
  const dx = t.clientX - touchStart.x; const dy = t.clientY - touchStart.y;
  if(Math.abs(dx) > Math.abs(dy)){
    if(dx>20) tryChangeDir(1,0); else if(dx<-20) tryChangeDir(-1,0);
  } else {
    if(dy>20) tryChangeDir(0,1); else if(dy<-20) tryChangeDir(0,-1);
  }
  touchStart = null;
});

// Lancement
resetGame();
</script>
</body>
</html>
