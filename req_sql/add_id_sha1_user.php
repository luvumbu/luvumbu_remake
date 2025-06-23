<?php 
require_once "require_once.php" ;
$id_parent_user = $_POST["id_sha1_user"] ; 

$nom_user = $_SESSION["index"][3] ; 
 $rand_ =rand(999,9999);

$id_sha1_user_id = $id_parent_user.'_'.$rand_;

// Initialisation du gestionnaire de base de données
// Un objet '$databaseHandler' est créé avec les paramètres de connexion spécifiés
$databaseHandler = new DatabaseHandler($dbname, $username);

// Exécution de la requête SQL pour supprimer un enregistrement
// La méthode 'action_sql()' est utilisée pour exécuter des requêtes SQL directes
// Cette requête supprime un enregistrement de la table 'projet'
// où 'id_projet' est égal à 11
$databaseHandler->action_sql("INSERT INTO  `profil_user` (`id_sha1_user`, `id_parent_user`,`nom_user`) VALUES ( '$id_sha1_user_id', '$id_parent_user','$nom_user');");
 
?>