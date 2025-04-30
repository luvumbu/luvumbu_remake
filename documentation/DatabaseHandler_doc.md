# Documentation de DatabaseHandler.php

## Description
La classe `DatabaseHandler` est un gestionnaire de base de données MySQL complet qui facilite les opérations courantes de base de données. Elle offre une interface simplifiée pour la création, la manipulation et la gestion des tables et des données.

## Propriétés

### Configuration de la connexion
- `$servername` (public) : Nom du serveur (par défaut: "localhost")
- `$username` (public) : Nom d'utilisateur MySQL
- `$password` (public) : Mot de passe MySQL
- `$verif` (public) : État de la connexion (true/false)
- `$connection` (public) : Connexion principale
- `$connection_child` (public) : Connexion secondaire

### Gestion des tables
- `$tableList` (public) : Liste des tables
- `$tableList_child` (public) : Liste des colonnes d'une table
- `$tableList_child2` (public) : Liste alternative des colonnes
- `$tableList_info` (public) : Données récupérées
- `$tableList_info2` (public) : Données structurées

### Variables de contrôle
- `$table_name_general` (public) : Nom de table générique
- `$sql_general` (public) : Requête SQL générique
- `$mysql_general` (public) : Configuration MySQL générique
- `$table_general` (public) : Table générique
- `$column_names` (public) : Noms des colonnes
- `$column_types` (public) : Types des colonnes

## Méthodes principales

### __construct($username, $password)
Initialise la connexion à la base de données.

#### Paramètres
- `$username` : Nom d'utilisateur MySQL
- `$password` : Mot de passe MySQL

#### Exemple
```php
$db = new DatabaseHandler("root", "password123");
```

### getTables()
Récupère la liste des tables de la base de données.

#### Retour
Array contenant les noms des tables ou false si aucune table.

#### Exemple
```php
$tables = $db->getTables();
foreach($tables as $table) {
    echo $table . "\n";
}
```

### getListOfTables_Child($tableName)
Récupère la liste des colonnes d'une table.

#### Paramètres
- `$tableName` : Nom de la table

#### Exemple
```php
$columns = $db->getListOfTables_Child("users");
print_r($columns);
```

### add_table($nom_table)
Crée une nouvelle table avec les colonnes définies.

#### Paramètres
- `$nom_table` : Nom de la nouvelle table

#### Exemple
```php
$db->set_column_names("id");
$db->set_column_types("INT AUTO_INCREMENT PRIMARY KEY");
$db->set_column_names("name");
$db->set_column_types("VARCHAR(255)");
$db->add_table("users");
```

### action_sql($sql)
Exécute une requête SQL.

#### Paramètres
- `$sql` : Requête SQL à exécuter

#### Exemple
```php
$db->action_sql("INSERT INTO users (name) VALUES ('John')");
```

### getDataFromTable($sql, $info_recherche)
Récupère des données spécifiques d'une table.

#### Paramètres
- `$sql` : Requête SQL
- `$info_recherche` : Colonne à extraire

#### Exemple
```php
$db->getDataFromTable("SELECT * FROM users", "name");
$names = $db->tableList_info;
```

## Méthodes de configuration

### set_column_names($column_names) et set_column_types($column_types)
Définit les colonnes pour la création de table.

#### Exemple
```php
// Création d'une table users
$db->set_column_names("id");
$db->set_column_types("INT AUTO_INCREMENT PRIMARY KEY");
$db->set_column_names("username");
$db->set_column_types("VARCHAR(50)");
$db->set_column_names("email");
$db->set_column_types("VARCHAR(100)");
$db->add_table("users");
```

### existance_table($table_a_verifier)
Vérifie si une table existe.

#### Paramètres
- `$table_a_verifier` : Nom de la table à vérifier

#### Retour
- "1" si la table existe
- "0" si la table n'existe pas

#### Exemple
```php
if($db->existance_table("users") === "1") {
    echo "La table users existe";
}
```

## Exemple complet d'utilisation

```php
// Création d'une instance
$db = new DatabaseHandler("root", "password123");

// Création d'une nouvelle table
$db->set_column_names("id");
$db->set_column_types("INT AUTO_INCREMENT PRIMARY KEY");
$db->set_column_names("name");
$db->set_column_types("VARCHAR(255)");
$db->set_column_names("email");
$db->set_column_types("VARCHAR(255)");
$db->add_table("users");

// Insertion de données
$db->action_sql("INSERT INTO users (name, email) VALUES ('John', 'john@example.com')");

// Récupération des données
$db->getDataFromTable("SELECT * FROM users", "name");
$names = $db->tableList_info;

// Utilisation des variables dynamiques
$db->get_dynamicVariables();
global $dynamicVariables;
print_r($dynamicVariables);
```

## Notes importantes

### 1. Gestion des connexions
- La classe gère automatiquement l'ouverture et la fermeture des connexions
- Vérifie systématiquement l'état de la connexion avant les opérations
- Utilise des connexions distinctes pour les opérations principales et secondaires

### 2. Sécurité
- Ne stocke pas les mots de passe en clair
- Vérifie les erreurs de connexion
- Nettoie les ressources après utilisation

### 3. Performance
- Utilise des connexions optimisées
- Ferme les connexions après utilisation
- Gère efficacement les ressources

### 4. Bonnes pratiques
- Toujours vérifier le retour des méthodes
- Utiliser les méthodes de vérification avant les opérations critiques
- Gérer les erreurs de manière appropriée
- Utiliser les transactions pour les opérations multiples
