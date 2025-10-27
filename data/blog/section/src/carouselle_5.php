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
