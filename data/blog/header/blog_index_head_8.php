 
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

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($titre) ?></title>

<style>
  
body {
  margin: 0;
  font-family: "Times New Roman", serif;
}

/* ====== HEADER PRINCIPAL ====== */
.main-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 12px 32px;
  border-bottom: 1px solid #ddd; /* fine ligne grise */
  background-color: white;       /* fond blanc */
  letter-spacing: 2px;
  position: relative;
  z-index: 1000;
  color: rgba(0, 0, 0,0.3);
}

/* ====== LOGO / TITRE ====== */
.main-header .logo {
  font-size: 14px;
  font-weight: normal;
}

/* ====== MENU NAVIGATION ====== */
.nav-menu {
  display: flex;
  gap: 40px;
}

.nav-menu a {
  text-decoration: none;
  color: black;
  font-size: 14px;
}

.nav-menu a:hover {
  text-decoration: underline;
}

/* ====== BURGER ====== */
.burger {
  display: none;
  flex-direction: column;
  justify-content: space-between;
  width: 22px;
  height: 16px;
  cursor: pointer;
}

.burger span {
  height: 2px;
  background: black;
  border-radius: 1px;
}

/* ====== VERSION MOBILE ====== */
@media (max-width: 700px) {
  .nav-menu {
    display: none;
    flex-direction: column;
    position: absolute;
    top: 48px;
    right: 32px;
    background: white;
    border: 1px solid #ddd;
    padding: 10px 0;
    width: 150px;
  }

  .nav-menu a {
    padding: 10px 20px;
    display: block;
  }

  .burger {
    display: flex;
  }

  .nav-menu.active {
    display: flex;
  }
}
</style>
</head>
<body>

<header class="main-header">
  <div class="logo"><?= htmlspecialchars($titre) ?></div>

  <nav class="nav-menu" id="nav-menu">
    <?php for ($i = 0; $i < count($menu_items); $i++): ?>
      <a href="#<?= htmlspecialchars($id_sha1_projet_a[$i]) ?>">
        <?= htmlspecialchars($menu_items[$i]) ?>
      </a>
    <?php endfor; ?>
  </nav>

  <div class="burger" id="burger">
    <span></span><span></span><span></span>
  </div>
</header>

<script>
// --- Gestion du menu burger ---
const burger = document.getElementById('burger');
const navMenu = document.getElementById('nav-menu');

// Toggle du menu
burger.addEventListener('click', (e) => {
  e.stopPropagation();
  navMenu.classList.toggle('active');
});

// Clic en dehors du menu → fermeture
document.addEventListener('click', (e) => {
  if (!navMenu.contains(e.target) && !burger.contains(e.target)) {
    navMenu.classList.remove('active');
  }
});
</script>

</body>
</html>
