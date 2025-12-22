
    <?php 



 

$title_projet_0 =  AsciiConverter::asciiToString($title_projet[0]);
$description_projet_0=  AsciiConverter::asciiToString($description_projet[0]);
if($title_projet_toggle[0]==""){
 $title_projet_00 = '<div class="title_1_1"><h1>' . replace_element_2($title_projet_0) . '</h1></div>';
}
else{
$title_projet_00 = '<div class="title_1_2"><h1>' . replace_element_1($title_projet_0) . '</h1></div>';
}
$filename = "img_dw/".$img_projet_src1[0];
 
 
 
 
 
    ?>
<div id="img_projet_src1_0">
<?= $title_projet_00?>
</div>
<?php 
 
 


 
echo '<div class="date_inscription">';
echo  format_date_europeenne($date_inscription_projet[0]) ;
echo '</div>';

 
if($description_projet_toggle[0]==""){
?>

    <?php
echo '<div class="description_1_2">';
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
 
$img_projet_src1_00 = "../img_dw/".$img_projet_src1[0] ;
$img_projet_src1_000 = "img_dw/".$img_projet_src1[0] ;


 
$filename1 = $img_projet_src1_00;


// Choisir l'image : locale si elle existe, sinon la GIF
$background = file_exists($filename1) ? $img_projet_src1_00 : $filename1;







$filename = $img_projet_src1_000 ;

if (file_exists($filename)) {
  $background  = $img_projet_src1_00;
} else {
     $background  =$filename2 ;

}






?>

 

<style>
#img_projet_src1_0 {
  width: 100%;
  height: 560px;
  background-image: url('<?= $background ?>');
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  position: relative;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: flex-end;
  color: var(--text-white);
  text-shadow: 0 0 8px var(--accent-color);
  box-shadow: inset 0 0 80px rgba(0, 0, 0, 0.8);
}
</style>
