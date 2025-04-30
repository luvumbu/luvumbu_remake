<div>
<img width="40" height="40" src="https://img.icons8.com/fluency-systems-regular/40/eyebrow.png" alt="eyebrow"/>
<?php
$id_ip_2  =  $id_sha1_projet[0] ; 
$databaseHandler__ = new DatabaseHandler($dbname, $username);
// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `visit` WHERE `id_ip_2` = '$id_ip_2'";
// Récupération des informations des tables enfant liées
$databaseHandler__->getListOfTables_Child("visit");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.
// Récupération des données de la table via une méthode spécialisée
$databaseHandler__->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.
// Génération de variables dynamiques à partir des données récupérées
$databaseHandler__->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.
// Exemple : affichage d'une variable dynamique spécifique
?>
<b>
    <?= count($dynamicVariables['id_visit']) ?>
</b></div>