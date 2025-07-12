<?php
// Configuration de la base de données

$nom_table = "profil_user"; // Nom de la table cible

// Création d'une instance de la classe `DatabaseHandler`

$databaseHandler = new DatabaseHandler($dbname, $username);

$id_parent_user = $_SESSION["index"][3];
// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `$nom_table` WHERE `id_parent_user`='$id_parent_user' ";

// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child($nom_table);
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();

$id_user_g = $dynamicVariables['id_sha1_user'];

$img_user_0 = $dynamicVariables['img_user'];



if (count($dynamicVariables["img_user"]) > 0) {
?>
    <div class="add_profil">

        <div class="display_flex_el">


            <div>
                <img class="cursor_pointer" onclick="general_profil(this)" width="48" height="48"
                    src="https://img.icons8.com/pulsar-line/48/user-male-circle.png" alt="user-male-circle" />



            </div>

            <div onclick="add_profil_ok(this)">
                <img class="cursor_pointer" width="48" height="48" src="https://img.icons8.com/hatch/48/1A1A1A/user-male-circle.png" alt="user-male-circle" />

            </div>
        </div>






        <div class="display_flex_el">

            <p class="text_center">Profil</p>
            <p class="text_center">Information</p>
        </div>

    <?php
}




    ?>



    <?php
    echo ' <div class="display_none" id="general_profil">';

    for ($i_el = 0; $i_el < count($id_user_g); $i_el++) {


        $id_sha1_user =  $id_user_g[$i_el];

        $title_user__ = AsciiConverter::asciiToString($dynamicVariables['title_user'][$i_el]); // Affiche "Hello"
        $description_user__ = $dynamicVariables['description_user'][$i_el];

        $description_user__ = AsciiConverter::asciiToString($dynamicVariables['description_user'][$i_el]); // Affiche "Hello"


    ?>

        <h1>
            <input onkeyup="update_id_sha1_user(this)" placeholder="Titre" title="<?= $id_sha1_user ?>" class="titre_"
                type="text" value="<?= $title_user__ ?>">
        </h1>





        <?php





        $databaseHandler_ = new DatabaseHandler($dbname, $username);

        $id_parent_user_ = $id_sha1_user;



        // Requête SQL pour récupérer toutes les données de la table
        $req_sql = "SELECT * FROM `$nom_table` WHERE `id_parent_user`='$id_parent_user_' ";

        // Récupération des informations des tables enfant liées
        $databaseHandler_->getListOfTables_Child($nom_table);
        // La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

        // Récupération des données de la table via une méthode spécialisée
        $databaseHandler_->getDataFromTable2X($req_sql);
        // La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

        // Génération de variables dynamiques à partir des données récupérées
        $databaseHandler_->get_dynamicVariables();

        $id_sha1_user_le = $dynamicVariables['id_sha1_user'];

        $id_sha1_user_le = $dynamicVariables['id_sha1_user'];
        $title_user_le = $dynamicVariables['title_user'];
        $description_user_le = $dynamicVariables['description_user'];
        $nom_user_le = $dynamicVariables['nom_user'];

        $prenom_user_le = $dynamicVariables['prenom_user'];



        $img_user_le = $dynamicVariables['img_user'];

        $img_user_0_ = $img_user_0[$i_el];





        if ($img_user_0_ != "") {

            $img_user_0_ = 'img_dw/' . $img_user_0[$i_el];
        } else {
            $img_user_0_ = "https://img.icons8.com/matisse/100/picture.png";
        }




        ?>


        <div class="img_user_0" title="<?= $id_sha1_user ?>" onclick="add_picture_id_sha1_user(this)">
            <img width="100" height="100" src="<?= $img_user_0_ ?>" alt="picture" />
        </div>


        <div class="display_flex_el">
            <div>
                <img onclick="add_id_sha1_user(this)" title="<?= $id_sha1_user ?>" class="cursor_pointer" width="30"
                    height="30" src="https://img.icons8.com/ios/30/plus--v1.png" alt="plus--v1" />
            </div>
            <div>
                <img onclick="remove_id_sha1_user(this)" title="<?= $id_sha1_user ?>" class="cursor_pointer" width="30"
                    height="30" src="https://img.icons8.com/color/30/delete-forever.png" alt="delete-forever" />
            </div>

        </div>
        <?php

        for ($i_le = 0; $i_le < count($id_sha1_user_le); $i_le++) {



            $id_sha1_user_i_le = $id_sha1_user_le[$i_le];
            $title_user_i_le = AsciiConverter::asciiToString($title_user_le[$i_le]);
            $description_user_i_le = AsciiConverter::asciiToString($description_user_le[$i_le]);
            $nom_user_i_le = AsciiConverter::asciiToString($nom_user_le[$i_le]);
            $img_user_le_ =  $img_user_le[$i_le];

            $prenom_user_le_ = AsciiConverter::asciiToString($prenom_user_le[$i_le]);


            if ($img_user_le_ != "") {
                $img_element = "img_dw/" . $img_user_le_;
            } else {
                $img_element = "https://img.icons8.com/sf-regular/100/picture.png";
            }
        ?>
            <h2><input value="<?= $title_user_i_le ?>" id="title_user<?= $id_sha1_user_i_le ?>"
                    onkeyup="update_id_sha1_user_2(this)" title="<?= $id_sha1_user_i_le ?>" type="text" value="<?= $lorem_2 ?>"
                    placeholder="Titre"></h2>
            <h2><input value="<?= $description_user_i_le ?>" id="description_user<?= $id_sha1_user_i_le ?>"
                    onkeyup="update_id_sha1_user_2(this)" title="<?= $id_sha1_user_i_le ?>" type="text" value="<?= $lorem_2 ?>"
                    placeholder="Description"></h2>
            <h2>
                <?php


                ?>
                <input value="<?= $prenom_user_le_  ?>" id="nom_user<?= $id_sha1_user_i_le ?>"
                    onkeyup="update_id_sha1_user_2(this)" title="<?= $id_sha1_user_i_le ?>" placeholder="Lien de la page"
                    type="text" id="links" value="<?= $lorem_2 ?>">
            </h2>


            <div title="<?= $id_sha1_user_i_le ?>" class="class_picture space_picture" onclick="add_picture_id_sha1_user(this)">
                <img class="cursor_pointer" width="100" height="100" src="<?= $img_element ?>" alt="picture" />

            </div>



            <div class="class_picture " onclick="remove_id_sha1_user(this)" title="<?= $id_sha1_user_i_le ?>">
                <img class="cursor_pointer" width="30" height="30" src="https://img.icons8.com/ios/30/delete-forever--v1.png"
                    alt="delete-forever--v1" />

            </div>




    <?php
        }
    }
    echo '   </div>';

    echo '   </div>';

    ?>
    <?php

    $lorem_1 = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit soluta impedit vel delectus veniam quo reprehenderit totam cupiditate laudantium, 
        laboriosam veritatis eos doloribus nisi cum, eaque, omnis animi nemo et.";
    $lorem_2 = "elemtcdc";

    ?>








    <style>
        .text_center {
            text-align: center;
        }

        .space_picture {
            margin-bottom: 45px;
            margin-top: 45px;

        }

        .display_flex_el {
            display: flex;
            justify-content: space-around;
        }

        .add_profil {
            width: 80%;
            background-color: white;
            margin: auto;
            padding: 15px;
            margin-top: 75px;
        }

        body {
            background-color: rgba(0, 0, 0, 0.08);
        }

        .add_profil input,
        .add_profil textarea {
            width: 100%;

        }

        .add_profil textarea {
            width: 100%;
            height: 100px;

        }

        .add_profil input,
        .add_profil textarea,
        select {

            padding: 10px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 3px;

        }

        #links {
            border: 1px solid rgba(0, 0, 250, 0.2);

        }

        .class_picture {
            text-align: center;
        }

        .titre_ {
            border: 5px solid rgba(0, 0, 250, 0.2);

        }


        .img_user_0 {
            width: 100%;
            margin-top: 45px;
            margin-bottom: 45px;

            text-align: center;

        }
    </style>

    <script>
        function general_profil(_this) {
            document.getElementById("add_profil_ok").className = "display_none";
            var el = document.getElementById("general_profil").className;

            if (el == "display_none") {
                document.getElementById("general_profil").className = "";

            } else {
                document.getElementById("general_profil").className = "display_none";

            }
        }

        function remove_id_sha1_user(_this) {
            var ok = new Information("req_sql/remove_id_sha1_user.php"); // création de la classe 
            ok.add("id_sha1_user", _this.title); // ajout de l'information pour lenvoi 
            console.log(ok.info()); // demande l'information dans le tableau
            ok.push(); // envoie l'information au code pkp
            const myTimeout = setTimeout(g, 250);

            function g() {
                location.reload();
            }
        }

        function add_id_sha1_user(_this) {
            alert(_this.title); 
            var ok = new Information("req_sql/add_id_sha1_user.php"); // création de la classe 
            ok.add("id_sha1_user", _this.title); // ajout de l'information pour lenvoi 
            console.log(ok.info()); // demande l'information dans le tableau
            ok.push(); // envoie l'information au code pkp
            const myTimeout = setTimeout(g, 250);

            function g() {
                location.reload();
            }

        }

        function update_id_sha1_user(_this) {

            var ok = new Information("req_sql/update_id_sha1_user.php"); // création de la classe 
            ok.add("id_sha1_user", _this.title); // ajout de l'information pour lenvoi 
            ok.add("title_user", _this.value); // ajout de l'information pour lenvoi 

            console.log(ok.info()); // demande l'information dans le tableau
            ok.push(); // envoie l'information au code pkp

            console.log("update_id_sha1_user");

        }

        function update_id_sha1_user_2(_this) {
            const title_user = document.getElementById("title_user" + _this.title).value;
            const description_user = document.getElementById("description_user" + _this.title).value;
            const nom_user = document.getElementById("nom_user" + _this.title).value;



            var ok = new Information("req_sql/update_id_sha1_user_2.php"); // création de la classe 

            ok.add("id_sha1_user", _this.title); // ajout de l'information pour lenvoi 
            ok.add("title_user", title_user); // ajout de l'information pour lenvoi 
            ok.add("description_user", description_user); // ajout de l'information pour lenvoi 
            ok.add("nom_user", nom_user); // ajout de l'information pour lenvoi 

            console.log(ok.info()); // demande l'information dans le tableau
            ok.push(); // envoie l'information au code pkp


        }

        function add_picture_id_sha1_user(_this) {


            var ok = new Information("req_sql/add_picture_id_sha1_user.php"); // création de la classe 

            ok.add("id_sha1_user", _this.title); // ajout de l'information pour lenvoi 
            console.log(ok.info()); // demande l'information dans le tableau
            ok.push(); // envoie l'information au code pkp




            const myTimeout = setTimeout(xc, 250);

            function xc() {
                window.location.href = "img_dw/index.php";
            }





        }

        function add_profil_ok() {
            var add_profil_ok = document.getElementById("add_profil_ok").className;
            document.getElementById("general_profil").className = "display_none";


            if (add_profil_ok == "display_none") {
                document.getElementById("add_profil_ok").className = "add_profil";
            } else {

                document.getElementById("add_profil_ok").className = "display_none";


            }
        }
    </script>


    <?php




    ?>