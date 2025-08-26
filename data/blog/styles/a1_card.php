 <div class="cards_container">


   <?php


    for ($i = 1; $i < count($row_projet); $i++) {

 
    ?>

     <div class="card" >

       <?php
        if ($row_projet[$i]["img_projet_src1"] == "") {
          echo '<img src="https://picsum.photos/300/180" alt="Image aléatoire">';
        } else {
          echo '<img src="../img_dw/' . $row_projet[$i]["img_projet_src1"] . '" alt="Image aléatoire">';
        }


        $title_projet__child = replace_element_2(AsciiConverter::asciiToString($row_projet[$i]["title_projet"]));
        $description_projet__child = replace_element_2(AsciiConverter::asciiToString($row_projet[$i]["description_projet"]));


        ?>
       <div class="card-content">
         <h3><?= $i ?><?= $title_projet__child ?></h3>

         <p class="card_text_max_100_height">

           <?=

            $description_projet__child
            ?>

         </p>
         <p>...</p>

         <a href="<?= $row_projet[$i]["id_sha1_projet"] ?>">Voir page</a>
       </div>
     </div>
   <?php

    }

    ?>
 </div>



 <style>
   .cards_container {
     display: flex;
     justify-content: space-around;
     flex-wrap: wrap;
     margin-top: 100px;
   }

   .card_text_max_100_height {
     color: #666;
     font-size: 14px;
     margin: 10px 0;
     max-height: 100px;
     /* limite la hauteur */
     overflow: hidden;
     /* coupe le texte qui dépasse */
     text-align: justify;

   }
 </style>