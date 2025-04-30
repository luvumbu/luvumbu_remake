# ImageResizer.php

## Redimensionnement d'images intelligent

### Fonctionnalités :
- Support JPG/PNG/GIF
- Conservation du ratio d'aspect
- Calcul automatique des nouvelles dimensions

### Exemple :
```php
$resizer = new ImageResizer('photo.jpg');
$resizer->resize(800, 600); // Redimensionne à 800x600 max
$resizer->save('photo_thumb.jpg');
```

## Workflow
1. Détection du type MIME
2. Chargement via GD Library
3. Calcul des proportions
4. Application du redimensionnement
