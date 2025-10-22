
    <?php 
$title_projet_0 =  AsciiConverter::asciiToString($title_projet[0]);
$description_projet_0=  AsciiConverter::asciiToString($description_projet[0]);
 
 


 
if($title_projet_toggle[0]==""){
 $title_projet_00 = '<div class="title_1_1"><h1>' . replace_element_2($title_projet_0) . '</h1></div>';
?>

    <?php
}
else{
$title_projet_00 = '<div class="title_1_2"><h1>' . replace_element_1($title_projet_0) . '</h1></div>';
}
?>

 




<?php

 
 
 










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
  
background-color: rgba(0, 0, 0, 0.5);
color: white;
 width: 100%;
position: absolute;
bottom: 0;
  

}


























/* ==================== DATE ==================== */
.date_inscription {
  text-align: center;
  font-size: 0.9em;
  color: #aaa;
  margin-bottom: 20px;
  font-style: italic;
}

/* ==================== DESCRIPTION ==================== */
.description_1_1,
.description_1_2 {
  max-width: 850px;
  margin: 0 auto;
  padding: 20px;
  border-radius: 12px;
  line-height: 1.6;
  text-align: justify;
  transition: background 0.4s ease, box-shadow 0.4s ease;
}

/* Version 1 */
.description_1_1 {
  background: rgba(255, 70, 70, 0.07);
  border: 1px solid rgba(255, 70, 70, 0.2);
}

/* Version 2 */
.description_1_2 {
  background: rgba(0, 188, 212, 0.07);
  border: 1px solid rgba(0, 188, 212, 0.2);
}

.description_1_1:hover,
.description_1_2:hover {
  box-shadow: 0 0 15px rgba(255, 255, 255, 0.1);
}

/* ==================== SCROLL INTERNE (si texte long) ==================== */
.description_1_1 p,
.description_1_2 p {
  max-height: 300px;
  overflow-y: auto;
  padding-right: 10px;
}

/* Scroll personnalisé */
.description_1_1 p::-webkit-scrollbar,
.description_1_2 p::-webkit-scrollbar {
  width: 10px;
}
.description_1_1 p::-webkit-scrollbar-thumb,
.description_1_2 p::-webkit-scrollbar-thumb {
  background: linear-gradient(180deg, #ff2e63, #ff9a9e);
  border-radius: 10px;
}
.description_1_1 p::-webkit-scrollbar-track,
.description_1_2 p::-webkit-scrollbar-track {
  background: #1e1e1e;
}

/* ==================== ANIMATION LÉGÈRE ==================== */




</style>