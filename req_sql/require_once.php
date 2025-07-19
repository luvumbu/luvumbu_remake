<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
require_once "../Class/dbCheck.php";
require_once "../Class/DatabaseHandler.php";
require_once "../Class/AsciiConverter.php"; 
require_once "../Class/extraireAlphabetique.php" ; 
require_once "../Class/replace_element.php";
date_default_timezone_set('Europe/Paris');


$time_date = date('Y-m-d H:i:s');
$chemins = [
    "../all_comment",
    "../all_profil_user",
    "../all_projet",
    "../all_projet_img",
    "../all_projet_img_json",
    "../all_projet_json",
    "../all_style",
    "../qr_code_1/temp" 
];

foreach ($chemins as $chemin) {
    if (!is_dir($chemin)) {
        mkdir($chemin, 0777, true);
        echo "Le dossier '$chemin' a été créé.<br>";
    }
}



 



?>