<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu Burger Slide Down</title>
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #1a1a1a;
    color: white;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  h1 {
    text-align: center;
  }

  /* --- Bouton Burger --- */
  .burger2 {
    position: fixed;
    top: 20px;
    right: 20px;
    width: 40px;
    height: 30px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    cursor: pointer;
    z-index: 1001;
  }

  .burger2 span {
    display: block;
    height: 4px;
    background: #00ffff; /* cyan néon */
    border-radius: 2px;
    transition: 0.5s;
  }

  /* Animation du burger2 en croix diagonale */
  .burger2.active span:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
  }
  .burger2.active span:nth-child(2) {
    transform: scaleX(0);
  }
  .burger2.active span:nth-child(3) {
    transform: rotate(-45deg) translate(5px, -5px);
  }

  /* --- Menu Slide Down --- */
  .menu2 {
    position: fixed;
    top: -100%;
    left: 0;
    width: 100%;
    background: rgba(10,10,10,0.95);
    display: flex;
    flex-direction: column;
    align-items: center;
    transition: top 0.5s ease;
    z-index: 1000;
    padding: 50px 0;
  }

  .menu2.active {
    top: 0;
  }

  .menu2 a {
    text-decoration: none;
    color: #00ffff;
    font-size: 24px;
    padding: 15px 0;
    transition: 0.3s;
  }

  .menu2 a:hover {
    color: #ff00ff;
  }
</style>
</head>
<body>

<h1>Menu Slide Down en haut à droite 🍔</h1>

<!-- Bouton burger 2 -->
<div class="burger2" id="burger2">
  <span></span>
  <span></span>
  <span></span>
</div>

<!-- Menu -->
<nav class="menu2" id="menu2">
  <a href="#">Accueil</a>
  <a href="#">Services</a>
  <a href="#">Portfolio</a>
  <a href="#">Contact</a>
</nav>

<script>
  const burger2 = document.getElementById("burger2");
  const menu2 = document.getElementById("menu2");

  burger2.addEventListener("click", () => {
    burger2.classList.toggle("active");
    menu2.classList.toggle("active");
  });
</script>

</body>
</html>
