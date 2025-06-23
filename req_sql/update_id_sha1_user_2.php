 
<?php

require_once "require_once.php";
 

$title_user =       $_POST["title_user"];
$description_user = $_POST["description_user"];
$nom_user =         $_POST["nom_user"];
$id_sha1_user =     $_POST["id_sha1_user"];

$title_user =        AsciiConverter::stringToAscii($title_user); // Affiche "72,101,108,108,111"
$description_user =  AsciiConverter::stringToAscii($description_user); // Affiche "72,101,108,108,111"
 
$nom_user =  AsciiConverter::stringToAscii($nom_user); // Affiche "72,101,108,108,111"

$databaseHandler = new DatabaseHandler($dbname, $username);

$databaseHandler->action_sql('UPDATE  `profil_user` SET `title_user` = "' . $title_user . '"               WHERE  `id_sha1_user` ="' . $id_sha1_user . '" ');
$databaseHandler->action_sql('UPDATE  `profil_user` SET `description_user` = "' . $description_user . '"   WHERE  `id_sha1_user` ="' . $id_sha1_user . '" ');
$databaseHandler->action_sql('UPDATE  `profil_user` SET `prenom_user` = "' . $nom_user . '"                   WHERE  `id_sha1_user` ="' . $id_sha1_user . '" ');


?>

 
 


 

 