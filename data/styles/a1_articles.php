<?php



$row_projet_count = count($row_projet);


$row_projet_parent = $row_projet;

for ($i = 0; $i < count($row_projet_parent); $i++) {





 




 
    if ($row_projet_parent[$i]["visibility_1_projet"] == "1") {
        if ($title_projet_toggle[$i] == "") {
            $title_projet_1_class = "title_projet_1_class_off";
            echo '<div class="' . $title_projet_1_class . '">' . $title_projet_1[$i] . '</div>';
        } else {
            $title_projet_1_class = "title_projet_1_class_on";
            echo '<div class="' . $title_projet_1_class . '">' . $title_projet_2[$i] . '</div>';
        }


        $baseDate = $date_inscription_projet[$i];
        $clock = new FrenchClock($baseDate);




        if ($img_projet_src1[$i] != "") {
?>

            <div class="article_img_dw">
                <img src="<?= '../img_dw/' . $img_projet_src1[$i] ?>" alt="" srcset="">
            </div>

<?php
        }



        echo '<div class="date_inscription_projet">Publié : '  . $clock->formatNowFrench() . '</div>';



        if ($description_projet_toggle[$i] == "") {
            $description_projet_class = "description_projet_class_on";
        } else {
            $description_projet_class = "description_projet_class_off";
        }
        echo '<div class="description_projet ' . $description_projet_class . '">' . $description_projet_1[$i] . '</div>';
        echo '<br/>';
    }

 
 
}










?>
<style>
    .article_img_dw {
        text-align: center;
        margin-top: 15px;
        margin-bottom: 45px;
        width: 60%;
        margin: auto;

    }

    @media only screen and (max-width: 600px) {
        .article_img_dw {

            width: 100%;
            margin: auto;

        }
    }

    .article_img_dw img {
        max-width: 100%;
    }

    .title_projet_1_class_on {
        font-size: 1.5em;
        color: #333;
        margin-bottom: 10px;
        text-align: center;
        margin-top: 55px;
        padding: 20px;
    }

    .date_inscription_projet {
        color: rgba(169, 169, 169, 0.8);
        padding: 55px;
    }

    .date_inscription_projet,
    .title_projet_1_class_off {
        width: 90%;
        margin: auto;


    }

    .title_projet_1_class_off {


        margin-bottom: 55px;
        margin-top: 55px;
    }

    .description_projet_class_on {


        width: 90%;
        margin: auto;

    }

    .description_projet_class_off {}



    .description_projet {
        font-size: 1em;
        color: #666;
        margin-bottom: 15px;
        text-align: justify;
        width: 90%;
        margin: auto;
    }
</style>