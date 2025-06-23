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


     <?php
        require_once "data/blog/css/css.php";

        ?>

 </html>


 <!DOCTYPE html>
 <html>

 <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">

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

     <style>
         .speak {
             margin-top: 45px;
             border: 1px solid rgba(0, 0, 0, 0.1);
             width: 300px;
             text-align: center;
             padding: 15px;
         }

         .cursor_pointer:hover {
             cursor: pointer;
         }
     </style>
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



     <?php
        // require_once "data/blog/blog_visite.php";
        ?>
     <div class="down" onclick="window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });">
         <img width="40" height="40" src="https://img.icons8.com/ios/40/circled-chevron-down.png"
             alt="circled-chevron-down" />
     </div>
     <div class="up" onclick="window.scrollTo({ top: 0, behavior: 'smooth' });">
         <img width="40" height="40" src="https://img.icons8.com/ios/40/circled-chevron-up.png"
             alt="circled-chevron-up" />
     </div>

     <div class="display_flex2"></div>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Tuffy:ital,wght@0,400;0,700;1,400;1,700&display=swap"
         rel="stylesheet">
 </body>
 <style>

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

     setInterval(displayHello, 10000);
     var tous = 0;

     function displayHello() {
         tous++;


         console.log(tous);
         /*
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
              showCoords_array = [{
                  event_clientX: "",
                  event_clientY: "",
                  url: "",
                  ip: "",
                  user_id: ""
              }];
              nombre_verif = nombre;
          }

          */
     }
 </script>

 </style>
 </head>

 <body>

     <div class="header">
         <h2> <?= $title_projet_2[0] ?></h2>
     </div>



     <div class="card_blog">
         <h1><?= $title_projet_1[0] ?></h1>
         <p class="grey"><?= formatDateFr($date_inscription_projet[0]); ?></p>
         <div class="fakeimg">




             <img title="../img_dw/<?= $img_projet_src1[0] ?>" src="../img_dw/<?= $img_projet_src1[0] ?>" alt="" srcset="">

         </div>

         <div class="petite_img">
             <?php


                if (count($row_projet_img) > 1) {


                    for ($i_ = 0; $i_ < count($row_projet_img); $i_++) {

                        $src_ = "../img_dw/" . $row_projet_img[$i_]['id_projet_img'];

                ?>




                     <div onclick="redirection_imgs(this)" title="<?= $src_  ?>">
                         <img src="<?= $src_ ?>" alt="" srcset="">

                     </div>









             <?php
                    }
                }


                ?>
         </div>





         <p><?= $google_title_projet[0] ?></p>

         <div class="description_element">
             <p><?php


                // if($title_projet_toggle[0] == '') {


                /*

function replace_element_3($element) {
    $element = str_replace("&lt;", "<", AsciiConverter::asciiToString($element));
    $element = str_replace("&gt;", ">",  $element);
    $element = str_replace("&nbsp;", "",  $element);
    return $element ;      
}

function replace_element_4($element) {
    $element = str_replace("&lt;", "<", removeHtmlTags(AsciiConverter::asciiToString($element)));
    $element = str_replace("&gt;", ">",  $element);
    $element = str_replace("&nbsp;", "",  $element);
    return $element ;      
}

function replace_element_1($element) {
    $element = str_replace("&lt;", "<", $element);
    $element = str_replace("&gt;", ">",  $element);
    $element = str_replace("&nbsp;", "",  $element);
    return $element ;      
}

function replace_element_2($element) {
    $element = str_replace("&lt;", "<", removeHtmlTags($element));
    $element = str_replace("&gt;", ">",  $element);
    $element = str_replace("&nbsp;", "",  $element);
    return $element ;      
}
*/


















                echo $description_projet_1[0];



                $texte =  replace_element_2($description_projet_1[0]);



                if ($id_sha1_projet_song[0] != '') {
                ?>

             <p class="display_none" id="voice_<?= $id_projet[$i] ?>"><?= htmlspecialchars($texte) ?></p>

             <label for="voice_<?= $id_projet[$i] ?>">Choisir une voix :</label>
             <select id="select_voice_<?= $id_projet[$i] ?>" class="speak">
                 <option value="French Male">🇫🇷 Français - Homme</option>
                 <option value="French Female">🇫🇷 Français - Femme</option>
             </select>

             <br><br>
             <div class="speak cursor_pointer" data-id="<?= $id_projet[$i] ?>" onclick="speak(this)">🔊 Lire le texte</div>

         <?php
                }

            ?>













         <?php


            ?></p>

         </div>
     </div>
     <style>

     </style>
     <?php







        ?>


     <div class="row">
         <div class="leftcolumn">


             <?php



                /*

                var_dump($row_projet);
 echo formatDateFr("2025-05-25 23:38:03");

 

var_dump($date_inscription_projet);

*/
                for ($i = 0; $i < count($title_projet_1); $i++) {




                    $title_projet_1_ = $title_projet_1[$i];
                    $date_inscription_projet_ = $row_projet[$i]["date_inscription_projet"];
                    $img_projet_src1_ = '../img_dw/' . $img_projet_src1[$i];
                    $google_title_projet_2_ = $google_title_projet_2[$i];
                    $description_projet_2_ = $description_projet_2[$i];



                  
                ?>



                 <div class="card_blog">

                     <?php

                        if ($i != 0) {
                        ?>
                         <h1><?= $title_projet_1_ ?></h1>
                         <p class="grey"><?= formatDateFr($date_inscription_projet_); ?></p>
                         <div class="fakeimg">
                     <img src="<?= $img_projet_src1_  ?>" alt="" srcset="">

                             <?php



                                $fichier = "../img_dw/" . $img_projet_src1_;

                                echo "<br/>";
                                if (!fichierExiste($fichier)) {
                                    $fichier = "";
                                }



                                if ($fichier != "") {
                                ?>
                                 <img src="<?= $fichier ?>" alt="" srcset="">

                             <?php
                                }


                                ?>

                         </div>
                         <p><?= $google_title_projet_2_ ?></p>
                         <div class="description_element">
                             <?= $description_projet_2_ ?>

                         </div>


                         <?php

                            // DEBUT



                            $texte =  replace_element_2($description_projet_2_);




                            if ($id_sha1_projet_song[$i] != "") {
                            ?>


                             <p class="display_none" id="voice_<?= $id_projet[$i] ?>"><?= htmlspecialchars($texte) ?></p>

                             <label for="voice_<?= $id_projet[$i] ?>">Choisir une voix :</label>
                             <select id="select_voice_<?= $id_projet[$i] ?>" class="speak">
                                 <option value="French Male">🇫🇷 Français - Homme</option>
                                 <option value="French Female">🇫🇷 Français - Femme</option>
                             </select>

                             <br><br>
                             <div class="speak cursor_pointer" data-id="<?= $id_projet[$i] ?>" onclick="speak(this)">🔊 Lire le texte</div>

                         <?php
                            }
                            ?>











                         <a href="<?= $id_sha1_projet[$i] ?>">

                             <div class="div_lien">
                                 Lien du projet
                             </div>
                         </a>

                     <?php

                        }

                        ?>

                     <?php


                        ?>




                     <?php
                        //var_dump($img_projet_src1[$i] ) ; 

                        ?>


                 </div>
             <?php
                }
                ?>
         </div>

         <?php


            $all_profil_user_ =  $row_projet[0]["id_sha1_user_projet"];



            require_once "all_profil_user/" . $all_profil_user_ . '.php';



            //var_dump($all_profil_user[0]["img_user"]) ; 



            $title_user_0 =  AsciiConverter::asciiToString($all_profil_user[0]["title_user"]); // Affiche "Hello"
            $img_user_0 = $all_profil_user[0]["img_user"];


            ?>
         <div class="rightcolumn text_center">


             <div class="card_blog">


                 <h2><?= $title_user_0 ?></h2>
                 <div>
                     <?php
                        if ($img_user_0 != "") {
                        ?>
                         <img src="<?= '../img_dw/' . $img_user_0 ?>" alt="" srcset="">
                     <?php

                        }

                        ?>

                 </div>

             </div>

             <div class="card_blog text_center">

                 <?php

                    for ($ix = 1; $ix < count($all_profil_user); $ix++) {

                    ?>

                     <h3>
                         <?php

                            echo AsciiConverter::asciiToString($all_profil_user[$ix]["title_user"]);
                            $src_el =  AsciiConverter::asciiToString($all_profil_user[$ix]["prenom_user"]);

                            ?>
                         <div class="card_element">

                             <?php

                                if ($all_profil_user[$ix]["img_user"] != "") {
                                ?>


                                 <a href="<?= $src_el ?>">
                                     <img src="<?= '../img_dw/' . $all_profil_user[$ix]["img_user"] ?>" alt="" srcset="">

                                 </a>
                             <?php
                                }
                                ?>
                         </div>
                     </h3>
                     <p>

                     </p>
                 <?php
                        echo "<br/>";
                    }
                    ?>
             </div>


             <div class="card_blog text_center">
                 <h3>Liste des articles</h3>
                 <?php


                    if ($id_sha1_parent_projet[0] != "") {
                    ?>
                     <a href="<?= $id_sha1_parent_projet[0] ?>">

                         <div class="listedesarticles">

                             Parent

                         </div>

                     </a>
                 <?php
                    }


                    ?>


                 <?php

                    for ($i_a = 1; $i_a < count($title_projet_2); $i_a++) {

                    ?>
                     <a href="<?= $id_sha1_projet[$i_a] ?>">
                         <div class="listedesarticles">
                             <?= $title_projet_2[$i_a] ?>
                     </a>
             </div>
         <?php
                    }

            ?>

         <div style="margin-top:50px;"></div>
         <a href="../index.php"><img width="50" height="50" src="https://img.icons8.com/ios/50/home--v1.png" alt="home--v1" />.</a>

         <?php






            ?>

         </div>
         <div class="card_blog">
             <h3>Follow Me</h3>
             <p>Some text..</p>
         </div>

     </div>
     </div>


     <div id="image_grande_div" class="display_none" onclick="image_grande_div(this)">

         <div class="config_div_img">
             <img id="image_grande" src="../img_dw/uploads/1749452465_5_1749462290.webp" alt="" srcset="">

         </div>
     </div>
 </body>




 <style>

 </style>
 <script>
     function redirection_imgs(_this) {


         document.getElementById("image_grande_div").className = "image_grande_div";

         document.getElementById("image_grande").src = _this.title;
     }

     function image_grande_div(_this) {

         _this.className = "display_none";
         //   document.getElementById(_this.id).className="display_none" ;
     }
 </script>
 <script src="https://code.responsivevoice.org/responsivevoice.js"></script>
 <script>
     function speak(element) {
         const id = element.getAttribute("data-id");
         const textElement = document.getElementById("voice_" + id);
         const selectElement = document.getElementById("select_voice_" + id);

         if (textElement && selectElement) {
             const text = textElement.innerText;
             const voice = selectElement.value;
             responsiveVoice.speak(text, voice);
         }
     }
 </script>

 <?php


    ?>

 </html>