<?php 
session_start();
header("Access-Control-Allow-Origin: *");

$nom_adresse_mail_coops = strtolower($_POST['nom_adresse_mail_coops']);
$msg_adresse_mail_coops = $_POST['msg_adresse_mail_coops'];

require_once "../Class/DatabaseHandler.php";
require_once "../Class/dbCheck.php";
 
// Initialisation du gestionnaire de base de données
// Un objet '$databaseHandler' est créé avec les paramètres de connexion spécifiés
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->action_sql("INSERT INTO  `adresse_mail_coops` (`nom_adresse_mail_coops`,`msg_adresse_mail_coops`) VALUES ( '$nom_adresse_mail_coops', '$msg_adresse_mail_coops');");

 
?>