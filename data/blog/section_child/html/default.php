<?php
for ($i = 0; $i < count($title_projet_a); $i++) {

     $title_projet_a_1 =     replace_element_1(AsciiConverter::asciiToString($title_projet_a[$i]))  ;
     $title_projet_a_2 =     replace_element_2(AsciiConverter::asciiToString($title_projet_a[$i]))  ;
     $description_projet_a_1 =     replace_element_1(AsciiConverter::asciiToString($description_projet_a[$i]))  ;
     $description_projet_a_2 =     replace_element_2(AsciiConverter::asciiToString($description_projet_a[$i]))  ;
            echo '<div id="' . $id_sha1_projet_a[$i] . '"';
            echo '</div>';
            if($title_projet_toggle_a[$i]!=""){
            echo '<div class="section_1_1">';
            echo "<h1>";
                     echo  $title_projet_a_1;
            echo '</h1>';
            echo '</div>';
            }
            else{
            echo '<div class="section_1_1">';
            echo "<h1>";
                     echo  $title_projet_a_2;
            echo '</h1>';
            echo '</div>';

         

$req_sql = 'SELECT * FROM `projet` WHERE `id_sha1_parent_projet`="'.$id_sha1_projet_a[$i].'" ';
$db = new DatabaseHandler($dbname, $username);
// Appel de la fonction
$result = $db->know_variables_name("projet", "x", $req_sql);
$req_sql = 'SELECT * FROM `projet_img` WHERE `id_sha1_projet_img`="'.$id_sha1_projet_a[$i].'" ';
$db = new DatabaseHandler($dbname, $username);
// Appel de la fonction
$result = $db->know_variables_name("projet_img", "x", $req_sql);




}

echo "<div class='projet-images'>";

for ($ii = 0; $ii < count($id_projet_imgx); $ii++) {
 
   if ($img_activatex[$ii] != "") {
       $ext = isset($extention_imgx[$ii]) ? $extention_imgx[$ii] : '';
       $src = "../img_dw/uploads/copy/" . $img_projet_src_imgx[$ii] . '_400px' . $ext;

       echo "<div class='projet-imagex'>";
       echo "<img src='" . htmlspecialchars($src, ENT_QUOTES) . "' alt='image projet' onclick=\"openLightbox(this.src)\" />";
       echo "</div>";
   }
}

 
echo "</div>";
echo '<div class="date_inscription">' ; 
echo format_date_europeenne($date_inscription_projet_a[$i]) ;
echo '</div>' ; 

if($description_projet_toggle_a[$i]!=""){
echo '<div class="description_1_2">';
echo "<p>";
echo  $description_projet_a_1;
echo '</p>';
echo '</div>';
}
else{
echo '<div class="description_1_2">';
echo "<p>";
echo $description_projet_a_2;
echo '</p>';
echo '</div>';
}
 
$description_projet_boucle = $description_projet ; 
 $nombre_0 = $i;
 
 
if($id_sha1_projet_song_a[$i]!=""){
  require "data/blog/blog_index_1_1_audio_1.php" ; 
}
$img_user_b_ = $img_projet_src1_a[$i];
?>
<div class="section_3_1">
    <a href="<?= $id_sha1_projet_a[$i] ?>" class="cta-button cta-primary">Voir page compléte</a>
</div>
<div class="child_imgs_all"> 
<?php

?>
</div>
<?php 

}     


 

 
?>
 



 



 