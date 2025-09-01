<?php 
require_once "require_once.php";
//echo AsciiConverter::asciiToString($_SESSION["password_projet_ascii"]);
 
$ascii_password = AsciiConverter::stringToAscii($_POST["verifierMotDePasse"]);
$password_projet_ascii = $_SESSION["password_projet_ascii"];

 

 
if($ascii_password === $password_projet_ascii) {
 

    $_SESSION["password_projet"] =$_SESSION["password_projet_ascii"];
} else {
 
    unset($_SESSION["password_projet"]);
}
 



?>
