 
<?php

require_once "require_once.php";
 

$id_sha1_projet =       $_POST["id_sha1_projet"];
$id_sha1_projet_lock_price = $_POST["id_sha1_projet_lock_price"];
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->action_sql('UPDATE  `projet` SET `id_sha1_projet_lock_price` = "' . $id_sha1_projet_lock_price . '"               WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');


?>

 
 


 

 