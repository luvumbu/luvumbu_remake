<?php
require_once "require_once.php";
$id_sha1_projet = $_SESSION["index"][4];
$id_sha1_user = $_SESSION["index"][3];
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
if (count($dynamicVariables['id_sha1_projet']) > 0) {
    $databaseHandler->action_sql('UPDATE  `info_page` SET `id_like` = "'.$id_like.'" ,`id_alert` = "'.$id_alert.'"   WHERE  `id_sha1_user` ="' . $id_sha1_user . '" ');
} else {

    $databaseHandler = new DatabaseHandler($dbname, $username);
    $time = time() . '_' . rand(10, 99);
    $databaseHandler->action_sql("INSERT INTO `$nom_table` (
id_sha1_projet,
id_sha1_user,
id_like,
id_alert
) 
VALUES (
'$id_sha1_projet',
'$id_sha1_user',
'$id_like',
'$id_alert'

)");
}
?>
