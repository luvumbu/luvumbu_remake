<?php
require_once "require_once.php";
function filtrer($texte) {
  return preg_replace('/[^a-zA-Z_]/', '', $texte);
}
$id_sha1_projet = $_SESSION["index"][4];
$title_projet_toggle = $_POST["title_projet_toggle"];
$description_projet_toggle = $_POST["description_projet_toggle"];
$title_projet = AsciiConverter::stringToAscii($_POST["title_projet"]);
$description_projet = AsciiConverter::stringToAscii($_POST["description_projet"]);
$google_title_projet = filtrer($_POST["google_title_projet"]);
$google_title_projet_no = $_POST["google_title_projet"];
$google_title_projet = AsciiConverter::stringToAscii($google_title_projet); 
$change_meta_name_projet = AsciiConverter::stringToAscii($_POST["change_meta_name_projet"]);
$change_meta_content_projet = AsciiConverter::stringToAscii($_POST["change_meta_content_projet"]);
$databaseHandler = new DatabaseHandler($dbname, $username);
// Requête SQL pour récupérer toutes les données de la table
$req_sql = 'SELECT * FROM `projet` WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'"';
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
$id_projet_info             = $dynamicVariables['id_projet'][0] ; 
$id_sha1_projet_info        = $dynamicVariables['id_sha1_projet'][0] ; 
$google_title_projet_info   = $dynamicVariables['google_title_projet'][0] ; 
$id_sha1_parent_projet_info = $dynamicVariables['id_sha1_parent_projet'][0] ; 
$id_sha1_parent_projet2_info = $dynamicVariables['id_sha1_parent_projet2'][0] ; 
$databaseHandler = new DatabaseHandler($dbname, $username);
// Requête SQL pour récupérer toutes les données de la table
$req_sql = 'SELECT * FROM `projet` WHERE  `google_title_projet` ="'.$google_title_projet.'"';
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
 if(count($dynamicVariables['id_projet'])>0){    
    $key = array_search( $info, $dynamicVariables['id_projet']); // $key = 2;
    if($dynamicVariables['id_projet'][$key]==$id_projet_info)
    {   
      $google_title_projet =$id_projet_info;
      $google_title_projet = AsciiConverter::stringToAscii($google_title_projet); 
    
    }
    else {
      $google_title_projet =$google_title_projet_no ."_".$id_projet_info;
      $google_title_projet = AsciiConverter::stringToAscii($google_title_projet); 
    
    }
}
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->action_sql('UPDATE  `projet` SET `title_projet` = "' . $title_projet . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `description_projet` = "' . $description_projet . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `google_title_projet` = "' . $google_title_projet . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `change_meta_name_projet` = "' . $change_meta_name_projet . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `change_meta_content_projet` = "' . $change_meta_content_projet . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `title_projet_toggle` = "' . $title_projet_toggle . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `description_projet_toggle` = "' . $description_projet_toggle . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `id_sha1_parent_projet2` = "' . $google_title_projet . '"   WHERE  `id_sha1_parent_projet` ="' . $id_sha1_projet . '" ');
require_once "all_pages_script.php"; 
?>

