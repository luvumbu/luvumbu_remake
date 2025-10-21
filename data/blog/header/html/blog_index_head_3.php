<?php
// ---------------------- CONFIGURATION ----------------------
$titre = $title_projet_0;
$menu_items = [];

// Générer le menu
for ($i = 0; $i < count($title_projet_a); $i++) {
    array_push($menu_items, replace_element_2(AsciiConverter::asciiToString($title_projet_a[$i])));
}

// Vérifier si on doit afficher le burger
$contenu_total = $titre . implode('', $menu_items);
$longueur = strlen($contenu_total);
$isBurger = $longueur > 60;
?>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">

</head>

<header class="main-header">
  <div class="logo"><?= htmlspecialchars($titre) ?></div>
  <nav class="nav-menu" id="nav-menu">
    <?php for ($i = 0; $i < count($menu_items); $i++): ?>
      <a href="#<?= htmlspecialchars($id_sha1_projet_a[$i]) ?>"><?= htmlspecialchars($menu_items[$i]) ?></a>
    <?php endfor; ?>
  </nav>
  <div class="burger" id="burger">
    <span></span><span></span><span></span>
  </div>
</header>

<script>
const burger = document.getElementById('burger');
const menu = document.getElementById('nav-menu');

// Toggle burger menu
burger.addEventListener('click', () => {
  burger.classList.toggle('active');
  menu.classList.toggle('active');
});

// Fermer le menu quand on clique sur un lien
document.querySelectorAll('.nav-menu a').forEach(link => {
  link.addEventListener('click', () => {
    burger.classList.remove('active');
    menu.classList.remove('active');
  });
});

// Fermer le menu quand on clique en dehors
document.addEventListener('click', (e) => {
  if (!menu.contains(e.target) && !burger.contains(e.target)) {
    burger.classList.remove('active');
    menu.classList.remove('active');
  }
});
</script>

<style>
/* ==================== BASE ==================== */
body {
  margin: 0;
  font-family: 'Audiowide', sans-serif;

}

/* ==================== HEADER ==================== */
.main-header {
  width: 100%;
  padding: 15px 30px;
  background: linear-gradient(90deg, #0f0f0f 0%, #2b0037 100%);
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-sizing: border-box;
  box-shadow: 0 0 10px rgba(255, 0, 100, 0.3);
  border-bottom: 2px solid rgba(255, 0, 100, 0.5);
  position: relative;
  z-index: 1000;
}

/* ==================== LOGO / TITRE ==================== */
.logo {
  font-size: 1.6rem;
  font-weight: bold;
  letter-spacing: 2px;
  background: linear-gradient(90deg, #ff0055, #ffcc00);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-transform: uppercase;
  animation: logoPulse 3s infinite ease-in-out;
}

@keyframes logoPulse {
  0%, 100% { opacity: 0.9; transform: scale(1); }
  50% { opacity: 1; transform: scale(1.05); }
}

/* ==================== NAV MENU ==================== */
.nav-menu {
  display: flex;
  gap: 25px;
  align-items: center;
  transition: all 0.4s ease;
}

.nav-menu a {
  color: #eee;
  text-decoration: none;
  font-size: 1rem;
  letter-spacing: 1px;
  position: relative;
  transition: color 0.3s ease;
}

.nav-menu a::after {
  content: "";
  position: absolute;
  bottom: -4px;
  left: 0;
  width: 0%;
  height: 2px;
  background: linear-gradient(90deg, #ff0040, #ffcc00);
  transition: width 0.3s ease;
}

.nav-menu a:hover {
  color: #ffcc00;
}

.nav-menu a:hover::after {
  width: 100%;
}

/* ==================== BURGER ==================== */
.burger {
  width: 30px;
  height: 22px;
  display: none;
  flex-direction: column;
  justify-content: space-between;
  cursor: pointer;
  z-index: 1001;
  transition: all 0.3s ease;
}

.burger span {
  display: block;
  height: 3px;
  background: linear-gradient(90deg, #ff0040, #ffcc00);
  border-radius: 3px;
  transition: 0.4s;
}

/* BURGER ANIMATION */
.burger.active span:nth-child(1) {
  transform: rotate(45deg) translateY(9px);
}
.burger.active span:nth-child(2) {
  opacity: 0;
}
.burger.active span:nth-child(3) {
  transform: rotate(-45deg) translateY(-9px);
}

/* ==================== RESPONSIVE BURGER ==================== */
<?php if ($isBurger): ?>
.nav-menu {
  position: fixed;
  top: 0; right: 0;
  height: 100vh; width: 250px;
  background: rgba(20, 0, 30, 0.95);
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 25px;
  transform: translateX(100%);
  padding-top: 60px;
  box-sizing: border-box;
  box-shadow: -5px 0 15px rgba(255, 0, 80, 0.3);
  transition: transform 0.4s ease;
  backdrop-filter: blur(8px);
}

.nav-menu.active {
  transform: translateX(0);
}

.burger {
  display: flex;
}
<?php else: ?>
@media (max-width: 700px) {
  .burger { display: flex; }

  .nav-menu {
    position: fixed;
    top: 0; right: 0;
    height: 100vh; width: 250px;
    background: rgba(20, 0, 30, 0.95);
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    gap: 25px;
    transform: translateX(100%);
    padding-top: 60px;
    box-sizing: border-box;
    box-shadow: -5px 0 15px rgba(255, 0, 80, 0.3);
    transition: transform 0.4s ease;
    backdrop-filter: blur(8px);
  }

  .nav-menu.active {
    transform: translateX(0);
  }
}
<?php endif; ?>

/* ==================== ADAPTATION ==================== */
@media (max-width: 900px) {
  .nav-menu a {
    font-size: 0.9em;
  }
}
</style>
