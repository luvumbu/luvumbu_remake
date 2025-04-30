# Documentation de DirectoryManager.php

## Description
La classe `DirectoryManager` est un gestionnaire de répertoires qui fournit des méthodes statiques pour la manipulation sécurisée des dossiers. Elle permet notamment de vérifier et créer des dossiers avec des permissions personnalisées.

## Méthodes

### ensureDirectoryExists(string $filePath, int $permissions = 0777): bool

#### Description
Vérifie l'existence d'un dossier pour un chemin de fichier donné et le crée si nécessaire.

#### Paramètres
- `$filePath` (string) : Chemin complet du fichier
- `$permissions` (int, optionnel) : Permissions du dossier (par défaut: 0777)

#### Retour
- `bool` : `true` si le dossier existe ou a été créé avec succès, `false` sinon

#### Messages de retour
- "Le dossier existe déjà."
- "Le dossier a été créé avec succès."
- "Impossible de créer le dossier."

## Exemples d'utilisation

### 1. Vérification simple d'un dossier
```php
// Chemin du fichier
$filePath = "uploads/images/photo.jpg";

// Vérifier/créer le dossier
$result = DirectoryManager::ensureDirectoryExists($filePath);

if ($result) {
    echo "Le dossier est prêt à être utilisé";
} else {
    echo "Erreur lors de la préparation du dossier";
}
```

### 2. Création avec permissions personnalisées
```php
// Chemin du fichier
$filePath = "data/users/profiles/user1.json";

// Vérifier/créer le dossier avec permissions 0755
$result = DirectoryManager::ensureDirectoryExists($filePath, 0755);

if ($result) {
    echo "Dossier créé avec permissions restreintes";
}
```

### 3. Utilisation dans un système d'upload
```php
// Gestion d'upload d'images
$uploadDir = "uploads/images/" . date("Y/m/d") . "/";
$fileName = "image.jpg";
$filePath = $uploadDir . $fileName;

if (DirectoryManager::ensureDirectoryExists($filePath)) {
    // Le dossier existe, on peut procéder à l'upload
    move_uploaded_file($_FILES['image']['tmp_name'], $filePath);
}
```

## Cas d'utilisation

1. **Gestion des uploads**
   ```php
   $uploadPath = "uploads/documents/user_" . $userId . "/file.pdf";
   DirectoryManager::ensureDirectoryExists($uploadPath);
   ```

2. **Création de dossiers de cache**
   ```php
   $cachePath = "cache/templates/" . $templateId . "/cache.tmp";
   DirectoryManager::ensureDirectoryExists($cachePath, 0775);
   ```

3. **Organisation des logs**
   ```php
   $logPath = "logs/" . date("Y/m") . "/app.log";
   DirectoryManager::ensureDirectoryExists($logPath);
   ```

## Notes importantes

### 1. Sécurité
- Les permissions par défaut (0777) donnent un accès total - à utiliser avec précaution
- Préférer des permissions plus restrictives en production (ex: 0755)
- Vérifier les droits d'accès du serveur web

### 2. Bonnes pratiques
- Toujours vérifier le retour de la méthode
- Utiliser des chemins relatifs à la racine de l'application
- Gérer les erreurs de création de dossier

### 3. Limitations
- Ne gère pas la suppression de dossiers
- Ne vérifie pas l'espace disque disponible
- Ne gère pas les conflits de noms

## Exemple de code complet
```php
<?php
// Inclusion de la classe
require_once 'DirectoryManager.php';

// Configuration
$baseUploadDir = "uploads/";
$userDir = "user_" . $userId . "/";
$dateDir = date("Y/m/d") . "/";
$fileName = "document.pdf";

// Construction du chemin complet
$filePath = $baseUploadDir . $userDir . $dateDir . $fileName;

// Vérification/création du dossier avec permissions personnalisées
try {
    if (DirectoryManager::ensureDirectoryExists($filePath, 0755)) {
        // Le dossier est prêt, on peut utiliser le fichier
        if (move_uploaded_file($_FILES['document']['tmp_name'], $filePath)) {
            echo "Upload réussi !";
        }
    } else {
        throw new Exception("Impossible de créer le dossier");
    }
} catch (Exception $e) {
    error_log("Erreur DirectoryManager : " . $e->getMessage());
    echo "Une erreur est survenue";
}
```

## Bonnes pratiques d'utilisation

1. **Gestion des erreurs**
   ```php
   if (!DirectoryManager::ensureDirectoryExists($path)) {
       throw new Exception("Erreur de création du dossier");
   }
   ```

2. **Permissions sécurisées**
   ```php
   // En production
   DirectoryManager::ensureDirectoryExists($path, 0755);
   
   // Pour les dossiers temporaires
   DirectoryManager::ensureDirectoryExists($tempPath, 0700);
   ```

3. **Validation des chemins**
   ```php
   $path = realpath($basePath) . DIRECTORY_SEPARATOR . $subDir;
   DirectoryManager::ensureDirectoryExists($path);
   ```
