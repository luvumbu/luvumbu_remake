<?php
class LegacySecureCipher {

    // Générateur pseudo-aléatoire compatible vieux PHP
    private static function randomBytes($length) {
        $bytes = '';
        for ($i = 0; $i < $length; $i++) {
            $bytes .= chr(mt_rand(0, 255));
        }
        return $bytes;
    }

    // Chiffrement
    public static function encrypt($data, $password) {
        if ($password === '') {
            die('Clé vide interdite');
        }

        $salt = self::randomBytes(16);

        // Dérivation clé (32 octets)
        $key = hash('sha256', $password . $salt, true);

        $out = '';
        $keyLen = strlen($key);

        for ($i = 0; $i < strlen($data); $i++) {
            $out .= chr(
                ord($data[$i]) ^ ord($key[$i % $keyLen])
            );
        }

        // salt + données chiffrées
        return base64_encode($salt . $out);
    }

    // Déchiffrement
    public static function decrypt($encrypted, $password) {
        if ($password === '') {
            die('Clé vide interdite');
        }

        $data = base64_decode($encrypted);

        $salt = substr($data, 0, 16);
        $data = substr($data, 16);

        $key = hash('sha256', $password . $salt, true);
        $out = '';
        $keyLen = strlen($key);

        for ($i = 0; $i < strlen($data); $i++) {
            $out .= chr(
                ord($data[$i]) ^ ord($key[$i % $keyLen])
            );
        }

        return $out;
    }
}


/*

$message = "HELLO";
$key = "CleTresLongue_!9xP@202548646846846846846848";

$key2 = "CleTresLongue_!9xP@";

$enc = LegacySecureCipher::encrypt($message, $key);
echo "Chiffré : " . $enc . "<br>";

$dec = LegacySecureCipher::decrypt($enc, $key);
echo "Déchiffré : " . $dec;


*/