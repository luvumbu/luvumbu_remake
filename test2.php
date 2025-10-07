<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HackPlatformer - Mobile</title>
<style>
  body, html {
    margin:0;
    padding:0;
    background:black;
    overflow:hidden;
    font-family:'Share Tech Mono', monospace;
  }
  canvas { display:block; background:black; }

  #hud {
    position:absolute;
    top:10px;
    left:50%;
    transform:translateX(-50%);
    color:#00ff99;
    font-size:18px;
    z-index:10;
    text-align:center;
  }

  #instructions {
    position:absolute;
    bottom:80px;
    left:50%;
    transform:translateX(-50%);
    color:#00ff99;
    font-size:16px;
    text-align:center;
    z-index:10;
  }

  #controls {
    position:fixed;
    bottom:20px;
    left:50%;
    transform:translateX(-50%);
    display:flex;
    gap:20px;
    z-index:10;
  }
  #controls button {
    font-size:24px;
    padding:15px 20px;
    background:#111;
    color:#00ff99;
    border:1px solid #00ff99;
    border-radius:10px;
  }

  .story {
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    color:#00ff99;
    background:rgba(0,0,0,0.8);
    padding:20px;
    border:1px solid #00ff99;
    border-radius:10px;
    font-size:20px;
    z-index:20;
    display:none;
    max-width:80%;
    text-align:center;
  }
</style>
</head>
<body>

<div id="hud">Score: 0</div>
<div id="instructions">
  Déplacements: Flèches ou A/D | Saut: Flèche haut / W / Espace | Sur mobile, utilisez les boutons
</div>

<div id="controls">
  <button id="left">◀</button>
  <button id="jump">▲</button>
  <button id="right">▶</button>
</div>

<div id="story" class="story"></div>

<canvas id="gameCanvas"></canvas>

<script>
const canvas = document.getElementById('gameCanvas');
const ctx = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

// Couleurs hacker
const COLOR_PLAYER = '#00FF99';
const COLOR_PLATFORM = '#004400';
const COLOR_BG = '#000';
const COLOR_APPLE = '#FF0000';

const gravity = 0.8;
let score = 0;

class Player {
  constructor() {
    this.width = 30;
    this.height = 30;
    this.x = 100;
    this.y = canvas.height - 150;
    this.velX = 0;
    this.velY = 0;
    this.speed = 5;
    this.jumping = false;
  }

  draw() {
    ctx.fillStyle = COLOR_PLAYER;
    ctx.fillRect(this.x, this.y, this.width, this.height);
  }

  update(platforms) {
    this.velY += gravity;
    this.x += this.velX;
    this.y += this.velY;

    platforms.forEach(p => {
      if (this.x < p.x + p.width &&
          this.x + this.width > p.x &&
          this.y < p.y + p.height &&
          this.y + this.height > p.y) {
        this.y = p.y - this.height;
        this.velY = 0;
        this.jumping = false;
      }
    });

    if (this.x < 0) this.x = 0;
    if (this.x + this.width > canvas.width) this.x = canvas.width - this.width;
    if (this.y + this.height > canvas.height) {
      this.y = canvas.height - this.height;
      this.velY = 0;
      this.jumping = false;
    }

    this.draw();
  }
}

class Platform {
  constructor(x, y, width, height) {
    this.x=x; this.y=y; this.width=width; this.height=height;
  }
  draw(){ ctx.fillStyle=COLOR_PLATFORM; ctx.fillRect(this.x,this.y,this.width,this.height);}
}

class Apple {
  constructor(platforms) {
    this.radius = 10;
    this.placeOnPlatform(platforms);
  }

  placeOnPlatform(platforms){
    const p = platforms[Math.floor(Math.random()*platforms.length)];
    this.x = p.x + Math.random()*(p.width - 2*this.radius) + this.radius;
    this.y = p.y - this.radius; // juste au dessus
  }

  draw(){
    ctx.fillStyle = COLOR_APPLE;
    ctx.beginPath();
    ctx.arc(this.x,this.y,this.radius,0,Math.PI*2);
    ctx.fill();
  }
}

const player = new Player();
const platforms = [
  new Platform(0, canvas.height-50, canvas.width, 50),
  new Platform(200, canvas.height-150, 120, 20),
  new Platform(400, canvas.height-250, 150, 20),
  new Platform(650, canvas.height-350, 120, 20),
  new Platform(900, canvas.height-200, 150, 20),
];

let apple = new Apple(platforms);

const stories = [
  "Histoire 1 : Le hacker a trouvé un code secret !",
  "Histoire 2 : Une nouvelle porte s’ouvre dans la matrice...",
  "Histoire 3 : Le réseau est en feu, avance vite !",
  "Histoire 4 : La pomme magique révèle un fragment d’histoire.",
  "Histoire 5 : Un message crypté apparaît à l’écran."
];

// Input clavier
const keys={};
window.addEventListener('keydown', e=>keys[e.code]=true);
window.addEventListener('keyup', e=>keys[e.code]=false);

// Boutons mobile
const leftBtn = document.getElementById('left');
const rightBtn = document.getElementById('right');
const jumpBtn = document.getElementById('jump');

leftBtn.addEventListener('touchstart', ()=>keys['left']=true);
leftBtn.addEventListener('touchend', ()=>keys['left']=false);
rightBtn.addEventListener('touchstart', ()=>keys['right']=true);
rightBtn.addEventListener('touchend', ()=>keys['right']=false);
jumpBtn.addEventListener('touchstart', ()=>{
  if(!player.jumping){
    player.velY = -15;
    player.jumping = true;
  }
});

// Vérifier collision avec pomme
function checkApple() {
  const dx = player.x + player.width/2 - apple.x;
  const dy = player.y + player.height/2 - apple.y;
  const distance = Math.sqrt(dx*dx + dy*dy);
  if(distance < player.width/2 + apple.radius) {
    score += 10;
    document.getElementById('hud').innerText = "Score: "+score;
    apple.placeOnPlatform(platforms);

    const storyDiv = document.getElementById('story');
    storyDiv.innerText = stories[Math.floor(Math.random()*stories.length)];
    storyDiv.style.display='block';
    setTimeout(()=>{storyDiv.style.display='none';}, 2500);
  }
}

// Boucle principale
function loop() {
  ctx.fillStyle=COLOR_BG;
  ctx.fillRect(0,0,canvas.width,canvas.height);

  player.velX=0;
  if(keys['ArrowLeft']||keys['KeyA']||keys['left']) player.velX=-player.speed;
  if(keys['ArrowRight']||keys['KeyD']||keys['right']) player.velX=player.speed;

  if((keys['ArrowUp']||keys['KeyW']||keys['Space']) && !player.jumping){
    player.velY=-15;
    player.jumping=true;
  }

  player.update(platforms);
  platforms.forEach(p=>p.draw());
  apple.draw();
  checkApple();

  requestAnimationFrame(loop);
}

window.addEventListener('resize', ()=>{
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
});
loop();
</script>

</body>
</html>
