<?php


echo "<div class='div_images_ok' id='div_images_ok'> ";
for ($i = 0; $i < count($blog_all_images); $i++) {

?>

  <div class="div_">
    <img src="<?= $blog_all_images[$i] ?>" alt="" srcset="">
  </div>


<?php

}

echo "</div>";

?>

<style>

  .div_images_ok{
    display: flex;
    justify-content: space-around;
    margin-top: 75px;
    margin-bottom: 75px;
    flex-wrap: wrap;
  }
  .div_ {
    margin-right: 15px;
    width: 350px;
    height: 350px;
    margin-bottom: 25px;
    overflow: hidden;
    /* cache ce qui dépasse */
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .div_ img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 9px;
    /* adapte sans déformation, mais coupe si besoin */
  }
</style>






<script>
  const myTimeout = setTimeout(xxxx, 1000);

  function xxxx() {
    let original = document.getElementById("div_images_ok");
    let copy = document.getElementById("blog_all_images_js_copy");

    // Clone complet de l’élément original
    let clone = original.cloneNode(true);

    // Remplacer le contenu de la copie par celui du clone
    copy.innerHTML = clone.innerHTML;

    // Copier aussi les styles et classes
    copy.className = original.className;
    copy.style.cssText = original.style.cssText;

    console.log("Copie effectuée !");
  }
</script>