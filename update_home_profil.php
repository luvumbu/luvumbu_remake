<?php
session_start();
require_once "Class/DatabaseHandler.php";
require_once "Class/dbCheck.php";

if (isset($_SESSION["index"][3])) {
    $nom_user = $_SESSION["index"][3];
    $id_sha1_user_projet = $nom_user;
    $path_src = "";

    $name_projet_ = array(
        "all_comment",
        "all_profil_user",
        "all_projet",
        "all_projet_img",
        "all_projet_img_json",
        "all_projet_json",
        "all_style",
        "qr_code_1/temp",
        "all_profil_user_array"
    );

    // Création des dossiers si inexistants
    foreach ($name_projet_ as $subFolder) {
        $fullPath = $path_src !== ""
            ? $path_src . DIRECTORY_SEPARATOR . $subFolder
            : $subFolder;

        if (!is_dir($fullPath)) {
            mkdir($fullPath, 0777, true);
        }
    }

    // Création d'une instance de la classe `DatabaseHandler`
    $databaseHandler = new DatabaseHandler($dbname, $username);

$table_name = "profil_user" ; 
$nom_user = $_SESSION["index"][3] ; 

    // Récupération des données
  //  $req_sql = "SELECT * FROM `$table_name` WHERE `nom_user` ='$nom_user' ";
    $req_sql = "SELECT * FROM `$table_name` WHERE `nom_user` ='$nom_user' ";

    $databaseHandler->getListOfTables_Child($table_name);
    $databaseHandler->getDataFromTable2X($req_sql);
    $databaseHandler->get_dynamicVariables();

    // Accès aux variables dynamiques
    global $dynamicVariables;

    // Génération dynamique des données
    $donnees = array();
    $total = 0;

    // Récupère le nombre d’entrées (par n’importe quelle colonne)
    foreach ($dynamicVariables as $colonne => $valeurs) {
        $total = count($valeurs);
        break;
    }

    // Remplissage automatique du tableau sans connaître les clés à l'avance
    for ($i = 0; $i < $total; $i++) {
        $ligne = array();
        foreach ($dynamicVariables as $key => $valeurs) {
            $ligne[$key] = isset($valeurs[$i]) ? $valeurs[$i] : "";
        }
        $donnees[] = $ligne;
    }

    // Préparation du fichier à générer
  
    $nomFichier = "all_profil_user/".$nom_user.'.php';

    $existeDeja = file_exists($nomFichier);

    $contenu = "<?php\n";
    $contenu .= '$all_profil_user = ' . var_export($donnees, true) . ";\n";
    $contenu .= "?>";

    $fichier = fopen($nomFichier, "w");
    if ($fichier) {
        fwrite($fichier, $contenu);
        fclose($fichier);
        if ($existeDeja) {
            echo "Le fichier existait déjà. Il a été écrasé : $nomFichier";
        } else {
            echo "Fichier PHP créé avec succès : $nomFichier";
        }
    } else {
        echo "Erreur lors de la création du fichier.";
    }
}


 
?>
