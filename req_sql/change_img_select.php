<?php
require_once "require_once.php" ;
$id_sha1_projet= $_SESSION["index"][4]  ;
$img_projet_src1 = $_POST["img_projet_src1"] ; 
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->action_sql('UPDATE  `projet` SET `img_projet_src1` = "'.$img_projet_src1.'"   WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');
 
?>