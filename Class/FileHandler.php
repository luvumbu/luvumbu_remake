<?php

class FileHandler
{
    private $filePath;
    private $directoryPath;
    private $content;
    private $fileArray;

    public function __construct($filePath, $content, &$fileArray)
    {
        $this->filePath = $filePath;
        $this->directoryPath = dirname($filePath);
        $this->content = $content;
        $this->fileArray = &$fileArray; // Référence au tableau
    }

    public function processFile()
    {
        try {
            $this->ensureDirectoryExists();
            $this->createFile();
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage() . "<br/>";
        }
    }

    private function ensureDirectoryExists()
    {
        if (!is_dir($this->directoryPath)) {
            if (mkdir($this->directoryPath, 0777, true)) {
                echo "Le dossier a été créé avec succès.<br/>";
            } else {
                throw new Exception("Impossible de créer le dossier.");
            }
        }
    }

    private function createFile()
    {
        $file = fopen($this->filePath, 'w');
        if ($file) {
            fwrite($file, $this->content);
            fclose($file);
            echo "Le fichier a été créé avec succès.<br/>";
            array_push($this->fileArray, $this->filePath);
        } else {
            throw new Exception("Impossible d'ouvrir le fichier pour l'écriture.");
        }
    }
}


?>
<?php
/*
class FileHandler
{
    private $filePath;
    private $directoryPath;
    private $content;
    private $fileArray;

    public function __construct($filePath, $content, &$fileArray)
    {
        $this->filePath = $filePath;
        $this->directoryPath = dirname($filePath);
        $this->content = $content;
        $this->fileArray = &$fileArray; // Référence au tableau
    }

    public function processFile()
    {
        try {
            $this->ensureDirectoryExists();
            $this->createFile();
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage() . "<br/>";
        }
    }

    private function ensureDirectoryExists()
    {
        if (!is_dir($this->directoryPath)) {
            if (mkdir($this->directoryPath, 0777, true)) {
                echo "Le dossier a été créé avec succès.<br/>";
            } else {
                throw new Exception("Impossible de créer le dossier.");
            }
        }
    }

    private function createFile()
    {
        $file = fopen($this->filePath, 'w');
        if ($file) {
            fwrite($file, $this->content);
            fclose($file);
            echo "Le fichier a été créé avec succès.<br/>";
            array_push($this->fileArray, $this->filePath);
        } else {
            throw new Exception("Impossible d'ouvrir le fichier pour l'écriture.");
        }
    }
}

// Exemple 1: Création d'un fichier et ajout du chemin dans un tableau
$fileArray = []; // Tableau pour stocker les fichiers créés

$filePath = "docs/mon_fichier.txt"; // Définition du chemin du fichier
$content = "Ceci est un exemple de contenu de fichier."; // Définition du contenu du fichier

$fileHandler = new FileHandler($filePath, $content, $fileArray); // Création de l'objet FileHandler
$fileHandler->processFile(); // Traitement du fichier (création du dossier et du fichier)

echo "Fichiers créés : <br/>";
print_r($fileArray); // Affichage du tableau des fichiers créés

// Exemple 2: Création de plusieurs fichiers avec un tableau de données
$fileArray = []; // Tableau pour stocker les fichiers créés

$filesData = [ // Tableau des fichiers à créer (chemin et contenu)
    ["filePath" => "documents/rapport.txt", "content" => "Rapport sur le projet X."],
    ["filePath" => "documents/note.txt", "content" => "Note importante concernant le projet."],
    ["filePath" => "assets/images/image.jpg", "content" => "Image de test."]
];

foreach ($filesData as $fileData) {
    $fileHandler = new FileHandler($fileData['filePath'], $fileData['content'], $fileArray); // Création de l'objet FileHandler
    $fileHandler->processFile(); // Traitement du fichier (création du dossier et du fichier)
}

echo "Fichiers créés : <br/>";
print_r($fileArray); // Affichage du tableau des fichiers créés

// Exemple 3: Gestion d'erreurs lors de la création de fichiers
$fileArray = []; // Tableau pour stocker les fichiers créés

$filePath = "/chemin_invalide/mon_fichier.txt"; // Définition d'un chemin de fichier invalide (problème avec les permissions)
$content = "Contenu du fichier"; // Définition du contenu du fichier

$fileHandler = new FileHandler($filePath, $content, $fileArray); // Création de l'objet FileHandler
$fileHandler->processFile(); // Traitement du fichier (création du dossier et du fichier) avec gestion des erreurs
*/
?>
