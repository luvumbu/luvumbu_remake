<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Algorithme général – cases noires</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f9f9f9;
      padding: 20px;
    }
    h1 {
      margin-bottom: 15px;
    }
    h2 {
      margin-top: 30px;
      font-size: 20px;
      color: #222;
    }
    .resultsCount {
      font-weight: bold;
      margin-bottom: 15px;
      font-size: 16px;
    }
    .container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }
    .caseDoc {
      background: #fff;
      padding: 10px;
      border-radius: 8px;
      box-shadow: 0 0 5px rgba(0,0,0,0.2);
      text-align: center;
      width: 220px;
    }
    canvas {
      border: 2px solid #000;
      margin-bottom: 10px;
    }
    p {
      margin: 3px 0;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <h1>Algorithme général – toutes les combinaisons de cases noires (1 à 9)</h1>
  <div id="main"></div>

  <script>
    const main = document.getElementById("main");

    const tailleCarre = 200;
    const n = 3;
    const tailleCase = tailleCarre / n;

    // Génération des 9 positions
    let positions = [];
    for (let ligne = 0; ligne < n; ligne++) {
      for (let col = 0; col < n; col++) {
        positions.push({ligne, col, index: ligne * n + col + 1});
      }
    }

    // Fonction pour générer toutes les combinaisons de k éléments parmi un tableau
    function combinaisons(array, k, start = 0, current = [], result = []) {
      if (current.length === k) {
        result.push([...current]);
        return;
      }
      for (let i = start; i < array.length; i++) {
        current.push(array[i]);
        combinaisons(array, k, i + 1, current, result);
        current.pop();
      }
      return result;
    }

    // Fonction pour dessiner une configuration
    function dessiner(canvas, noirs) {
      const ctx = canvas.getContext("2d");
      ctx.clearRect(0, 0, tailleCarre, tailleCarre);

      for (let ligne = 0; ligne < n; ligne++) {
        for (let col = 0; col < n; col++) {
          let x = col * tailleCase;
          let y = ligne * tailleCase;

          let estNoir = noirs.some(p => p.ligne === ligne && p.col === col);

          ctx.fillStyle = estNoir ? "black" : "white";
          ctx.fillRect(x, y, tailleCase, tailleCase);
          ctx.strokeStyle = "black";
          ctx.strokeRect(x, y, tailleCase, tailleCase);
        }
      }
    }

    // Génération et affichage pour k = 1 → 9
    for (let k = 1; k <= 9; k++) {
      const toutes = combinaisons(positions, k);
      
      // Titre et compteur
      const titre = document.createElement("h2");
      titre.textContent = `Nombre de cases noires = ${k}`;
      main.appendChild(titre);

      const compteur = document.createElement("div");
      compteur.className = "resultsCount";
      compteur.textContent = `Nombre total de résultats possibles : ${toutes.length}`;
      main.appendChild(compteur);

      const container = document.createElement("div");
      container.className = "container";

      toutes.forEach((combo, i) => {
        const bloc = document.createElement("div");
        bloc.className = "caseDoc";

        const canvas = document.createElement("canvas");
        canvas.width = tailleCarre;
        canvas.height = tailleCarre;

        dessiner(canvas, combo);

        const doc = document.createElement("div");
        let cases = combo.map(p => p.index).join(", ");
        doc.innerHTML = `
          <p><b>Résultat ${i+1}/${toutes.length}</b></p>
          <p>Cases noires : ${cases}</p>
          <p>Cases blanches : ${(n*n) - k}</p>
        `;

        bloc.appendChild(canvas);
        bloc.appendChild(doc);
        container.appendChild(bloc);
      });

      main.appendChild(container);
    }
  </script>
</body>
</html>
