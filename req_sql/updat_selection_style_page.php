<?php
//session_start();
require_once "require_once.php";

 
 
 $id_sha1_projet = $_SESSION["index"][4];




$header_1_pages_projet = $_POST["header_select_page"] ; 
$section_1_pages_projet = $_POST["section_select_page"] ; 
$footer_1_pages_projet = $_POST["footer_select_page"] ; 


$databaseHandler = new DatabaseHandler($dbname, $username); 
$databaseHandler->action_sql("UPDATE  `projet` SET `header_1_pages_projet` = '$header_1_pages_projet' WHERE  `id_sha1_projet` = '$id_sha1_projet'");

$databaseHandler->action_sql("UPDATE  `projet` SET `section_1_pages_projet` = '$section_1_pages_projet' WHERE  `id_sha1_projet` = '$id_sha1_projet'");
$databaseHandler->action_sql("UPDATE  `projet` SET `footer_1_pages_projet` = '$footer_1_pages_projet' WHERE  `id_sha1_projet` = '$id_sha1_projet'");

 
?>