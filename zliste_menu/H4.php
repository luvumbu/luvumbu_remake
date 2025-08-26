<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu Bottom E-commerce</title>
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f7f7f7;
    padding-bottom: 70px; /* espace pour le menu */
  }

  /* Menu bottom */
  .bottom-menu {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 60px;
    background: #222;
    display: flex;
    justify-content: space-around;
    align-items: center;
    box-shadow: 0 -2px 10px rgba(0,0,0,0.3);
    z-index: 1000;
  }

  .bottom-menu a {
    text-decoration: none;
    color: #fff;
    font-size: 14px;
    display: flex;
    flex-direction: column;
    align-items: center;
    transition: 0.3s;
    position: relative;
  }

  .bottom-menu a:hover {
    color: #ff6600;
  }

  /* Icônes simples avec pseudo-element */
  .bottom-menu a::before {
    content: '';
    display: block;
    width: 24px;
    height: 24px;
    margin-bottom: 3px;
    background: rgba(255,255,255,0.7);
    border-radius: 4px;
  }

  .bottom-menu a:nth-child(1)::before { content: "🏠"; background: none; }
  .bottom-menu a:nth-child(2)::before { content: "📦"; background: none; }
  .bottom-menu a:nth-child(3)::before { content: "🔥"; background: none; }
  .bottom-menu a:nth-child(4)::before { content: "🛒"; background: none; }
  .bottom-menu a:nth-child(5)::before { content: "👤"; background: none; }

  /* Badge panier */
  .bottom-menu a:nth-child(4)::after {
    content: "3"; /* nombre d'articles */
    position: absolute;
    top: 0;
    right: -5px;
    background: #ff3f3f;
    color: #fff;
    font-size: 10px;
    width: 18px;
    height: 18px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
  }

</style>
</head>
<body>

<h1 style="text-align:center; padding-top:50px;">Menu Bottom E-commerce</h1>

<div class="bottom-menu">
  <a href="#">Accueil</a>
  <a href="#">Produits</a>
  <a href="#">Promotions</a>
  <a href="#">Panier</a>
  <a href="#">Profil</a>
</div>

</body>
</html>
