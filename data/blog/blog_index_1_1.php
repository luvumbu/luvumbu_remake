<div class="projets">




    <?php
 
for ($ii=0; $ii < count($title_projetx); $ii++) { 
 
 


if($visibility_1_projetx[$ii]!=""){

//<img src="<?= '../img_dw/'.$img_projet_src1x[$ii] 
    ?>
<a href="<?=$id_sha1_projetx[$ii] ?>">
    <div class="projet">
        
    <?php 

if($id_sha1_projet_lockx[$ii]!=""){
 ?>
    <img src="<?= '../img_dw/'.$img_projet_src1x[$ii] ?>">
<?php
}
else{
   echo ' <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Padlock-gold.svg/1024px-Padlock-gold.svg.png"  >';
 
}

?>
    
        <h3><?= replace_element_2(AsciiConverter::asciiToString($title_projetx[$ii])) ?></h3>
   
    </div>
</a>

    <?php 
    }
}
?>
</div>