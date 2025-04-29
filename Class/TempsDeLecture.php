<?php
function tempsDeLecture($texte, $motsParMinute = 200) {
    // Calculer le nombre de mots dans le texte
    $nombreMots = str_word_count(strip_tags($texte));

    // Calculer le temps de lecture en minutes
    $tempsDeLecture = ceil($nombreMots / $motsParMinute);

    return $tempsDeLecture;
}
/*
// Exemple d'utilisation
$texte = "Ceci est un exemple de texte. Il contient plusieurs phrases pour tester la fonction de calcul du temps de lecture.";
$tempsEstime = tempsDeLecture($texte);

echo "Temps de lecture estimé : $tempsEstime minute(s)";
*/
?>
