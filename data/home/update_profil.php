    <div class="display_none" id="add_profil_ok">
        <?php


        $nom_table = $dbname; // Nom de la table cible

        // Création d'une instance de la classe `DatabaseHandler`

        $databaseHandler = new DatabaseHandler($dbname, $username);


        // Requête SQL pour récupérer toutes les données de la table
        $req_sql = "SELECT * FROM `$nom_table` WHERE `id_sha1_user` ='$index_3'";

        // Récupération des informations des tables enfant liées
        $databaseHandler->getListOfTables_Child($nom_table);
        // La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

        // Récupération des données de la table via une méthode spécialisée
        $databaseHandler->getDataFromTable2X($req_sql);
        // La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

        // Génération de variables dynamiques à partir des données récupérées
        $databaseHandler->get_dynamicVariables();
        // La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.



        $title_user = AsciiConverter::asciiToString($dynamicVariables["title_user"][0]);
        $description_user = AsciiConverter::asciiToString($dynamicVariables["description_user"][0]);

     $info_user_1 = AsciiConverter::asciiToString($dynamicVariables["info_user_1"][0]);
     $info_user_2 = AsciiConverter::asciiToString($dynamicVariables["info_user_2"][0]);
     $info_user_3 = AsciiConverter::asciiToString($dynamicVariables["info_user_3"][0]);

     

        if ($dynamicVariables["img_user"][0] == "") {
            $img_user = "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0c/bb/a3/97/predator-ride-in-the.jpg?w=900&h=500&s=1";
        } else {
            $img_user = "img_dw/".$dynamicVariables["img_user"][0];
        }



        ?>
        <p>Nom :</p>

        <input class="title_user_profil" id="title_user_profil" onkeyup="update_profil(this)" type="text" placeholder="Prenom" value="<?= $title_user ?>">
        <p>Prenom :</p>

        <input class="description_user_profil" id="description_user_profil" onkeyup="update_profil(this)" type="text" placeholder="Nom" value="<?= $description_user ?>">

        <textarea placeholder="information ici 1" style="margin-bottom: 40px;" onkeyup="update_profil(this)" name="info_user_1" id="info_user_1"><?= $info_user_1 ?></textarea>
        <textarea placeholder="information ici 2" style="margin-bottom: 40px;" onkeyup="update_profil(this)" name="info_user_2" id="info_user_2"><?= $info_user_2 ?></textarea>
        <textarea placeholder="information ici 3" style="margin-bottom: 40px;" onkeyup="update_profil(this)" name="info_user_3" id="info_user_3"><?= $info_user_3 ?></textarea>


        <div class="card_profil cursor_pointer" onclick="card_profil()">
            <img src="<?= $img_user ?>" alt="" srcset="">
        </div>
    </div>

    <script>
        function update_profil(_this) {

            var title_user_profil = document.getElementById("title_user_profil").value;
            var description_user_profil = document.getElementById("description_user_profil").value;
            var info_user_1 = document.getElementById("info_user_1").value;
            var info_user_2 = document.getElementById("info_user_2").value;
            var info_user_3 = document.getElementById("info_user_3").value;
 
            var ok = new Information("req_sql/update_profil.php"); // création de la classe 

            ok.add("title_user", title_user_profil); // ajout de l'information pour lenvoi 
            ok.add("description_user", description_user_profil); // ajout d'une deuxieme information denvoi  
            ok.add("info_user_1", info_user_1); // ajout d'une deuxieme information denvoi  
            ok.add("info_user_2", info_user_2); // ajout d'une deuxieme information denvoi  
            ok.add("info_user_3", info_user_3); // ajout d'une deuxieme information denvoi  
                     
           
         
            console.log(ok.info()); // demande l'information dans le tableau
            ok.push(); // envoie l'information au code pkp 
   
        }

        function card_profil() {


            var ok = new Information("req_sql/card_profil.php"); // création de la classe 
            console.log(ok.info()); // demande l'information dans le tableau
            ok.push(); // envoie l'information au code pkp 


          


            const myTimeout = setTimeout(xc, 150);

            function xc() {
                 window.location.href = "img_dw/index.php";
            }

        }
    </script>

    <style>
        .card_profil {
            width: 300px;
            margin: auto;
        }

        .card_profil img {
            width: 100%;
        }

        .title_user_profil,
        .description_user_profil {
            margin-bottom: 45px;
            width: 50%;
            color: blueviolet;
        }
    </style>