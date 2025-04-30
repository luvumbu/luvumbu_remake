 <style>
     h2 {
         color: #333;
     }

     form {
         background: #fff;
         padding: 15px;
         border-radius: 8px;
         box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
         margin-bottom: 30px;
     }

     input,
     textarea,
     button {
         display: block;
         width: 100%;
         margin-top: 10px;
         padding: 10px;
         font-size: 16px;
         border-radius: 5px;
         border: 1px solid #ccc;
     }

     button {
         background: #007BFF;
         color: white;
         cursor: pointer;
     }

     .comment {
         background: #fff;
         padding: 15px;
         margin-bottom: 15px;
         border-left: 5px solid #007BFF;
         border-radius: 5px;
     }

     .comment .name {
         font-weight: bold;
     }

     .comment .date {
         font-size: 0.9em;
         color: #666;
     }

     .all_comment {
         width: 80%;
         margin: auto;
     }
 </style>
 </head>


 <?php

    if (isset($_SESSION["index"])) {


        $id_sha1_comment = $id_sha1_projet[0];


        $databaseHandler__ = new DatabaseHandler($dbname, $username);
        // Requête SQL pour récupérer toutes les données de la table
        $req_sql = "SELECT * FROM `comment` WHERE `id_sha1_comment`='$id_sha1_comment' ";
        // Récupération des informations des tables enfant liées
        $databaseHandler__->getListOfTables_Child("comment");
        // La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.
        // Récupération des données de la table via une méthode spécialisée
        $databaseHandler__->getDataFromTable2X($req_sql);
        // La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.
        // Génération de variables dynamiques à partir des données récupérées
        $databaseHandler__->get_dynamicVariables();
        // La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.
        // Exemple : affichage d'une variable dynamique spécifique
        $id_comment__ = $dynamicVariables['id_comment'];

        $id_comment_text = $dynamicVariables['id_comment_text'];
        $date_inscription_comment = $dynamicVariables['date_inscription_comment'];

        $id_sha1_user = $dynamicVariables['id_sha1_user'];


    ?>

     <div class="all_comment">
         <h2>Commentaires récents</h2>

         <?php


            for ($i = 0; $i < count($id_comment__); $i++) {
            ?>

             <div class="comment">
                 <div class="name"><?=      $id_sha1_user[$i] ?></div>
                 <div class="date"><?=   formaterDateFr($date_inscription_comment[$i])?></div>
                 <p><?= AsciiConverter::asciiToString($id_comment_text[$i]) ?></p>
             </div>
         <?php
            }



            ?>






         <?php


            $id_sha1_projet_comment = $id_sha1_projet[0];


            ?>

         <h2>Laissez un commentaire</h2>

         <textarea id="message" placeholder="Votre commentaire" rows="4" required></textarea>
         <button type="submit" title="<?= $id_sha1_projet_comment ?>" onclick="envoyer_comment(this)">Envoyer</button>


     </div>

     <script>
         function envoyer_comment(_this) {
_this.style.display="none" ; 


             const id_comment_text_ = document.getElementById("message").value;

             var ok = new Information("../req_sql/envoyer_comment.php"); // création de la classe 
             ok.add("id_comment_text", id_comment_text_); // ajout de l'information pour lenvoi 

             console.log(ok.info()); // demande l'information dans le tableau
             ok.push(); // envoie l'information au code pkp 



             const myTimeout = setTimeout(x, 1000);

function x() {
 location.reload()  ; 
}





         }
     </script>

 <?php

    }


    ?>