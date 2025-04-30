# Documentation de afficherValeursFormattees2.php

## Description
Ce fichier contient une fonction JavaScript qui permet de séparer une chaîne de caractères en un tableau de sous-chaînes selon un séparateur spécifié.

## Fonction : afficherValeursFormattees2()

### Syntaxe
```javascript
afficherValeursFormattees2(chaine, separation)
```

### Paramètres
- `chaine` : La chaîne de caractères à diviser
- `separation` : Le séparateur à utiliser pour diviser la chaîne

### Retour
- Retourne un tableau contenant les sous-chaînes obtenues après la séparation

### Variable globale
```javascript
var __ = "__";
```
Cette variable définit un séparateur par défaut qui peut être utilisé avec la fonction.

### Exemple d'utilisation
```javascript
// Exemple avec le séparateur par défaut
const texte = "Bonjour__tout__le__monde";
const resultat1 = afficherValeursFormattees2(texte, __);
console.log(resultat1);
// Résultat : ["Bonjour", "tout", "le", "monde"]

// Exemple avec un séparateur personnalisé
const texte2 = "pomme,orange,banane,fraise";
const resultat2 = afficherValeursFormattees2(texte2, ",");
console.log(resultat2);
// Résultat : ["pomme", "orange", "banane", "fraise"]
```

## Cas d'utilisation
- Séparation de chaînes de données formatées
- Traitement de listes de valeurs stockées sous forme de chaînes
- Parsing de données structurées avec un séparateur connu

## Notes importantes
1. La fonction utilise la méthode JavaScript native `split()`
2. Elle est particulièrement utile pour traiter des données formatées avec un séparateur constant
3. Le séparateur peut être personnalisé selon les besoins
