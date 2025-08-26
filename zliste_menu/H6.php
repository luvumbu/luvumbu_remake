<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu E-commerce Horizontal</title>
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f7f7f7;
  }

  /* Menu horizontal */
  .top-menu {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: #222;
    display: flex;
    justify-content: center;
    z-index: 1000;
    box-shadow: 0 2px 5px rgba(0,0,0,0.3);
  }

  .top-menu li {
    list-style: none;
    position: relative;
  }

  .top-menu > li {
    margin: 0 20px;
  }

  .top-menu a {
    display: block;
    padding: 20px 10px;
    color: #fff;
    text-decoration: none;
    transition: 0.3s;
  }

  .top-menu a:hover {
    color: #ff6600;
  }

  /* Sous-menu déroulant */
  .submenu {
    position: absolute;
    top: 60px;
    left: 0;
    background: #333;
    display: none;
    min-width: 150px;
    border-radius: 4px;
    overflow: hidden;
  }

  .submenu li {
    margin: 0;
  }

  .submenu a {
    padding: 10px;
    color: #fff;
  }

  .submenu a:hover {
    background: #ff6600;
    color: #fff;
  }

  /* Afficher le sous-menu au hover */
  .top-menu li:hover > .submenu {
    display: block;
  }
</style>
</head>
<body>

<ul class="top-menu">
  <li><a href="#">Accueil</a></li>
  <li>
    <a href="#">Produits</a>
    <ul class="submenu">
      <li><a href="#">Vêtements</a></li>
      <li><a href="#">Chaussures</a></li>
      <li><a href="#">Accessoires</a></li>
    </ul>
  </li>
  <li>
    <a href="#">Promotions</a>
    <ul class="submenu">
      <li><a href="#">Soldes</a></li>
      <li><a href="#">Nouveautés</a></li>
    </ul>
  </li>
  <li><a href="#">Panier 🛒</a></li>
  <li><a href="#">Profil 👤</a></li>
  <li><a href="#">Contact ☎️</a></li>
</ul>

<div style="padding-top:120px; text-align:center;">
  <h1>Bienvenue sur notre boutique</h1>
  <p>Exemple de menu e-commerce horizontal avec sous-menus déroulants.</p>
</div>

</body>
</html>
