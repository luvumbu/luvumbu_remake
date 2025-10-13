<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rappel Anniversaires</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f8ff;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }

    .container {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 400px;
    }

    h2 {
      text-align: center;
      color: #333;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin: 10px 0 5px;
      font-weight: bold;
    }

    input, select {
      padding: 8px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button {
      margin-top: 20px;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #4CAF50;
      color: white;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }

    .anniversaires-list {
      margin-top: 20px;
    }

    .anniversaire-item {
      background-color: #e6f7ff;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Rappel Anniversaires</h2>
    <form id="birthdayForm">
      <label for="prenom">Prénom</label>
      <input type="text" id="prenom" required>

      <label for="nom">Nom</label>
      <input type="text" id="nom" required>

      <label for="annee">Année de naissance</label>
      <input type="number" id="annee" min="1900" max="2025" required>

      <label for="relation">Relation</label>
      <select id="relation" required>
        <option value="">--Choisir--</option>
        <option value="Famille">Famille</option>
        <option value="Ami">Ami</option>
        <option value="Autre">Autre</option>
      </select>

      <button type="submit">Ajouter</button>
    </form>

    <div class="anniversaires-list" id="anniversairesList">
      <!-- Les anniversaires ajoutés apparaîtront ici -->
    </div>
  </div>

  <script>
    const form = document.getElementById('birthdayForm');
    const list = document.getElementById('anniversairesList');

    form.addEventListener('submit', function(e) {
      e.preventDefault();

      const prenom = document.getElementById('prenom').value;
      const nom = document.getElementById('nom').value;
      const annee = document.getElementById('annee').value;
      const relation = document.getElementById('relation').value;

      const item = document.createElement('div');
      item.className = 'anniversaire-item';
      item.textContent = `${prenom} ${nom} - Né(e) en ${annee} (${relation})`;

      list.appendChild(item);

      form.reset();
    });
  </script>
</body>
</html>
