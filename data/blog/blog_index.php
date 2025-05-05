<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Coral+Pixels&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <?php
    if ($img_projet_src1[0] != "") {
    ?>
        <link rel="icon" type="image/x-icon" href="<?= '../img_dw/' . $img_projet_src1[0] ?>">
    <?php
    }
    ?>
    <title><?= $google_title_projet_2[0] ?></title>
</head>

<body onmousemove="showCoords(event)">
    <?php


    if ($id_sha1_parent_projet[0] != "") {


      
    ?>




        <a href="<?= $id_sha1_parent_projet[0] ?>">
            <div class="exit">
                <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/fire-exit.png" alt="fire-exit" />
            </div>
        </a>
    <?php
    }
    ?>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><?= $google_title_projet_2[0] ?></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <?php
                    for ($i_ = 0; $i_ < count($title_projet_2); $i_++) {
                        if ($i_ == 0) {                    ?>
                            <li class="active"><a href="#<?= $id_sha1_projet[$i_] ?>"> <?= $title_projet_2[$i_] ?></a></li>
                        <?php
                        } else {
                        ?>
                            <li><a href="#<?= $id_sha1_projet[$i_] ?>"> <?= $title_projet_2[$i_] ?></a></li>
                    <?php
                        }
                    }
                    ?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../view/inscrption.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="../index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
    require_once "data/blog/blog_visite.php";
    ?>
    <div class="down" onclick="window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });">
        <img width="40" height="40" src="https://img.icons8.com/ios/40/circled-chevron-down.png"
            alt="circled-chevron-down" />
    </div>
    <div class="up" onclick="window.scrollTo({ top: 0, behavior: 'smooth' });">
        <img width="40" height="40" src="https://img.icons8.com/ios/40/circled-chevron-up.png"
            alt="circled-chevron-up" />
    </div>
    <?php
    echo "<div class='blog_index_general'>";
    for ($i = 0; $i < count($description_projet); $i++) {
        if ($i == 0) {
            echo '<div class="blog_index_header_h1 g_title_projet_2">';
            if ($title_projet_toggle[$i] == "1") {
    ?>
                <div class="blog_index_child_h1 g_title_projet_2">
                    <b>
                        <?= $title_projet_2[$i] ?>
                    </b>
                </div>
            <?php
            } else {
            ?>
                <div class="blog_index_child_h1 g_title_projet_2">
                    <b>
                        <?= $title_projet_1[$i] ?>
                    </b>
                </div>
            <?php
            }
            ?>
            </div>
            <?php
            if ($img_projet_src1[$i] != "") {
                //  require_once "all_projet_img/" . $url_ . '.php';
            ?>
                <div class="slider-container">
                    <div class="slider-track">
                        <?php
                        if (count($row_projet_img) > 1) {
                            for ($i_img = 0; $i_img < count($row_projet_img); $i_img++) {
                                $row_projet_img_fluide  = '../img_dw/' . $row_projet_img[$i_img]["id_projet_img"];
                                if (file_exists($row_projet_img_fluide)) {
                        ?>
                                    <img src="<?= $row_projet_img_fluide ?>" alt="" srcset="">
                                <?php
                                }
                            }
                            $conditiones = 0;
                            for ($i_img = 0; $i_img < count($row_projet_img); $i_img++) {
                                $row_projet_img_fluide  = '../img_dw/' . $row_projet_img[$i_img]["id_projet_img"];
                                $row_projet_img_fluide_ =     str_replace("../", "", $row_projet_img_fluide);
                                if (file_exists($row_projet_img_fluide_)) {
                                    $conditiones++;
                                ?>
                                    <div class="conditiones">
                                        <img src="<?= $row_projet_img_fluide ?>" alt="" srcset="">
                                    </div>
                                <?php
                                }
                            }
                            if ($conditiones < 2) {
                                ?>
                                <style>
                                    .conditiones {
                                        display: none;
                                    }
                                </style>
                                <?php
                            }
                        }

                        if (count($row_projet_img) > 1) {
                            for ($i_img = 0; $i_img < count($row_projet_img); $i_img++) {
                                $row_projet_img_fluide  = '../img_dw/' . $row_projet_img[$i_img]["id_projet_img"];
                                if (file_exists($row_projet_img_fluide)) {
                                ?>
                                    <img src="<?= $row_projet_img_fluide ?>" alt="" srcset="">
                                <?php
                                }
                            }
                            $conditiones = 0;
                            for ($i_img = 0; $i_img < count($row_projet_img); $i_img++) {
                                $row_projet_img_fluide  = '../img_dw/' . $row_projet_img[$i_img]["id_projet_img"];
                                $row_projet_img_fluide_ =     str_replace("../", "", $row_projet_img_fluide);
                                if (file_exists($row_projet_img_fluide_)) {
                                    $conditiones++;
                                ?>
                                    <div class="conditiones">
                                        <img src="<?= $row_projet_img_fluide ?>" alt="" srcset="">
                                    </div>
                                <?php
                                }
                            }
                            if ($conditiones < 2) {
                                ?>
                                <style>
                                    .conditiones {
                                        display: none;
                                    }
                                </style>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php
                ?>

                <div class="blog_index_header_img_2 blog_index_header_img g_img_projet_src1">

                    <?php

                    $filename = 'img_dw/' . $img_projet_src1[$i];
                    if (file_exists($filename)) {
                    ?>
                        <img src="<?= '../img_dw/' . $img_projet_src1[$i] ?>" alt="" srcset="">

                    <?php
                    }
                    ?>

                </div>
            <?php
            }
            ?>
            <div class="blog_index_header_h2 g_description_projet_2">
                <?= $description_projet[$i] ?>
            </div>
            <?php
        } else {
            if ($visibility_1_projet[$i] == "1") {
                if ($title_projet_toggle[$i] == "1") {
            ?>
                    <div class="blog_index_child_h1 g_title_projet_2">
                        <b>
                            <?= $title_projet_2[$i] ?>
                        </b>
                    </div>
                <?php
                } else {
                ?>
                    <div class="blog_index_child_h1 g_title_projet_2">
                        <b>
                            <?= $title_projet_1[$i] ?>
                        </b>
                    </div>
                    <?php
                }
                if ($img_projet_src1[$i] != "") {
                    $filename = 'img_dw/' . $img_projet_src1[$i];
                    $filename_bool = false;
                    if (file_exists($filename)) {
                    ?>

                        <div class="g_img_projet_src1">
                            <img src="<?= '../' . $filename ?>" alt="" srcset="">
                        </div>
                <?php
                    }
                }
                ?>
                <div id="<?= $id_sha1_projet[$i] ?>" class="blog_index_child_h2 g_description_projet_2">
                    <?= $description_projet_2[$i] ?>
                </div>
            <?php
            }
            $filename = "all_projet/" . $id_sha1_projet[$i] . ".php";
            if (file_exists($filename)) {
                require $filename;
                require "blog_sql_.php";
            }
            if ($i != 0) {




            ?>
                <a href="<?= $google_title_projet[$i] ?>">
                    <div class="margin_autre">
                        Voir article !
                    </div>
                </a>
                <?php
            }
            echo '<div class="display_flex_element">';
            for ($ii = 1; $ii < count($_row_projet); $ii++) {
                if ($_visibility_1_projet[$ii] == "1") {
                ?>
                    <div class="card">
                        <div class="title_projet_2">
                            <b>
                                <?= $_title_projet_2[$ii] ?>
                            </b>
                        </div>
                        <div class="card_img">
                            <?php
                            if ($_img_projet_src1[$ii] != "") {
                                $filename = 'img_dw/' . $_img_projet_src1[$ii];
                                if (file_exists($filename)) {
                            ?>
                                    <div>
                                        <img src="<?= '../img_dw/' . $_img_projet_src1[$ii] ?>" alt="" srcset="">
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div style="background-color: black;height:100%">
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="description_projet_">
                            <?= limiterMots($_description_projet_2[$ii], 12) ?>
                        </div>
                        <a href="<?= $_id_sha1_projet[$ii] ?>">
                            <div class="margin_autre2">
                                Voir
                            </div>
                        </a>
                    </div>



    <?php
                }
            }
            echo '</div>';
        }
    }
    echo "<div>";

    ?>




    <div class="display_flex2">
        <div>

        </div>
        <div>
            <?php






            //require_once "data/blog/blog_alert.php" ;
            //require_once "data/blog/blog_alert_text.php" ;

            ?>
        </div>
    </div>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tuffy:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
</body>


<style>
    #like {

        width: 100%;
        text-align: center;
    }

    .display_flex2 {
        display: flex;
        justify-content: space-around;

        margin-top: 45px;
        margin-bottom: 75px;


    }

    .display_flex2 div {
        cursor: pointer;

    }
</style>


<div id="REMOTE_ADDR" class="display_none"><?= $_SERVER["REMOTE_ADDR"] ?></div>
<?php

if (isset($_SESSION["index"])) {
?>
    <div id="index" class="display_none"><?= $_SESSION["index"][3] ?></div>
<?php
} else {
?>
    <div id="index" class="display_none"><?= $_SERVER["REMOTE_ADDR"] ?></div>
<?php
}
?>



<div id="url_" class="display_none"><?= $id_sha1_projet[0] ?></div>
<script>
    var ip = document.getElementById("REMOTE_ADDR").innerText;
    var index = document.getElementById("index").innerText;

    var url_ = document.getElementById("url_").innerText;


    var nombre = 0;
    var nombre_verif = 0;

    var showCoords_array = [{
        event_clientX: "",
        event_clientY: "",
        url: "",
        ip: "",
        user_id: ""
    }];




    function showCoords(event) {
        nombre++;
        let x = event.clientX;
        let y = event.clientY;
        showCoords_array.push({
            event_clientX: x,
            event_clientY: y,
            url: url_,
            ip: ip,
            user_id: index
        });

    }

    setInterval(displayHello, 1000);

    function displayHello() {

        if (nombre_verif != nombre) {





            for (let index = 0; index < showCoords_array.length; index++) {
                const element = showCoords_array[index];
                console.log(element);

                var ok = new Information("../req_sql/showCoords_array.php"); // création de la classe 



                ok.add("showCoords_array_event_clientX", showCoords_array[index].event_clientX); // ajout de l'information pour lenvoi 
                ok.add("showCoords_array_event_clientY", showCoords_array[index].event_clientY); // ajout de l'information pour lenvoi 
                ok.add("showCoords_array_url", showCoords_array[index].url); // ajout de l'information pour lenvoi 
                ok.add("showCoords_array_ip", showCoords_array[index].ip); // ajout de l'information pour lenvoi 
                ok.add("showCoords_array_user_id", showCoords_array[index].user_id); // ajout de l'information pour lenvoi 

               
                ok.push(); // envoie l'information au code pkp 



            }

            //console.log(nombre_verif);
            //console.log(showCoords_array);






            showCoords_array = [{
                event_clientX: "",
                event_clientY: "",
                url: "",
                ip: "",
                user_id: ""
            }];


            console.log(".");



            nombre_verif = nombre;

        }



    }
</script>


<style>
    .display_none{
        display: none;
    }
</style>

</html>