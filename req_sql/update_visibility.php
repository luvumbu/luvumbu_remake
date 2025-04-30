<?php
require_once "require_once.php";
$id_sha1_projet = $_SESSION["index"][4];
$time = time().'_'.time() ; 
$visibility_1_projet = $_POST["visibility_1_projet"];
$databaseHandler = new DatabaseHandler($dbname, $username); 
//$databaseHandler->action_sql('UPDATE  `projet` SET `visibility_1_projet` = "' . $visibility_1_projet . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `visibility_1_projet` = "'.$visibility_1_projet.'"   WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `visibility_1_projet` = "'.$visibility_1_projet.'"   WHERE  `id_sha1_parent_projet` ="'.$id_sha1_projet.'" ');



?>