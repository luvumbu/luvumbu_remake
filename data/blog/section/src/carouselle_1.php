 <div class="container">
     <div id="myCarousel" class="my-carousel">
         <div class="carousel-inner">


             <?php 






for ($i=0; $i <count($id_projet_img) ; $i++) { 





$img_user_b_  =  $id_projet_img[$i] ;



                if ($img_user_b_ != "") {
                    if (file_exists('img_dw/'.$img_user_b_)) {
                        $img_user_b_ = '../img_dw/' . $img_user_b_;
              if($img_activate[$i]!=""){
                
                ?>

             <div class="carousel-item active">
                 <img src="<?= $img_user_b_ ?>" alt="" srcset="">

             </div>
             <?php
              }

                      
                ?>



             <?php
                    }
                 
                }
        





 
}

?>
         </div>
         <button class="carousel-control prev">&lt;</button>
         <button class="carousel-control next">&gt;</button>
         <div class="carousel-indicators">
             <span class="active" data-index="0"></span>
             <span data-index="1"></span>
             <span data-index="2"></span>
         </div>
     </div>
 </div>
 