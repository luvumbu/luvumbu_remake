<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 


require_once "all_projet/_1.php" ; 


require_once "Class/DatabaseHandler.php" ; 
require_once "Class/dbCheck.php" ; 
require_once "Class/replace_element.php" ; 







 
 
// Configuration de la base de données
$dbname = "root";   // Nom d'utilisateur pour la base de données
$username = "root";   // Mot de passe pour la base de données
$nom_table = "projet"; // Nom de la table cible

// Création d'une instance de la classe `DatabaseHandler`
 
$databaseHandler = new DatabaseHandler($dbname, $username);


// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `$nom_table` WHERE 1";

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
 
// `id_sha1_projet` est une clé générée dynamiquement qui correspond à une colonne ou une donnée récupérée dans la table.
 
/*
 * Remarque :
 * - Les variables dynamiques sont utiles pour générer du contenu ou manipuler des données
 *   sans connaître à l'avance les noms des colonnes ou des champs.
 * - Assurez-vous que les noms de colonnes dans `$dynamicVariables` existent dans la table cible.
 * - Cette approche peut être utilisée pour des tâches nécessitant une flexibilité dans le traitement des données.
 */
 
require_once "test_boucle.php" ; 
 

 

/*

echo "<br/>................<br/>" ;
var_dump($row_projet ) ; 
*/
?>
</body>
</html>