<?php 

echo "<div class='projet-images'>";

for ($i = 0; $i < count($img_projet_src_img); $i++) {

   if ($img_activate[$i] != "") {
       $ext = isset($extention_img[$i]) ? $extention_img[$i] : '';
       $src = "../img_dw/uploads/copy/" . $img_projet_src_img[$i] . '_400px' . $ext;

       echo "<div class='projet-image'>";
       echo "<img src='" . htmlspecialchars($src, ENT_QUOTES) . "' alt='image projet' onclick=\"openLightbox(this.src)\" />";
       echo "</div>";
   }
}

echo "</div>";

// Ajout du conteneur lightbox
echo "
<div id='lightbox' class='lightbox' onclick='closeLightbox()'>
    <span class='close'>&times;</span>
    <img id='lightbox-img' src='' alt='image agrandie'>
</div>
";

?>
<style>
.projet-images {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  justify-content: center;
}

.projet-image {
  width: 49%;
  height: 250px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  border-radius: 6px; /* optionnel */
  background: #f0f0f0; /* optionnel : fond si l’image est plus petite */
}
.projet-imagex{
    width: 20%;
  height: 20%;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  border-radius: 6px; /* optionnel */
  background: #f0f0f0; /* optionnel : fond si l’image est plus petite */
}

.projet-image img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* ✅ carré parfait sans déformation */
  display: block;
  cursor: pointer;
  transition: transform 0.2s;
}

.projet-image img:hover {
  transform: scale(1.05);
}

/* Lightbox */
.lightbox {
  display: none; 
  position: fixed;
  z-index: 9999;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.9);
  justify-content: center;
  align-items: center;
}

.lightbox img {
  max-width: 90%;
  max-height: 90%;
  object-fit: contain;
}

.lightbox .close {
  position: absolute;
  top: 20px; 
  right: 30px;
  color: white;
  font-size: 40px;
  cursor: pointer;
}
</style>

<script>
function openLightbox(src) {
  document.getElementById('lightbox-img').src = src;
  document.getElementById('lightbox').style.display = 'flex';
}

function closeLightbox() {
  document.getElementById('lightbox').style.display = 'none';
}
</script>
