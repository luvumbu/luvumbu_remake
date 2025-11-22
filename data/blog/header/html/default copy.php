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
$mberger = $longueur > 60;
 
 
 

  
?>

<!-- Google Fonts -->
 
 
<div class="menu_nav_g" id="main-header">


<div class="menu_nav">

<div class="no_decoration_padding">
  <a class="mon_titre no_decoration" href="#main-header"><?= htmlspecialchars($titre) ?></a>
</div>



<div class="menu_nav2">


<?php 


for ($i=0; $i < count($menu_items) ; $i++) { 
 
  ?>
  <div class="no_decoration_padding">
 <a class="no_decoration" href="#<?= htmlspecialchars($id_sha1_projet_a[$i]) ?>"><?= htmlspecialchars($menu_items[$i]) ?></a>

  </div>

<?php
 

}
?>
</div> 
</div>

  </div>    
