<?php 
require_once "require_once.php" ;
$date_inscription_projet = date("Y-m-d H:i:s");
$id_sha1_user_projet = $_SESSION["index"][3];
$id_sha1_projet = time()."_".rand(0,9);
$id_sha1_parent_projet = $_SESSION["index"][4];
$databaseHandler = new DatabaseHandler($dbname, $username);
$time = time().'_'.rand(10,99);
$databaseHandler->action_sql("INSERT INTO `projet` (id_sha1_parent_projet,id_sha1_projet,id_sha1_user_projet,date_inscription_projet) VALUES ('$id_sha1_parent_projet','$id_sha1_projet','$id_sha1_user_projet','$date_inscription_projet')");
require_once "all_pages_script.php" ; 
?>