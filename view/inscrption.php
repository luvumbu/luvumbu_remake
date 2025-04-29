<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <?php

    include_once "../Class/Js.php";

    ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            text-align: center;
        }

        button,
        .inscription {
            width: 90%;
            padding: 12px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        button:hover,
        .inscription {
            background-color: #218838;
        }

        .back-link {
            display: block;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Inscription</h2>
        <p>Remplissez le formulaire pour créer un compte.</p>
        <form action="inscription.php" method="POST">
            <input type="text" id="title_user" name="title_user" placeholder="Nom" required>
            <input type="text" id="description_user" name="description_user" placeholder="Prénom" required>
            <input type="email" id="nom_user" name="email" placeholder="Votre adresse e-mail" required>
            <input type="password" id="password" name="password" placeholder="Mot de passe" required>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmer le mot de passe" required>
            <div class="inscription" onclick="inscription(this)">S'inscrire</div>
        </form>
        <a href="../inde" class="back-link">Déjà un compte ? Connectez-vous</a>

        <div id="info"></div>
        <div id="infoconnetion" class="display_none">Vous allez récevoir un mail de validation</div>

    </div>




    <script>
        function inscription(_this) {


            _this.style.display = "none";

            title_user = document.getElementById("title_user").value;
            description_user = document.getElementById("description_user").value;
            nom_user = document.getElementById("nom_user").value;
            password = document.getElementById("password").value;
            confirm_password = document.getElementById("confirm_password").value;


            var point = 0;

            if (password.length < 5) {

                if (password.length == "") {
                    var info_mot_de_pass = "Champ mot de passe vide";

                } else {
                    var info_mot_de_pass = "Mot de passe non trop court";
                }


            } else {
                if (password != confirm_password) {

                    var info_mot_de_pass = "Mot de passe non identique";



                } else {
                    var info_mot_de_pass = "";
                    point++;
                }
            }



            if (title_user == "") {
                var info_title_user = "Champ nom vide";
            } else {
                var info_title_user = "";
                point++;
            }
            if (description_user == "") {
                var info_description_user = "Champ prenom vide";
            } else {
                var info_description_user = "";
                point++;

            }

            if (nom_user == "") {
                var info_mail_user = "Champ mail vide";
            } else {
                var info_mail_user = "";
                point++;

            }


            if (point > 3) {
                document.getElementById("info").innerHTML = "";
                document.getElementById("info").className = "";

                var ok = new Information("../req_sql/inscription_sql_plus_mail.php"); // création de la classe 
                ok.add("title_user", title_user); // ajout de l'information pour lenvoi 
                ok.add("description_user", description_user); // ajout de l'information pour lenvoi 
                ok.add("nom_user", nom_user); // ajout de l'information pour lenvoi 
                ok.add("password", password); // ajout de l'information pour lenvoi 
                ok.add("confirm_password", confirm_password); // ajout de l'information pour lenvoi 
                document.getElementById("infoconnetion").className = "infoconnetion";


                console.log(ok.info()); // demande l'information dans le tableau
                ok.push(); // envoie l'information au code pkp 


                const myTimeout = setTimeout(myGreeting, 1000);

                function myGreeting() {
                    window.location.href = "../index.php";
                }


            } else {
                document.getElementById("info").innerHTML = info_mot_de_pass + " <br/> " + info_title_user + "<br/>" + info_description_user + "<br/>" + info_mail_user;
                document.getElementById("info").className = "danger";
            }



        }
    </script>
    <style>
        .danger {
            background-color: #f8d7da;
            color: #991c24;
            margin: 20px;
            padding: 15px;
        }

        .display_none {
            display: none;
        }

        .infoconnetion {
            background-color: #218838;
            color: white;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 10px;

        }
    </style>
</body>

</html>