# Documentation de AsciiConverter2.php

## Description
La classe `AsciiConverter2` est une version améliorée de AsciiConverter qui ajoute la fonctionnalité de génération d'iframes YouTube. Elle conserve les fonctionnalités de base de conversion ASCII tout en ajoutant des fonctionnalités spécifiques pour le traitement des liens YouTube.

## Méthodes

### 1. asciiToString()

#### Syntaxe
```php
public static function asciiToString($asciiString)
```

#### Description
Convertit une chaîne de valeurs ASCII (séparées par des virgules) en une chaîne de caractères.

#### Paramètres
- `$asciiString` : Une chaîne contenant des valeurs ASCII séparées par des virgules

#### Retour
- Retourne la chaîne de caractères correspondante aux valeurs ASCII

#### Exemple
```php
$asciiString = "72,101,108,108,111";
$result = AsciiConverter2::asciiToString($asciiString);
echo $result; // Affiche "Hello"
```

### 2. stringToAscii()

#### Syntaxe
```php
public static function stringToAscii($string)
```

#### Description
Convertit une chaîne de caractères en une chaîne de valeurs ASCII séparées par des virgules.

#### Paramètres
- `$string` : La chaîne de caractères à convertir

#### Retour
- Retourne une chaîne contenant les valeurs ASCII séparées par des virgules

#### Exemple
```php
$string = "Hello";
$result = AsciiConverter2::stringToAscii($string);
echo $result; // Affiche "72,101,108,108,111"
```

### 3. generateYoutubeIframe()

#### Syntaxe
```php
public static function generateYoutubeIframe($youtubeLink)
```

#### Description
Génère un iframe HTML pour intégrer une vidéo YouTube. Cette méthode peut accepter soit un lien YouTube normal, soit un lien encodé en ASCII.

#### Paramètres
- `$youtubeLink` : Le lien YouTube (format normal ou encodé en ASCII)

#### Retour
- Retourne une balise iframe HTML pour la vidéo YouTube ou un message d'erreur si le lien est invalide

#### Exemple
```php
// Avec un lien YouTube normal
$link = "https://www.youtube.com/watch?v=dQw4w9WgXcQ";
echo AsciiConverter2::generateYoutubeIframe($link);

// Avec un lien encodé en ASCII
$asciiLink = AsciiConverter2::stringToAscii($link);
echo AsciiConverter2::generateYoutubeIframe($asciiLink);
```

## Cas d'utilisation
1. Conversion de texte entre format ASCII et chaîne de caractères
2. Intégration sécurisée de vidéos YouTube dans une page web
3. Traitement de liens YouTube encodés en ASCII
4. Génération automatique d'iframes YouTube avec paramètres de sécurité

## Exemple complet
```php
// Création d'un lien YouTube
$youtubeLink = "https://www.youtube.com/watch?v=dQw4w9WgXcQ";

// Conversion en ASCII pour stockage ou transmission
$asciiLink = AsciiConverter2::stringToAscii($youtubeLink);
echo "Lien encodé : " . $asciiLink . "\n";

// Génération de l'iframe à partir du lien ASCII
$iframe = AsciiConverter2::generateYoutubeIframe($asciiLink);
echo "Iframe généré : " . $iframe . "\n";
```

## Notes importantes
1. La méthode `generateYoutubeIframe()` inclut des paramètres de sécurité importants :
   - `referrerpolicy="strict-origin-when-cross-origin"`
   - Protection XSS avec `htmlspecialchars()`
2. L'iframe généré est responsive (560x315)
3. Inclut les autorisations nécessaires pour les fonctionnalités YouTube
4. Gère automatiquement les formats de liens YouTube courts (youtu.be) et longs (youtube.com)
