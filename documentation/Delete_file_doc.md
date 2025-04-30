# Documentation de Delete_file.php

## Description
La fonction `delete_file` est un utilitaire simple mais robuste pour la suppression sécurisée de fichiers. Elle intègre des vérifications de sécurité et fournit des retours d'information clairs sur le résultat de l'opération.

## Syntaxe
```php
delete_file($file_path)
```

## Paramètres
- `$file_path` (string) : Chemin complet vers le fichier à supprimer

## Fonctionnement
1. Vérifie l'existence du fichier
2. Tente la suppression si le fichier existe
3. Fournit un retour sur le résultat de l'opération

## Valeurs de retour
La fonction affiche un message selon le résultat :
- Succès : "The file '[chemin]' was successfully deleted."
- Échec de suppression : "An error occurred while deleting the file '[chemin]'."
- Fichier inexistant : "The file '[chemin]' does not exist."

## Exemples d'utilisation

### 1. Suppression d'un fichier simple
```php
$file_path = "documents/old_file.txt";
delete_file($file_path);
```

### 2. Suppression avec chemin absolu
```php
$file_path = "C:/UwAmp/www/project/temp/cache.tmp";
delete_file($file_path);
```

### 3. Suppression dans un script de nettoyage
```php
$temp_files = ["temp1.txt", "temp2.txt", "temp3.txt"];
foreach($temp_files as $file) {
    delete_file("temp/" . $file);
}
```

## Cas d'utilisation

1. **Nettoyage de fichiers temporaires**
   ```php
   // Suppression des fichiers de cache
   delete_file("cache/temp_data.tmp");
   ```

2. **Gestion des uploads**
   ```php
   // Suppression d'un ancien fichier avant upload
   delete_file("uploads/" . $old_filename);
   ```

3. **Maintenance système**
   ```php
   // Nettoyage des logs obsolètes
   delete_file("logs/old_log_" . $date . ".log");
   ```

## Notes importantes

### 1. Sécurité
- Toujours vérifier les permissions avant utilisation
- Éviter de supprimer des fichiers système
- Valider le chemin du fichier avant suppression

### 2. Bonnes pratiques
- Sauvegarder les fichiers importants avant suppression
- Journaliser les suppressions critiques
- Gérer les erreurs de manière appropriée

### 3. Limitations
- Ne supprime pas les dossiers (utiliser `rmdir()` pour les dossiers)
- Ne gère pas les suppressions récursives
- Nécessite des permissions appropriées

## Gestion des erreurs
La fonction gère trois scénarios principaux :
1. Fichier supprimé avec succès
2. Échec de la suppression (problème de permissions)
3. Fichier inexistant

## Exemple de code complet
```php
// Inclusion du fichier
require_once 'Delete_file.php';

// Configuration
$log_directory = "logs/";
$old_log = $log_directory . "2024-01-old.log";

// Vérification et suppression
if (is_writable($log_directory)) {
    delete_file($old_log);
} else {
    echo "Permission denied: Cannot access log directory";
}
```

## Bonnes pratiques d'utilisation

1. **Vérification préalable**
   ```php
   if (is_writable($file_path)) {
       delete_file($file_path);
   }
   ```

2. **Journalisation**
   ```php
   error_log("Attempting to delete file: " . $file_path);
   delete_file($file_path);
   ```

3. **Gestion des erreurs**
   ```php
   try {
       delete_file($file_path);
   } catch (Exception $e) {
       error_log("File deletion failed: " . $e->getMessage());
   }
   ```
