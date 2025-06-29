<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Menu avec Scroll</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
      font-family: sans-serif;
    }

    body {
      display: flex;
      background-color: #050010;
    }

    nav {
      width: 300px;
      background-color: #000;
      color: white;
      padding: 2rem;
      height: 100vh;
      overflow-y: auto; /* ✅ scroll activé */
    }

    nav ul {
      list-style: none;
    }

    nav ul li {
      margin-bottom: 20px;
    }

    nav ul li a {
      color: #eee;
      text-decoration: none;
      font-size: 18px;
      display: block;
    }

    nav ul li a:hover {
      color: #63a4ff;
    }

    .galactic-net {
      flex: 1;
      background: linear-gradient(135deg, #050010, #0a0f3f);
 
      padding: 6rem 2rem;
      position: relative;
      text-align: center;
    }
  </style>
</head>
<body>

  <nav>
    <ul>
      <li><a href="#">Accueil</a></li>
      <li><a href="#">Nos services professionnels</a></li>
      <li><a href="#">Galerie de notre portfolio</a></li>
      <li><a href="#">À propos de notre entreprise</a></li>
      <li><a href="#">Contactez-nous facilement</a></li>
      <li><a href="#">Accueil</a></li>
      <li><a href="#">Nos services professionnels</a></li>
      <li><a href="#">Galerie de notre portfolio</a></li>
      <li><a href="#">À propos de notre entreprise</a></li>
      <li><a href="#">Contactez-nous facilement</a></li>
      <li><a href="#">Accueil</a></li>
      <li><a href="#">Nos services professionnels</a></li>
      <li><a href="#">Galerie de notre portfolio</a></li>
      <li><a href="#">À propos de notre entreprise</a></li>
      <li><a href="#">Contactez-nous facilement</a></li>
            <li><a href="#">Accueil</a></li>
      <li><a href="#">Nos services professionnels</a></li>
      <li><a href="#">Galerie de notre portfolio</a></li>
      <li><a href="#">À propos de notre entreprise</a></li>
      <li><a href="#">Contactez-nous facilement</a></li>
      <li><a href="#">Accueil</a></li>
      <li><a href="#">Nos services professionnels</a></li>
      <li><a href="#">Galerie de notre portfolio</a></li>
      <li><a href="#">À propos de notre entreprise</a></li>
      <li><a href="#">Contactez-nous facilement</a></li>
      <li><a href="#">Accueil</a></li>
      <li><a href="#">Nos services professionnels</a></li>
      <li><a href="#">Galerie de notre portfolio</a></li>
      <li><a href="#">À propos de notre entreprise</a></li>
      <li><a href="#">Contactez-nous facilement</a></li>
            <li><a href="#">Accueil</a></li>
      <li><a href="#">Nos services professionnels</a></li>
      <li><a href="#">Galerie de notre portfolio</a></li>
      <li><a href="#">À propos de notre entreprise</a></li>
      <li><a href="#">Contactez-nous facilement</a></li>
      <li><a href="#">Accueil</a></li>
      <li><a href="#">Nos services professionnels</a></li>
      <li><a href="#">Galerie de notre portfolio</a></li>
      <li><a href="#">À propos de notre entreprise</a></li>
      <li><a href="#">Contactez-nous facilement</a></li>
      <li><a href="#">Accueil</a></li>
      <li><a href="#">Nos services professionnels</a></li>
      <li><a href="#">Galerie de notre portfolio</a></li>
      <li><a href="#">À propos de notre entreprise</a></li>
      <li><a href="#">Contactez-nous facilement</a></li>
      
    </ul>
  </nav>
 
</body>
</html>
