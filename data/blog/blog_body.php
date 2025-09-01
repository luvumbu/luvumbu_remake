<?php 







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






require_once "data/blog/blog_sql_bdd.php";

$name_files = "qr_code_1/temp/" . $url_ . ".png";



if (file_exists($name_files)) {



    $nom_table = "profil_user"; // Nom de la table cible
    $id_sha1_projet = $url_;
    // Requête SQL pour récupérer toutes les données de la table
    $req_sql = "SELECT * FROM `$nom_table` WHERE `id_parent_user` ='$id_sha1_user_projet_x[0]'";
    // Instanciation de la classe
    $db = new DatabaseHandler($dbname, $username);
    // Appel de la fonction
    $result = $db->know_variables_name($nom_table, "_za", $req_sql);







 /* 
    echo "<div class='title_user_za'>";
    echo replace_element_2(AsciiConverter::asciiToString($title_user_za[0])); // Affiche "Hello"

    echo "</div>";

   

title_user
img_user
id_sha1_user
*/




    $nom_table = "profil_user"; // Nom de la table cible
    $id_sha1_projet = $url_;
    // Requête SQL pour récupérer toutes les données de la table
    $req_sql = "SELECT * FROM `$nom_table` WHERE `id_parent_user` ='$id_sha1_user_za[0]'";
    // Instanciation de la classe
    $db = new DatabaseHandler($dbname, $username);
    // Appel de la fonction
    $result = $db->know_variables_name($nom_table, "_zb", $req_sql);




    echo "<div class='cpcarre'>";
    for ($i = 0; $i < count($title_user_zb); $i++) {


        echo "<div>";


?>


        <a href="<?= replace_element_2(AsciiConverter::asciiToString($prenom_user_zb[$i])) ?>">
            <img src="<?= '../img_dw/' . $img_user_zb[$i]; ?>" alt="" sizes="" srcset="">

        </a>


    <?php

        echo "</div>";
    }
    echo "</div>";

    ?>


    <div id="qr_code">
        <img src="<?php echo '../' . $name_files; ?>" alt="" srcset="">

    </div>
<?php

} else {

?>
    <script>
        var ok = new Information("../qr_code_1/index.php"); // création de la classe 
        ok.add("login", "root"); // ajout de l'information pour lenvoi 
        ok.add("password", "root"); // ajout d'une deuxieme information denvoi  
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 
    </script>


<?php
}



?>


<style>
    .id_user_zb {
        display: flex;
        justify-content: space-around;
    }

    .id_user_zb div {
        text-align: center;
    }

    .id_user_zb img {
        width: 100px;
        height: 100px;


    }

    .title_user_za {
        text-align: center;
        font-size: 2em;
    }

    .cpcarre {
        display: flex;
        justify-content: space-around;
        width: 50%;
        margin: auto;
        margin-bottom: 50px;

    }

    .cpcarre img {
        width: 100%;
        height: 100%;
        border-radius: 10px;

    }

    .cpcarre div {

        width: 50px;
        height: 50px;
    }

    .cpcarre div:hover {
        cursor: pointer;
    }

    #qr_code {
        text-align: center;
        margin: auto;
        width: 150px;
    }


    
    #qr_code img {
        max-width: 100%;
        height: auto;
        margin-bottom: 75px;
    }
</style>




<?php 
 










require_once "data/blog/styles/profil.php";
require_once "data/blog/styles/audio.php";





?>

      <a href="#bas">
          <div class="fleche_bas">
              <img style="width: 30px;height: 30px;" width="30" height="30"
                  src="https://img.icons8.com/ios-filled/30/circled-chevron-down.png" alt="circled-chevron-down" />
          </div>
      </a>
      <div id="bas"></div>
      </div>



      <a href="#<?= $id_sha1_projet_x[0] ?>">
          <div class="tout_haut">
              <img style="width: 30px;height:30px" width="30" height="30"
                  src="https://img.icons8.com/ios-filled/50/circled-chevron-up.png" alt="circled-chevron-up" />
          </div>
      </a>


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

 


 



