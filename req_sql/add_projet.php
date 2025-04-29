<?php 
require_once "require_once.php" ;
$date_inscription_projet = date("Y-m-d H:i:s");
$_SESSION["index"][4] =time();
$id_sha1_user_projet = $_SESSION["index"][3];
$id_sha1_projet = $_SESSION["index"][4];
$databaseHandler = new DatabaseHandler($dbname, $username);
// Afficher la date et l'heure au format spécifié
$date_inscription_projet = date("Y-m-d H:i:s");
$databaseHandler->action_sql("INSERT INTO `projet` (id_sha1_projet,id_sha1_user_projet ,date_inscription_projet) VALUES ('$id_sha1_projet','$id_sha1_user_projet','$date_inscription_projet')");
 require_once "all_pages_script.php" ; 
?>