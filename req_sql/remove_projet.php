<?php 

require_once "require_once.php" ;

$date_inscription_projet = date("Y-m-d H:i:s");
$id_sha1_projet = $_SESSION["index"][4];
$databaseHandler = new DatabaseHandler($dbname, $username);
// Afficher la date et l'heure au format spécifié


 
$databaseHandler->action_sql("DELETE FROM `projet` WHERE `id_sha1_projet` = '$id_sha1_projet'");

$_SESSION["index"][4]="" ; 
?>