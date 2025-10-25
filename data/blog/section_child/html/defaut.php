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
/* ==================== VARIABLES GLOBALES (THÈME SOMBRE) ==================== */
:root {
  --color-primary: #00bfa5;      /* turquoise sombre */
  --color-secondary: #007bff;    /* bleu profond */
  --color-accent: #d63f72;       /* rose foncé */
  --color-text: #e0e0e0;         /* gris clair lisible */
  --color-text-muted: #999;      /* gris doux */

  --color-bg-light: rgba(30, 30, 30, 0.6);
  --color-border-light: rgba(255, 255, 255, 0.05);

  --font-size-title: 2.2em;
}

/* ==================== TITRES ==================== */
.section_1_1 {
  text-align: center;
  margin-top: 60px;
  margin-bottom: 30px;
}

.section_1_1 h1 {
  font-size: var(--font-size-title);
  color: var(--color-primary);
  text-shadow: 0 0 10px rgba(0, 191, 165, 0.3);
  letter-spacing: 1.2px;
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
}

.projet-imagex img {
  width: 260px;
  height: 180px;
  object-fit: cover;
  cursor: pointer;
  transition: transform 0.4s ease;
}

/* ==================== DATE ==================== */
.date_inscription {
  text-align: center;
  font-size: 0.95em;
  color: var(--color-text-muted);
  margin-bottom: 30px;
  font-style: italic;
}

/* ==================== DESCRIPTION ==================== */
.description_2_1,
.description_2_2 {
  max-width: 900px;
  margin: 0 auto 40px;
  padding: 25px;
  line-height: 1.8;
  text-align: justify;
  border: 1px solid var(--color-border-light);
  color: var(--color-text);
}

/* Variante 1 & 2 couleur */
.description_2_1 {
  border-left: 4px solid var(--color-accent);
}
.description_2_2 {
  border-left: 4px solid var(--color-primary);
}

/* ==================== BOUTON CTA ==================== */
.section_3_1 {
  text-align: center;
  margin: 40px 0;
}

.cta-button {
  display: inline-block;
  padding: 12px 25px;
  font-weight: 600;
  text-decoration: none;
}

.cta-primary {
  color: #0d0d0d;
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
  border: 1px solid var(--color-border-light);
  padding: 10px;
  width: 220px;
  text-align: center;
}

.child_imgs img {
  width: 100%;
  height: 180px;
  object-fit: cover;
}

.child_imgs p {
  text-align: center;
  margin-top: 10px;
  font-weight: 500;
  color: var(--color-text);
  letter-spacing: 0.5px;
}

/* ==================== LIENS ==================== */
.no_decoration {
  text-decoration: none;
  color: var(--color-text);
  transition: color 0.3s ease;
}

.no_decoration:hover {
  color: var(--color-primary);
}
</style>

</style>