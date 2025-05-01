<?php

session_start() ; 
header("Access-Control-Allow-Origin: *");
require_once "Class/dbCheck.php";
require_once "Class/DatabaseHandler.php";
require_once "Class/AsciiConverter.php"; 
require_once "Class/extraireAlphabetique.php" ; 
require_once "Class/replace_element.php";
date_default_timezone_set('Europe/Paris');
 
 



 $info = "97" ;

 
 









$databaseHandler = new DatabaseHandler($dbname, $username);
// Requête SQL pour récupérer toutes les données de la table
$req_sql = 'SELECT * FROM `projet` WHERE  `google_title_projet` ="'.$info.'"';
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
 
if(count($dynamicVariables['id_projet'])>0){
    
    $key = array_search( $info, $dynamicVariables['id_projet']); // $key = 2;
    var_dump($dynamicVariables['id_projet'][$key]) ;

}
 
 



/*
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Got Irix";
}
*/

 
 
//$databaseHandler = new DatabaseHandler($dbname, $username);
/*
$databaseHandler->action_sql('UPDATE  `projet` SET `title_projet` = "' . $title_projet . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `description_projet` = "' . $description_projet . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
*/
           // $databaseHandler->action_sql('UPDATE  `projet` SET `google_title_projet` = "' . $google_title_projet . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
/*
$databaseHandler->action_sql('UPDATE  `projet` SET `change_meta_name_projet` = "' . $change_meta_name_projet . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `change_meta_content_projet` = "' . $change_meta_content_projet . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `title_projet_toggle` = "' . $title_projet_toggle . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `description_projet_toggle` = "' . $description_projet_toggle . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');



require_once "all_pages_script.php";
 */
?>

