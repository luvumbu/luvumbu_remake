<?php

 
// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler = new DatabaseHandler($dbname, $username);
// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `projet` WHERE `id_sha1_parent_projet` =''";
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
$title_projet =   $dynamicVariables['title_projet'];
$description_projet = $dynamicVariables['description_projet'];
$google_title_projet = $dynamicVariables['google_title_projet'];
$change_meta_name_projet = $dynamicVariables['change_meta_name_projet'];
$change_meta_content_projet = $dynamicVariables['change_meta_content_projet'];
$id_sha1_projet = $dynamicVariables['id_sha1_projet'];

$img_projet_src1 = $dynamicVariables['img_projet_src1'];

 


 

 
?> 


