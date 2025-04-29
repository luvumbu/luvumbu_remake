<?php
class AsciiConverter
{
    // Méthode pour convertir une chaîne de valeurs ASCII en chaîne de caractères
    public static function asciiToString($asciiString)
    {
        // Supprimer les espaces inutiles et séparer les valeurs par des virgules
        $asciiArray = array_map('trim', explode(',', $asciiString));

        $string = '';
        foreach ($asciiArray as $ascii) {
            // Assurez-vous que l'entrée est un nombre entier
            if (is_numeric($ascii)) {
                $string .= chr((int)$ascii);
            }
        }
        return $string;
    }
    // Méthode pour convertir une chaîne de caractères en valeurs ASCII
    public static function stringToAscii($string)
    {
        $asciiArray = [];

        // Parcourir chaque caractère de la chaîne
        for ($i = 0; $i < strlen($string); $i++) {
            // Convertir le caractère en valeur ASCII
            $asciiArray[] = ord($string[$i]);
        }
        // Joindre les valeurs ASCII avec des virgules
        return implode(',', $asciiArray);
    }
}
/*
// Exemple d'utilisation
$asciiString = "72, 101, 108, 108, 111";
$string = "Hello";
// Conversion de ASCII à chaîne de caractères
echo AsciiConverter::asciiToString($asciiString); // Affiche "Hello"

// Conversion de chaîne de caractères à ASCII
echo AsciiConverter::stringToAscii($string); // Affiche "72,101,108,108,111"
*/
?>

 