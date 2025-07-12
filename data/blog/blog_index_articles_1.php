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


 <style>
   .row_projet_img {
     display: flex;
     justify-content: space-around;
     flex-wrap: wrap;
     margin-top: 75px;
     margin-bottom: 75px;

   }

   .row_projet_img img {
     width: 200px;
   }

   .display_flex__ {
     display: flex;
   }

   .div_img {
     width: 50%;
     margin: auto;
   }

   .div_img img {

     width: 100%;
     margin-bottom: 40px;
     margin-top: 40px;


   }

   .points {
     font-size: 2em;
     color: grey;
     transition: 0.2s all;

   }

   .points:hover {
     font-size: 2em;
     cursor: pointer;
     background-color: black;
     color: white;
     transition: 1s all;
   }


   .description-limitee {
     max-height: 200px;
     /* tu choisis la hauteur */
     overflow: hidden;
   }

   .space_width {
     max-width: 100vw;
     /* Jamais plus large que la largeur visible de l'écran */
     width: auto;
     /* Largeur naturelle, sauf en petit écran */
     overflow-x: hidden;
     /* Masque tout débordement horizontal */
     box-sizing: border-box;
     /* Inclut padding/border dans la largeur */
   }

   @media screen and (max-width: 800px) {
     .space_width {
       width: 100%;
       /* Prend toute la largeur de l’écran en responsive */
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
 <div class="display_flex color_black margin_bottom_45 width_80p">

   <?php









    for ($i = 0; $i < $c_title_projet; $i++) {


      $img_projet_src1_ = '../img_dw/' . $img_projet_src1[$i];
      $img_projet_src2_ = 'img_dw/' . $img_projet_src1[$i];

      $id_sha1_projet_ = $id_sha1_projet[$i];
      $img_projet_src1_v = $img_projet_src1[$i];










    ?>
     <div>
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






          $filename  = "all_projet_img/" . $id_sha1_projet_ . ".php";
















          if (file_exists($filename)) {


            require $filename;




            echo "<div class='row_projet_img'>";

            for ($i_x = 0; $i_x < count($row_projet_img); $i_x++) {
              //  var_dump($row_projet_img[$i_x]);

              $row_projet_img_ =     "../img_dw/" . $row_projet_img[$i_x]["id_projet_img"];
               $row_projet_img___ =     "img_dw/" . $row_projet_img[$i_x]["id_projet_img"];



               

              if (!file_exists($row_projet_img___ )) {
              $row_projet_img_  = "../src/img/lumumba.jpg";
           

      

 
 
              }







          ?>

       <div>
         <img src="<?= $row_projet_img_ ?>" alt="" srcset="">
       </div>
     <?php
            }

            echo "</div>";
          }

          if ($i > 0) {
      ?>
     <div class="description-limitee space_width" id="<?= $id_sha1_projet_ ?>">
       <?php echo $description_projet[$i]; ?>
     </div>
     <div class="points" onclick="description(this)" title="<?= $id_sha1_projet_ ?>">
       <?php echo "..." ?>

     </div>
   <?php
          } else {
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




   <script>
     function description(_this) {
       var des = document.getElementById(_this.title).className;


       if (des == "description-limitee space_width") {
         document.getElementById(_this.title).className = "";
       } else {
         document.getElementById(_this.title).className = "description-limitee space_width";

       }
     }
   </script>


 </div>
 </div>

 <?php
