<?php
//session_start();
require_once "require_once.php";

 
 
 $id_sha1_projet = $_SESSION["index"][4];





    $header_html_pages_projet = $_POST["header_html_pages_projet"] ; 
    $header_css_pages_projet = $_POST["header_css_pages_projet"] ; 
    $header_js_pages_projet = $_POST["header_js_pages_projet"] ; 
    $header_sql_pages_projet = $_POST["header_sql_pages_projet"] ; 
    $header_src_pages_projet = $_POST["header_src_pages_projet"] ; 
    $section_html_pages_projet = $_POST["section_html_pages_projet"] ; 
    $section_css_pages_projet = $_POST["section_css_pages_projet"] ; 
    $section_js_pages_projet = $_POST["section_js_pages_projet"] ; 
    $section_sql_pages_projet = $_POST["section_sql_pages_projet"] ; 
    $section_src_pages_projet = $_POST["section_src_pages_projet"] ; 
    $section_child_html_pages_projet = $_POST["section_child_html_pages_projet"] ; 
    $section_child_css_pages_projet = $_POST["section_child_css_pages_projet"] ; 
    $section_child_js_pages_projet = $_POST["section_child_js_pages_projet"] ; 
    $section_child_sql_pages_projet = $_POST["section_child_sql_pages_projet"] ; 
    $section_child_src_pages_projet = $_POST["section_child_src_pages_projet"] ; 
    $footer_html_pages_projet = $_POST["footer_html_pages_projet"] ; 
    $footer_css_pages_projet = $_POST["footer_css_pages_projet"] ; 
    $footer_js_pages_projet = $_POST["footer_js_pages_projet"] ; 
    $footer_sql_pages_projet = $_POST["footer_sql_pages_projet"] ; 
    $footer_src_pages_projet = $_POST["footer_src_pages_projet"] ; 


$databaseHandler = new DatabaseHandler($dbname, $username);

 
$databaseHandler->action_sql('UPDATE  `projet` SET `header_html_pages_projet` = "' . $header_html_pages_projet . '"                   WHERE  `id_sha1_projet` ="' .$id_sha1_projet . '" ');

$databaseHandler->action_sql('UPDATE  `projet` SET `header_css_pages_projet` = "' . $header_css_pages_projet . '"                   WHERE  `id_sha1_projet` ="' .$id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `header_js_pages_projet` = "' . $header_js_pages_projet . '"                   WHERE  `id_sha1_projet` ="' .$id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `header_sql_pages_projet` = "' . $header_sql_pages_projet . '"                   WHERE  `id_sha1_projet` ="' .$id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `header_src_pages_projet` = "' . $header_src_pages_projet . '"                   WHERE  `id_sha1_projet` ="' .$id_sha1_projet . '" ');

$databaseHandler->action_sql('UPDATE  `projet` SET `section_html_pages_projet` = "' . $section_html_pages_projet . '"                   WHERE  `id_sha1_projet` ="' .$id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `section_css_pages_projet` = "' . $section_css_pages_projet . '"                   WHERE  `id_sha1_projet` ="' .$id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `section_js_pages_projet` = "' . $section_js_pages_projet . '"                   WHERE  `id_sha1_projet` ="' .$id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `section_sql_pages_projet` = "' . $section_sql_pages_projet . '"                   WHERE  `id_sha1_projet` ="' .$id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `section_src_pages_projet` = "' . $section_src_pages_projet . '"                   WHERE  `id_sha1_projet` ="' .$id_sha1_projet . '" ');

$databaseHandler->action_sql('UPDATE  `projet` SET `section_child_html_pages_projet` = "' . $section_child_html_pages_projet . '"                   WHERE  `id_sha1_projet` ="' .$id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `section_child_css_pages_projet` = "' . $section_child_css_pages_projet . '"                   WHERE  `id_sha1_projet` ="' .$id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `section_child_js_pages_projet` = "' . $section_child_js_pages_projet . '"                   WHERE  `id_sha1_projet` ="' .$id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `section_child_sql_pages_projet` = "' . $section_child_sql_pages_projet . '"                   WHERE  `id_sha1_projet` ="' .$id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `section_child_src_pages_projet` = "' . $section_child_src_pages_projet . '"                   WHERE  `id_sha1_projet` ="' .$id_sha1_projet . '" ');

$databaseHandler->action_sql('UPDATE  `projet` SET `footer_html_pages_projet` = "' . $footer_html_pages_projet . '"                   WHERE  `id_sha1_projet` ="' .$id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `footer_css_pages_projet` = "' . $footer_css_pages_projet . '"                   WHERE  `id_sha1_projet` ="' .$id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `footer_js_pages_projet` = "' . $footer_js_pages_projet . '"                   WHERE  `id_sha1_projet` ="' .$id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `footer_sql_pages_projet` = "' . $footer_sql_pages_projet . '"                   WHERE  `id_sha1_projet` ="' .$id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `footer_src_pages_projet` = "' . $footer_src_pages_projet . '"                   WHERE  `id_sha1_projet` ="' .$id_sha1_projet . '" ');

 







 
 

 
?>