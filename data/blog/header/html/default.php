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
:root {
  --bg-blur: rgba(255, 255, 255, 0.08);
  --border-color: rgba(255, 255, 255, 0.2);
  --accent-color: #5ee7df;
  --hover-color: #b490ca;
  --text-color: #e0e0e0;
  --transition: 0.35s ease;
  --shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
  backdrop-filter: blur(15px);
}

/* ==================== HEADER ==================== */
.main-header {
  width: 100%;
  padding: 12px 28px;
  background: var(--bg-blur);
  border-bottom: 1px solid var(--border-color);
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-sizing: border-box;
  position: fixed;
  top: 0;
  z-index: 1000;
  box-shadow: var(--shadow);
  backdrop-filter: blur(18px);
  border-radius: 0 0 15px 15px;
}

/* ==================== LOGO ==================== */
.logo {
  font-family: "Audiowide", sans-serif;
  font-size: 1.4rem;
  font-weight: 600;
  letter-spacing: 1px;
  background: linear-gradient(45deg, var(--accent-color), var(--hover-color));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-shadow: 0 0 12px rgba(255, 255, 255, 0.2);
}

/* ==================== MENU ==================== */
.nav-menu {
  display: flex;
  gap: 30px;
  align-items: center;
  transition: var(--transition);
}

.nav-menu a {
  color: var(--text-color);
  text-decoration: none;
  font-size: 1rem;
  letter-spacing: 0.5px;
  position: relative;
  padding: 4px 0;
  transition: var(--transition);
}

.nav-menu a::before {
  content: "";
  position: absolute;
  bottom: 0;
  left: 50%;
  width: 0%;
  height: 2px;
  background: linear-gradient(90deg, var(--accent-color), var(--hover-color));
  transition: var(--transition);
  transform: translateX(-50%);
  border-radius: 2px;
}

.nav-menu a:hover {
  color: #fff;
}
.nav-menu a:hover::before {
  width: 100%;
}

/* ==================== BURGER ==================== */
.burger {
  width: 28px;
  height: 22px;
  display: none;
  flex-direction: column;
  justify-content: space-between;
  cursor: pointer;
  z-index: 1001;
}

.burger span {
  height: 3px;
  background: linear-gradient(90deg, var(--accent-color), var(--hover-color));
  border-radius: 3px;
  transition: var(--transition);
}

.burger.active span:nth-child(1) {
  transform: rotate(45deg) translateY(9px);
}
.burger.active span:nth-child(2) {
  opacity: 0;
}
.burger.active span:nth-child(3) {
  transform: rotate(-45deg) translateY(-9px);
}

/* ==================== RESPONSIVE ==================== */
@media (min-width: 601px) and (max-width: 900px) {
  .nav-menu a {
    font-size: 0.9em !important;
  }
}

/* ==================== MODE BURGER PHP ==================== */
<?php if ($isBurger): ?>
.nav-menu {
  position: fixed;
  top: 0;
  right: 0;
  height: 100vh;
  width: 230px;
  background: rgba(25, 25, 35, 0.7);
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 28px;
  transform: translateX(100%);
  padding-top: 80px;
  box-sizing: border-box;
  box-shadow: -5px 0 15px rgba(0, 0, 0, 0.4);
  transition: transform var(--transition);
  border-left: 1px solid var(--border-color);
  backdrop-filter: blur(20px);
  border-radius: 20px 0 0 20px;
}
.nav-menu.active {
  transform: translateX(0);
}
.burger {
  display: flex;
}
<?php else: ?>
@media (max-width: 700px) {
  .burger {
    display: flex;
  }
  .nav-menu {
    position: fixed;
    top: 0;
    right: 0;
    height: 100vh;
    width: 230px;
    background: rgba(25, 25, 35, 0.7);
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    gap: 28px;
    transform: translateX(100%);
    padding-top: 80px;
    box-sizing: border-box;
    box-shadow: -5px 0 15px rgba(0, 0, 0, 0.4);
    transition: transform var(--transition);
    border-left: 1px solid var(--border-color);
    backdrop-filter: blur(20px);
    border-radius: 20px 0 0 20px;
  }
  .nav-menu.active {
    transform: translateX(0);
  }
}
<?php endif; ?>

</style>



 