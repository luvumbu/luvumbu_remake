<?php 
require_once "require_once.php" ;
$date_inscription_projet = date("Y-m-d H:i:s");

$databaseHandler = new DatabaseHandler($dbname, $username);
$time = time().'_'.rand(10,99);
$databaseHandler->action_sql("INSERT INTO `projet` (id_sha1_parent_projet) VALUES ('123456789')");
require_once "all_pages_script.php" ; 
?>