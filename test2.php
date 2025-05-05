<?php
require_once "all_projet/coobol_8.php" ; 
?>

<?php
$directory = __DIR__ . '/all_projet'; // __DIR__ donne le chemin absolu du fichier PHP actuel

$nom_fichier = array() ; 
if (is_dir($directory)) {
    $contents = scandir($directory);
    foreach ($contents as $item) {
        // Ignorer les entrées spéciales "." et ".."
        if ($item !== '.' && $item !== '..') {
            echo $item . "<br>";
            array_push($nom_fichier,$item) ; 
        }
    }
} else {
    echo "Le dossier 'all_projet' n'existe pas.";
}
?>


<?php
 var_dump($nom_fichier) ; 

// Création de variables dynamiques
$extraits = [];
foreach ($row_projet as $projet) {
    foreach ($projet as $key => $value) {
        $extraits[$key][] = $value;
    }
}

// Injection dans des variables PHP dynamiques
foreach ($extraits as $key => $values) {
    $$key = $values;
}

// ✅ Tu peux maintenant utiliser directement :
var_dump($id_projet);


?>

