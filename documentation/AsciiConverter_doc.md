# Documentation de AsciiConverter.php

## Description
La classe `AsciiConverter` fournit des méthodes statiques pour convertir des chaînes de caractères en valeurs ASCII et vice-versa. Cette classe est particulièrement utile pour le traitement de texte et la manipulation de caractères au niveau ASCII.

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
$asciiString = "72, 101, 108, 108, 111";
$result = AsciiConverter::asciiToString($asciiString);
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
$result = AsciiConverter::stringToAscii($string);
echo $result; // Affiche "72,101,108,108,111"
```

## Cas d'utilisation
1. Encodage/décodage de texte pour transmission sécurisée
2. Traitement de caractères spéciaux
3. Débogage de problèmes d'encodage de caractères
4. Manipulation de données textuelles au niveau binaire

## Exemple complet
```php
// Création d'un message
$message = "Hello World";

// Conversion en ASCII
$ascii = AsciiConverter::stringToAscii($message);
echo "ASCII: " . $ascii . "\n";
// Sortie: 72,101,108,108,111,32,87,111,114,108,100

// Reconversion en texte
$text = AsciiConverter::asciiToString($ascii);
echo "Texte: " . $text . "\n";
// Sortie: Hello World
```

## Notes importantes
1. La méthode `asciiToString()` ignore les valeurs non numériques
2. Les valeurs ASCII sont automatiquement converties en entiers
3. Les espaces sont gérés (ASCII 32)
4. La classe utilise des méthodes statiques, donc pas besoin d'instancier la classe
