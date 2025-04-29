<?php 
// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler = new DatabaseHandler($dbname, $username);
// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `projet_img` WHERE 1 ";
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
$id_projet_dyn = $dynamicVariables['id_projet_img_auto'];

$liste_array_dyn = array(
    "id_projet_img_auto"   
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
?>