<?php 
 
require_once "require_once.php";

$id_style_page = $_SESSION["select_style"] ; 
 echo $id_style_page  ; 
$databaseHandler = new DatabaseHandler($dbname, $username); 
$databaseHandler->action_sql("DELETE FROM `style_page` WHERE `id_style_page` = '$id_style_page'");
 
?>