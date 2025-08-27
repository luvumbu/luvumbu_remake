<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Canvas Visage</title>
</head>
<body>
<canvas id="faceCanvas" width="400" height="500"></canvas>
<script>
const canvas = document.getElementById("faceCanvas");
const ctx = canvas.getContext("2d");

// Fond
ctx.fillStyle = "#2f2f2f";
ctx.fillRect(0, 0, canvas.width, canvas.height);

// Tête
ctx.fillStyle = "#f9c9b6";
ctx.beginPath();
ctx.ellipse(200, 250, 80, 150, 0, 0, Math.PI * 2);
ctx.fill();

// Yeux (plissés)
ctx.strokeStyle = "#000";
ctx.lineWidth = 3;
ctx.beginPath();
ctx.moveTo(160, 200);
ctx.quadraticCurveTo(180, 190, 200, 200);
ctx.stroke();

ctx.beginPath();
ctx.moveTo(200, 200);
ctx.quadraticCurveTo(220, 190, 240, 200);
ctx.stroke();

// Sourcils
ctx.lineWidth = 5;
ctx.beginPath();
ctx.moveTo(160, 180);
ctx.quadraticCurveTo(180, 170, 200, 180);
ctx.stroke();

ctx.beginPath();
ctx.moveTo(200, 180);
ctx.quadraticCurveTo(220, 170, 240, 180);
ctx.stroke();

// Nez
ctx.fillStyle = "#000";
ctx.beginPath();
ctx.arc(200, 220, 5, 0, Math.PI * 2);
ctx.fill();
ctx.beginPath();
ctx.arc(190, 220, 5, 0, Math.PI * 2);
ctx.fill();

// Bouche grande ouverte
ctx.fillStyle = "#d13a3a";
ctx.beginPath();
ctx.ellipse(200, 330, 30, 100, 0, 0, Math.PI * 2);
ctx.fill();

// Intérieur bouche
ctx.fillStyle = "#2f2f2f";
ctx.beginPath();
ctx.ellipse(200, 330, 20, 90, 0, 0, Math.PI * 2);
ctx.fill();



</script>
</body>
</html>
