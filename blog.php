<?php
require_once "data/all/requare_one_1.php";
require_once "Class/formatDateFr.php";
require_once "Class/fichierExiste.php";
require_once "Class/FrenchClock.php";
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
 


require_once "data/blog/blog_sql_bdd.php" ;

 $name_files ="qr_code_1/temp/".$url_.".png" ;
 


if ( file_exists($name_files) )
{
   

     ?>
     <div id="qr_code">
     <img src="<?php echo '../'.$name_files; ?>" alt="" srcset="">

     </div>
     <?php

}
else{

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
    #qr_code {
        text-align: center;
        margin: auto;
        width: 100px;
    }

    #qr_code img {
        max-width: 100%;
        height: auto;
        margin-bottom: 75px;
    }
</style>
