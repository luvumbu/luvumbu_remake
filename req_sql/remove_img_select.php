<?php 

require_once "require_once.php" ;

$date_inscription_projet = date("Y-m-d H:i:s");
$id_sha1_projet = $_SESSION["index"][4];
$databaseHandler = new DatabaseHandler($dbname, $username);
// Afficher la date et l'heure au format spécifié
$id_projet_img = $_POST["id_projet_img"] ; 
$databaseHandler->action_sql("DELETE FROM `projet_img` WHERE `id_projet_img` = '$id_projet_img'");

unlink("../img_dw/".$id_projet_img);
?>