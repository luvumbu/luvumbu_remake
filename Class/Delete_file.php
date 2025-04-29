<?php
// Fonction pour supprimer un fichier
function delete_file($file_path) {
    // Vérifie si le fichier existe à l'emplacement spécifié
    if (file_exists($file_path)) {
        // Si le fichier existe, tente de le supprimer avec la fonction 'unlink()'
        if (unlink($file_path)) {
            // Si la suppression est réussie, un message de succès est affiché
            echo "The file '$file_path' was successfully deleted.";
        } else {
            // Si la suppression échoue, un message d'erreur est affiché
            echo "An error occurred while deleting the file '$file_path'.";
        }
    } else {
        // Si le fichier n'existe pas, un message est affiché pour en informer l'utilisateur
        echo "The file '$file_path' does not exist.";
    }
}
/*
// Exemple d'utilisation de la fonction delete_file
// Spécifie le chemin du fichier à supprimer
$file_path = "path/to/your/file.txt";
// Appelle la fonction delete_file en passant le chemin du fichier
delete_file($file_path);
*/
?>
