
    <?php 
$title_projet_0 =  AsciiConverter::asciiToString($title_projet[0]);
$description_projet_0=  AsciiConverter::asciiToString($description_projet[0]);
 
 

 
 

 


 
if($title_projet_toggle[0]==""){
?>

    <?php
echo '<div class="title_1_1">';
echo "<h1>";
echo replace_element_2($title_projet_0) ;
echo '</h1>';
echo '</div>';




?>

    <?php
}
else{
echo '<div class="title_1_2">';
echo "<h1>";

echo replace_element_1($title_projet_0) ;
echo '</h1>';
echo '</div>';

}
?>

 




<?php

 
 
 










$filename = "img_dw/".$img_projet_src1[0];
 



if($img_projet_src1[0]!=""){


 
if (file_exists($filename)) {

  
       echo "<div class='img_dw'>";
    echo "<img src='../img_dw/".$img_projet_src1[0]."' alt='image projet' onclick=\"openLightbox(this.src)\" />";
    echo "</div>";
}  
 }







 
echo '<div class="date_inscription">';
echo  format_date_europeenne($date_inscription_projet[0]) ;
echo '</div>';

 
if($description_projet_toggle[0]==""){
?>

    <?php
echo '<div class="description_1_1">';
echo "<p>";



echo  replace_element_2($description_projet_0) ;
echo '</p>';
echo '</div>';




?>

    <?php
}
else{
echo '<div class="description_1_2">';
echo "<p>";
echo replace_element_1($description_projet_0) ;
echo '</p>';
echo '</div>';

}


$description_projet_boucle = $description_projet ; 
$nombre = 0; // Indice de l'histoire à afficher
if($id_sha1_projet_song[0]!=""){
  require "data/blog/blog_audio_description0.php" ; 
}
 

?>

 