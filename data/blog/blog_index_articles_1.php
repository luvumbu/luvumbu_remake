 <style>
   .color_black {
     color: black;
   }

   .voir_article {
     background-color: black;
     padding: 15px;
     text-align: center;
     color: white;
     width: 300px;
     margin-bottom: 15px;

   }

   .margin_bottom_45 {
     margin-bottom: 45px;
   }

   .width_80p {
     margin: auto;
     width: 80%;
     margin-bottom: 75px;
     margin-top: 45px;
     text-align: justify;

   }
 </style>
 <div class="display_flex color_black margin_bottom_45 width_80p">

   <?php
    for ($i = 0; $i < $c_title_projet; $i++) {


      $img_projet_src1_ = '../img_dw/' . $img_projet_src1[$i];
      $img_projet_src2_ = 'img_dw/' . $img_projet_src1[$i];

      $id_sha1_projet_ = $id_sha1_projet[$i];
      $img_projet_src1_v = $img_projet_src1[$i];










    ?>
     <div class="" id="<?= $id_sha1_projet_ ?>">
       <h2><?= $title_projet[$i] ?></h2>



       <?php


        if ($img_projet_src1_v != "") {




          if (file_exists($img_projet_src2_)) {
        ?>

           <div class="div_img">
             <img src="<?= $img_projet_src1_ ?>" alt="" srcset="">

           </div>
         <?php
          }
          ?>



       <?php
        }

        ?>
       <div class="meta">Publié le <?= formatDateFr($date_inscription_projet[$i]) ?></div>
       <p><?php



          //  echo  $description_projet[$i] ; 





          if ($description_projet_toggle[$i] == "1") {
            //   echo $description_projet_toggle[$i] ; 
            $description_projet[$i] =  htmlspecialchars($description_projet[$i], ENT_QUOTES, 'UTF-8');
          }



          if($i>0){
?>
       <div class="description-limitee space_width">
         <?php echo $description_projet[$i]; ?>
       </div>
       <div class="points">
         <?php echo "..."?>

       </div>
<?php 
          }
          else{
            ?>
       <div class="space_width">
         <?php echo $description_projet[$i]; ?>
       </div>
       <div>
     

       </div>
<?php 
          }
          ?>


       <?php




        ?></p>




       <?php


        if ($i != 0) {
        ?>

         <a href="<?= $id_sha1_projet_ ?>">
           <div class="voir_article">Voir page article complet</div>
         </a>
       <?php
        }


        ?>


     </div>
   <?php

    }

    ?>




   <style>
     .div_img {
       width: 50%;
       margin: auto;
     }

     .div_img img {

       width: 100%;
       margin-bottom: 40px;
       margin-top: 40px;


     }
     .points{
      font-size: 2em;
      color: grey;
     }


     .description-limitee {
  max-height: 200px; /* tu choisis la hauteur */
  overflow: hidden;
}
.space_width {
  max-width: 100vw;       /* Jamais plus large que la largeur visible de l'écran */
  width: auto;            /* Largeur naturelle, sauf en petit écran */
  overflow-x: hidden;     /* Masque tout débordement horizontal */
  box-sizing: border-box; /* Inclut padding/border dans la largeur */
}

@media screen and (max-width: 800px) {
  .space_width {
    width: 100%;          /* Prend toute la largeur de l’écran en responsive */
  }

     .width_80p {
     margin: auto;
     width: 100%;
     margin-bottom: 75px;
     margin-top: 45px;
     text-align: justify;

   }
}

   </style>




 </div>
 </div>

 <?php 

