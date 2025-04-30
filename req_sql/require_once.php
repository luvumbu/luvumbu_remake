<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
require_once "../Class/dbCheck.php";
require_once "../Class/DatabaseHandler.php";
require_once "../Class/AsciiConverter.php"; 
require_once "../Class/extraireAlphabetique.php" ; 
require_once "../Class/replace_element.php";
date_default_timezone_set('Europe/Paris');
 


$chemin ="../all_projet" ; 

if (!is_dir($chemin)) {
    mkdir($chemin, 0777, true); // true pour créer récursivement
    echo "Le dossier a été créé.";
} 




$chemin ="../all_projet_img" ; 

if (!is_dir($chemin)) {
    mkdir($chemin, 0777, true); // true pour créer récursivement
    echo "Le dossier a été créé.";
} 



$chemin ="../all_projet_img_json" ; 

if (!is_dir($chemin)) {
    mkdir($chemin, 0777, true); // true pour créer récursivement
    echo "Le dossier a été créé.";
} 



$chemin ="../all_style" ; 

if (!is_dir($chemin)) {
    mkdir($chemin, 0777, true); // true pour créer récursivement
    echo "Le dossier a été créé.";
} 


$chemin ="../qr_code_1/temp" ; 

if (!is_dir($chemin)) {
    mkdir($chemin, 0777, true); // true pour créer récursivement
    echo "Le dossier a été créé.";
} 


 



?>