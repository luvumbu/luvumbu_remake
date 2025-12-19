<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Disjoncteurs Legrand avec Peigne - Canvas</title>
<style>
  body {
    background-color: #111;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  canvas {
    border: 1px solid #333;
  }
</style>
</head>
<body>
<canvas id="disjoncteurs" width="600" height="250"></canvas>
<script>
// --- VARIABLES PARAMÉTRABLES ---
const canvasWidth = 600;
const canvasHeight = 250;
const startX = 20;
const startY = 80;
const height = 100;
const spacing = 20;

const switchHeight = 20;
const switchMargin = 5;

const backgroundColor = "#111";
const disjoncteurColor = "#FFD700";  // jaune Legrand
const switchColor = "#888";
const textColor = "#000";
const textFont = "bold 16px Arial";

const peigneColor = "#BBB";  // couleur du peigne
const peigneHeight = 10;     // hauteur du peigne
const peigneMarginTop = 20;  // distance du haut du canvas

// Disjoncteurs avec ampérage et largeur
const disjoncteurs = [
  {amp: "63A", width: 60},
  {amp: "32A", width: 50},
  {amp: "20A", width: 45},
  {amp: "10A", width: 40},
  {amp: "5A",  width: 35},
];

// --- INITIALISATION CANVAS ---
const canvas = document.getElementById('disjoncteurs');
canvas.width = canvasWidth;
canvas.height = canvasHeight;
const ctx = canvas.getContext('2d');

// Fond
ctx.fillStyle = backgroundColor;
ctx.fillRect(0, 0, canvasWidth, canvasHeight);

// --- DESSIN DES DISJONCTEURS ---
disjoncteurs.forEach((d, index) => {
  const x = startX + index * (d.width + spacing);

  // Corps du disjoncteur
  ctx.fillStyle = disjoncteurColor;
  ctx.fillRect(x, startY, d.width, height);

  // Switch gris en haut
  ctx.fillStyle = switchColor;
  ctx.fillRect(x + switchMargin, startY + switchMargin, d.width - 2*switchMargin, switchHeight);

  // Texte ampérage
  ctx.fillStyle = textColor;
  ctx.font = textFont;
  ctx.textAlign = "center";
  ctx.textBaseline = "middle";
  ctx.fillText(d.amp, x + d.width/2, startY + height/2);
});

// --- DESSIN DU PEIGNE ---
// Largeur totale du peigne
const peigneStartX = startX;
const peigneEndX = startX + disjoncteurs.reduce((sum, d) => sum + d.width, 0) + spacing*(disjoncteurs.length-1);

ctx.fillStyle = peigneColor;
ctx.fillRect(peigneStartX, peigneMarginTop, peigneEndX - peigneStartX, peigneHeight);

// Ajouter les "pointes" du peigne sur chaque disjoncteur
disjoncteurs.forEach((d, index) => {
  const x = startX + index * (d.width + spacing) + d.width/2;
  ctx.beginPath();
  ctx.moveTo(x-3, peigneMarginTop + peigneHeight);
  ctx.lineTo(x+3, peigneMarginTop + peigneHeight);
  ctx.lineTo(x, peigneMarginTop + peigneHeight + 6);
  ctx.closePath();
  ctx.fillStyle = peigneColor;
  ctx.fill();
});
</script>
</body>
</html>
