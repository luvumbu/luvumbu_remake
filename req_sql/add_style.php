<?php
require_once "require_once.php";
$date_inscription_projet = date("Y-m-d H:i:s");


$id_user_style_page  = $_SESSION["index"][3];
$name_style_page  = $_POST["name_style_page"];
$info_style_page  = $_POST["info_style_page"];
$text_style_page  = $_POST["text_style_page"];

$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'] ;
$databaseHandler = new DatabaseHandler($dbname, $username);


if(!isset($_SESSION["select_style"])){



$id_style_page= $_SESSION["select_style"] ; 
$databaseHandler = new DatabaseHandler($dbname, $username); 
//$databaseHandler->action_sql('UPDATE  `projet` SET `visibility_1_projet` = "' . $visibility_1_projet . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `style_page` SET `name_style_page` = "'.$name_style_page.'"   WHERE  `id_style_page` ="'.$id_style_page.'" ');
$databaseHandler->action_sql('UPDATE  `style_page` SET `info_style_page` = "'.$info_style_page.'"   WHERE  `id_style_page` ="'.$id_style_page.'" ');
$databaseHandler->action_sql('UPDATE  `style_page` SET `text_style_page` = "'.$text_style_page.'"   WHERE  `id_style_page` ="'.$id_style_page.'" ');

 

if(isset( $_SESSION["select_style"])){
 unset($_SESSION["select_style"]);
}
}
else{
    $time = time() . '_' . rand(10, 99);
$databaseHandler->action_sql(
    "INSERT INTO `style_page` (
    id_user_style_page,
    name_style_page,
    info_style_page,
    text_style_page,
    REMOTE_ADDR

    ) VALUES (
    '$id_user_style_page',
    '$name_style_page',
    '$info_style_page',
    '$text_style_page',
    '$REMOTE_ADDR'
     
    )"
);
}