<?php



$visit = $_SESSION["index"][3];
$databaseHandler = new DatabaseHandler($dbname, $username);
// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `visit` WHERE `id_ip_2`='$id_sha1_projet_'";
// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child("visit");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.
// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.
// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.
// Exemple : affichage d'une variable dynamique spécifique
$id_visit = $dynamicVariables['id_visit'];

?>



<?php

for ($i = 0; $i < count($id_visit); $i++) {


?>
    <div class="display_flex_x">

        <div>
            <?= $dynamicVariables['REMOTE_ADDR'][$i] ?>
        </div>
        <div>
            <?= $dynamicVariables['id_ip_1'][$i] ?>
        </div>
        <div>
            <?= $dynamicVariables['id_ip_2'][$i] ?>
        </div>
        <div>
            <?= $dynamicVariables['date_inscription_visit'][$i] ?>
        </div>
    </div>
<?php
}
?>
</div>


<style>
    .display_flex_x {
        display: flex;
        justify-content: space-around;
        color: white;
        background-color: rgba(64, 71, 165, 0.5);
        width: 80%;
        margin: auto;
    }
    .display_flex_x  {
        border-bottom: 1px solid black;
    }
    .display_flex_x div {
        padding: 10px;
    }
</style>