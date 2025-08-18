 
<?php 
 

 
 $style_projet_0 = $style_projet[0] ; 
 
 
// Configuration de la base de données
$dbname = "root";   // Nom d'utilisateur pour la base de données
$username = "root";   // Mot de passe pour la base de données
$nom_table = "style_page"; // Nom de la table cible

// Création d'une instance de la classe `DatabaseHandler`
 
$databaseHandler = new DatabaseHandler($dbname, $username);


// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `style_page` WHERE id_style_page ='$style_projet_0' ";

// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child("style_page");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.

// Exemple : affichage d'une variable dynamique spécifique


 
 

 



 echo AsciiConverter::asciiToString($dynamicVariables['text_style_page'][0] );

?>

 