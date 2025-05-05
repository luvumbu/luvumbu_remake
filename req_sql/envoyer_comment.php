<?php 
require_once "require_once.php" ;
$date_inscription_comment = date("Y-m-d H:i:s");
$id_sha1_user = $_SESSION["index"][3]; 

$SERVER_ADDR =  $_SERVER['SERVER_ADDR'] ;



var_dump($_SESSION["index"]) ;  

$id_ip_5  = $_SESSION["index"][0];
$id_ip_6  = $_SESSION["index"][1];


$id_comment_text = AsciiConverter::stringToAscii($_POST["id_comment_text"]  );  
 $id_sha1_comment = $_SESSION["id_sha1_comment"]  ; 
$databaseHandler = new DatabaseHandler($dbname, $username);
$time = time().'_'.rand(10,99);





$databaseHandler = new DatabaseHandler($dbname, $username);
// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `comment` WHERE 1 ";
// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child("projet");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.
// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.
// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.
// Exemple : affichage d'une variable dynamique spécifique
$id_projet_dyn = $dynamicVariables['id_projet_img_auto'];







$databaseHandler->action_sql("INSERT INTO `comment` (
id_sha1_user,
id_comment_text,
id_sha1_comment,
date_inscription_comment,
id_ip_4,
id_ip_5,
id_ip_6
) VALUES (
'$id_sha1_user',
'$id_comment_text',
'$id_sha1_comment',
'$date_inscription_comment',
'$SERVER_ADDR',
'$id_ip_5',
'$id_ip_6'


)");
require_once "all_pages_script_comment.php" ; 
?>