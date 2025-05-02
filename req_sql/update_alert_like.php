<?php
require_once "require_once.php";



if(isset($_SESSION["index"])){
 $id_sha1_projet = $_SESSION["index"][4];
 $id_sha1_user = $_SESSION["index"][3];   
}
else{
    $id_sha1_projet =   $_POST["id_sha1_projet"];
    $id_sha1_user =     $_POST["id_sha1_user"] ;  
}



$nom_table = "info_page"; // Nom de la table cible
// Création d'une instance de la classe `DatabaseHandler`
if($_POST["info_page"]=="id_like"){
$id_like = $_POST["id_like"];
$id_alert = "";
}
else {
    $id_like = "";
    $id_alert = $_POST["id_like"];
}
 
$req_sql = "SELECT * FROM `$nom_table` WHERE  `id_sha1_projet` ='$id_sha1_projet'  AND `id_sha1_user` ='$id_sha1_user' ";
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->action_sql("DELETE FROM `info_page` WHERE `id_sha1_projet` = '$id_sha1_projet' AND  `id_sha1_user` ='$id_sha1_user' ");
 



 

$databaseHandler = new DatabaseHandler($dbname, $username);
$time = time().'_'.rand(10,99);
$databaseHandler->action_sql("INSERT INTO `info_page` (
id_sha1_projet,
id_sha1_user,
id_like
) VALUES (
'$id_sha1_projet',
'$id_sha1_user',
'$id_like'
)");





 
?>