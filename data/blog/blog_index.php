 <?php
$nombre = rand(1, 6);
// Avec mt_rand() (plus rapide et recommandé)
$nombre2 = mt_rand(1, 6);
$nombre = 2;
require_once "data/blog/header/blog_index_head_{$nombre}.php";
echo '<section class="section_1">';
require_once "data/blog/blog_index_section_1.php";
 
if (count($id_projet_img) != 0) {
      require_once "data/blog/carouselles/carouselle_3.php";
    }
 




  require_once "data/blog/blog_index_1.php";   
 
 
 require_once "data/blog/blog_index_2.php"; 
 
echo '</section>';

   require_once "data/blog/blog_index_3.php";
  

    ?>

    <style>
      .section_3_1{
         background-color: black;
         color: white;
         text-decoration: none;

         width: 300px;
         padding: 15px;
         margin-top: 45px;
         margin-bottom: 45px;
         text-align: center;


      }
     .section_3_1  a{
              text-decoration: none;
                       color: white;
      }
 
 .img_dw{
    margin-top: 100px;
    margin-bottom: 100px;
  box-shadow: 2px 2px 9px black;
  border-radius: 7px;

 }
  .img_dw:hover{
opacity: 0.8;
cursor: pointer;

 

 }

.section_1,
.section_1_1,
.section_1_2,
.description_2_1,
.description_2_2 {
  max-width: 100%;        /* reste dans la largeur de la page */
  overflow-wrap: break-word; /* coupe les mots trop longs si besoin */
  word-wrap: break-word;     /* compatibilité */
  word-break: break-word;    /* évite le débordement */
  box-sizing: border-box;    /* prend padding/border dans la largeur */
}


 </style>