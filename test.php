 <!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Schéma Installation Solis RHI-5K-48ES-5G</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background-color: #f5f5f5;
    }
    .schema {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      text-align: center;
    }
    .box {
      background-color: #ffffff;
      border: 2px solid #333;
      border-radius: 10px;
      padding: 15px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .arrow {
      grid-column: span 4;
      text-align: center;
      font-size: 24px;
      margin: -10px 0;
    }
  </style>
</head>
<body>
  <h1>🔌 Schéma simplifié d'installation - Solis RHI-5K-48ES-5G</h1>

  <div class="schema">
    <div class="box">☀️ Panneaux Solaires</div>
    <div class="arrow">⬇️</div>

    <div class="box">🔆 Entrée PV - Onduleur Solis</div>
    <div class="arrow">⬇️</div>

    <div class="box">⚡ Onduleur Hybride Solis RHI-5K-48ES-5G</div>
    <div class="arrow">⬇️</div>

    <div class="box">🔋 Batterie 48V (Soluna, Pylontech...)</div>
    <div class="arrow">⬇️</div>

    <div class="box">🧰 Coffret AC Maison (Disjoncteurs, ID, etc.)</div>
    <div class="arrow">⬇️</div>

    <div class="box">🏠 Réseau Domestique</div>
    <div class="arrow">⬇️</div>

    <div class="box">🌍 Réseau Enedis (optionnel)</div>
  </div>

</body>
</html>