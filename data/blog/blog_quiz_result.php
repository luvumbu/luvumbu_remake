 <?php

    $databaseHandler = new DatabaseHandler($dbname, $username);
    $req_sql = "SELECT * FROM `projet` WHERE `id_sha1_parent_projet` ='$url_' ";
    // Récupération des informations des tables enfant liées
    $databaseHandler->getListOfTables_Child("projet");
    // La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.
    // Récupération des données de la table via une méthode spécialisée
    $databaseHandler->getDataFromTable2X($req_sql);
    // La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.
    // Génération de variables dynamiques à partir des données récupérées
    $databaseHandler->get_dynamicVariables();
    // La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.
    // Exemple : affichage d'une variable dynamique spécifique
    $id_projet_ = count($dynamicVariables['id_projet']);
    $id_sha1_projet_array = $dynamicVariables['id_sha1_projet'];
    $google_title_projet_array = $dynamicVariables['google_title_projet'];
    $title_projet_array = $dynamicVariables['title_projet'];
    $description_projet_array = $dynamicVariables['description_projet'];
    $change_meta_name_projet_array = $dynamicVariables['change_meta_name_projet'];
    $change_meta_content_projet_array = $dynamicVariables['change_meta_content_projet'];
    $id_sha1_projet_user = $_SESSION["id_sha1_projet_user"];
    $id_sha1_req_quiz_ = $url_;
    $id_sha1_projet_user = $_SESSION["index"][3];
    $databaseHandler = new DatabaseHandler($dbname, $username);
    // $req_sql = "SELECT * FROM `req_quiz` WHERE `id_sha1_req_quiz` ='$url_' ";
    $req_sql = "SELECT * FROM `req_quiz` WHERE `id_sha1_req_quiz`='$url_' AND `id_sha1_projet_user` ='$id_sha1_projet_user' ";
    // Récupération des informations des tables enfant liées
    $databaseHandler->getListOfTables_Child("req_quiz");
    // La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.
    // Récupération des données de la table via une méthode spécialisée
    $databaseHandler->getDataFromTable2X($req_sql);
    // La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.
    // Génération de variables dynamiques à partir des données récupérées
    $databaseHandler->get_dynamicVariables();
    // La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.
    // Exemple : affichage d'une variable dynamique spécifique
    $id_sha1_child_req_question =  $dynamicVariables['id_sha1_child_req_question'];
    $id_sha1_child_req_reponse_1 =  $dynamicVariables['id_sha1_child_req_reponse_1'];
    $id_sha1_child_req_reponse_2 =  $dynamicVariables['id_sha1_child_req_reponse_2'];
    $id_sha1_child_req_reponse_z =  $dynamicVariables['id_sha1_child_req_reponse_z'];
    if (count($id_sha1_child_req_reponse_1) > 0) {
    ?>
     <style>
         #quizForm {
             display: none;
         }
     </style>
 <?php
    }

    echo "<div class='lise_reponse'>";
    $bonne_reponse = 0;
    $mauvaise_reponse = 0;
    $total_reponse = 0;
    for ($i = 0; $i < count($dynamicVariables['id_req_quiz']); $i++) {
        echo "<div class='style_1'>";
        $key = array_search($dynamicVariables['id_sha1_child_req_quiz'][$i], $id_sha1_projet_array); // $key = 2;
        $reponse =  AsciiConverter::asciiToString($google_title_projet_array[$key]);
        $modulo =   fmod($i, $id_projet_);
    ?>
     <div class="kook">
         <?= $id_sha1_child_req_question[$i] ?>
     </div>
     <?php
        if ($reponse != "") {
            $total_reponse++;
            if ($id_sha1_child_req_reponse_2[$i] == $reponse) {
                $bonne_reponse++;
        ?>
             <div class="ok">
                 Bonne réponse <?= $id_sha1_child_req_reponse_1[$i] ?>
             </div>
         <?php
            } else {
                $mauvaise_reponse++;
            ?>
             <div class="nok">
                 Mauvaise réponse <?= $id_sha1_child_req_reponse_1[$i]  ?>
             </div>

         <?php
            }
        } else {

            ?>

         <div class="kook2">
             Votre réponse <?= $id_sha1_child_req_reponse_1[$i] ?>
         </div>
     <?php
        }
        ?>

 <?php

        echo "</div>";
    }
    echo "<div>";
    if (count($dynamicVariables['id_req_quiz']) > 0) {
    ?>
     <div class="resultat_final">
         <?php
            $calcul = $bonne_reponse * 100;
            $calcul2 = intval($calcul / $total_reponse);
            echo $calcul2 . '%';
            ?>
         <?= $bonne_reponse . "/" . $total_reponse ?>
     </div>
 <?php
    }

    ?>
 <style>
     .kook2 {
         background-color: rgba(0, 0, 200, 0.3);
     }
     .lise_reponse {
         width: 60%;
         margin: auto;
         text-align: center;
         margin-top: 135px;
     }
     .ok {
         background-color: rgba(0, 200, 0, 0.3);
     }
     .nok {
         background-color: rgba(200, 0, 0, 0.3);
     }
     .ok,
     .nok,
     .kook,
     .kook2 {
         padding: 10px;
         text-shadow: 1px 1px 4px black;
         color: white;
     }
     .separation {
         margin-bottom: 45px;
     }
     .resultat_final {
         padding: 15px;
         text-shadow: 1px 1px 4px black;
         color: white;
         border-radius: 12px;
         margin: 50px auto;
         background: linear-gradient(to right,
                 rgba(0, 200, 0, 0.3) <?= $calcul2 . '%' ?>,
                 rgba(200, 0, 0, 0.8) 100%);
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
     }
 </style>