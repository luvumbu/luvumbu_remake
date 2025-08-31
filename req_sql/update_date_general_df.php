 
<?php

require_once "require_once.php";
 

$date_debut_projet =       $_POST["date_debut_projet"];
$date_fin_projet = $_POST["date_fin_projet"];
$id_sha1_projet = $_POST["id_sha1_projet"];

 
 
 

$databaseHandler = new DatabaseHandler($dbname, $username);

$databaseHandler->action_sql('UPDATE  `projet` SET `date_debut_projet` = "' . $date_debut_projet . '"               WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `date_fin_projet` = "' . $date_fin_projet . '"               WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');

?>

 
 


 

 