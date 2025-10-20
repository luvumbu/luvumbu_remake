 <?php
$nombre = rand(1, 6);
// Avec mt_rand() (plus rapide et recommandé)
$nombre2 = mt_rand(1, 6);
$nombre = 7;
 
  $header_1_pages_projet_ = $header_1_pages_projet[0] ; 
 
if( $header_1_pages_projet_!=""){
 require_once "data/blog/header/html/blog_index_head_{$nombre}.php";
 // require_once "data/blog/header/html/{$header_1_pages_projet_}";
}
else{
 require_once "data/blog/header/html/blog_index_head_{$nombre}.php";
  //require_once "data/blog/header/html/{$header_1_pages_projet_}";
}
 
echo '<section class="section_1">';
require_once "data/blog/section/html/section_1.php";
 
if (count($id_projet_img) != 0) {
     require_once "data/blog/section/src/carouselle_3.php";
    }
 
     require_once "data/blog/section_child/section_child_1.php";   
     require_once "data/blog/about/about_1.php"; 
 
 echo '</section>';
 

 
 require_once "data/blog/footer/html/blog_qr_code_1.php" ; 
 require_once "data/blog/footer/html/footer_1.php";
 
 
 ?>
 