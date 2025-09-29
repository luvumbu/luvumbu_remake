<?php
      for ($i = 0; $i < count($title_projet_a); $i++) {
     $title_projet_a_1 =     replace_element_1(AsciiConverter::asciiToString($title_projet_a[$i]))  ;
     $title_projet_a_2 =     replace_element_2(AsciiConverter::asciiToString($title_projet_a[$i]))  ;
     $description_projet_a_1 =     replace_element_1(AsciiConverter::asciiToString($description_projet_a[$i]))  ;
     $description_projet_a_2 =     replace_element_2(AsciiConverter::asciiToString($description_projet_a[$i]))  ;
echo '<div id="' . $id_sha1_projet_a[$i] . '"';
echo '</div>';
if($title_projet_toggle_a[$i]!=""){
echo '<div class="section_1_1">';
echo "<h1>";
echo  $title_projet_a_1;
echo '</h1>';
echo '</div>';
}
else{
echo '<div class="section_1_1">';
echo "<h1>";

echo  $title_projet_a_2;
echo '</h1>';
echo '</div>';
}

 



            if ($img_user_b_ != "") {
                if (file_exists('img_dw/' . $img_user_b_)) {
                    $img_user_b_ = '../img_dw/' . $img_user_b_;
                ?>

 


        
                    <div class="img_dw">
    <img src="<?= $img_user_b_ ?>" alt="" srcset="">

    <?php 



//echo  format_date_europeenne($date_inscription_projet_a[$i]) ;
?>
</div>
</div>
        <?php
                }
            }




echo '<div class="date_inscription">' ; 
echo format_date_europeenne($date_inscription_projet_a[$i]) ;
echo '</div>' ; 




if($description_projet_toggle_a[$i]!=""){
?>

    <?php
echo '<div class="description_2_1">';
echo "<p>";

echo  $description_projet_a_1;
echo '</p>';
echo '</div>';

?>

    <?php
}
else{
echo '<div class="description_2_2">';
echo "<p>";
echo $description_projet_a_2;
echo '</p>';
echo '</div>';

}


 






            $img_user_b_ = $img_projet_src1_a[$i];




            ?>
<div class="section_3_1">
        <a href="<?= $id_sha1_projet_a[$i] ?>" class="cta-button cta-primary">Voir page compléte</a>
</div>
        <?php



        }


        ?>

 