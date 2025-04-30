# Documentation de calculateReadingTime.php

## Description
La classe `ReadingTimeCalculator` permet de calculer le temps de lecture estimé d'un texte en se basant sur une vitesse de lecture moyenne en mots par minute. Cette classe est particulièrement utile pour donner aux utilisateurs une estimation du temps nécessaire pour lire un article ou un contenu textuel.

## Classe ReadingTimeCalculator

### Propriétés

#### wordsPerMinute
- **Type** : `int`
- **Visibilité** : `private`
- **Description** : Nombre de mots qu'une personne peut lire par minute (vitesse de lecture moyenne)
- **Valeur par défaut** : 200 mots par minute

### Constructeur

#### Syntaxe
```php
public function __construct(int $wordsPerMinute = 200)
```

#### Description
Initialise une nouvelle instance de `ReadingTimeCalculator` avec une vitesse de lecture spécifique.

#### Paramètres
- `$wordsPerMinute` (optionnel) : Vitesse de lecture en mots par minute
  - Type : `int`
  - Valeur par défaut : 200
  - Représente la vitesse de lecture moyenne d'un adulte

### Méthodes

#### calculateTime()

##### Syntaxe
```php
public function calculateTime(string $text): string
```

##### Description
Calcule le temps de lecture estimé pour un texte donné.

##### Paramètres
- `$text` : Le texte dont on veut calculer le temps de lecture
  - Type : `string`
  - Contenu : Texte brut à analyser

##### Retour
- Type : `string`
- Format : "X min Y sec" ou "Y sec" si moins d'une minute
- Exemple : "2 min 30 sec" ou "45 sec"

##### Fonctionnement
1. Compte le nombre de mots dans le texte
2. Calcule les minutes en divisant le nombre de mots par la vitesse de lecture
3. Calcule les secondes restantes
4. Retourne une chaîne formatée avec le temps de lecture

## Exemples d'utilisation

### 1. Utilisation basique avec paramètres par défaut
```php
$calculator = new ReadingTimeCalculator();
$text = "Ceci est un exemple de texte qui permet de tester le calcul du temps de lecture.";
echo $calculator->calculateTime($text);
// Sortie possible : "1 sec" (car le texte est court)
```

### 2. Personnalisation de la vitesse de lecture
```php
// Pour un lecteur plus lent (150 mots par minute)
$slowReader = new ReadingTimeCalculator(150);
$longText = str_repeat("Ceci est une phrase exemple. ", 100);
echo $slowReader->calculateTime($longText);
// Sortie possible : "2 min 15 sec"

// Pour un lecteur rapide (300 mots par minute)
$fastReader = new ReadingTimeCalculator(300);
echo $fastReader->calculateTime($longText);
// Sortie possible : "1 min 10 sec"
```

### 3. Utilisation avec un article
```php
$article = "Lorem ipsum dolor sit amet... [long article text]";
$calculator = new ReadingTimeCalculator();
$readingTime = $calculator->calculateTime($article);
echo "Temps de lecture estimé : " . $readingTime;
```

## Cas d'utilisation
1. Blogs et sites d'actualités
   - Afficher le temps de lecture estimé pour chaque article
2. Documentation technique
   - Donner une indication du temps nécessaire pour comprendre une section
3. Contenu éducatif
   - Planifier des sessions de lecture
   - Organiser le contenu en segments digestibles

## Notes importantes
1. La vitesse de lecture par défaut (200 mots/minute) est une moyenne pour un adulte lisant en français
2. Le calcul est une estimation et peut varier selon :
   - La complexité du texte
   - Le niveau de lecture de l'utilisateur
   - La langue du texte
3. La méthode utilise `str_word_count()` qui est optimisée pour l'anglais
   - Pour d'autres langues, les résultats peuvent nécessiter des ajustements
4. Les temps sont arrondis :
   - Minutes : arrondi inférieur
   - Secondes : arrondi supérieur
