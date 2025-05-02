<?php
 

$nom_table = "info_page"; // Nom de la table cible

// Création d'une instance de la classe `DatabaseHandler`
$id_sha1_user  = $_SESSION["index"][3] ; 

$id_sha1_projet_info_0  =  $id_sha1_projet; 
$REMOTE_ADDR_ = $_SERVER["REMOTE_ADDR"] ;




if(!isset($_SESSION["index"])){

$id_sha1_user  =  $_SERVER["REMOTE_ADDR"] ; 

  
}
$databaseHandler = new DatabaseHandler($dbname, $username);



 
$id_sha1_projet= $id_sha1_projet[0] ; 
// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `$nom_table` WHERE `id_sha1_user` ='$id_sha1_user' AND `id_sha1_projet` ='$id_sha1_projet' ";

// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child($nom_table);
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.

// Exemple : affichage d'une variable dynamique spécifique
 

 
$id_like_bool = false ; 

 if(count($dynamicVariables['id_like'])>0){
    $id_like = $dynamicVariables['id_like'] ; 
    $id_like_bool = true ; 
 }
 







 
 
// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `$nom_table` WHERE  `id_sha1_projet` ='$id_sha1_projet' AND `id_like` ='true' ";

// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child($nom_table);
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.

// Exemple : affichage d'une variable dynamique spécifique
 


$id_like_count = count($dynamicVariables['id_like']) ; 

 
 

?>