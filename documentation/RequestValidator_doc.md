# RequestValidator

## Validation des entrées utilisateur

### Méthodes :
```php
validateEmail(string $email): bool
sanitizeInput(string $input): string
```

Exemple :
```php
if(RequestValidator::validateEmail($userInput)) {
    // Traitement valide
}
```
