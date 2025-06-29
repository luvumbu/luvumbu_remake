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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Document</title>
</head>



<style>
.galactic-net {
  position: relative;
  background: linear-gradient(135deg, #050010, #0a0f3f);
 
  padding: 6rem 2rem;
  text-align: center;
  overflow: hidden;
  font-family: 'Orbitron', sans-serif;
}
#galacticCanvas {
  position: absolute;
  top: 0; left: 0;
  width: 100%;
  height: 100%;
  pointer-events: auto; /* Important pour capter la souris */
  z-index: 1;
}
.galactic-net h2,
.galactic-net p {
  position: relative;
  z-index: 2;
}
</style>





<body>

<?php


//var_dump($id_sha1_projet) ; 


?>
    <?php require_once "blog_index_menu_1.php"; ?>
    <?php require_once "blog_index_section_1.php"; ?>
    <?php require_once "blog_index_articles_1.php" ?>
    <?php require_once "blog_index_footer_1.php"  ?>
</body>

</html>