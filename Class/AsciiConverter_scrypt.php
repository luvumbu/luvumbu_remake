 <?php
class AsciiConverter
{
    // ======================================================
    // Conversion ASCII → String
    // ======================================================
    public static function asciiToString($asciiString)
    {
        $asciiArray = array_map('trim', explode(',', $asciiString));
        $string = '';
        foreach ($asciiArray as $ascii) {
            if (is_numeric($ascii)) {
                $string .= chr((int)$ascii);
            }
        }
        return $string;
    }

    public static function asciiToStringInfo()
    {
        return "asciiToString(\$asciiString) : Convertit une chaîne de nombres ASCII séparés par des virgules en chaîne de caractères.\n"
             . "Exemple : asciiToString('72, 101, 108, 108, 111') → 'Hello'";
    }

    // ======================================================
    // Conversion String → ASCII
    // ======================================================
    public static function stringToAscii($string)
    {
        $asciiArray = [];
        for ($i = 0; $i < strlen($string); $i++) {
            $asciiArray[] = ord($string[$i]);
        }
        return implode(',', $asciiArray);
    }

    public static function stringToAsciiInfo()
    {
        return "stringToAscii(\$string) : Convertit une chaîne de caractères en valeurs ASCII séparées par des virgules.\n"
             . "Exemple : stringToAscii('Hello') → '72,101,108,108,111'";
    }

    // ======================================================
    // Filtrage String : lettres + espace/tabulation
    // ======================================================
    public static function filterString($string)
    {
        return preg_replace('/[^a-zA-Z\s\t]/', '', $string);
    }

    public static function filterStringInfo()
    {
        return "filterString(\$string) : Ne conserve que les lettres a-z, A-Z, les espaces et les tabulations.\n"
             . "Exemple : filterString('Hello 123 ! \\tWorld#') → 'Hello   World'";
    }

    // ======================================================
    // Normalisation des espaces/tabulations
    // ======================================================
    public static function normalizeWhitespace($string)
    {
        return preg_replace('/\s+/', ' ', $string);
    }

    public static function normalizeWhitespaceInfo()
    {
        return "normalizeWhitespace(\$string) : Transforme toutes les séquences d'espaces et tabulations en un seul espace.\n"
             . "Exemple : normalizeWhitespace('Hello   \\tWorld') → 'Hello World'";
    }
}

/**
 * ============================================================
 *  CLASS : AsciiConverterTest
 *  DESCRIPTION : Tests unitaires pour AsciiConverter
 * ============================================================
 */


/*

// ---------- Exécution ----------
AsciiConverterTest::runTests();

 
echo AsciiConverter::asciiToStringInfo() . "\n\n";
echo AsciiConverter::stringToAsciiInfo() . "\n\n";
echo AsciiConverter::filterStringInfo() . "\n\n";
echo AsciiConverter::normalizeWhitespaceInfo();
 
?>

<?php
// 1️⃣ ASCII → String
$ascii = "72,101,108,108,111";
echo AsciiConverter::asciiToString($ascii); 
// Résultat : Hello

// 2️⃣ String → ASCII
$str = "Hello";
echo AsciiConverter::stringToAscii($str); 
// Résultat : 72,101,108,108,111

// 3️⃣ Filtrage : lettres + espace/tabulation
$dirty = "Hello 123 ! \tWorld#";
echo AsciiConverter::filterString($dirty); 
// Résultat : Hello    World

// 4️⃣ Normalisation des espaces/tabulations
$messy = "Hello   \tWorld";
echo AsciiConverter::normalizeWhitespace($messy); 
// Résultat : Hello World

// 5️⃣ Combinaison : filtrage + normalisation
$input = "Hi 123!   \tThere";
$clean = AsciiConverter::normalizeWhitespace(AsciiConverter::filterString($input));
echo $clean;
// Résultat : Hi There

// 6️⃣ Infos intégrées pour chaque fonction
echo AsciiConverter::asciiToStringInfo();
echo "\n\n";
echo AsciiConverter::stringToAsciiInfo();
echo "\n\n";
echo AsciiConverter::filterStringInfo();
echo "\n\n";
echo AsciiConverter::normalizeWhitespaceInfo();

*/
?>
