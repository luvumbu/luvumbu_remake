 




 <?php 
 



 



$images  = [] ; 
for ($i=0; $i < count($row_projet_img); $i++) {

    $images["../img_dw/" . $row_projet_img[$i]["id_projet_img"]] = $title_projet_1[0];
}



require_once "a1_slider.php" ; 

for ($i=0; $i < count($row_projet_img); $i++) { 
?>
<div class="petit_img">
<img src="<?= '../img_dw/'.$row_projet_img[$i] ?>" alt="" srcset="">

</div>
<?php
}
 ?>

 <style>
  .petit_img img{
    max-width: 100px;
  }
 </style>
 <div class="display_flex color_black margin_bottom_45 width_80p">
   <?php
    $qr_code = "../qr_code_1/temp/" . $url_ . ".png";
    ?>
   <div class="qr_code_center">
     <img src="<?= $qr_code ?>" alt="" srcset="">
   </div>
   <?php
    for ($i = 0; $i < $c_title_projet; $i++) {

      $img_projet_src1_ = '../img_dw/' . $img_projet_src1[$i];
      $img_projet_src2_ = 'img_dw/' . $img_projet_src1[$i];
      $id_sha1_projet_ = $id_sha1_projet[$i];
      $img_projet_src1_v = $img_projet_src1[$i];
      

if($title_projet_toggle[$i]==""){
  $title_projet_x = $title_projet_1[$i] ;
}
else{
  $title_projet_x = $title_projet_2[$i] ;

}
    ?>
     <div>
       <h2><?=  $title_projet_x  ?></h2>



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





              if (!file_exists($row_projet_img___)) {
                $row_projet_img_  = "../src/img/lumumba.jpg";
              }







          ?>

       <div class="div_img">
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
       ...
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

 <style>
  .qr_code_center{
  
    padding: 25px;
    text-align: center;
  }
 </style>

 <?php
