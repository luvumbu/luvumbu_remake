<style>
  body {
    font-family: Arial, sans-serif;
    background: #f4f4f4;
    color: #333;
    margin: 0;
  }

  h1 {
    text-align: center;
    color: #444;
  }

 

  .meta {
    font-size: 0.9em;
    color: #777;

  }
</style>

<style>
 
  .display_flex {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    width: 100%;
    margin: auto;
    margin-top: 75px;
  }
 
  .display_flex div {
    max-width: 100%;
  }
  .div_img {
    width: 20%;
    margin: auto;
    margin-top: 45px;
    margin-bottom: 45px;

  }
  .div_img img{
    width: 100%;
  }

  p {
  
    overflow-y: auto;
    /* Scroll vertical uniquement si nécessaire */
  
  
  }
  h2{
    text-align: center;
 
  }


  .article__ {
  max-width: 100%;
  overflow-x: hidden;
  box-sizing: border-box;
}
  p {
  max-width: 100%;
  overflow-x: hidden;
  box-sizing: border-box;
  text-align: justify;
 
  font-size: 1.3em;
  margin: 5px;
  text-align: start;
}
</style>
<div class="display_flex space_bottom">

  <?php
  for ($i = 0; $i < $c_title_projet; $i++) {


    $img_projet_src1_ = '../img_dw/' . $img_projet_src1[$i];

      $id_sha1_projet_ = $id_sha1_projet[$i];
  ?>
    <div class="" id="<?=  $id_sha1_projet_?>">
      <h2><?= $title_projet[$i] ?></h2>

      <div class="div_img">
        <img src="<?= $img_projet_src1_ ?>" alt="" srcset="">

      </div>
      <div class="meta">Publié le <?= formatDateFr($date_inscription_projet[$i]) ?></div>
      <p><?= $description_projet_2[$i] ?></p>


    
    <a  href="<?=  $id_sha1_projet_ ?>">
      <div class="voir_article__">Voir page article__ </div>
    </a>
  

        </div>
  <?php

  }

  ?>



<style>
  .space_bottom{
    margin-bottom: 75px;
  }
</style>

</div>
</div>

