 
<?php
require_once "require_once.php";
$id_sha1_projet =  $_POST["id_sha1_projet"] ; 
$style_projet =  $_POST["style_projet"] ;  
$_SESSION["select_style"] = $style_projet;





$databaseHandler = new DatabaseHandler($dbname, $username); 
//$databaseHandler->action_sql('UPDATE  `projet` SET `visibility_1_projet` = "' . $visibility_1_projet . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `style_projet` = "'.$style_projet.'"   WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');
 

?>


 