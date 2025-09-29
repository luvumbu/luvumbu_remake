<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  


<?php

// Exemple d'ID utilisateur (à adapter selon ton contexte)
$id_sha1_user_projet = $row_projet[0]["id_sha1_user_projet"];
// ----------- 1. Fonction principale : recherche de fichier -----------
// ----------- 2. Fonction récursive pour explorer les sous-dossiers -----------
// ----------- 3. Utilisation -----------
$nomFichier = $id_sha1_user_projet . ".php";
$nomFichier_1 = "all_profil_user/" . $nomFichier;
$nomFichier_2 =  "all_profil_user_array/" . $nomFichier;

if (file_exists($nomFichier_1)) {
  require_once $nomFichier_1;
}

if (file_exists($nomFichier_2)) {
  require_once  $nomFichier_2;
}
?>


 

 

<body id="content">
  <?php
  //var_dump($id_sha1_projet) ; 

  require_once "styles/blog_index_styles.php";

  //M1
  //S1
  //A1
  //P1
  //F1 
  
  require_once "styles/m1.php";
  

  //require_once "styles/s1.php";


 
 
    require_once "styles/a1.php";
/*

  
  require_once "all_profil_user/" . $id_sha1_user_projet . ".php";
  require_once "styles/p1.php";
  require_once "styles/f1.php";
  require_once "js/blog_js.php";
 
 */
 
 
  ?>
