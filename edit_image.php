<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Image avec filtres interactifs et intensité</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  canvas {
    border: 2px solid #333;
    border-radius: 8px;
    margin-bottom: 15px;
  }

  select, button, input[type=range], input[type=file] {
    padding: 8px 12px;
    margin: 5px;
    cursor: pointer;
  }

  .slider-container {
    display: flex;
    align-items: center;
    gap: 10px;
  }
</style>
</head>
<body>

<h2>Choisissez un filtre et ajustez l'intensité</h2>

<input type="file" id="imageUpload" accept="image/*">

<canvas id="canvas" width="400" height="400"></canvas>

<select id="filterSelect">
  <option value="normal">Couleur</option>
  <option value="bw">Noir et Blanc</option>
  <option value="sepia">Sépia</option>
  <option value="negative">Négatif</option>
  <option value="thermal">Température</option>
</select>

<div class="slider-container">
  <label for="intensityRange">Intensité :</label>
  <input type="range" id="intensityRange" min="0" max="100" value="100">
  <span id="intensityValue">100%</span>
</div>

<button id="saveBtn">Télécharger l'image</button>

<script>
const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');
const filterSelect = document.getElementById('filterSelect');
const intensityRange = document.getElementById('intensityRange');
const intensityValue = document.getElementById('intensityValue');
const imageUpload = document.getElementById('imageUpload');

let img = new Image();
img.crossOrigin = "anonymous";
img.src = "http://localhost/ndenga/img_dw/uploads/1756017218_3_1756017905.avif";

img.onload = () => {
  drawFiltered(filterSelect.value, intensityRange.value / 100);
};

// Fonction pour appliquer les filtres
function drawFiltered(filter, intensity) {
  ctx.clearRect(0,0,canvas.width,canvas.height);
  ctx.drawImage(img, 0, 0, canvas.width, canvas.height);

  if (filter === 'normal' || intensity === 0) return;

  let imageData = ctx.getImageData(0,0,canvas.width,canvas.height);
  let data = imageData.data;

  for (let i = 0; i < data.length; i += 4) {
    let r = data[i];
    let g = data[i+1];
    let b = data[i+2];

    switch(filter) {
      case 'bw':
        const gray = 0.3*r + 0.59*g + 0.11*b;
        data[i]   = r + (gray - r) * intensity;
        data[i+1] = g + (gray - g) * intensity;
        data[i+2] = b + (gray - b) * intensity;
        break;
      case 'sepia':
        const sr = r*0.393 + g*0.769 + b*0.189;
        const sg = r*0.349 + g*0.686 + b*0.168;
        const sb = r*0.272 + g*0.534 + b*0.131;
        data[i]   = r + (sr - r) * intensity;
        data[i+1] = g + (sg - g) * intensity;
        data[i+2] = b + (sb - b) * intensity;
        break;
      case 'negative':
        data[i]   = r + ((255 - r) - r) * intensity;
        data[i+1] = g + ((255 - g) - g) * intensity;
        data[i+2] = b + ((255 - b) - b) * intensity;
        break;
      case 'thermal':
        const temp = 0.3*r + 0.59*g + 0.11*b;
        const tr = temp < 128 ? 0 : 255;
        const tg = temp < 128 ? 0 : 100;
        const tb = temp < 128 ? 255 : 0;
        data[i]   = r + (tr - r) * intensity;
        data[i+1] = g + (tg - g) * intensity;
        data[i+2] = b + (tb - b) * intensity;
        break;
    }
  }

  ctx.putImageData(imageData, 0, 0);
}

// Changer le filtre
filterSelect.addEventListener('change', () => {
  drawFiltered(filterSelect.value, intensityRange.value / 100);
});

// Changer l'intensité
intensityRange.addEventListener('input', () => {
  intensityValue.textContent = intensityRange.value + "%";
  drawFiltered(filterSelect.value, intensityRange.value / 100);
});

// Télécharger l'image
document.getElementById('saveBtn').addEventListener('click', () => {
  const link = document.createElement('a');
  link.download = `image_${filterSelect.value}_${intensityRange.value}.png`;
  link.href = canvas.toDataURL();
  link.click();
});

// Upload d'une image
imageUpload.addEventListener('change', (e) => {
  const file = e.target.files[0];
  if(file){
    const reader = new FileReader();
    reader.onload = (ev) => {
      img.src = ev.target.result;
    };
    reader.readAsDataURL(file);
  }
});
</script>

</body>
</html>
