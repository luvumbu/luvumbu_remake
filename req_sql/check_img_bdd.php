<?php
require_once "require_once.php" ;
 // Création d'une instance de la classe `DatabaseHandler`
$databaseHandler = new DatabaseHandler($dbname, $username);
// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `projet_img` WHERE 1 ";
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

$id_projet_img = $dynamicVariables['id_projet_img'];

 


for ($i=0; $i < count($id_projet_img); $i++) {    
    $filename = '../img_dw/'.$id_projet_img[$i];
    $filename_effacement =  $id_projet_img[$i];


if (file_exists($filename)) {
  
} else {
 
  
$databaseHandler->action_sql("DELETE FROM `projet_img` WHERE `id_projet_img` = '$filename_effacement'");
 }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>REMOVE FILE </h1>
    <style>

body{
    background-color: black;
    margin: 0;
    padding: 0;
}
h1{
    text-align: center;
    font-size: 4em;
    color: white;
}
    </style>
<meta http-equiv="refresh" content="1; URL=../index.php">

</body>
</html>

 
 
 