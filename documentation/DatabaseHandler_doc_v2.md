# DatabaseHandler

## Gestion des connexions MySQL

### Méthodes clés :
```php
query(string $sql): mysqli_result
get_connection(): mysqli
```

### Workflow type :
1. Initialisation avec credentials
2. Exécution requêtes via query()
3. Journalisation automatique
