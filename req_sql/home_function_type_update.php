<?php
echo "home_function_type_update" ; 
 
require_once "require_once.php";
$id_sha1_projet = $_SESSION["index"][4];
$time = time().'_'.time() ; 

$type_projet = $_POST["type_projet"] ; 
 
$databaseHandler = new DatabaseHandler($dbname, $username); 
//$databaseHandler->action_sql('UPDATE  `projet` SET `visibility_1_projet` = "' . $visibility_1_projet . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `type_projet` = "'.$type_projet.'"   WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');
 



$databaseHandler = new DatabaseHandler($dbname, $username); 


if($type_projet==""){
    //$databaseHandler->action_sql('UPDATE  `projet` SET `visibility_1_projet` = "' . $visibility_1_projet . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
    $databaseHandler->action_sql('UPDATE  `projet` SET `type_projet` = "'.$type_projet.'"   WHERE  `id_sha1_parent_projet` ="'.$id_sha1_projet.'" ');
     
    
}
else{
    //$databaseHandler->action_sql('UPDATE  `projet` SET `visibility_1_projet` = "' . $visibility_1_projet . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
    $databaseHandler->action_sql('UPDATE  `projet` SET `type_projet` = "'.$type_projet.'_child"   WHERE  `id_sha1_parent_projet` ="'.$id_sha1_projet.'" ');
     
    
}



 




?>