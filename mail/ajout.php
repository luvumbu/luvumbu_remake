<?php
session_start();
header("Access-Control-Allow-Origin: *");

require_once "../Class/DatabaseHandler.php";
require_once "../Class/dbCheck.php";

$nom_table = "adresse_mail_coops";
$databaseHandler = new DatabaseHandler($dbname, $username);

$req_sql = "SELECT DISTINCT `nom_adresse_mail_coops` FROM `adresse_mail_coops` WHERE 1";
$databaseHandler->getListOfTables_Child($nom_table);
$databaseHandler->getDataFromTable2X($req_sql);
$databaseHandler->get_dynamicVariables();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Gestion des mails</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: #f5f8ff;
            font-family: "Segoe UI", sans-serif;
            color: #333;
        }

        .container-mail {
            max-width: 650px;
            margin: 50px auto;
            background: #fff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .title {
            font-size: 1.8em;
            font-weight: bold;
            margin-bottom: 25px;
            text-align: center;
            color: #007bff;
        }

        .adress_mail {
            background: #e9f3ff;
            padding: 12px;
            margin: 6px auto;
            border-radius: 10px;
            font-weight: 500;
            font-size: 1.1em;
            text-align: center;
            color: #004085;
            transition: background 0.2s ease-in-out;
        }

        .adress_mail:hover {
            background: #d0e7ff;
        }

        .insert_mail {
            margin-top: 15px;
            background: #28a745;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            padding: 12px;
            width: 100%;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        .insert_mail:hover {
            background: #218838;
        }

        .mail_groupe {
            margin-top: 40px;
            text-align: center;
        }

        .mail_groupe a {
            text-decoration: none;
            color: #fff;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 20px;
            background: #007bff;
            border-radius: 12px;
            font-weight: bold;
            transition: background 0.3s ease-in-out;
        }

        .mail_groupe a:hover {
            background: #0056b3;
        }

        .error-text {
            color: #dc3545;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container-mail">
        <div class="title">📧 Gestion des adresses mail</div>

        <input type="text" id="id_mail" class="form-control mb-3" placeholder="Entrez une adresse mail à ajouter">
        <div id="mails"></div>
        <input type="text" id="nom_mail" class="form-control mb-3" placeholder="Votre nom">
        <div id="noms"></div>

        <button class="insert_mail" onclick="insert_mail()">➕ Ajouter l’adresse</button>

        <h4 class="mt-4">📋 Liste des adresses :</h4>
        <?php
        for ($i = 0; $i < count($dynamicVariables['nom_adresse_mail_coops']); $i++) {
            echo '<div class="adress_mail">' . htmlspecialchars($dynamicVariables['nom_adresse_mail_coops'][$i]) . "</div>";
        }
        ?>

        <div class="mail_groupe">
            <a href="index.php">
                <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/mail.png" alt="mail" />
                Envoyer un mail groupé
            </a>
        </div>
    </div>

    <script>
        class Information {
            constructor(link) {
                this.link = link;
                this.identite = new FormData();
                this.req = new XMLHttpRequest();
                this.identite_tab = [];
            }
            info() {
                return this.identite_tab;
            }
            add(info, text) {
                this.identite_tab.push([info, text]);
            }
            push() {
                for (var i = 0; i < this.identite_tab.length; i++) {
                    this.identite.append(this.identite_tab[i][0], this.identite_tab[i][1]);
                }
                this.req.open("POST", this.link);
                this.req.send(this.identite);
            }
        }

        function insert_mail() {
            var insert_mail = document.getElementById("id_mail").value;
            var insert_nom = document.getElementById("nom_mail").value;

            var ok = new Information("insert_mail.php");
            ok.add("nom_adresse_mail_coops", insert_mail);
            ok.add("msg_adresse_mail_coops", insert_nom);

            if (insert_nom !== "" && insert_mail !== "") {
                ok.push();
                setTimeout(() => location.reload(), 250);
            } else {

                if (insert_nom == "") {

                    document.getElementById("noms").innerHTML = "<div class='error-text'>⚠️ Veuillez entrer votre nom !</div>";

                }
                else{
                    document.getElementById("noms").innerHTML="" ;
                }
                if (insert_mail == "") {

                    document.getElementById("mails").innerHTML = "<div class='error-text'>⚠️ Veuillez entrer une adresse mail !</div>";

                }
                else{
                     document.getElementById("mails").innerHTML="" ;
                }

            }
        }
    </script>
</body>

</html>