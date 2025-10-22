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
  /* ==================== CARROUSEL ==================== */
.projet-images {
  position: relative;
  display: flex;
  overflow-x: auto;
  scroll-behavior: smooth;
  gap: 15px;
  padding: 20px;
  margin: 20px auto;
  max-width: 900px;
  border-radius: 15px;
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.1);
}

/* Cache la scrollbar sur la plupart des navigateurs */
.projet-images::-webkit-scrollbar {
  height: 8px;
}
.projet-images::-webkit-scrollbar-thumb {
  background: linear-gradient(90deg, #ff4747, #ff9a9e);
  border-radius: 10px;
}

/* Chaque image */
.projet-image {
  flex: 0 0 auto;
  position: relative;
}

.projet-image img {
  height: 200px;
  width: auto;
  border-radius: 15px;
  box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
  transition: transform 0.4s ease, box-shadow 0.4s ease;
  cursor: pointer;
}

.projet-image img:hover {
  transform: scale(1.05);
  box-shadow: 0 0 15px rgba(255, 70, 70, 0.3);
}

/* ==================== BOUTONS DU CARROUSEL ==================== */
.carousel-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(10, 10, 10, 0.7);
  border: 1px solid rgba(255, 255, 255, 0.2);
  color: white;
  font-size: 25px;
  padding: 10px 15px;
  border-radius: 50%;
  cursor: pointer;
  transition: background 0.3s ease;
  z-index: 10;
  user-select: none;
}

.carousel-btn:hover {
  background: rgba(255, 70, 70, 0.8);
}

.carousel-btn.left {
  left: -20px;
}

.carousel-btn.right {
  right: -20px;
}

/* ==================== LIGHTBOX ==================== */
.lightbox {
  display: none;
  position: fixed;
  z-index: 9999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.9);
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.lightbox img {
  max-width: 90%;
  max-height: 80%;
  border-radius: 10px;
  box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
}

.lightbox .close {
  position: absolute;
  top: 20px;
  right: 40px;
  color: white;
  font-size: 35px;
  cursor: pointer;
  transition: 0.3s;
}

.lightbox .close:hover {
  color: #ff4747;
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
