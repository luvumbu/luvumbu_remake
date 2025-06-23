<?php
session_start();
require_once '../Class/DatabaseHandler.php';
require_once '../Class/AsciiConverter.php.php';

require_once '../Class/dbCheck.php';
date_default_timezone_set('Europe/Paris');

echo AsciiConverter::stringToAscii($string); // Affiche "72,101,108,108,111"


$title_user_ = AsciiConverter::stringToAscii(htmlspecialchars($_POST["title_user"]));
$description_user_ =  AsciiConverter::stringToAscii(htmlspecialchars($_POST["description_user"]));
$nom_user_ =  htmlspecialchars($_POST["nom_user"]);
$password_ = sha1($_POST["password"]);


$_SESSION["pass"]= $password_ ; 
$time = time() . '_' . rand(100, 999);


$id_sha1_user = time();







$databaseHandler = new DatabaseHandler($dbname, $username);


// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `$dbname` WHERE `nom_user` ='$nom_user_' ";

// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child($dbname);
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.

// Exemple : affichage d'une variable dynamique spécifique





if (count($dynamicVariables['nom_user']) < 1) {

  $databaseHandler = new DatabaseHandler($dbname, $username);
  // Afficher la date et l'heure au format spécifié

  $date_inscription_projet = date("Y-m-d H:i:s");
  $databaseHandler->action_sql("INSERT INTO `$dbname` (
title_user,
id_sha1_user,
description_user,
nom_user,
password_user,
date_inscription_user 


) VALUES (
'$title_user_',
'$id_sha1_user',
'$description_user_',
'$nom_user_',
'$password_',
'$date_inscription_projet'
)");



  $_SESSION["AUTORISATION"] = $date_inscription_projet;

  $PHP_SELF  = $_SERVER['PHP_SELF'];
  $SERVER_NAME  = $_SERVER['SERVER_NAME'];
  $HTTP_HOST  = $_SERVER['HTTP_HOST'];
  $HTTP_REFERER  = $_SERVER['HTTP_REFERER'];
  $HTTP_USER_AGENT  = $_SERVER['HTTP_USER_AGENT'];
  $SCRIPT_NAME  = $_SERVER['SCRIPT_NAME'];




  $SERVER_NAME = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'nom_du_site_par_defaut';

  $to = $nom_user_; // Adresse e-mail cible
  $to_ =  "/in.php" . "/" . $nom_user_; // Adresse e-mail cible



  $subject = 'Confirmation de la validation de votre inscription sur ' . $SERVER_NAME;

  $message = '
<html>
<head>
  <title>Confirmation d\'inscription</title>
  <style>
    body { font-family: Arial, sans-serif; background-color: #f4f4f4; }
    .container { max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; }
    .header { background: #000; color: #fff; padding: 10px; text-align: center; }
    .btn { padding: 10px 20px; background: #000; color: #fff; text-decoration: none; border-radius: 5px; }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Bienvenue sur ' . $SERVER_NAME . '</h1>
    </div>
    <p>Bonjour,</p>
    <p>Nous avons le plaisir de vous informer que votre inscription sur <strong>' . htmlspecialchars($SERVER_NAME) . '</strong> a été validée avec succès.</p>
    <a href="' . $SERVER_NAME. $to_ . '"> Connection direct </a>

 


 





  </div>
</body>
</html>';

  $headers = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
  $headers .= 'From: support@' . $SERVER_NAME . "\r\n";
  $headers .= 'Reply-To: support@' . $SERVER_NAME . "\r\n";

  if (mail($to, $subject, $message, $headers)) {
    echo '<div class="notification">E-mail envoyé avec succès.</div>';
  } else {
    echo '<div class="notification">Échec de l\'envoi de l\'e-mail.</div>';
  }
} else {
  echo "DEJA INSCRIT";
}
// `id_sha1_projet` est une clé générée dynamiquement qui correspond à une colonne ou une donnée récupérée dans la table.

/*
 * Remarque :
 * - Les variables dynamiques sont utiles pour générer du contenu ou manipuler des données
 *   sans connaître à l'avance les noms des colonnes ou des champs.
 * - Assurez-vous que les noms de colonnes dans `$dynamicVariables` existent dans la table cible.
 * - Cette approche peut être utilisée pour des tâches nécessitant une flexibilité dans le traitement des données.
 */
