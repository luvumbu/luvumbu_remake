# FileSystemHelper.php

## Gestion avancée de l'arborescence

### Fonctionnalités clés
- Vérification d'existence de dossiers
- Création récursive de structures
- Gestion des permissions (0755 par défaut)

### Méthodes principales
```php
checkDirectoriesExist(array $paths, bool $create = false)
directoryExists(string $path)
```

## Cas d'usage typique
```php
$paths = ['src/controllers', 'src/models'];
FileSystemHelper::checkDirectoriesExist($paths, true);
```

## Workflow
1. Parcourt la liste des dossiers
2. Vérifie chaque existence avec `is_dir()`
3. Crée si manquant avec droits 755
4. Log les actions dans la sortie
