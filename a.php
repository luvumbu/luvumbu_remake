<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Pixel Art Canvas PICO-8</title>
<style>
  body {
    font-family: sans-serif;
  }
  canvas {
    border: 1px solid #000;
    image-rendering: pixelated; /* important pour pixel art */
    cursor: crosshair;
  }
  .palette {
    margin: 10px 0;
  }
  .color-swatch {
    display: inline-block;
    width: 30px;
    height: 30px;
    margin-right: 5px;
    border: 1px solid #000;
    cursor: pointer;
  }
</style>
</head>
<body>

<h2>Pixel Art Canvas PICO-8 28x27</h2>

<div class="palette" id="palette"></div>
<canvas id="pixelCanvas" width="28" height="27"></canvas>
<br>
<button onclick="clearCanvas()">Effacer</button>
<button onclick="saveCanvas()">Enregistrer</button>

<script>
const canvas = document.getElementById('pixelCanvas');
const ctx = canvas.getContext('2d');

const pixelSize = 20; // taille d'un "gros pixel"
canvas.width = 28 * pixelSize;
canvas.height = 27 * pixelSize;

let drawing = false;
let currentColor = '#000000'; // couleur par défaut

// Palette PICO-8 (16 couleurs)
const pico8Colors = [
  "#000000", // 0 black
  "#1D2B53", // 1 dark-blue
  "#7E2553", // 2 dark-purple
  "#008751", // 3 dark-green
  "#AB5236", // 4 brown
  "#5F574F", // 5 dark-gray
  "#C2C3C7", // 6 light-gray
  "#FFF1E8", // 7 white
  "#FF004D", // 8 red
  "#FFA300", // 9 orange
  "#FFEC27", // 10 yellow
  "#00E436", // 11 green
  "#29ADFF", // 12 blue
  "#83769C", // 13 indigo
  "#FF77A8", // 14 pink
  "#FFCCAA"  // 15 peach
];

const paletteDiv = document.getElementById('palette');
pico8Colors.forEach(color => {
  const swatch = document.createElement('div');
  swatch.className = 'color-swatch';
  swatch.style.backgroundColor = color;
  swatch.addEventListener('click', () => currentColor = color);
  paletteDiv.appendChild(swatch);
});

// Dessiner un pixel
function drawPixel(x, y, color = currentColor) {
  ctx.fillStyle = color;
  ctx.fillRect(x * pixelSize, y * pixelSize, pixelSize, pixelSize);
}

// Effacer le canvas
function clearCanvas() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
}

// Enregistrer le canvas comme image
function saveCanvas() {
  const link = document.createElement('a');
  link.download = 'pixel_art_pico8.png';
  link.href = canvas.toDataURL();
  link.click();
}

// Calculer la position du pixel cliqué
function getPixelCoords(event) {
  const rect = canvas.getBoundingClientRect();
  const x = Math.floor((event.clientX - rect.left) / pixelSize);
  const y = Math.floor((event.clientY - rect.top) / pixelSize);
  return { x, y };
}

// Événements souris
canvas.addEventListener('mousedown', e => {
  drawing = true;
  const {x, y} = getPixelCoords(e);
  drawPixel(x, y);
});

canvas.addEventListener('mousemove', e => {
  if (!drawing) return;
  const {x, y} = getPixelCoords(e);
  drawPixel(x, y);
});

canvas.addEventListener('mouseup', () => drawing = false);
canvas.addEventListener('mouseleave', () => drawing = false);
</script>
</body>
</html>
