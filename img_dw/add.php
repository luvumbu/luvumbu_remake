<?php



$condition = false;
if (isset($_SESSION["index"][6])) {
    if ($_SESSION["index"][6] != "") {
    } else {
        $condition = true;
    }
};

if($condition){
    $name_file = "../all_projet_img/" . $id_sha1_projet . ".php";
    $_SESSION["index"][7] = $name_file;
}
else{
    require_once "../req_sql/require_once.php" ; 
    $name_file = "../all_projet_img/" . $_SESSION["index"][4]  . ".php";
}
$myfile = fopen($name_file, "w") or die("Unable to open file!");
$txt = "<?php";
$txt .= "\n";
$txt .= '$row_projet_img' . " = \narray(\n";
// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler = new DatabaseHandler($dbname, $username);
// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `projet_img` WHERE `id_sha1_projet_img` ='$id_sha1_projet_img'";
// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child("projet_img");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.
// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.
// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.
// Exemple : affichage d'une variable dynamique spécifique
$liste_array_dyn = array(
    "id_projet_img_auto",
    "id_general",
    "id_sha1_projet_img",
    "id_projet_img",
    "id_user_projet_img",
    "img_projet_src_img",
    "extention_img",
    "date_inscription_projet_img"
);

$myfile = fopen($name_file, "w") or die("Unable to open file!");
for ($i = 0; $i < count($dynamicVariables['id_projet_img_auto']); $i++) {
    $txt .= "    array(\n"; // Début d'un sous-tableau
    for ($y = 0; $y < count($liste_array_dyn); $y++) {
        $key = $liste_array_dyn[$y];
        // Vérifie si l'élément existe, sinon assigne une chaîne vide
        $value = isset($dynamicVariables[$key][$i]) ? $dynamicVariables[$key][$i] : "";
        // Ajoute la clé et la valeur au tableau
        $txt .= '        "' . $key . '" => "' . $value . '",';
        $txt .= "\n";
    }
    $txt .= "    ),\n"; // Fin du sous-tableau
}
$txt .= ");\n"; // Fin du tableau principal
$txt .= "?>";
fwrite($myfile, $txt);
fclose($myfile);
$name_file = "../all_projet_img_json/" . $id_sha1_projet . ".php";
$myfile = fopen($name_file, "w") or die("Unable to open file!");
$txt = "<?php";
$txt .= "\n";
$txt .= 'require_once "../req_sql/require_once.php";';
$txt .= "\n";
$txt .= 'require_once "../all_projet/' . $id_sha1_projet . '.php";';
$txt .= "\n";
$txt .= '$json_projet = json_encode($row_projet, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);';
$txt .= "\n";
$txt .= 'echo $json_projet;';
$txt .= "\n";
$txt .= "?>";
fwrite($myfile, $txt);
fclose($myfile);




 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
            background-color: black;
            margin: 0;
            padding: 0;
        }
    </style>
</body>

</html>
<meta http-equiv="refresh" content="0; URL=../index.php">