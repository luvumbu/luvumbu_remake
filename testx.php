<?php
 
 
require_once "Class/dbCheck.php";
require_once "Class/AsciiConverter.php";

require_once "Class/DatabaseHandler.php";


    $nom_table = "info_all_array"; // Nom de la table cible
    $id_sha1_projet = $url_;
    // Requête SQL pour récupérer toutes les données de la table
    $req_sql = 'SELECT * FROM `info_all_array` WHERE `get_result_users_nom_1_array_2`="LUVUMBU"';
    // Instanciation de la classe
    $db = new DatabaseHandler($dbname, $username);
    // Appel de la fonction
    $result = $db->know_variables_name($nom_table, "_za", $req_sql);


 
    $info_all_array_id_za = [
    $info_all_array_id_za,
    $get_result_users_nom_1_array_2_za,
    $get_result_users_nom_2_array_2_za,
    $get_result_users_nom_3_array_2_za,
    $get_result_users_nom_4_array_2_za,
    $get_users_nationality_array_2_za,
    $get_club_nom_complet_array_2_za,
    $get_club_departement_array_2_za,
    $get_club_region_array_2_za,
    $get_cat_array_2_za,
    $get_users_naissance_array_2_za,
    $get_result_date_perf_array_2_za,
    $get_result_villes_nom_array_2_za,
    $epreuve_sex_array_2_za,
    $get_users_nom_complet_array_za,
    $get_epreuve_nom_complet_za,
    $get_emplacement_za,
    $get_rp_array_2_za,
    $get_vent_array_2_za,
    $get_result_users_perf_array_2_za,
    $get_result_users_perf_array_za,
    $info_all_array_date_za,
    $id_get_result_users_nom_1_array_2_za,
    $id_get_result_users_nom_4_array_2_za,
    $id_get_users_nationality_array_2_za,
    $id_get_club_nom_complet_array_2_za,
    $id_get_club_departement_array_2_za,
    $id_get_club_region_array_2_za,
    $id_get_cat_array_2_za,
    $id_get_users_naissance_array_2_za,
    $id_get_result_villes_nom_array_2_za,
    $id_epreuve_sex_array_2_za,
    $id_get_users_nom_complet_array_za,
    $id_get_epreuve_nom_complet_za,
    $id_get_result_date_perf_array_2_za
];



 
$info_all_array_json = json_encode($info_all_array_id_za);


 

//var_dump($all_data_json);
 
// Initialisation du gestionnaire de base de données
// Un objet '$databaseHandler' est créé avec les paramètres de connexion spécifiés
$databaseHandler = new DatabaseHandler($dbname, $username);

// Exécution de la requête SQL pour mettre à jour un enregistrement
// La méthode 'action_sql()' est utilisée pour exécuter des requêtes SQL directes
// Cette requête met à jour la colonne 'activation_projet' dans la table 'projet'
// où 'id_projet' est égal à 11, en le mettant à la valeur "off"
$databaseHandler->action_sql('UPDATE `get_result_users_nom_1_array_2_all` SET `all_data` = "xxxxx" WHERE `name` = "LUVUMBU"');

 



 