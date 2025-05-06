<?php  
$index = $_SESSION["index"]["3"];
// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler = new DatabaseHandler($dbname, $username);
$req_sql = "SELECT * FROM `style_pages` WHERE id_user_style_page ='$index'";
// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child("style_pages");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.
// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
?>

 