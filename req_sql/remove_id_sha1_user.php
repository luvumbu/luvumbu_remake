<?php 
require_once "require_once.php" ;
$id_sha1_user = $_POST["id_sha1_user"] ;  
// Initialisation du gestionnaire de base de données
// Un objet '$databaseHandler' est créé avec les paramètres de connexion spécifiés
$databaseHandler = new DatabaseHandler($dbname, $username);
// Exécution de la requête SQL pour supprimer un enregistrement
// La méthode 'action_sql()' est utilisée pour exécuter des requêtes SQL directes
// Cette requête supprime un enregistrement de la table 'projet'
// où 'id_projet' est égal à 11
$databaseHandler->action_sql("DELETE FROM `profil_user` WHERE `id_sha1_user` = '$id_sha1_user'");
// Suppression d'un enregistrement dans la base de données
// Exemple de suppression d'un élément dans une table spécifique
 
?>