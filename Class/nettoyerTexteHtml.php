<?php 

function nettoyerTexteHtml($texte) {
    // Supprimer toutes les balises HTML
    $textePropre = strip_tags($texte);

    // Supprimer les espaces inutiles
    $textePropre = trim($textePropre);

    return $textePropre;
}

/*
// Exemple d'utilisation
$texteOriginal = "<h1>Bienvenue sur mon site !</h1><p>Ce texte contient des balises HTML et des espaces inutiles.    </p>";
$texteNettoye = nettoyerTexteHtml($texteOriginal);

echo "Texte original : $texteOriginal\n";
echo "Texte nettoyé : $texteNettoye\n";

*/ 


?>