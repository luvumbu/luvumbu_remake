<?php
require_once "data/all/requare_one_1.php";
require_once "Class/formatDateFr.php";
require_once "Class/fichierExiste.php";
require_once "Class/FrenchClock.php";
require_once "Class/dbCheck.php";
require_once "Class/Js.php";





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



$nom_table = "projet"; // Nom de la table cible
$id_sha1_projet = $url_;
// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `$nom_table` WHERE `id_sha1_projet` ='$id_sha1_projet'";
// Instanciation de la classe
$db = new DatabaseHandler($dbname, $username);
// Appel de la fonction
$result = $db->know_variables_name($nom_table, "", $req_sql);







if ($id_projet) {





  // Requête SQL pour récupérer toutes les données de la table
  $req_sql = 'SELECT * FROM `projet_img` WHERE `id_sha1_projet_img`="' . $id_sha1_projet[0] . '" ';
  // Instanciation de la classe
  $db = new DatabaseHandler($dbname, $username);
  // Appel de la fonction
  $result = $db->know_variables_name("projet_img", "", $req_sql);










  $img_projet_src1_ = $img_projet_src1[0];






  // Requête SQL pour récupérer toutes les données de la table
  $req_sql = 'SELECT * FROM `projet` WHERE `id_sha1_parent_projet` ="' . $id_sha1_projet[0] . '" ORDER BY `id_sha1_parent_projet` ASC';
  // Instanciation de la classe
  $db = new DatabaseHandler($dbname, $username);
  // Appel de la fonction
  $result = $db->know_variables_name($nom_table, "_a", $req_sql);













  $id_sha1_user_projet_ = $id_sha1_user_projet[0];

  // Requête SQL pour récupérer toutes les données de la table
  $req_sql = 'SELECT * FROM `' . $dbname . '` WHERE `id_sha1_user`="' . $id_sha1_user_projet_ . '" ';


  // Instanciation de la classe
  $db = new DatabaseHandler($dbname, $username);
  // Appel de la fonction
  $result = $db->know_variables_name($dbname, "_b", $req_sql);



  $id_user_b_               = $id_user_b[0];
  $date_user_b_             = $date_user_b[0];
  $id_sha1_user_b_          = $id_sha1_user_b[0];
  $id_parent_user_b_        = $id_parent_user_b[0];
  $description_user_b_      = replace_element_2(AsciiConverter::asciiToString($description_user_b[0]));
  $title_user_b_            = replace_element_2(AsciiConverter::asciiToString($title_user_b[0]));
  $info_user_1_b_            = replace_element_2(AsciiConverter::asciiToString($info_user_1_b[0]));
  $info_user_2_b_            = replace_element_2(AsciiConverter::asciiToString($info_user_2_b[0]));
  $info_user_3_b_           = replace_element_2(AsciiConverter::asciiToString($info_user_3_b[0]));



  $img_user_b_              = 'img_dw/' . $img_user_b[0];
  $img_user_b_2              = 'img_dw/' . $img_user_b[0];
  $nom_user_b_              = $nom_user_b[0];
  $prenom_user_b_           = $prenom_user_b[0];
  $password_user_b_         = $password_user_b[0];
  $email_user_b_            = $email_user_b[0];
  $activation_user_b_       = $activation_user_b[0];
  $date_inscription_user_b_ = $date_inscription_user_b[0];














  $req_sql = 'SELECT * FROM `' . $dbname . '` WHERE `id_sha1_user`="' . $id_sha1_user_projet_ . '" ';


  // Instanciation de la classe
  $db = new DatabaseHandler($dbname, $username);
  // Appel de la fonction
  $result = $db->know_variables_name($dbname, "_c", $req_sql);






?>



  <!DOCTYPE html>
  <html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= replace_element_2(AsciiConverter::asciiToString($google_title_projet[0])) ?></title>
  </head>

  <body>


  <?php







  /*

var_dump($id_sha1_projet) ; 



 
var_dump( $id_projet_a ) ; 
var_dump( $title_projet_a ) ; 
 
*/

  //require_once "integration_image_carouselle.php";
  /*

var_dump($visibility_1_projet[0]) ; 

var_dump($id_sha1_user_c[0]) ; 


var_dump($id_sha1_projet_lock[0]) ; 

*/








  $password_projet_1 = AsciiConverter::stringToAscii($_SESSION["password_projet"]);
  $password_projet_2 = $password_projet[0];

  if (isset($_SESSION["password_projet"])) {  

    if ($password_projet_2 == $_SESSION["password_projet"]) {
      require_once 'x.php';
    } else {
      require_once 'x_no1.php';
    }
  } else {


    if (!isset($_SESSION["index"][3])) {

      if ($visibility_1_projet[0] == "" && $id_sha1_projet_lock[0] == "") {

        header('Location: ../index.php');
        exit();
      } else {


        if ($visibility_1_projet[0] == "") {


          header('Location: ../index.php');
          exit();
        } else {


          if ($id_sha1_projet_lock[0] != "") {


            require_once 'x.php';
          } else {
            require_once 'x_no1.php';
          }
        }
      }
    } else {


      if ($_SESSION["index"][3] == $id_sha1_user_c[0]) {
        // require_once 'x.php';
      } else {
        if ($visibility_1_projet[0] == "" && $id_sha1_projet_lock[0] == "") {
          require_once 'x_no1.php';
        } else {

          if ($visibility_1_projet[0] == "") {


            require_once 'x_no1.php';
          } else {
          }
        }
      }
    }
  }
} else {
  require_once 'x_no2.php';
}
