<div class="nav_flex" >
  <div class="padding_10">
    Mon titre
  </div>
  
    <div class="nav_flex2"  >
      <?php
      $c_title_projet = count($title_projet);
      for ($i = 0; $i < $c_title_projet; $i++) {
        $id_sha1_projet_ = '#' . $id_sha1_projet[$i];
      ?>
        <a class="decoration_none" href="<?= $id_sha1_projet_ ?>">
          <div class="padding_10">
            <?= replace_element_2($title_projet[$i]) ?>
          </div>
        </a>
      <?php } ?>
    </div>
 
</div>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
 <style>
  .nav_flex{
    display: flex;
    justify-content: space-around;
 

  }
 
  .nav_flex2{
    display: flex;
    justify-content: space-around;
    width: 30%;
  }
  .nav_flex2 a {
    color: black;
    text-decoration: none;
  }
  .padding_10{
    padding: 15px;
  }

  
body {
  font-family: "Montserrat", sans-serif;
  font-optical-sizing: auto;
 
  font-style: normal;
}
 

 
 
 </style>