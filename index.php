<?php
require_once "data/index/index_sesstion_start.php";
$_SESSION["nombre"]  = 0 ; 
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

<body class="display_none" id="body">
  <link rel="stylesheet" href="<?= $index_css ?>"> <!-- Inclusion du fichier CSS -->
  <?php
  $filename = $dbCheck;
  if (file_exists($filename)) {


    require_once $dbCheck;
    // On crée une instance
    $dbHandler = new DatabaseHandler(
      $dbname,
      $username
    );
    // On vérifie si une table existe
    $resultat = $dbHandler->existance_table($dbname);
    // On affiche le résultat
    if ($resultat == "1") {
      if (isset($_SESSION["index"])) {

        require_once $index_verif_url;
        require_once $home;


        if (isset($_SESSION["index"][7])) {
          if ($_SESSION["index"][7] != "") {
            require_once "data/home/home_updat_all.php";
          }
        }
      } else {
        require_once $index_verifyConnection_all_projet;
      }
    } else {
      require_once $login_bdd;
    }
      
  } else {
    require_once  $login_bdd;
  }


 
  ?>
  <div>
  </div>
</body>
</html>