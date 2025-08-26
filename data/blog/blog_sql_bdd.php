  <style>
    .liens {
      background-color: rgba(20, 19, 19, 0.8);
      padding: 10px;
      color: white;
      margin-top: 25px;
      width: 100px;
      text-align: center;
      margin-bottom: 100px;
    }

    .liens:hover {
      background-color: black;
      border-radius: 7px;
    }

    .tout_haut {
      position: fixed;
      bottom: 20px;
      left: 20px;
    }

    .liens a {
      text-decoration: none;
      color: white;

    }

    .title_projet_z {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
    }

    .title_projet_toggle_x_ {
      margin-top: 55px;
    }

    .title_projet_toggle_x_1,
    .title_projet_toggle_x_2 {
      margin-top: 40px;
      margin-bottom: 40px;

    }



    .description_projet_1_class_off {
      text-align: justify;
    }

    .date_inscription_projet {
      color: rgba(169, 169, 169, 0.8);
      padding: 55px;
      margin-top: 55px;
    }

    .div_article {

      width: 80%;
      margin: auto;
    }

    .div_article {
      width: 80%;
      max-width: 1200px;
      margin: auto;
      overflow: hidden;
      /* cache tout ce qui dépasse */
    }

    .description_projet_toggle_x_2,
    .description_projet_toggle_x_1 {
      width: 100%;
      /* ou ce que tu veux */

      overflow: hidden;
      /* cache tout ce qui dépasse */
    }



    /* Sur téléphone (moins de 600px) */
    @media (max-width: 600px) {
      .div_article {
        width: 95%;
        /* occupe presque tout l’écran */
      }
    }

    .article_img_dw {
      text-align: center;
      margin-top: 15px;
      margin-bottom: 45px;
      width: 60%;
      margin: auto;

    }

    @media only screen and (max-width: 600px) {

      .article_img_dw,
      .description_projet_1_class_off {

        width: 100%;
        margin: auto;

      }

      .div_article {

        width: 90%;
        margin: auto;
      }

      .description_projet_1_class_off {}

    }

    .article_img_dw img {
      max-width: 100%;
    }

    .title_projet_1_class_on {
      font-size: 1.5em;
      color: #333;
      margin-bottom: 10px;
      text-align: center;
      margin-top: 55px;
      padding: 20px;
    }

    .date_inscription_projet {
      color: rgba(169, 169, 169, 0.8);
      padding: 55px;
    }

    .date_inscription_projet,
    .title_projet_1_class_off {
      width: 90%;
      margin: auto;


    }

    .title_projet_1_class_off {


      margin-bottom: 55px;
      margin-top: 55px;
    }

    .description_projet_class_on {


      width: 90%;
      margin: auto;

    }





    .description_projet {
      font-size: 1em;
      color: #666;
      margin-bottom: 15px;
      text-align: justify;
      width: 90%;
      margin: auto;
    }

    .buttons-container {
      margin-top: 15px;
      display: flex;
      gap: 10px;
      display: flex;
      justify-content: space-around;
      margin-top: 75px;
      margin-bottom: 75px;

    }

    .btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      /* espace entre icône et texte */
      padding: 10px 20px;
      background-color: #222;
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      transition: background 0.3s;
      font-family: Arial, sans-serif;
      font-size: 16px;
    }

    .btn:hover {
      background-color: #444;
    }

    .btn i {
      font-size: 18px;
    }
  </style>
  <?php


  $nom_table = "projet"; // Nom de la table cible
  $id_sha1_projet = $url_;
  // Requête SQL pour récupérer toutes les données de la table
  $req_sql = "SELECT * FROM `$nom_table` WHERE `id_sha1_projet` ='$id_sha1_projet'";
  // Instanciation de la classe
  $db = new DatabaseHandler($dbname, $username);
  // Appel de la fonction
  $result = $db->know_variables_name($nom_table, "_x", $req_sql);














  for ($i = 0; $i < count($title_projet_x); $i++) {

    $title_projet_x[$i] = AsciiConverter::asciiToString($title_projet_x[$i]);
    $description_projet_x[$i] = AsciiConverter::asciiToString($description_projet_x[$i]);
  }

  /*
var_dump($title_projet_x);
var_dump($description_projet_x);
 
*/

  $req_sql = "SELECT * FROM `$nom_table` WHERE `id_sha1_parent_projet` ='$id_sha1_projet'";
  // Instanciation de la classe
  $db = new DatabaseHandler($dbname, $username);
  // Appel de la fonction
  $result = $db->know_variables_name($nom_table, "_y", $req_sql);

  for ($i = 0; $i < count($title_projet_y); $i++) {

    $title_projet_y[$i] = AsciiConverter::asciiToString($title_projet_y[$i]);
    $description_projet_y[$i] = AsciiConverter::asciiToString($description_projet_y[$i]);
  }


  $nom_table = "projet_img";
  $req_sql = "SELECT * FROM `$nom_table` WHERE `id_sha1_projet_img` ='$id_sha1_projet'";
  // Instanciation de la classe
  $db = new DatabaseHandler($dbname, $username);
  // Appel de la fonction
  $result = $db->know_variables_name($nom_table, "_y", $req_sql);












  ?>





  <!DOCTYPE html>
  <html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= AsciiConverter::asciiToString(replace_element_2($google_title_projet_x[0])) ?></title>

    <?php


    if ($img_projet_src1_x[0] != "") {



    ?>

      <link rel="icon" type="image/x-icon" href="../img_dw/<?= $img_projet_src1_x[0] ?>">

    <?php
    }
    ?>
  </head>

  <body>










    <?php


    /*
var_dump($title_projet_y);
var_dump($description_projet_y);
*/


    require_once 'data/blog/styles/m1.php';
    require_once 'data/blog/styles/a1.php';






    echo "<div class='div_article'>";






    $src_img_array = array();







    echo "<div class='title_projet_toggle_x_'>";
    if ($title_projet_toggle_x[0] == "1") {
      echo '<div class="title_projet_toggle_x_1">' . replace_element_2($title_projet_x[0]) . '</div>';
    } else {
      echo '<div class="title_projet_toggle_x_2">' . $title_projet_x[0] . '</div>';
    }


    if ($description_projet_toggle_x[0] == "1") {
      echo '<div class="description_projet_toggle_x_1">' . replace_element_2($description_projet_x[0]) . '</div>';
    } else {
      echo '<div class="description_projet_toggle_x_2">' . $description_projet_x[0] . '</div>';
    }


    echo "</div>";



    array_push($src_img_array, "../img_dw/$img_projet_src1_x[0] ");

    for ($i = 0; $i < count($title_projet_y); $i++) {




      $src_img = "../img_dw/" . $img_projet_src1_y[$i];


      array_push($src_img_array, $src_img);



      if ($visibility_1_projet_y[$i] == "1") {

        // Exemple statique : affichage direct sans boucle ni variables

        // Titre OFF

        // Image du projet



        echo '<div id="' . $id_sha1_projet_y[$i] . '"></div>';

        echo '<div class="title_projet_1_class_off">' . $title_projet_y[$i] . '</div>';





        if ($img_projet_src1_y[$i] != "") {

    ?>

          <div class="article_img_dw">
            <img src="<?= $src_img ?>" alt="Image projet" srcset="">
          </div>


        <?php
        }



        $baseDate = $date_inscription_projet_y[$i];
        $clock = new FrenchClock($baseDate);


        echo '<div class="date_inscription_projet">';
        echo "<b > Publié depuis :</b> " . $clock->diffFromBaseHuman() . "<br>";

        echo '</div>';



        if ($title_projet_toggle_y[$i] != "1") {
          echo '<div class="title_projet_1_class_on">' . $title_projet_y[$i] . '</div>';
        } else {
          echo '<div class="title_projet_1_class_off">' . replace_element_2($title_projet_y[$i]) . '</div>';
        }

        if ($description_projet_toggle_y[$i] != "1") {
          echo '<div class="description_projet_1_class_on">' . $description_projet_y[$i] . '</div>';
        } else {
          echo '<div class="description_projet_1_class_off">' . replace_element_2($description_projet_y[$i]) . '</div>';
        }



        echo '<div id="' . $id_sha1_projet_y[$i] . '_c"></div>';

        ?><a href="<?= $id_sha1_projet_y[$i] ?>">
          <div class="liens">
            LIEN
          </div>
        </a>
      <?php

      }

      ?>


    <?php
    }



    echo '</div>';









    $nom_table = "projet"; // Nom de la table cible
    $id_sha1_projet = $url_;
    // Requête SQL pour récupérer toutes les données de la table
    $req_sql = "SELECT * FROM `$nom_table` WHERE `id_sha1_projet` ='$id_sha1_projet'";
    // Instanciation de la classe
    $db = new DatabaseHandler($dbname, $username);
    // Appel de la fonction
    $result = $db->know_variables_name($nom_table, "_x", $req_sql);





    ?>






    <!-- Import de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <div class="buttons-container">
      <!-- Bouton vers menu principal -->
      <a href="../index.php" class="btn">
        <i class="fa-solid fa-house"></i> Menu Principal
      </a>


      <?php




      if ($id_sha1_parent_projet_x[0] != "") {
      ?>
        <a href="<?= $id_sha1_parent_projet_x[0] ?>" class="btn">
          <i class="fa-solid fa-arrow-left"></i> Retour Blog
        </a>
      <?php
      }
      ?>
      <!-- Bouton vers parent du blog -->

    </div>
    <?php


    ?>

    <style>
      .images_container_all {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        width: 90%;
        margin: 45px auto;
        gap: 15px;
      }

      .images_container_all div {
        width: 250px;
        height: 250px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f0f0f0;
      }

      .images_container_all img {
        border-radius: 10px;

        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    </style>

    <div class="images_container_all">
      <?php
      if (!empty($src_img_array) && is_array($src_img_array)) {
        foreach ($src_img_array as $src) {
          $src = trim($src); // supprime les espaces inutiles



          $src_replace =     str_replace("../", "", $src);

          if (file_exists($src_replace)) {
            if ($src !== '') {  // ignorer valeurs vides
              echo '<div>';
              echo '<img src="' . htmlspecialchars($src) . '" alt="">';
              echo '</div>';
            }
          }
        }
      }
      ?>
    </div>

    <style>
      .fleche_bas {
        position: fixed;
        left: 20px;
        top: 50px;
      }
    </style>

<a href="#bas">
  <div class="fleche_bas">
    <img style="width: 30px;height: 30px;" width="30" height="30" src="https://img.icons8.com/ios-filled/30/circled-chevron-down.png" alt="circled-chevron-down" />
  </div>
</a>
<div id="bas"></div>
    </div>



    <a href="#<?= $id_sha1_projet_x[0] ?>">
      <div class="tout_haut">
        <img style="width: 30px;height:30px" width="30" height="30" src="https://img.icons8.com/ios-filled/50/circled-chevron-up.png" alt="circled-chevron-up" />
      </div>
    </a>


  </body>