     <section class="about" id="Apropos">
         <h2 class="section-title wtop">À propos</h2>
         <div class="text_continent">

             <?php
                $img_user_b_ = 'img_dw/' . $img_user_c[0];
                if ($img_user_b_ != "") {
                    if (file_exists($img_user_b_)) {
                        $img_user_b_ = '../' . $img_user_b_;
                ?>



             <div class="img_dw2">
                 <img src="<?= $img_user_b_ ?>" alt="" srcset="">
             </div>
             <?php
                    }
                }
                ?>
         </div>
         <div>
             <p class="date_inscription">
                 <?= replace_element_2(AsciiConverter::asciiToString($description_user_c[0])); ?>
                 <?= ' ' . replace_element_2(AsciiConverter::asciiToString($title_user_c[0])); ?></p>
             <div class="about-text"></div>
             <div class="text_continent_p1">
                 <p><?= replace_element_2(AsciiConverter::asciiToString($info_user_1_c[0])); ?>
                 <p><?= replace_element_2(AsciiConverter::asciiToString($info_user_2_c[0])); ?>
                 <p><?= replace_element_2(AsciiConverter::asciiToString($info_user_3_c[0])); ?>
             </div>
         </div>
         </div>

     </section>
