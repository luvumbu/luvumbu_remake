<?php 
session_start();
header("Access-Control-Allow-Origin: *");
require_once "Class/dbCheck.php";
require_once "Class/DatabaseHandler.php";
require_once "Class/AsciiConverter.php";
require_once "Class/extraireAlphabetique.php";
require_once "Class/Give_url.php";
require_once "Class/removeHtmlTags.php";
require_once "Class/replace_element.php";
require_once "Class/add_element.php";
require_once "Class/afficherValeursFormattees2.php";
require_once "Class/Js.php";
require_once "Class/format_date_europeenne.php";
require_once "Class/limiterMots.php";
require_once "Class/formaterDateFr.php";
 


date_default_timezone_set('Europe/Paris');
?>