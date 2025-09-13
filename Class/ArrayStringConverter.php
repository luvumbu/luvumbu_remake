<?php
/**
 * Class ArrayStringConverter
 *
 * Cette classe permet de :
 * 1. Transformer un tableau PHP en chaîne de caractères (string) pour stockage.
 * 2. Reconvertir une chaîne de caractères en tableau PHP.
 * 
 * Compatible PHP 5.4
 */
class ArrayStringConverter {

    /**
     * Transforme un tableau PHP en string JSON.
     *
     * @param array $array Le tableau à convertir.
     * @return string La chaîne JSON représentant le tableau.
     */
    public static function arrayToString($array) {
        // json_encode convertit le tableau en string JSON
        // JSON_UNESCAPED_UNICODE n'existe pas avant PHP 5.4 donc on peut l'enlever pour compatibilité
        return json_encode($array);
    }

    /**
     * Transforme une string JSON en tableau PHP.
     *
     * @param string $string La chaîne JSON à reconvertir.
     * @return array Le tableau reconstruit à partir de la string.
     */
    public static function stringToArray($string) {
        $array = json_decode($string, true);
        // On vérifie que la conversion a réussi
        return is_array($array) ? $array : array();
    }

    /**
     * Transforme un tableau PHP en string simple avec séparateur
     * Utile pour affichage ou mails
     *
     * @param array $array
     * @param string $separator
     * @return string
     */
    public static function arrayToSimpleString($array, $separator = ", ") {
        return implode($separator, $array);
    }

    /**
     * Transforme une string simple (séparée par un séparateur) en tableau
     *
     * @param string $string
     * @param string $separator
     * @return array
     */
    public static function simpleStringToArray($string, $separator = ", ") {
        $parts = explode($separator, $string);
        // Supprime les espaces en début/fin
        return array_map('trim', $parts);
    }
}


/*

//////////////////////////////////////////////////
// Exemple d'utilisation de la classe
//////////////////////////////////////////////////

$users = array(
    "HERKENRATH Loic (ANG)",
    "HERKENRATH Laurianne (ANG)",
    "LUVUMBU Ndenga (ANG)"
);

// --- 1️⃣ Convertir array -> string JSON ---
$jsonString = ArrayStringConverter::arrayToString($users);
echo "JSON String : \n" . $jsonString . "\n\n";



 
// --- 2️⃣ Reconvertir JSON -> array ---
$arrayBack = ArrayStringConverter::stringToArray($jsonString);
echo "Array reconverti : \n";
print_r($arrayBack);

// --- 3️⃣ Convertir array -> string simple pour affichage ---
$simpleString = ArrayStringConverter::arrayToSimpleString($users, " | ");
echo "\nSimple String : \n" . $simpleString . "\n";

// --- 4️⃣ Convertir string simple -> array ---
$arrayFromSimple = ArrayStringConverter::simpleStringToArray($simpleString, " | ");
echo "\nArray depuis simple string : \n";
print_r($arrayFromSimple);


 */

?>