<?php 
require_once "require_once.php" ;
$date_inscription_comment = date("Y-m-d H:i:s");
$id_sha1_user = $_SESSION["index"][3]; 

$SERVER_ADDR =  $_SERVER['SERVER_ADDR'] ;



 

$id_ip_5  = $_SESSION["index"][0];
$id_ip_6  = $_SESSION["index"][1];


 

$id_comment_text = AsciiConverter::stringToAscii($_POST["id_comment_text"]  );  
 $id_sha1_comment = $_SESSION["id_sha1_comment"]  ; 
$databaseHandler = new DatabaseHandler($dbname, $username);
$time = time().'_'.rand(10,99);

 











$databaseHandler->action_sql("INSERT INTO `comment` (
id_sha1_user,
id_comment_text,
id_sha1_comment,
date_inscription_comment,
id_ip_4,
id_ip_5,
id_ip_6
) VALUES (
'$id_sha1_user',
'$id_comment_text',
'$id_sha1_comment',
'$date_inscription_comment',
'$SERVER_ADDR',
'$id_ip_5',
'$id_ip_6'


)");








 

 
 
 
    $nom_user = $_SESSION["index"][3];


    $_SESSION["index"][4] ; 
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

    // Récupération des données
    $req_sql = "SELECT * FROM `comment` WHERE `id_sha1_comment`='$id_sha1_comment' ";
    $databaseHandler->getListOfTables_Child("comment");
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

    $nomFichier = "../all_comment/".$id_sha1_comment.".php";

    $existeDeja = file_exists($nomFichier);

    $contenu = "<?php\n";
    $contenu .= '$row_projet_comment = ' . var_export($donnees, true) . ";\n";
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
 
?>
























