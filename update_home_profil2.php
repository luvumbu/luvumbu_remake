 
<?php
session_start();
require_once "Class/DatabaseHandler.php";
require_once "Class/dbCheck.php";



if(isset($_SESSION["index"][3])){

$nom_user = $_SESSION["index"][3];

$path_src = ""; // ou "element", selon ton besoin

$name_projet_ = array(
    "all_comment",
    "all_profil_user",
    "all_projet",
    "all_projet_img",
    "all_projet_img_json",
    "all_projet_json",
    "all_style",
    "qr_code_1/temp" 
);

// Création de chaque dossier, avec ou sans dossier racine
foreach ($name_projet_ as $subFolder) {
    $fullPath = $path_src !== ""
        ? $path_src . DIRECTORY_SEPARATOR . $subFolder
        : $subFolder;

    if (!is_dir($fullPath)) {
        mkdir($fullPath, 0777, true);
    }
}



$id_sha1_user_projet= $_SESSION["index"][3];

// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler = new DatabaseHandler($dbname, $username);
// Requête SQL pour récupérer toutes les données de la table
 
$req_sql = "SELECT * FROM `profil_user` WHERE `nom_user` ='$nom_user' ";

// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child("profil_user");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.
// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.
// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.
// Exemple : affichage d'une variable dynamique spécifique
  

}
?>

<?php
$nomFichier = 'all_profil_user_array/'.$nom_user.".php";

// Définir le tableau
$donnees =  $dynamicVariables['id_sha1_user'];

// Contenu du fichier PHP à écrire
$contenu = "<?php\n";
$contenu .= "\$data = " . var_export($donnees, true) . ";\n";

// Créer et écrire dans le fichier
$fichier = fopen($nomFichier, "w");

if ($fichier) {
    fwrite($fichier, $contenu);
    fclose($fichier);
    echo "Fichier PHP créé avec succès.";
} else {
    echo "Erreur lors de la création du fichier.";
}
?>


