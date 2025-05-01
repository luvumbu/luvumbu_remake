<?php
require_once "require_once.php";
$id_sha1_projet = $_SESSION["index"][4];
echo $id_sha1_projet  ; 
$time = time().'_'.time() ; 
$id_sha1_projet_song = $_POST["id_sha1_projet_song"];
$databaseHandler = new DatabaseHandler($dbname, $username); 
//$databaseHandler->action_sql('UPDATE  `projet` SET `id_sha1_projet_song` = "' . $id_sha1_projet_song . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `id_sha1_projet_song` = "'.$id_sha1_projet_song.'"   WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');
require_once "all_pages_script.php";
?>