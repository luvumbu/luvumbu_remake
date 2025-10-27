 <?php
$nombre = rand(1, 6);
// Avec mt_rand() (plus rapide et recommandé)
$nombre2 = mt_rand(1, 6);
$nombre = 7; 
$header_1_pages_projet_ = $header_1_pages_projet[0] ; 
 echo "12345689...." ;
if($header_html_pages_projet[0]==""){
require_once "data/blog/header/html/default.php";
}
else{
require_once "data/blog/header/html/".$header_html_pages_projet[0];
}  
 
 
 
echo '<section class="section_1">'; 


 

if (count($id_projet_img) != 0) {
        if($section_html_pages_projet[0]==""){
            require_once "data/blog/section/html/default.php";



        }
        else {
          require_once "data/blog/section/html/".$section_html_pages_projet[0];
        }
}


 if($section_src_pages_projet[0]==""){
  require_once "data/blog/section/src/default.php";
}
else{
  require_once "data/blog/section/src/".$section_src_pages_projet[0];
}





 


    if($section_child_html_pages_projet[0]==""){
      
  require_once "data/blog/section_child/html/default.php";
    }
    else{
  require_once "data/blog/section_child/html/".$section_child_html_pages_projet[0];
    }

    
  require_once "data/blog/about/about_1.php"; 
  echo '</section>';

 
 
 require_once "data/blog/footer/html/blog_qr_code_1.php" ;
 require_once "data/blog/footer/html/footer_1.php";  

 
 ?>