<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
require_once "Class/dbCheck.php";
require_once "Class/DatabaseHandler.php";
require_once "Class/AsciiConverter.php"; 
require_once "Class/extraireAlphabetique.php" ; 
require_once "Class/replace_element.php";
date_default_timezone_set('Europe/Paris'); 
$PHP_SELF =  $_SERVER['PHP_SELF'];
$SERVER_NAME =  $_SERVER['SERVER_NAME'];
$HTTP_HOST =  $_SERVER['HTTP_HOST'];
$HTTP_REFERER =  $_SERVER['HTTP_REFERER'];
$HTTP_USER_AGENT =  $_SERVER['HTTP_USER_AGENT'];
$SCRIPT_NAME =  $_SERVER['SCRIPT_NAME'];
$REMOTE_ADDR  = $_SERVER["REMOTE_ADDR"] ;
$date_inscription_projet = date("Y-m-d H:i:s");
$index = "" ; 
if($_SESSION["index"]){
$index = $_SESSION["index"][3] ; 
} 

$id_sha1_projet_url = $id_sha1_projet[0] ; 
$databaseHandler = new DatabaseHandler($dbname, $username);
// Afficher la date et l'heure au format spécifié
$date_inscription_projet = date("Y-m-d H:i:s");
$databaseHandler->action_sql("INSERT INTO `visit` (
id_ip_0,
id_ip_1,
id_ip_2,
id_ip_3,
id_ip_4,
id_ip_5,
id_ip_6,
id_ip_7,
REMOTE_ADDR

) VALUES (
'$PHP_SELF',
'$SERVER_NAME',
'$id_sha1_projet_url',
'$HTTP_REFERER',
'$HTTP_USER_AGENT',
'$SCRIPT_NAME',
'$REMOTE_ADDR',
'$index',
'$date_inscription_projet'
)");
?>