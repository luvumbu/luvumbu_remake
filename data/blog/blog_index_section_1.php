
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

<div class="img_dw">
<img src="../img_dw/<?= $img_projet_src1[0] ?>" alt="" srcset="">

</div>
<?php

 


 
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

?>
 
<style>
    .date_inscription{
        color: gray;
        margin-top:45px;
    }
 .title_1_1{
text-align: center;
 }
.img_dw {

 
  height: 250px; /* Hauteur fixe */
  overflow: hidden; /* Cache ce qui dépasse */
}
.section_1{
  width: 80%;
  margin: auto;
 
}
.title_1 h1 {
padding: 20px;
 
}

.img_dw img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Garde le ratio sans déformation */
  margin-bottom: 1450x;
}

 
 .description_1_1{
text-align: justify;
 }





 /* --- RESPONSIVE --- */
@media (max-width: 768px) {
  /* Navigation mobile */
 .title_1{
  width: 95%;
  margin: auto;
 
}
 
}

</style>