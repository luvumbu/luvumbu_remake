<?php

class FileSearcher {
    private $fileName;
    private $maxLevel;
    private $foundPaths = array();

    public function __construct($fileName, $maxLevel = 2) {
        $this->fileName = $fileName;
        $this->maxLevel = $maxLevel;
    }

    /**
     * Lance la recherche dans . et ../, ../../, ... jusqu'à $maxLevel
     * @return array Tous les chemins absolus trouvés
     */
    public function searchAll() {
        $this->foundPaths = array();

        // Dossiers à explorer : . puis ../, ../../, etc.
        $pathsToSearch = array('.');
        for ($i = 1; $i <= $this->maxLevel; $i++) {
            $pathsToSearch[] = str_repeat('../', $i);
        }

        foreach ($pathsToSearch as $basePath) {
            $this->searchRecursive($basePath);
        }

        return $this->foundPaths;
    }

    /**
     * Fonction récursive qui explore dossiers et sous-dossiers
     * @param string $directory dossier courant
     * @return void
     */
    private function searchRecursive($directory) {
        if (!is_dir($directory)) return;

        $files = scandir($directory);
        if ($files === false) return;

        foreach ($files as $file) {
            if ($file === '.' || $file === '..') continue;

            $currentPath = rtrim($directory, '/\\') . DIRECTORY_SEPARATOR . $file;

            if (is_file($currentPath) && $file === $this->fileName) {
                $realPath = realpath($currentPath);
                if ($realPath !== false && !in_array($realPath, $this->foundPaths)) {
                    $this->foundPaths[] = $realPath;
                }
            }

            if (is_dir($currentPath)) {
                $this->searchRecursive($currentPath);
            }
        }
    }
}

// Exemple d'utilisation :

/*
$searcher = new FileSearcher('mon_fichier.php', 2);
$foundFiles = $searcher->searchAll();

if (empty($foundFiles)) {
    echo "❌ Fichier introuvable.";
} else {
    foreach ($foundFiles as $path) {
        echo "✅ Fichier trouvé ici : " . $path . "\n";
        // Exemple d'inclusion
        // require $path;
    }
}
*/

?>
