 <?php


// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler = new DatabaseHandler($dbname, $username);
// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `projet` WHERE `id_sha1_projet`='$id_sha1_projet_'";
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
$title_projet_ =   AsciiConverter::asciiToString($dynamicVariables['title_projet'][0]);
$description_projet_ = AsciiConverter::asciiToString($dynamicVariables['description_projet'][0]);
$change_meta_name_projet_ = AsciiConverter::asciiToString($dynamicVariables['change_meta_name_projet'][0]);
$change_meta_content_projet_ = AsciiConverter::asciiToString($dynamicVariables['change_meta_content_projet'][0]);
$google_title_projet_ = AsciiConverter::asciiToString($dynamicVariables['google_title_projet'][0]);
$id_sha1_projet__ = $dynamicVariables['id_sha1_projet'][0];
$id_sha1_user_projet__ = $dynamicVariables['id_sha1_user_projet'][0];

 

 

if($id_sha1_user_projet__ ==$_SESSION["index"][3]){
    $id_sha1_user_projet_class="";
}
else{
    $id_sha1_user_projet_class="display_none";

}
 

$google_title_projet__ = AsciiConverter::asciiToString($dynamicVariables['google_title_projet'][0]);
$id_projet_ = $dynamicVariables['id_projet'][0];
$id_sha1_user_projet__ =   $dynamicVariables['id_sha1_user_projet'][0];
$id_sha1_projet_lock__ = $dynamicVariables['id_sha1_projet_lock'][0];
$id_sha1_projet_song__ = $dynamicVariables['id_sha1_projet_song'][0];
$change_meta_name_projet_toggle =  $dynamicVariables['change_meta_name_projet_toggle'][0];
$change_meta_content_projet_toggle =  $dynamicVariables['change_meta_content_projet_toggle'][0];
$title_projet_toggle =  $dynamicVariables['title_projet_toggle'][0];
$description_projet_toggle =  $dynamicVariables['description_projet_toggle'][0];
$img_projet_src1_toggle =  $dynamicVariables['img_projet_src1_toggle'][0];
$visibility_1_projet =  $dynamicVariables['visibility_1_projet'][0];
$img_projet_src2_toggle =  $dynamicVariables['img_projet_src2_toggle'][0];
$img_projet_src1__ = $dynamicVariables['img_projet_src1'][0];
$img_projet_src1 = $dynamicVariables['img_projet_src1'];
$type_projet_0 = $dynamicVariables['type_projet'][0];

$date_debut_projet = $dynamicVariables['date_debut_projet'][0];
$date_fin_projet = $dynamicVariables['date_fin_projet'][0];


$password_projet = AsciiConverter::asciiToString($dynamicVariables['password_projet'][0]);




?>