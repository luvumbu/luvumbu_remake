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


<script>
function openLightbox(src) {
  document.getElementById('lightbox-img').src = src;
  document.getElementById('lightbox').style.display = 'flex';
}

function closeLightbox() {
  document.getElementById('lightbox').style.display = 'none';
}
</script>
