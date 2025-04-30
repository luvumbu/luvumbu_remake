# Documentation de chercherIndex.php

## Description
La fonction `chercherIndex` est un utilitaire simple mais puissant qui permet de rechercher l'index d'une valeur spécifique dans un tableau. Elle encapsule la fonction native PHP `array_search` en ajoutant une gestion cohérente des résultats.

## Syntaxe
```php
function chercherIndex($tableau, $valeur)
```

## Paramètres
- `$tableau` : Le tableau dans lequel effectuer la recherche
  - Type : `array`
  - Description : Tableau indexé ou associatif à parcourir
  
- `$valeur` : La valeur à rechercher dans le tableau
  - Type : `mixed`
  - Description : Valeur à trouver (peut être de n'importe quel type comparable)

## Valeur de retour
- Type : `mixed` (int|string|false)
- Retourne :
  - L'index (numérique) ou la clé (string) où la valeur a été trouvée
  - `false` si la valeur n'est pas trouvée dans le tableau

## Fonctionnement
1. Utilise `array_search()` pour trouver la position de la valeur
2. Vérifie si une correspondance a été trouvée
3. Retourne l'index/clé si trouvé, sinon retourne `false`

## Exemples d'utilisation

### 1. Recherche dans un tableau indexé
```php
$fruits = ["pomme", "banane", "orange", "fraise"];
$recherche = "orange";

$resultat = chercherIndex($fruits, $recherche);
if ($resultat !== false) {
    echo "L'index de '$recherche' est $resultat.";
    // Sortie : L'index de 'orange' est 2.
} else {
    echo "'$recherche' n'a pas été trouvé dans le tableau.";
}
```

### 2. Recherche dans un tableau associatif
```php
$ages = ["Jean" => 25, "Marie" => 30, "Pierre" => 35];
$recherche = 30;

$resultat = chercherIndex($ages, $recherche);
if ($resultat !== false) {
    echo "La personne ayant $recherche ans est $resultat.";
    // Sortie : La personne ayant 30 ans est Marie.
}
```

### 3. Gestion des valeurs non trouvées
```php
$nombres = [1, 2, 3, 4, 5];
$recherche = 10;

$resultat = chercherIndex($nombres, $recherche);
if ($resultat === false) {
    echo "Le nombre $recherche n'existe pas dans le tableau.";
    // Sortie : Le nombre 10 n'existe pas dans le tableau.
}
```

## Cas d'utilisation
1. Recherche d'éléments dans des listes
   - Vérifier la présence d'un utilisateur
   - Trouver la position d'un élément
2. Validation de données
   - Vérifier l'existence d'une valeur
   - Obtenir la position pour modification
3. Navigation dans les menus
   - Trouver l'index actif
   - Gérer la sélection courante

## Notes importantes
1. Comparaison stricte
   - La fonction utilise une comparaison non stricte (==)
   - "42" et 42 seront considérés comme égaux

2. Performance
   - Utilise `array_search()` natif de PHP
   - Complexité : O(n) dans le pire cas
   - Efficace pour des tableaux de taille moyenne

3. Limitations
   - Ne trouve que la première occurrence
   - Ne gère pas les tableaux multidimensionnels
   - Sensible à la casse pour les chaînes

4. Bonnes pratiques
   - Toujours vérifier le retour avec `!== false`
   - Ne pas se fier à la valeur 0 seule (peut être un index valide)
   - Utiliser `is_int()` si vous avez besoin de distinguer entre index numérique et clé string
