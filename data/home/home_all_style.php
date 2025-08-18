<?php 


 $id_sha1_projet_c = $_SESSION["index"][4];
$databaseHandler = new DatabaseHandler($dbname, $username);
// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `projet` WHERE `id_sha1_projet` ='$id_sha1_projet_c'";
// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child("projet");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.
// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.
// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
 

$id_projet_style =  $dynamicVariables['style_projet'] ;
 

 
   


//var_dump($_SESSION["index"][4]) ; 



$databaseHandler = new DatabaseHandler($dbname, $username);
// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `style_page` WHERE 1";
// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child("style_page");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.
// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.
// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
?>