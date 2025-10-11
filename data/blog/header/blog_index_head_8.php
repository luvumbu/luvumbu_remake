 
 <?php
// ---------------------- CONFIGURATION ----------------------
$titre = $title_projet_0;
$menu_items = [];

// Générer le menu
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


</head>
<body>

<header class="main-header"  role="banner">
  <div class="logo" aria-label="Nom du site" ><?= htmlspecialchars($titre) ?></div>

  <nav class="nav-menu" id="nav-menu" aria-label="Menu principal">
    <?php for ($i = 0; $i < count($menu_items); $i++): ?>
      <a href="#<?= htmlspecialchars($id_sha1_projet_a[$i]) ?>">
        <?= htmlspecialchars($menu_items[$i]) ?>
      </a>

   
    <?php endfor; ?>
  </nav>

  <div class="burger" id="burger"  aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="nav-menu">
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
