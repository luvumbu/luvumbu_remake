<?php 
// Vérifie le mot de passe si c'est ok il renvoi les valeurs
$req_sql = 'SELECT * FROM `' . $dbname . '` WHERE password_user = "' . $username . '" ';
$databaseHandler->getListOfTables_Child($dbname); // Récupère les tables enfants
$databaseHandler->getDataFromTable2X($req_sql); // Récupère les données utilisateur
$databaseHandler->get_dynamicVariables(); // Récupère les variables dynamiques
$count_ = count($dynamicVariables['id_sha1_user']); // Compte les utilisateurs trouvés
if ($count_ < 1) {
    delete_file($dbCheck); // Supprime le fichier si aucun utilisateur trouvé
        echo ' <meta http-equiv="refresh" content="0">' ;  
  }
?>
