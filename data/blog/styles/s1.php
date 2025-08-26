<section class="galactic-net color_white">
  <h2><?= replace_element_2($title_projet[0]) ?></h2>
</section>



<style>
.galactic-net {
  text-shadow: 1px 1px 4px black;
  color: white;
  margin: 0;
  padding: 1px;
  position: relative;
  min-height: 300px; /* hauteur minimale */
  font-size: 1.5em;

  /* ✅ responsive */
  background-size: cover; 
  background-position: center;
  background-repeat: no-repeat;
  background-position: 0 -100px ;
}

<?php 
if ($img_projet_src1[0] != "") {
?>
  .galactic-net {
    background-image: url("<?= '../img_dw/'.$img_projet_src1[0] ?>");
  }
<?php 
}
?>

.galactic-net h2 {
  bottom: 10px;
  position: absolute;
  left: 10px; /* pour éviter que le texte colle au bord */
}
</style>
