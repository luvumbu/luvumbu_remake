<?php
// Configuration de la base de données
/*
$nom_table = "projet"; // Nom de la table cible
//  il faut ajouter avant le  nom de la table 
*/
if (!isset($nom_table)) {
    echo '$nom_table nexiste pas il faut la creer pour continue le traitement ';
} else {

    $all_array_array = [];
    // Connexion à la base (tu dois définir $dbname et $username avant ce fichier)
    $databaseHandler = new DatabaseHandler($dbname, $username);
    // Requête SQL pour récupérer toutes les données de la table

    if (isset($req_sql)) {
  
        // Récupération des informations des tables enfants liées
        $databaseHandler->getListOfTables_Child($nom_table);
        // Récupération des données de la table
        $databaseHandler->getDataFromTable2X($req_sql);
        // Génération des variables dynamiques dans $dynamicVariables
        $databaseHandler->get_dynamicVariables();
        // Vérifie que $dynamicVariables est bien défini
        if (!isset($dynamicVariables) || !is_array($dynamicVariables)) {
            die("Erreur : \$dynamicVariables n'est pas défini ou n'est pas un tableau.");
        }
        // Création des variables dynamiques avec suffixe "_a"
        if (isset($val_knock)) {
                
            foreach ($dynamicVariables as $key => $values) {
                $varName = $key . $val_knock;
                $$varName = $values; // Crée une variable dynamique, ex: $id_projet_a
                $all_array_array[] = $varName;   

            }
        } else {
            echo 'Attention vous devez definir $val_knock';
        }
    } else {
        echo 'Attention $req_sql n\'existe pas';
    }
}
