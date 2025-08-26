<?php 
 
 
$nom_table = "projet"; // Nom de la table cible
$id_sha1_projet =$url_;
// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `$nom_table` WHERE `id_sha1_projet` ='$id_sha1_projet'";
 // Instanciation de la classe
$db = new DatabaseHandler($dbname, $username);
// Appel de la fonction
$result = $db->know_variables_name($nom_table, "_x", $req_sql);
 













for ($i=0; $i <count($title_projet_x) ; $i++) { 
 
  $title_projet_x[$i] = AsciiConverter::asciiToString( $title_projet_x[$i]);
  $description_projet_x[$i] = AsciiConverter::asciiToString( $description_projet_x[$i]);

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
 
for ($i=0; $i <count($title_projet_y) ; $i++) { 
 
  $title_projet_y[$i] = AsciiConverter::asciiToString( $title_projet_y[$i]);
  $description_projet_y[$i] = AsciiConverter::asciiToString( $description_projet_y[$i]);

}


$nom_table = "projet_img";
$req_sql = "SELECT * FROM `$nom_table` WHERE `id_sha1_projet_img` ='$id_sha1_projet'";
 // Instanciation de la classe
$db = new DatabaseHandler($dbname, $username);
// Appel de la fonction
$result = $db->know_variables_name($nom_table, "_y", $req_sql);
 
 








 



  
/*
var_dump($title_projet_y);
var_dump($description_projet_y);
*/


require_once 'data/blog/styles/m1.php';
require_once 'data/blog/styles/a1.php';



 


echo "<div class='div_article'>";
 for ($i=0; $i < count($title_projet_y); $i++) { 
  


 
$src_img = "../img_dw/".$img_projet_src1_y[$i] ;




 
 if($visibility_1_projet_y[$i] == "1" ) {
 
// Exemple statique : affichage direct sans boucle ni variables

// Titre OFF

// Image du projet



if($i == 0) {

echo "<div class='title_projet_toggle_x_'>";
  if($title_projet_toggle_x[0]=="1"){
  echo '<div class="title_projet_toggle_x_1">'.replace_element_2($title_projet_x[0]).'</div>';
  }
  else{
      echo '<div class="title_projet_toggle_x_2">'.$title_projet_x[0].'</div>';
  }


  if($description_projet_toggle_x[0]=="1"){
 echo '<div class="description_projet_toggle_x_1">'.replace_element_2($description_projet_x[0]).'</div>';
  }
  else{
  echo '<div class="description_projet_toggle_x_2">'.$description_projet_x[0].'</div>';
  }


 echo "</div>";

}
echo '<div class="title_projet_1_class_off">'.$title_projet_y[$i].'</div>';

 


$nom_table = "projet"; // Nom de la table cible
$id_sha1_projet =$url_;
// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `$nom_table` WHERE `id_sha1_parent_projet` ='$id_sha1_projet_y[$i]'";
 // Instanciation de la classe
$db = new DatabaseHandler($dbname, $username);
// Appel de la fonction
$result = $db->know_variables_name($nom_table, "_z", $req_sql);
 


 
 

echo '<div class="title_projet_z">' ; 
for ($i=0; $i < count($title_projet_z); $i++) { 
 

 
echo '<a>' ; 
    echo "<div class='title_projet_z_child' >" ; 

  echo AsciiConverter::asciiToString($title_projet_z[$i]);
  echo "</div>" ;
  
echo '</a>' ; 
  
}
echo '</div>' ; 

?>

 


<?php 

 

if($img_projet_src1_y[$i] != "" ) {

?>

<div class="article_img_dw">
    <img src="<?= $src_img ?>" alt="Image projet" srcset="">
</div>

<?php
}
 


$baseDate = $date_inscription_projet_y[$i];
$clock = new FrenchClock($baseDate);


echo '<div class="date_inscription_projet">';
 echo "<b > Publié depuis :</b> ".$clock->diffFromBaseHuman()."<br>";

echo '</div>' ; 

 

 if($title_projet_toggle_y[$i]!="1"){
   echo '<div class="title_projet_1_class_on">'.$title_projet_y[$i].'</div>';
 }
 else{
   echo '<div class="title_projet_1_class_off">'.replace_element_2($title_projet_y[$i]).'</div>';
 }
 
  if($description_projet_toggle_y[$i]!="1"){
   echo '<div class="description_projet_1_class_on">'.$description_projet_y[$i].'</div>';
 }
 else{
   echo '<div class="description_projet_1_class_off">'.replace_element_2($description_projet_y[$i]).'</div>';
 }
 
 

 }
  }



  echo '</div>';
?>



<style>

  .title_projet_z_child{
    border: 1px solid black;
  }
.title_projet_z{
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}
.title_projet_toggle_x_{
  margin-top: 55px;
}
.title_projet_toggle_x_1,.title_projet_toggle_x_2{
   margin-top: 40px;
   margin-bottom: 40px;

}
 
.description_projet_toggle_x_1{

}
.description_projet_toggle_x_2{

}

 .description_projet_1_class_off{
text-align: justify;
 }
  .date_inscription_projet{
    color: rgba(169, 169, 169, 0.8);
    padding: 55px;
    margin-top: 55px;
  }
  .div_article{
 
    width: 80%;
    margin: auto;
  }
    .article_img_dw {
        text-align: center;
        margin-top: 15px;
        margin-bottom: 45px;
        width: 60%;
        margin: auto;

    }

    @media only screen and (max-width: 600px) {
        .article_img_dw,.description_projet_1_class_off {

            width: 100%;
            margin: auto;

        }
         .div_article{
 
    width: 90%;
    margin: auto;
  }
        .description_projet_1_class_off{
       
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

    .description_projet_class_off {}



    .description_projet {
        font-size: 1em;
        color: #666;
        margin-bottom: 15px;
        text-align: justify;
        width: 90%;
        margin: auto;
    }
</style>


<!-- Import de Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<div class="buttons-container">
  <!-- Bouton vers menu principal -->
  <a href="../index.php" class="btn">
    <i class="fa-solid fa-house"></i> Menu Principal
  </a>


  <?php

  


  if($id_sha1_parent_projet_x[0]!=""){
?>
  <a href="<?= $id_sha1_parent_projet_x[0] ?>" class="btn">
    <i class="fa-solid fa-arrow-left"></i> Retour Blog
  </a>
<?php 
  }
?>
  <!-- Bouton vers parent du blog -->

</div>

<style>
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
  gap: 8px; /* espace entre icône et texte */
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
