# Documentation de DivGenerator.php

## Description
La classe `DivGenerator` est un générateur dynamique d'éléments HTML (div, input, textarea) avec gestion avancée des classes CSS et des événements JavaScript. Elle permet de créer des éléments interactifs avec une grande flexibilité de configuration.

## Propriétés

### Configuration de base
- `$name` : Identifiant unique de l'élément
- `$function_name` : Nom de la fonction JavaScript à appeler
- `$text` : Contenu textuel de l'élément
- `$dbname` : Nom de la base de données associée
- `$function_split` : Séparateur pour les noms de classe

### Gestion des styles
- `$className_array` : Tableau des classes CSS
- `$className_array_total` : Chaîne finale des classes CSS
- `$class_style` : Style CSS personnalisé
- `$type` : Type d'élément (input/textarea)
- `$onclick_text` : Événement onclick personnalisé

## Méthodes

### __construct($dbname, $name, $function_name, $function_split, $text)
Initialise un nouveau générateur d'éléments.

#### Paramètres
- `$dbname` : Nom de la base de données
- `$name` : Identifiant de l'élément
- `$function_name` : Nom de la fonction JavaScript
- `$function_split` : Séparateur de classes
- `$text` : Contenu textuel

#### Exemple
```php
$generator = new DivGenerator(
    "ma_base",
    "mon_element",
    "maFonction",
    "__",
    "Mon texte"
);
```

### set_input($type)
Définit le type d'élément à générer.

#### Paramètres
- `$type` : "input" pour un champ texte, autre pour textarea

#### Exemple
```php
$generator->set_input("input"); // Pour un champ texte
```

### set_onclick_text($onclick_text)
Définit un gestionnaire d'événement onclick personnalisé.

#### Paramètres
- `$onclick_text` : Code JavaScript pour l'événement onclick

#### Exemple
```php
$generator->set_onclick_text("alert('Cliqué!')");
```

### set_class_style($class_style)
Définit des styles CSS personnalisés.

#### Paramètres
- `$class_style` : Classes CSS à appliquer

#### Exemple
```php
$generator->set_class_style("ma-classe custom-style");
```

### set_className($nom_class, $parametre)
Ajoute une classe CSS avec un paramètre.

#### Paramètres
- `$nom_class` : Nom de la classe
- `$parametre` : Paramètre associé

#### Exemple
```php
$generator->set_className("couleur", "rouge");
```

### generateDiv()
Génère l'élément div final.

#### Retour
Chaîne HTML de l'élément généré

#### Exemple
```php
echo $generator->generateDiv();
```

## Exemples d'utilisation

### 1. Création d'un champ texte simple
```php
$input = new DivGenerator("users", "search", "searchUsers", "_", "Rechercher...");
$input->set_input("input");
echo $input->get_input();
```

### 2. Création d'un textarea avec événement
```php
$textarea = new DivGenerator("posts", "editor", "updateContent", "__", "");
echo $textarea->get_input();
```

### 3. Div interactif avec classes multiples
```php
$div = new DivGenerator("products", "item", "showDetails", "-", "Produit 1");
$div->set_className("category", "electronics");
$div->set_className("status", "in-stock");
echo $div->generateDiv();
```

## Cas d'utilisation

1. **Formulaire dynamique**
   ```php
   $form = new DivGenerator("users", "registration", "validateForm", "_", "");
   $form->set_input("input");
   $form->set_className("type", "registration");
   $form->set_className("validation", "required");
   echo $form->get_input();
   ```

2. **Zone de texte éditable**
   ```php
   $editor = new DivGenerator("content", "editor", "saveContent", "__", "Écrivez ici...");
   $editor->set_onclick_text("activateEditor(this)");
   echo $editor->get_text();
   ```

3. **Liste d'éléments cliquables**
   ```php
   $item = new DivGenerator("products", "item", "selectProduct", "-", "Produit");
   $item->set_className("type", "clickable");
   $item->set_onclick_text("showDetails(this.id)");
   echo $item->generateDiv();
   ```

## Notes importantes

### 1. Sécurité
- Les entrées sont échappées avec `htmlspecialchars()`
- Les noms de classes sont validés
- Les événements JavaScript sont isolés

### 2. Bonnes pratiques
- Utiliser des identifiants uniques
- Séparer la logique JavaScript
- Maintenir une cohérence dans les séparateurs

### 3. Limitations
- Ne gère pas les attributs data-*
- Pas de validation des fonctions JavaScript
- Styles CSS limités aux classes

## Exemple de code complet
```php
<?php
require_once 'DivGenerator.php';

// Configuration
$generator = new DivGenerator(
    "products",
    "product-list",
    "handleProduct",
    "__",
    "Liste des produits"
);

// Ajout des classes
$generator->set_className("category", "electronics");
$generator->set_className("view", "grid");

// Ajout d'événements
$generator->set_onclick_text("showProductDetails(this)");

// Génération du HTML
$html = $generator->generateDiv();

// Affichage
echo $html;
```

## Bonnes pratiques d'utilisation

1. **Nommage cohérent**
   ```php
   $generator = new DivGenerator(
       "module_name",
       "element_type_id",
       "handleAction",
       "__",
       "Contenu"
   );
   ```

2. **Gestion des événements**
   ```php
   $generator->set_onclick_text("event.preventDefault(); handleClick(this);");
   ```

3. **Organisation des classes**
   ```php
   $generator->set_className("module", "products");
   $generator->set_className("action", "editable");
   $generator->set_className("state", "active");
   ```
