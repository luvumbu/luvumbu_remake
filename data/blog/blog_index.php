 <?php
$nombre = rand(1, 6);
// Avec mt_rand() (plus rapide et recommandé)
$nombre2 = mt_rand(1, 6);
$nombre = 7; 
$header_1_pages_projet_ = $header_1_pages_projet[0] ; 
 
    if($header_html_pages_projet[0]==""){
    require_once "data/blog/header/html/default.php";
    }
    else{
    require_once "data/blog/header/html/".$header_html_pages_projet[0];
    }  
 

    if($header_css_pages_projet[0]==""){
      
  require_once "data/blog/header/css/default.php";
    }
    else{
  require_once "data/blog/header/css/".$header_css_pages_projet[0];
    } 
 
?>
<section class="section_1">
 
<?php 
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

?>

</section>
<?php 

if($footer_css_pages_projet[0]==""){
  require_once "data/blog/footer/css/default.php";
}
else{ 
  require_once "data/blog/footer/css/".$footer_css_pages_projet[0];
}

 
 
 
if($footer_html_pages_projet[0]==""){
   require_once "data/blog/footer/html/default.php";
}
else{ 
 require_once "data/blog/footer/html/".$footer_html_pages_projet[0];
}

 

 
 
 
 ?>