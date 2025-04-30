<?php 
require_once "require_once.php" ;
$date_inscription_comment = date("Y-m-d H:i:s");
$id_sha1_user = $_SESSION["index"][3]; 

$SERVER_ADDR =  $_SERVER['SERVER_ADDR'] ;



var_dump($_SESSION["index"]) ;  

$id_ip_5  = $_SESSION["index"][0];
$id_ip_6  = $_SESSION["index"][1];


$id_comment_text = AsciiConverter::stringToAscii($_POST["id_comment_text"]  );  
 $id_sha1_comment = $_SESSION["id_sha1_comment"]  ; 
$databaseHandler = new DatabaseHandler($dbname, $username);
$time = time().'_'.rand(10,99);
$databaseHandler->action_sql("INSERT INTO `comment` (
id_sha1_user,
id_comment_text,
id_sha1_comment,
date_inscription_comment,
id_ip_4,
id_ip_5,
id_ip_6
) VALUES (
'$id_sha1_user',
'$id_comment_text',
'$id_sha1_comment',
'$date_inscription_comment',
'$SERVER_ADDR',
'$id_ip_5',
'$id_ip_6'


)");
require_once "all_pages_script.php" ; 
?>