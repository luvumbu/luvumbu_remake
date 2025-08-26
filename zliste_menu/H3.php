<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu Burger Commerce</title>
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f7f7f7;
  }

  /* Bouton burger */
  .burger {
    position: fixed;
    top: 20px;
    left: 20px;
    width: 35px;
    height: 25px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    cursor: pointer;
    z-index: 1001;
  }

  .burger span {
    height: 4px;
    background: #333;
    border-radius: 2px;
    transition: 0.4s;
  }

  /* Animation croix */
  .burger.active span:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
  }
  .burger.active span:nth-child(2) {
    opacity: 0;
  }
  .burger.active span:nth-child(3) {
    transform: rotate(-45deg) translate(6px, -6px);
  }

  /* Menu latéral */
  .side-menu {
    position: fixed;
    top: 0;
    left: -250px;
    width: 250px;
    height: 100%;
    background: #222;
    color: #fff;
    transition: 0.4s;
    padding-top: 60px;
    z-index: 1000;
  }

  .side-menu.active {
    left: 0;
  }

  .side-menu a {
    display: block;
    padding: 15px 25px;
    color: #fff;
    text-decoration: none;
    font-size: 18px;
    border-bottom: 1px solid rgba(255,255,255,0.1);
    transition: 0.3s;
  }

  .side-menu a:hover {
    background: #ff6600;
    padding-left: 35px;
  }

  /* Petite touche "commerce" */
  .side-menu a::before {
    content: "🛒 ";
    font-size: 16px;
  }
  .side-menu a:nth-child(1)::before { content: "🏠 "; }
  .side-menu a:nth-child(2)::before { content: "📦 "; }
  .side-menu a:nth-child(3)::before { content: "🔥 "; }
  .side-menu a:nth-child(4)::before { content: "🛒 "; }
  .side-menu a:nth-child(5)::before { content: "👤 "; }
  .side-menu a:nth-child(6)::before { content: "☎️ "; }

</style>
</head>
<body>

<!-- Bouton burger -->
<div class="burger" id="burger">
  <span></span>
  <span></span>
  <span></span>
</div>

<!-- Menu latéral -->
<div class="side-menu" id="sideMenu">
  <a href="#">Accueil</a>
  <a href="#">Produits</a>
  <a href="#">Promotions</a>
  <a href="#">Panier</a>
  <a href="#">Profil</a>
  <a href="#">Contact</a>
</div>

<script>
  const burger = document.getElementById("burger");
  const sideMenu = document.getElementById("sideMenu");

  burger.addEventListener("click", (e) => {
    burger.classList.toggle("active");
    sideMenu.classList.toggle("active");
    e.stopPropagation(); // empêche la fermeture immédiate
  });

  // fermer menu si clic à l'extérieur
  document.addEventListener("click", (e) => {
    if(sideMenu.classList.contains("active")) {
      // vérifier si clic en dehors du menu
      if(!sideMenu.contains(e.target) && e.target !== burger && !burger.contains(e.target)) {
        sideMenu.classList.remove("active");
        burger.classList.remove("active");
      }
    }
  });
</script>

</body>
</html>
