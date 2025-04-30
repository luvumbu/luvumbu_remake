# Documentation de add_element.php

## Description
Ce fichier contient deux fonctions permettant de générer facilement des éléments HTML de manière dynamique.

## Fonction 1: add_element()

### Syntaxe
```php
add_element($tag, $class = "", $id = "", $content = "")
```

### Paramètres
- `$tag` : Le type d'élément HTML (div, p, span, etc.)
- `$class` : La/les classes CSS (optionnel)
- `$id` : L'identifiant de l'élément (optionnel)
- `$content` : Le contenu de l'élément (optionnel)

### Exemple d'utilisation
```php
// Créer un paragraphe avec une classe et un id
echo add_element("p", "text-bold", "intro", "Bonjour tout le monde!");
// Résultat: <p class="text-bold" id="intro">Bonjour tout le monde!</p>

// Créer une div simple
echo add_element("div", "", "", "Contenu de la div");
// Résultat: <div>Contenu de la div</div>
```

## Fonction 2: add_element2()

### Syntaxe
```php
add_element2($attributes = "", $_div = "div", $div_ = "div", $class = "", $id = "", $children = null)
```

### Paramètres
- `$attributes` : Attributs HTML supplémentaires (optionnel)
- `$_div` : Tag d'ouverture (par défaut "div")
- `$div_` : Tag de fermeture (par défaut "div")
- `$class` : La/les classes CSS (optionnel)
- `$id` : L'identifiant de l'élément (optionnel)
- `$children` : Contenu enfant (peut être une chaîne ou un tableau)

### Exemple d'utilisation
```php
// Exemple avec un contenu simple
echo add_element2("data-type='menu'", "div", "div", "menu-container", "main-menu", "Menu Principal");
// Résultat: <div class="menu-container" id="main-menu" data-type='menu'>Menu Principal</div>

// Exemple avec des enfants multiples
$children = [
    '<div><img src="images/logo.jpg" alt="Logo"></div>',
    '<div><h1>Titre de la page</h1></div>'
];
echo add_element2("data-role='header'", "header", "header", "page-header", "main-header", $children);
// Résultat:
// <header class="page-header" id="main-header" data-role='header'>
//     <div><img src="images/logo.jpg" alt="Logo"></div>
//     <div><h1>Titre de la page</h1></div>
// </header>
```

## Différences entre les deux fonctions
- `add_element()` est plus simple et directe pour créer des éléments HTML basiques
- `add_element2()` est plus flexible et permet :
  - D'ajouter des attributs HTML personnalisés
  - D'utiliser des tags différents pour l'ouverture et la fermeture
  - D'inclure facilement plusieurs éléments enfants

## Cas d'utilisation recommandés
- Utilisez `add_element()` pour des éléments HTML simples
- Utilisez `add_element2()` pour des structures plus complexes ou quand vous avez besoin d'attributs personnalisés
