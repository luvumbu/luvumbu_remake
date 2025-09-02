 <?php


$password_projet_bool = false;
    if (!isset($_SESSION["password_projet"])) {


        $_SESSION["password_projet_ascii"] = $password_projet_x[0];



    ?>


     <!DOCTYPE html>
     <html lang="en">

     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
     </head>

     <body>



         <link rel="stylesheet" href="../data/blog/css_protection_password.css">
         <div class="page_protechtion">
             <h1>Cette page est protégée par un mot de passe</h1>
             <div class="password_input">
                 <input type="password" id="password" placeholder="Entrez le mot de passe de la page">
                 <div class="submit_button" title="<?= $_SESSION["index"][4] ?>" onclick="verifierMotDePasse()">Entrer</div>
             </div>
             <div class="home">

                 <a href="../index.php">
                     <img width="50" height="50" src="https://img.icons8.com/ios/50/home.png" alt="home" />

                 </a>
             </div>
         </div>


     </body>

     </html>
     <?php
    } else {




        if ($_SESSION["password_projet"] == $password_projet_x[0]) {


$password_projet_bool = true;

            require_once "data/blog/blog_body.php";
        } else {
        ?>

         <!DOCTYPE html>
         <html lang="en">

         <head>
             <meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, initial-scale=1.0">
             <title>Document</title>
         </head>

         <body>



             <link rel="stylesheet" href="../data/blog/css_protection_password.css">

             <div class="page_protechtion">
                 <h1>Cette page est protégée par un mot de passe</h1>
                 <div class="password_input">
                     <input type="password" id="password" placeholder="Entrez le mot de passe de la page">
                     <div class="submit_button" title="<?= $_SESSION["index"][4] ?>" onclick="verifierMotDePasse()">Envoyer</div>
                 </div>
             </div>

             <div>

                 <a href="../index.php">
                     <img width="50" height="50" src="https://img.icons8.com/ios/50/home.png" alt="home" />

                 </a>
             </div>

         </body>

         </html>
     <?php
        }



        ?>

 <?php
    }

    ?>







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