<?php

class DirectoryManager
{
 
    public static function ensureDirectoryExists(string $filePath, int $permissions = 0777): bool
    {
        // Obtenir le chemin du dossier
        $directoryPath = dirname($filePath);

        // Vérifier si le dossier existe déjà
        if (is_dir($directoryPath)) {
            echo "Le dossier existe déjà.<br/>";
            return true;
        }

        // Créer le dossier
        if (mkdir($directoryPath, $permissions, true)) {
            echo "Le dossier a été créé avec succès.<br/>";
            return true;
        } else {
            echo "Impossible de créer le dossier.<br/>";
            return false;
        }
    }
}

?>

<?php
/*
// Exemple 1 : Vérifier et créer un dossier pour un fichier spécifique

// Définir le chemin du fichier (en supposant que ce fichier doit être sauvegardé dans ce dossier)
$filePath = "/path/to/your/folder/filename.txt";

// Appeler la méthode pour garantir que le dossier existe
DirectoryManager::ensureDirectoryExists($filePath);
?>
<!-- Exemple 1 : Vérifier et créer un dossier pour un fichier spécifique -->

<?php
// Exemple 2 : Vérification et création de dossier avec des permissions personnalisées

// Définir le chemin du fichier
$filePath = "/path/to/another/folder/anotherfile.txt";

// Appeler la méthode en spécifiant des permissions spécifiques (par exemple, 0755)
DirectoryManager::ensureDirectoryExists($filePath, 0755);
?>
<!-- Exemple 2 : Vérification et création de dossier avec des permissions personnalisées -->

<?php
// Exemple 3 : Utilisation dans un script de téléchargement de fichiers

// Imaginons un scénario où tu dois télécharger un fichier sur un serveur. Avant de télécharger, tu veux t'assurer que le dossier dans lequel tu vas placer le fichier existe.

// Définir le chemin du fichier téléchargé (le dossier de destination pour le fichier)
$filePath = "/var/www/uploads/newfile.txt";

// Vérifier si le dossier existe et le créer si nécessaire avec les permissions 0750
DirectoryManager::ensureDirectoryExists($filePath, 0750);

// Code de téléchargement de fichier ici (exemple simple)
// move_uploaded_file($_FILES['userfile']['tmp_name'], $filePath);
?>
<!-- Exemple 3 : Utilisation dans un script de téléchargement de fichiers -->

<?php
// Exemple 4 : Créer des dossiers pour chaque utilisateur dans une structure de répertoires

// Supposons que tu reçoives un ID utilisateur et tu veux créer un dossier pour cet utilisateur
$userID = 12345;
$userDirectory = "/path/to/users/" . $userID . "/files/";

// Appeler la méthode pour garantir que le dossier de l'utilisateur existe
DirectoryManager::ensureDirectoryExists($userDirectory);
?>
<!-- Exemple 4 : Créer des dossiers pour chaque utilisateur dans une structure de répertoires -->

<?php
// Exemple 5 : Création d'un dossier de log

// Dans un script de gestion d'application, tu peux vouloir créer un dossier pour stocker les fichiers de logs. Ce dossier doit être créé s'il n'existe pas déjà.

// Définir le chemin du dossier de logs
$logDirectory = "/var/www/logs/application/";

// Appeler la méthode pour garantir que le dossier de logs existe
DirectoryManager::ensureDirectoryExists($logDirectory);

// Ensuite, tu peux commencer à enregistrer des logs dans ce dossier
// Par exemple, tu pourrais ouvrir un fichier log et écrire dedans
// file_put_contents($logDirectory . "logfile.txt", "Log entry here", FILE_APPEND);
?>
<!-- Exemple 5 : Création d'un dossier de log -->

<?php
// Exemple 6 : Utilisation avec une URL d'un fichier téléchargé par un utilisateur

// Imaginons que tu donnes aux utilisateurs la possibilité de télécharger un fichier via un formulaire. Avant de sauvegarder le fichier, tu veux t'assurer que le répertoire de destination est créé.

// Le chemin de destination pour le fichier téléchargé
$filePath = "/uploads/user_files/" . basename($_FILES['fileToUpload']['name']);

// Appeler la méthode pour garantir que le dossier existe
DirectoryManager::ensureDirectoryExists($filePath);

// Sauvegarder le fichier téléchargé dans le répertoire cible
if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $filePath)) {
    echo "Le fichier a été téléchargé avec succès.";
} else {
    echo "Désolé, une erreur est survenue lors du téléchargement du fichier.";
}
    */
?>
<!-- Exemple 6 : Utilisation avec une URL d'un fichier téléchargé par un utilisateur -->
