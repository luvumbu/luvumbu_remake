# Documentation de Creat_form.php

## Description
La classe `Creat_form` est un générateur dynamique de formulaires HTML qui permet de créer et manipuler des formulaires et leurs éléments de manière programmatique. Elle combine PHP et JavaScript pour offrir une interface fluide de création de formulaires avec gestion de base de données intégrée.

## Dépendances
```php
require_once "CheckFileExists.php"
require_once "Delete_file.php"
require_once "DatabaseHandler.php"
```

## Propriétés

### Propriétés principales
- `$name_form` (private) : Nom du formulaire
- `$name_type` (private) : Type d'élément HTML
- `$child_info` (public) : Tableau stockant les informations des éléments enfants
- `$array_select_Atribut` (public) : Tableau pour les attributs de sélection
- `$nom_dossier` (public) : Nom du dossier de destination
- `$nom_fichier` (public) : Nom du fichier de destination
- `$path` (public) : Chemin complet du fichier

### Propriétés de configuration
- `$config_bool` (public) : État de la configuration (défaut: true)
- `$path_config` (public) : Chemin du fichier de configuration
- `$bool_config` (public) : État de la configuration secondaire
- `$config_dbname` (public) : Nom de la base de données
- `$config_password` (public) : Mot de passe de la base de données
- `$databaseHandler_verif` (public) : État de la vérification de la base de données

## Méthodes

### __construct($name_form, $name_type, $para)
Initialise un nouveau formulaire.

#### Paramètres
- `$name_form` : Nom du formulaire
- `$name_type` : Type d'élément HTML à créer
- `$para` : ID de l'élément parent (optionnel)

#### Fonctionnement
1. Initialise les propriétés du formulaire
2. Vérifie la configuration de la base de données
3. Crée l'élément HTML via JavaScript
4. L'ajoute au DOM soit dans le body, soit dans un parent spécifié

#### Exemple
```php
$form = new Creat_form("monFormulaire", "form", "");
```

### add_child($name, $type)
Ajoute un élément enfant au formulaire.

#### Paramètres
- `$name` : ID de l'élément enfant
- `$type` : Type d'élément HTML à créer

#### Exemple
```php
$form->add_child("nomInput", "input");
```

### add_child_array($list_array)
Ajoute plusieurs éléments enfants en une seule fois.

#### Paramètres
- `$list_array` : Tableau d'éléments à ajouter

#### Exemple
```php
$elements = [
    ["nomInput", "input"],
    ["emailInput", "input", "email"],
    ["submitBtn", "button", "Envoyer"]
];
$form->add_child_array($elements);
```

### child_setAtribut($id, $name_atribute, $value_atribute)
Définit un attribut pour un élément enfant.

#### Paramètres
- `$id` : ID de l'élément enfant
- `$name_atribute` : Nom de l'attribut (vide pour innerHTML)
- `$value_atribute` : Valeur de l'attribut

#### Exemple
```php
$form->child_setAtribut("nomInput", "type", "text");
$form->child_setAtribut("submitBtn", "", "Envoyer"); // Définit le texte du bouton
```

### construct_setAtribut($name_atribute, $value_atribute)
Définit un attribut pour le formulaire principal.

#### Paramètres
- `$name_atribute` : Nom de l'attribut (vide pour innerHTML)
- `$value_atribute` : Valeur de l'attribut

#### Exemple
```php
$form->construct_setAtribut("method", "POST");
```

### stylesheet($source)
Ajoute une feuille de style au formulaire.

#### Paramètres
- `$source` : Chemin vers le fichier CSS

#### Exemple
```php
$form->stylesheet("styles/form.css");
```

### select_Atribut($value, $nom_dossier, $nom_fichier)
Configure les attributs de sélection et génère un fichier PHP.

#### Paramètres
- `$value` : Valeur à sélectionner
- `$nom_dossier` : Dossier de destination
- `$nom_fichier` : Nom du fichier à générer

## Exemple complet
```php
// Création d'un formulaire de contact
$form = new Creat_form("contactForm", "form", "");

// Ajout des champs
$form->add_child("name", "input");
$form->add_child("email", "input");
$form->add_child("message", "textarea");
$form->add_child("submit", "button");

// Configuration des champs
$form->child_setAtribut("name", "type", "text");
$form->child_setAtribut("name", "placeholder", "Votre nom");
$form->child_setAtribut("email", "type", "email");
$form->child_setAtribut("email", "placeholder", "Votre email");
$form->child_setAtribut("message", "placeholder", "Votre message");
$form->child_setAtribut("submit", "", "Envoyer");

// Configuration du formulaire
$form->construct_setAtribut("method", "POST");
$form->construct_setAtribut("action", "traitement.php");

// Ajout de style
$form->stylesheet("css/contact-form.css");
```

## Notes importantes
1. Intégration Base de Données
   - Vérifie automatiquement la connexion à la base de données
   - Gère la configuration via fichier externe
   - Supprime la configuration si la connexion échoue

2. Gestion JavaScript
   - Crée dynamiquement les éléments HTML
   - Gère les événements et interactions
   - Permet l'actualisation automatique des données

3. Sécurité
   - Vérifie les permissions des dossiers
   - Gère les sessions utilisateur
   - Protège les informations de connexion

4. Bonnes pratiques
   - Toujours vérifier les retours des méthodes
   - Utiliser des noms d'ID uniques
   - Gérer les erreurs de base de données
   - Nettoyer les entrées utilisateur
