<?php
require_once "data/all/requare_one_1.php";
require_once "Class/formatDateFr.php";
require_once "Class/fichierExiste.php";
require_once "Class/FrenchClock.php";
require_once "Class/dbCheck.php";




$stories = array();
?>
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<link rel="stylesheet" href="../data/blog/css/blog_style_1.css">
<link rel="stylesheet" href="../data/blog/css/blog_slider_1.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>




<?php
// Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
$url = new Give_url();
// Utilisation de la méthode split_basename pour séparer par "_"
$url->split_basename('__');
$url_ = $url->get_elements()[0];





$_SESSION["index"][4] = $url_;


if (isset($_SESSION["index"])) {
    $_SESSION["index"][4] = $url_;
    /* permet que lors que  lutilisateur
              se connecte puisse acceder directement au dossier selectionné 
    */
}


$filename = "all_projet/" . $url_ . '.php';
$filename2 = "all_projet_img/" . $url_ . '.php';



?>





<?php


  $nom_table = "projet"; // Nom de la table cible
  $id_sha1_projet = $url_;
  // Requête SQL pour récupérer toutes les données de la table
  $req_sql = "SELECT * FROM `$nom_table` WHERE `id_sha1_projet` ='$id_sha1_projet'";
  // Instanciation de la classe
  $db = new DatabaseHandler($dbname, $username);
  // Appel de la fonction
  $result = $db->know_variables_name($nom_table, "_x", $req_sql);




 

if($id_sha1_projet_lock_x[0] == 1) {

       require_once "data/blog/blog_body.php";


    }
    else{

      
        require_once "data/blog/password_projet_verif.php";
    }

 

   // require_once "req_sql/log_general.php";
?>
