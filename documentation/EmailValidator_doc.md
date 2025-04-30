# Documentation de EmailValidator.php

## Description
Classe de validation d'adresses email avec vérification DNS et syntaxique avancée.

## Fonctionnalités :
- Validation RFC 5322
- Vérification MX record
- Détection de domaines jetables
- Anti-spoofing basique
- Interface simple avec méthode statique `validate`

## Exemple d'utilisation :
```php
$email = 'contact@example.com';
if (EmailValidator::validate($email)) {
    echo 'Email valide';
} else {
    echo 'Email invalide';
}
```
