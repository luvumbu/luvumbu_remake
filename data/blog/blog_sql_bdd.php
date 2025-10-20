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
    background-color:  rgba(0, 0, 0, 0.9);
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
  
 margin: auto;
 

    max-width: 90%; /* largeur maximale souhaitée */
  
    box-sizing: border-box; /* inclut la bordure dans la largeur */
}

/* Tous les éléments à l’intérieur */
.div_article * {
    max-width: 100%; /* ne dépasse jamais la largeur de .div_article */
    box-sizing: border-box; /* s’assure que padding/border n’agrandissent pas l’élément */
}


.div_article {
  
   
  width: 90%;
  margin: auto;
    
    /* cache tout ce qui dépasse */
}

.description_projet_toggle_x_2,
.description_projet_toggle_x_1 {
    width: 100%;
    /* ou ce que tu veux */

      /* cache tout ce qui dépasse */
}



/* Sur téléphone (moins de 600px) */
@media (max-width: 600px) {
   
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
    require_once 'data/blog/styles/blog_all_images_js_copy.php';
 

   


    echo "<div class='div_article'>";









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
 
$stories[] = replace_element_2($description_projet_x[0]) ;

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

$stories[] =  replace_element_2($description_projet_y[$i]);


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

      .images_container_all div:hover {
          cursor: pointer;
          padding: 15px;
      }

      .images_container_all div {
          transition: padding 1s ease;
          width: 200px;
          height: 200px;
          overflow: hidden;
          display: flex;
          justify-content: center;
          align-items: center;
          background-color: #f0f0f0;
          border: 3px solid rgba(0, 0, 0, 0.8);
          border-radius: 10px;

      }

      .images_container_all img {
          border-radius: 10px;

          width: 100%;
          height: 100%;
          object-fit: cover;
      }
      </style>


      <style>
      .fleche_bas {
          position: fixed;
          left: 20px;
          top: 50px;
      }
      </style>




 <?php 
/*
$db = new DatabaseHandler($dbname, $username);
$id_user_mail_user =  $_SESSION["index"][3];
$req_sql = "SELECT * FROM `mail_user` WHERE `id_user_mail_user`='$id_user_mail_user'";
// Appel de la fonction
$result = $db->know_variables_name("mail_user", "_x", $req_sql);



// Accès direct via la variable dynamique
var_dump($id_user_mail_user_x);

// Accès global via $GLOBALS


*/



