<?php 

function fichierExiste($nomFichier) {
    $chemin = 'uploads/' . $nomFichier;

    if (file_exists($chemin)) {
        return true; // Le fichier existe
    } else {
        return false; // Le fichier n'existe pas
    }
}

/*

// Exemple d'utilisation
$fichier = '1749452465_5_1749452509.png';

if (fichierExiste($fichier)) {
    echo "Le fichier $fichier existe.";
} else {
    echo "Le fichier $fichier n'existe pas.";
}

*/



?>