 
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

<style>
.projets {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    max-width: 1000px;
    margin: 20px auto;
    padding: 0 10px;
    margin-top: 175px;
    margin-bottom: 175px;

}
.projets_{
    text-align: center;
    font-size: 2em;

}

.projet {
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 10px;
    text-align: center;
    background-color: #fafafa;
}

.projet img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 6px;
    margin-bottom: 8px;
}

.projet h3 {
    margin: 8px 0 4px;
    font-size: 1.1rem;
}

.projet p {
    margin: 0;
    font-size: 0.9rem;
    color: #555;
}
</style>