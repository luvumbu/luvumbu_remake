 
<?php
require_once "require_once.php";
$id_sha1_projet = $_POST["id_sha1_projet"] ;
$header_css_pages_projet = $_POST["header_css_pages_projet"] ; 
$section_css_pages_projet = $_POST["section_css_pages_projet"] ; 
$section_src_pages_projet = $_POST["section_src_pages_projet"] ; 
$section_child_css_pages_projet = $_POST["section_child_css_pages_projet"] ; 
$databaseHandler = new DatabaseHandler($dbname, $username); 
$databaseHandler->action_sql('UPDATE  `projet` SET `header_css_pages_projet` = "'.$header_css_pages_projet.'"   WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `section_css_pages_projet` = "'.$section_css_pages_projet.'"   WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `section_src_pages_projet` = "'.$section_src_pages_projet.'"   WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `section_child_css_pages_projet` = "'.$section_child_css_pages_projet.'"   WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');
?>