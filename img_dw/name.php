<?php
session_start()  ; 
header("Access-Control-Allow-Origin: *");
require_once "../Class/DatabaseHandler.php" ; 
require_once "../Class/dbCheck.php" ; 
$servername = "localhost";
$_SESSION["name"] = $_SESSION["index"][4].'_'.time() ; 
?>