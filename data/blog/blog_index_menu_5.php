<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Menu vertical centré</title>
  <style>
    .menu-vertical {
      list-style: none;
      padding: 0;
      width: 100%;
      max-height: 300px;
      overflow-y: auto;
      text-align: center;
      background: linear-gradient(180deg, #1a1a2e 0%, #16213e 100%);
      color: white;
      font-family: Arial, sans-serif;
      margin: 0;
    }

    .menu-vertical a {
      display: block;
      padding: 12px 20px;
      text-decoration: none;
      color: white;
      transition: background 0.3s ease;
    }

    .menu-vertical a:hover {
      background: linear-gradient(180deg, #0f3460 0%, #16213e 100%);
    }
  </style>
</head>

<body>

  <ul class="menu-vertical">
    <li><a href="#">Accueil</a></li>
    <li><a href="#">À propos</a></li>
    <li><a href="#">Services</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="#">Accueil</a></li>
    <li><a href="#">À propos</a></li>
    <li><a href="#">Services</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="#">Accueil</a></li>
    <li><a href="#">À propos</a></li>
    <li><a href="#">Services</a></li>
    <li><a href="#">Contact</a></li>
  </ul>

</body>

</html>
