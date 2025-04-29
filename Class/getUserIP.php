<?php
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        // IP depuis le proxy
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // IP envoyée par le serveur proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        // IP de l'utilisateur
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

//$ipUser = getUserIP();
//echo "Adresse IP de l'utilisateur : " . $ipUser;
?>
