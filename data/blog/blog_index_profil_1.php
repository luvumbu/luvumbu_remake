<?php



 

  
echo "<div class='all_logo'> ";
for ($ii = 0; $ii < count($all_profil_user); $ii++) {



 


    if($id_sha1_user_projet!=$all_profil_user[$ii]["id_parent_user"]){
 

    

 



 


    if($all_profil_user[$ii]["img_user"]!=''){
    $img_ = '../img_dw/' . $all_profil_user[$ii]["img_user"];
           
    }
    else{
    $img_ = 'https://i.pinimg.com/736x/be/27/d1/be27d1148026157159d67b7e0ecb17e5.jpg';

    }

    $link_ =  AsciiConverter::asciiToString($all_profil_user[$ii]["prenom_user"]) ;

    $alt_ =  AsciiConverter::asciiToString($all_profil_user[$ii]["description_user"]) ;



 

?>


    <a href="<?=   $link_ ?>">
        <div class="logo_img">
            <img src="<?= $img_ ?>" alt="<?=  $alt_ ?>" srcset=""  >
            <div class="text_logo">

                <?= AsciiConverter::asciiToString($all_profil_user[$ii]["title_user"]) ?>
            </div>
        </div>
    </a>
<?php
    }

}
echo "</div> ";


?>


<style>
    .logo_img {
        width: 300px;
        text-align: center;
        padding: 10px;

    }

    .logo_img img {
        width: 50px;
        text-align: center;

    }

    .all_logo {
        display: flex;
        justify-content: space-around;
        margin-bottom: 100px;
        text-align: center;
        flex-wrap: wrap;

    }

    .text_logo {
        padding: 10px;
        margin-top: 15px;
    }
</style>