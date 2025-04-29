<?php
require_once "require_once.php";
$length =  $_POST["length"];
$index__ =  $_POST["index"];


/*
$date_inscription_projet = date("Y-m-d H:i:s");
$_SESSION["index"][4] = $_POST["child_element"] ; 
*/
$date_inscription_visit = date("Y-m-d H:i:s");

if (isset($_SESSION["index"][3])) {
    $id_sha1_projet_user = $_SESSION["index"][3];
} else {
    $id_sha1_projet_user = $_SERVER['REMOTE_ADDR'];
}




$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];


$id_sha1_projet = time() . "_" . rand(0, 9);
$id_sha1_req_quiz = $_SESSION["index"][4];





















for ($i = 0; $i < $length+1; $i++) {










    $id_sha1_child_req_reponse_1 = $index__[$i];
    $ii = $i + 1;

    $id_sha1_child_req_quiz = $_POST["id_sha1_child_req_quiz_" . $ii];





    $databaseHandler = new DatabaseHandler($dbname, $username);



    $req_sql = "SELECT * FROM `projet` WHERE id_sha1_projet ='$id_sha1_child_req_quiz' ";
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

    $id_sha1_child_req_reponse_z = $dynamicVariables['google_title_projet'][0];

    $id_sha1_child_req_reponse_z = AsciiConverter::asciiToString( $id_sha1_child_req_reponse_z); // Affiche "Hello"


    $id_sha1_child_req_question =  $_POST["id_sha1_child_req_question_" . $ii];
    $id_sha1_child_req_reponse_1 =  $_POST["id_sha1_child_req_reponse_1_" . $ii];
    $id_sha1_child_req_reponse_2 =  $_POST["id_sha1_child_req_reponse_2_" . $ii];
    $databaseHandler = new DatabaseHandler($dbname, $username);
    $time = time() . '_' . rand(10, 99);
    $databaseHandler->action_sql("INSERT INTO `req_quiz` (id_sha1_child_req_reponse_z,REMOTE_ADDR,id_sha1_child_req_question,id_sha1_child_req_reponse_1,id_sha1_child_req_reponse_2,id_sha1_child_req_quiz,id_sha1_projet_user,id_sha1_req_quiz,date_inscription_visit) VALUES ('$id_sha1_child_req_reponse_z','$REMOTE_ADDR','$id_sha1_child_req_question','$id_sha1_child_req_reponse_1','$id_sha1_child_req_reponse_2','$id_sha1_child_req_quiz','$id_sha1_projet_user','$id_sha1_req_quiz','$date_inscription_visit')");


}
