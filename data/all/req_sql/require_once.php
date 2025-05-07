<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
require_once "../../../Class/dbCheck.php";
require_once "../../../Class/DatabaseHandler.php";
require_once "../../../Class/AsciiConverter.php"; 
date_default_timezone_set('Europe/Paris');


?>