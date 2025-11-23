<?php
require_once "data/all/index_sesstion_start.php";
if(isset( $_SESSION["select_style"])){
 unset($_SESSION["select_style"]);
}
 


 
/*
Variables globales liées à la base :
  $dbname, $username, $dbCheck
  └── utilisées dans : Class/dbCheck.php

Variables liées à la page d’accueil ou au fonctionnement global :
  $index_verif_url, $home_updat_all, $lang,
  $index_script_1, $index_css, $login_bdd,$home,$favicon
  $index_verifyConnection_all_projet,$home_select_all;
  
  └── utilisées dans : data/index/index_sesstion_start.php
*/

 
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
  <meta charset="UTF-8"> <!-- Encodage UTF-8 pour supporter les caractères spéciaux -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Adaptation aux appareils mobiles -->
  <title><?= $index_title ?></title> <!-- Titre de la page -->
  <link rel="icon" type="image/x-icon" href="<?= $favicon ?>"> <!-- Icône de la page -->
  <?php
      require_once $index_script_1;
  ?>
</head>
<script src="<?= $src_js ?>"></script> <!-- Inclusion d'un fichier JavaScript -->
<script src="<?= $src_js_add_ip?>"></script>
<body class="display_none" id="body">
  <link rel="stylesheet" href="<?= $index_css ?>"> <!-- Inclusion du fichier CSS -->
  <?php

  // index/index_sesstion_start
  if (file_exists($dbCheck)) {

    require_once $dbCheck;
    // On crée une instance
    $dbHandler = new DatabaseHandler(
      $dbname,
      $username
    );



    if ($dbHandler->verif == false) {
      unlink($dbCheck);

      header("Refresh: 1");
    } else {



      // On vérifie si une table existe
      $resultat = $dbHandler->existance_table($dbname);
      // On affiche le résultat
      if ($resultat == "1") {
        if (isset($_SESSION["index"])) {
          // l'utilisateur est en ligne 
          require_once $index_verif_url;
          // PErmet de vérifier si le lien est correcte si non lui faire une redirection
          require_once  $home;
        } else {

          require_once $index_verifyConnection_all_projet;
          require_once $home_select_all;
        }
      } else {
        require_once $login_bdd;
      }
    }
  } else {
    require_once  $login_bdd;
  }
  //  require_once "req_sql/log_general.php";
  ?>
  <div>
  </div>
</body>

</html>