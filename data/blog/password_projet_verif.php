 <?php

    if (!isset($_SESSION["password_projet"])) {


        $_SESSION["password_projet_ascii"] = $password_projet_x[0];



    ?>


     <h1>Cette page est protégée par un mot de passe</h1>
     <div class="password_input">
         <input type="password" id="password" placeholder="Entrez le mot de passe de la page">
         <div class="submit_button" title="<?= $_SESSION["index"][4] ?>" onclick="verifierMotDePasse()">Envoyer</div>
     </div>
     <?php
    } else {



        if ($_SESSION["password_projet"] == $password_projet_x[0]) {




            require_once "data/blog/blog_body.php";
        } else {
        ?>




         <h1>Cette page est protégée par un mot de passe</h1>
         <div class="password_input">
             <input type="password" id="password" placeholder="Entrez le mot de passe de la page">
             <div class="submit_button" title="<?= $_SESSION["index"][4] ?>" onclick="verifierMotDePasse()">Envoyer</div>
         </div>

     <?php
        }



        ?>

 <?php
    }

    ?>




 <style>
     .password_input {
         width: 80%;
         margin: auto;
         margin-top: 45px;

         border-radius: 7px;
     }

     .password_input input {
         width: 100%;
         padding: 15px;

     }

     .submit_button {
         background-color: #4CAF50;
         color: white;
         padding: 15px 20px;
         border: none;
         border-radius: 5px;
         cursor: pointer;
         margin-top: 25px;
         text-align: center;
     }
 </style>

 <script>
     function verifierMotDePasse(_this) {



         var verifierMotDePasse = document.getElementById("password").value;


         var ok = new Information("../req_sql/verifierMotDePasse.php"); // création de la classe 
         ok.add("verifierMotDePasse", verifierMotDePasse); // ajout de l'information pour lenvoi 
         console.log(ok.info()); // demande l'information dans le tableau
         ok.push(); // envoie l'information au code pkp 






         const myTimeout = setTimeout(myGreeting, 300);

         function myGreeting() {
             location.reload();
         }







     }
 </script>