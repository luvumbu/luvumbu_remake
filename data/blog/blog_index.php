 <?php
$nombre = rand(1, 6);
// Avec mt_rand() (plus rapide et recommandé)
$nombre2 = mt_rand(1, 6);
$nombre = 9;
  require_once "data/blog/header/blog_index_head_{$nombre}.php";

 
echo '<section class="section_1">';
require_once "data/blog/blog_index_1_0.php";
 
if (count($id_projet_img) != 0) {
      require_once "data/blog/carouselles/carouselle_3.php";
    }
 
   require_once "data/blog/blog_index_1.php";   
   require_once "data/blog/blog_index_2.php"; 

 echo '</section>';
require_once "data/blog/blog_qr_code.php" ; 

 require_once "data/blog/blog_index_3.php";
 
 
 ?>
 