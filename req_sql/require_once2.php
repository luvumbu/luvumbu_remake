<?php 
 
session_start() ; 

header("Access-Control-Allow-Origin: *");
require_once "Class/dbCheck.php";
require_once "Class/DatabaseHandler.php";
require_once "Class/AsciiConverter.php"; 
require_once "Class/extraireAlphabetique.php" ; 
require_once "Class/replace_element.php";

date_default_timezone_set('Europe/Paris');

 

 
?>

 