
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
  /* ===================== STYLE MODERNE ÉPURÉ ===================== */

/* Section principale */




/* Image d'en-tête */
#img_projet_src1_0 {
  height: 240px;
  background-size: cover;
  background-position: center;

  position: relative;
  overflow: hidden;
}

#img_projet_src1_0::after {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.6));
}

/* Titre principal */
.title_1_1 {
  position: absolute;
  bottom: 20px;
  left: 20px;
  z-index: 2;
}

.title_1_1 h1 {
  margin: 0;
  font-size: 2.2rem;
  font-weight: 700;
  color: #ffffff;
  letter-spacing: 1px;
  text-shadow: 0 2px 6px rgba(0, 0, 0, 0.5);
}

/* Date d’inscription */
.date_inscription {
  margin-top: 15px;
  font-size: 0.9rem;
  color: #666;
  text-align: right;
  font-style: italic;
}

/* Description */
.description_1_2 {
  margin-top: 20px;
  font-size: 1rem;
  line-height: 1.7;
  color: #333;

  padding: 15px 20px;
  border-radius: 10px;
  backdrop-filter: blur(6px);
  text-align: justify;
  width: 90%;
  margin: auto;
}

.description_1_2 strong {
  color: #111;
  font-weight: 700;
}

/* ===================== Responsive ===================== */
@media (max-width: 768px) {
  .section_1 {
    width: 95%;
    padding: 15px;
  }

  #img_projet_src1_0 {
    height: 180px;
  }

  .title_1_1 h1 {
    font-size: 1.6rem;
  }

  .description_1_2 {
    font-size: 0.95rem;
  }
}

</style>
 <style>

  #img_projet_src1_0 {
    width: 100%;
    height: 600px;
    background-image: url('<?= $img_projet_src1_00 ?>');
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    font-size: 2em;
    font-weight: bold;
    background-attachment: fixed;
  }


  
 </style>