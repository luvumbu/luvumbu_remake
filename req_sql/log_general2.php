<?php
session_start();
require_once "require_once.php";

$databaseHandler = new DatabaseHandler($dbname, $username);

// Définir le fuseau horaire sur Europe/Paris
date_default_timezone_set('Europe/Paris');

// Exemple : $password_projet_bool défini quelque part avant
if (!isset($password_projet_bool)) {
    $password_projet_bool = false; // valeur par défaut si non défini
}

// Tableau infos utilisateur
$userInfo = array();

// 0. Adresse IP
$userInfo['id_ip_0'] = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'Inconnue';

// 1. Nom d’hôte
$userInfo['id_ip_1'] = @gethostbyaddr($userInfo['id_ip_0']);

// 2. User agent complet
$userInfo['id_ip_2'] = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : 'Inconnu';

// 3. Navigateur simplifié
if (strpos($userInfo['id_ip_2'], 'Firefox') !== false) {
    $userInfo['id_ip_3'] = 'Firefox';
} elseif (strpos($userInfo['id_ip_2'], 'Chrome') !== false) {
    $userInfo['id_ip_3'] = 'Chrome';
} elseif (strpos($userInfo['id_ip_2'], 'Safari') !== false) {
    $userInfo['id_ip_3'] = 'Safari';
} else {
    $userInfo['id_ip_3'] = 'Autre';
}

// 4. Méthode HTTP
$userInfo['id_ip_4'] = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'Inconnue';

// 5. Page demandée
$userInfo['id_ip_5'] = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : 'Inconnue';

// 6. Nom du serveur
$userInfo['id_ip_6'] = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'Inconnu';

// 7. Port utilisé
$userInfo['id_ip_7'] = isset($_SERVER['SERVER_PORT']) ? $_SERVER['SERVER_PORT'] : 'Inconnu';

// 8. Langue du navigateur
$userInfo['id_ip_8'] = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : 'Inconnue';

// 9. Référent
$userInfo['id_ip_9'] = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Aucun';

// 10. Valeur booléenne du projet
$userInfo['id_ip_10'] = $password_projet_bool ? 'true' : 'false';

// 11. Utilisateur en ligne ?
$userInfo['id_ip_11'] = isset($_SESSION["index"]) ? 'true' : 'false';

// 12. Heure exacte (Europe/Paris)
$userInfo['id_ip_12'] = date('Y-m-d H:i:s');

// --- Construire la requête SQL
$columns = implode("`, `", array_keys($userInfo));

$valuesArr = array();
foreach ($userInfo as $val) {
    $valuesArr[] = addslashes($val);
}
$values = implode("', '", $valuesArr);

$sql = "INSERT INTO `visit` (`" . $columns . "`) VALUES ('" . $values . "')";
$databaseHandler->action_sql($sql);

?>
