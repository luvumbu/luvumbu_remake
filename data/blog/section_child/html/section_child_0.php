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
echo '<div class="description_2_1">';
echo "<p>";
echo  $description_projet_a_1;
echo '</p>';
echo '</div>';
}
else{
echo '<div class="description_2_2">';
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
for ($yy=0; $yy < count($id_sha1_projetx); $yy++) { 
$chemin = $img_projet_src1x[$yy];
$extension = pathinfo($chemin, PATHINFO_EXTENSION);
$imgx = '../img_dw/'.str_replace(".".$extension,"",$img_projet_src1x[$yy]).'_400px.' . $extension;
$imgx = str_replace("uploads/","uploads/copy/",$imgx);
?>
<a href="<?= $id_sha1_projetx[$yy]?>" class="no_decoration">
<div class="child_imgs">
<?php 
if(strlen($imgx)>20){
?>
<img src="<?= $imgx?>" alt="" srcset="">
<?php 
}
else{
  ?>
<img src="https://cdn.pixabay.com/animation/2022/11/16/14/56/14-56-49-778_512.gif" alt="" srcset="">
<?php 
}
?>
<p>
  <?=
$resultat = substr(replace_element_2(AsciiConverter::asciiToString($title_projetx[$yy])), 0, 5); // 0 = début, 5 = longueur
echo $resultat;
  ?>
</p>
</div>
</a>
<?php 
}
?>
</div>
<?php 
 require_once "data/blog/blog_index_1_1.php"; 
}        ?>

<style>
.section_1_1 {
  text-align: center;
  margin-top: 60px;
  margin-bottom: 30px;
}
.section_1_1 h1 {
  font-size: 2.2em;
  color: #00ffd0;
  text-shadow: 0 0 10px rgba(0, 255, 200, 0.4);
  letter-spacing: 1.2px;

}

.section_1_1 h1:hover {
  transform: scale(1.04);
   
}

/* ==================== IMAGES DU PROJET ==================== */
.projet-images {
  display: flex;
  justify-content: center;
  gap: 15px;
  flex-wrap: wrap;
  margin: 20px auto 40px;
  max-width: 1000px;
}

.projet-imagex {
  position: relative;
  overflow: hidden;
  border-radius: 15px;

}

.projet-imagex img {
  width: 260px;
  height: 180px;
  object-fit: cover;
  border-radius: 15px;
  cursor: pointer;
  transition: transform 0.4s ease;
}

.projet-imagex:hover {
 
  box-shadow: 0 0 20px rgba(0, 255, 200, 0.3);
}

.projet-imagex img:hover {
  
}

/* ==================== DATE ==================== */
.date_inscription {
  text-align: center;
  font-size: 0.95em;
  color: #ccc;
  margin-bottom: 30px;
  font-style: italic;
}

/* ==================== DESCRIPTION ==================== */
.description_2_1,
.description_2_2 {
  max-width: 900px;
  margin: 0 auto 40px;
  padding: 25px;
  border-radius: 15px;
  line-height: 1.8;
  text-align: justify;
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);

}

.description_2_1:hover,
.description_2_2:hover {
  box-shadow: 0 0 25px rgba(0, 255, 200, 0.15);
 
}

/* Variante 1 & 2 couleur */
.description_2_1 {
  border-left: 4px solid #ff4f8b;
}
.description_2_2 {
  border-left: 4px solid #00ffd0;
}

/* ==================== BOUTON CTA ==================== */
.section_3_1 {
  text-align: center;
  margin: 40px 0;
}

.cta-button {
  display: inline-block;
  padding: 12px 25px;
  border-radius: 8px;
  font-weight: 600;
  text-decoration: none;
  transition: background 0.4s ease, transform 0.3s ease, box-shadow 0.3s ease;
}

.cta-primary {
  background: linear-gradient(135deg, #00ffd0, #00aaff);
  color: #0d0d0d;
  box-shadow: 0 0 10px rgba(0, 255, 200, 0.4);
}

.cta-primary:hover {
  background: linear-gradient(135deg, #00aaff, #00ffd0);
 
 
}

/* ==================== IMAGES ENFANTS (SOUS-PROJETS) ==================== */
.child_imgs_all {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 25px;
  margin: 80px auto;
  max-width: 1200px;
}

.child_imgs {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 15px;
  padding: 10px;
  width: 220px;

  text-align: center;
}

.child_imgs:hover {
 
  box-shadow: 0 0 15px rgba(0, 255, 200, 0.2);
}

.child_imgs img {
  width: 100%;
  height: 180px;
  object-fit: cover;
  border-radius: 12px;

}

.child_imgs img:hover {
 
}

.child_imgs p {
  text-align: center;
  margin-top: 10px;
  font-weight: 500;
  color: #f5f5f5;
  letter-spacing: 0.5px;
}

/* ==================== LIENS ==================== */
.no_decoration {
  text-decoration: none;
  color: #fff;
  transition: color 0.3s ease;
}

.no_decoration:hover {
  color: #00ffd0;
}





</style>