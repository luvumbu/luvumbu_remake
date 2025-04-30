# Upload.php

## Gestion sécurisée de fichiers

### Features :
- Décodage Base64
- Vérification d'extension
- Anti-overwrite
- Journalisation des uploads

### Sequence :
```php
$data = $_POST['file'];
$decoded = decode_chunk($data); // Décodage
file_put_contents($path, $decoded);
```
