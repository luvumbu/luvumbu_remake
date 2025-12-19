<?php
// ---------------------- CONFIGURATION ----------------------
$titre = $title_projet_0;
$menu_items = [];
$max_string = 10;

// Générer le menu
for ($i = 0; $i < count($title_projet_a); $i++) {
    array_push($menu_items, replace_element_2(AsciiConverter::asciiToString($title_projet_a[$i])));
}

// Vérifier si on doit afficher le burger
$contenu_total = $titre . implode('', $menu_items);
$longueur = strlen($contenu_total);
$mberger = $longueur > 60;

 
 
 

  
?>
<style>
    :root {
    /* Couleurs claires */
    --card-bg: #ffffff;
    --accent: #1e6333ff;

    --muted: #6b7280;
    --text: #111827;
    --glass: rgba(255, 255, 255, 0.6);
    --border: #d1d5db;
    --logo-gradient-start: var(--accent);
    --logo-gradient-end: #60a5fa;
}

</style>


     <header>
        <div class="brand">
            <div class="logo"><?= htmlspecialchars($titre) ?></div>    
        </div>

        <nav aria-label="Menu principal">
            <ul>
        <?php 


 for ($i=0; $i < count($menu_items); $i++) { 



    if($id_sha1_projet_lock_a[$i]!="1"){
        
       
    
    
    }  
    else{
        ?>
 <li><a href="#<?= htmlspecialchars($id_sha1_projet_a[$i]) ?>"><?=  $menu_items[$i] ?></a></li>

        <?php
    }


   ?>

<?php 
 }

?>
 
            </ul>
        </nav>

        <div class="search-wrap">
            <div class="search" role="search" aria-label="Recherche sur le blog">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M21 21l-4.35-4.35" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <circle cx="11" cy="11" r="6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></circle>
                </svg>
                <input id="searchInput" type="search" placeholder="Rechercher par mot-clé..." aria-label="Rechercher" />
            </div>
        </div>
    </header>


 
 


 