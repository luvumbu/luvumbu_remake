
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
if($img_projet_src1[0]!=""){
 
if (file_exists($filename)) {
 

    ?>
<div id="img_projet_src1_0">
<?= $title_projet_00?>
</div>
<?php 
}  
 }


 
echo '<div class="date_inscription">';
echo  format_date_europeenne($date_inscription_projet[0]) ;
echo '</div>';

 
if($description_projet_toggle[0]==""){
?>

    <?php
echo '<div class="description_2_1">';
echo "<p>";



echo  replace_element_2($description_projet_0) ;
echo '</p>';
echo '</div>';




?>

    <?php
}
else{
echo '<div class="description_2_2">';
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


 
?>


<style>
 
    .reduce_img {
        width: 100%;
        height: auto;
    }
#img_projet_src1_0 {
  background-image: url("<?= $img_projet_src1_00 ?>");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  display: block;
  width: 100%;
  height: 100px;
  overflow: hidden;
  margin-bottom: 20px;
  padding-top: 100px;
  padding-bottom: 100px;
position: relative;

 

}


#img_projet_src1_0 div{
  
background-color: rgba(37, 31, 31,1);
color: white;
 width: 100%;
position: absolute;
top: 0;
height: 100%;
text-shadow: 2px 2px 4px white;

  text-align: center;
  padding-top: 100px;

}

.section_1{
 
    width: 100%;
    margin: auto;
}










@media screen and (max-width: 600px) {
.section_1 {
    width: 100%;
 
 
  }

}


 




</style>