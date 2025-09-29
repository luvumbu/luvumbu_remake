<?php
function parcourirDossier($racine, &$totalLignes = 0) {
    if (!is_dir($racine)) {
        echo "<p class='error'>❌ Le chemin spécifié n'est pas un dossier.</p>";
        return;
    }

    $elements = scandir($racine);

    foreach ($elements as $element) {
        if ($element === '.' || $element === '..') {
            continue;
        }

        $cheminComplet = $racine . DIRECTORY_SEPARATOR . $element;

        if (is_dir($cheminComplet)) {
            echo "<p class='dir'>📂 Dossier : " . htmlspecialchars($cheminComplet) . "</p>";
            parcourirDossier($cheminComplet, $totalLignes);

        } else {
            // On ignore certains fichiers binaires
            $ext = strtolower(pathinfo($cheminComplet, PATHINFO_EXTENSION));
            $extensionsIgnorees = ["jpg","jpeg","png","gif","exe","zip","pdf","mp4","mp3"];
            if (in_array($ext, $extensionsIgnorees)) {
                continue;
            }

            // Lire les lignes
            $lignes = @file($cheminComplet, FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
            if ($lignes !== false) {
                $nbLignes = count($lignes);
                $totalLignes += $nbLignes;
                echo "<p class='file'>📄 " . htmlspecialchars($cheminComplet) . " — <strong>$nbLignes lignes</strong></p>";
            }
        }
    }
}

// 📂 Racine de recherche
$racine = __DIR__;
$totalLignes = 0;

parcourirDossier($racine, $totalLignes);

echo "<hr><p class='total'>🔢 Total de lignes dans le projet : <strong>$totalLignes</strong></p>";
?>
