 
<?php

require_once "require_once.php";
 

 
$password_projet =  AsciiConverter::stringToAscii( $_POST["password_projet"]);
$id_sha1_projet = $_POST["id_sha1_projet"];

 
 
 

$databaseHandler = new DatabaseHandler($dbname, $username);

$databaseHandler->action_sql('UPDATE  `projet` SET `password_projet` = "' . $password_projet . '"               WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
 

?>

 
 


 

 