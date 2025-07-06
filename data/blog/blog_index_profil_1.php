<?php










echo "<div class='all_logo'> ";
for ($ii = 0; $ii < count($all_profil_user)-1; $ii++) {


    $img_ = '../img_dw/' . $all_profil_user[$ii]["img_user"];

    $link_ =  AsciiConverter::asciiToString($all_profil_user[$ii]["prenom_user"]) ;


 
 

?>


    <a href="<?=   $link_ ?>">
        <div class="logo_img">
            <img src="<?= $img_ ?>" alt="" srcset="">
            <div class="text_logo">

                <?= AsciiConverter::asciiToString($all_profil_user[$ii]["title_user"]) ?>
            </div>
        </div>
    </a>
<?php
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

    }

    .text_logo {
        padding: 10px;
        margin-top: 15px;
    }
</style>