<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu Sidebar E-commerce</title>
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f0f0f0;
  }

  /* Burger flottant */
  .burger {
    position: fixed;
    top: 20px;
    right: 20px;
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

  .burger.active span:nth-child(1) { transform: rotate(45deg) translate(5px, 5px); }
  .burger.active span:nth-child(2) { opacity: 0; }
  .burger.active span:nth-child(3) { transform: rotate(-45deg) translate(6px, -6px); }

  /* Sidebar flottante */
  .sidebar {
    position: fixed;
    top: 0;
    right: -80px;
    width: 80px;
    height: 100%;
    background: #222;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 60px;
    transition: right 0.3s;
    z-index: 1000;
  }

  .sidebar.active { right: 0; }

  .sidebar a {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    margin: 15px 0;
    background: #00ffff;
    border-radius: 10px;
    text-decoration: none;
    color: #000;
    font-size: 24px;
    transition: 0.3s;
  }

  .sidebar a:hover { background: #ff6600; color: #fff; transform: scale(1.2); }

  /* Badge panier */
  .sidebar a.cart::after {
    content: "3";
    position: absolute;
    top: -5px;
    right: -5px;
    width: 18px;
    height: 18px;
    background: #ff3f3f;
    color: #fff;
    font-size: 12px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
  }
</style>
</head>
<body>

<h1 style="text-align:center; padding-top:50px;">Sidebar E-commerce</h1>

<!-- Burger -->
<div class="burger" id="burger">
  <span></span>
  <span></span>
  <span></span>
</div>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
  <a href="#" title="Accueil">🏠</a>
  <a href="#" title="Produits">📦</a>
  <a href="#" title="Promotions">🔥</a>
  <a href="#" class="cart" title="Panier">🛒</a>
  <a href="#" title="Profil">👤</a>
  <a href="#" title="Contact">☎️</a>
</div>

<script>
  const burger = document.getElementById("burger");
  const sidebar = document.getElementById("sidebar");

  burger.addEventListener("click", () => {
    burger.classList.toggle("active");
    sidebar.classList.toggle("active");
  });

  // Fermer sidebar si clic en dehors
  document.addEventListener("click", (e) => {
    if(sidebar.classList.contains("active") && !sidebar.contains(e.target) && e.target !== burger){
      sidebar.classList.remove("active");
      burger.classList.remove("active");
    }
  });
</script>

</body>
</html>
