<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Style Page</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f4f7f8;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        background-color: #fff;
        padding: 30px 40px;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        width: 400px;
    }

    label {
        display: block;
        margin-bottom: 6px;
        font-weight: 600;
        color: #333;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px 12px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 14px;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    input[type="text"]:focus {
        border-color: #2f80ed;
        box-shadow: 0 0 8px rgba(47, 128, 237, 0.3);
        outline: none;
    }

    button {
        width: 100%;
        padding: 12px;
        background-color: #2f80ed;
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s, box-shadow 0.3s;
    }

    button:hover {
        background-color: #145ab3;
        box-shadow: 0 4px 12px rgba(47, 128, 237, 0.4);
    }
    </style>

    <style>
    textarea {
        width: 100%;
        padding: 10px 12px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 14px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        transition: border-color 0.3s, box-shadow 0.3s;
        resize: vertical;
        /* permet de redimensionner verticalement */
    }

    textarea:focus {
        border-color: #2f80ed;
        box-shadow: 0 0 8px rgba(47, 128, 237, 0.3);
        outline: none;
    }
    </style>

</head>


 

<body>

    <?php



    // Configuration de la base de données
    $dbname = "root";   // Nom d'utilisateur pour la base de données
    $username = "root";   // Mot de passe pour la base de données
    $nom_table = "style_page"; // Nom de la table cible


 

    if (isset($_SESSION["select_style"])) {

 

        $select_style =$_SESSION["select_style"];
        $databaseHandler = new DatabaseHandler($dbname, $username);


        // Requête SQL pour récupérer toutes les données de la table
        $req_sql = "SELECT * FROM `$nom_table` WHERE id_style_page ='$select_style'";

        // Récupération des informations des tables enfant liées
        $databaseHandler->getListOfTables_Child($nom_table);
        // La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

        // Récupération des données de la table via une méthode spécialisée
        $databaseHandler->getDataFromTable2X($req_sql);
        // La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

        // Génération de variables dynamiques à partir des données récupérées
        $databaseHandler->get_dynamicVariables();
        // La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.

        // Exemple : affichage d'une variable dynamique spécifique

 
$name_style_page_sha1 = AsciiConverter::asciiToString($dynamicVariables['name_style_page'][0]) ; 
$info_style_page_sha1 = AsciiConverter::asciiToString($dynamicVariables['info_style_page'][0]) ; 
$text_style_page_sha1 = AsciiConverter::asciiToString($dynamicVariables['text_style_page'][0]) ; 
 
    }

    ?>



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <form action="submit_style.php" method="post">
        <div id="id_user_style_page" class="display_none"><?= $_SESSION["index"][3] ?></div>
        <label for="name_style_page">name_style_page:</label>
        <input maxlength="25" type="text" id="name_style_page" name="name_style_page"
            placeholder="Entrez le nom du style"
            value="<?php echo isset($_SESSION['select_style']) ? htmlspecialchars($name_style_page_sha1) : ''; ?>"
            required>


        <div id="name_style_page_info" role="alert"></div>
        <label for="info_style_page">info_style_page:</label>
        <textarea id="info_style_page" name="info_style_page" placeholder="Informations sur le style" rows="4"
            required><?php echo isset($_SESSION['select_style']) ? htmlspecialchars($info_style_page_sha1) : ''; ?></textarea>

        <div id="info_style_page_info" role="alert"></div>
        <label for="text_style_page">text_style_page:</label>
        <textarea id="text_style_page" name="text_style_page" placeholder="Texte associé au style" rows="4"
            required><?php echo isset($_SESSION['select_style']) ? htmlspecialchars($text_style_page_sha1) : ''; ?></textarea>

        <div id="text_style_page_info" role="alert"></div>

        <div class="submit" onclick="add_style(this)">Envoyer</div>



        <?php
        if (isset($_SESSION["select_style"])) {
        ?>

        <div class="div_remove_style" onclick="div_remove_style(this)">
            <img width="50" height="50" src="https://img.icons8.com/color/50/delete-forever.png" alt="delete-forever" />
        </div>
        <?php

        }

        ?>
    </form>

    <script>

    </script>

    <style>
    .display_none {
        display: none;
    }

    #name_style_page {
        opacity: 0.6;
    }

    #info_style_page {
        opacity: 0.3;
    }

    .div_remove_style {
        margin-top: 45px;
        margin-bottom: 45px;

    }

    .div_remove_style img {
        cursor: pointer;
    }

    .submit {
        text-align: center;
        width: 100%;
        padding: 12px;
        background-color: #2f80ed;
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s, box-shadow 0.3s, transform 0.2s;
        margin-top: 30px;
    }

    .submit:hover {
        background-color: #145ab3;
        box-shadow: 0 4px 12px rgba(47, 128, 237, 0.4);
        transform: translateY(-2px);
        /* léger effet de "soulèvement" */
    }

    .submit:active {
        transform: translateY(1px);
        /* effet d'appui */
        box-shadow: 0 2px 6px rgba(47, 128, 237, 0.3);
    }
    </style>



    <script>
    function add_style(_this) {

        const name_style_page = document.getElementById("name_style_page");
        const info_style_page = document.getElementById("info_style_page");
        const text_style_page = document.getElementById("text_style_page");
        const name_style_page_info = document.getElementById("name_style_page_info");
        const info_style_page_info = document.getElementById("info_style_page_info");
        const text_style_page_info = document.getElementById("text_style_page_info");

        var name_style_page_bool = false;
        var info_style_page_bool = false;
        var text_style_page_bool = false;

        if (name_style_page.value == "") {
            name_style_page_info.innerHTML = "VIDE";
            name_style_page_info.className = "alert alert-danger";
        } else {
            name_style_page_info.innerHTML = "ok";
            name_style_page_info.className = "alert alert-primary";
            name_style_page_bool = true;
        }

        if (info_style_page.value == "") {
            info_style_page_info.innerHTML = "VIDE";
            info_style_page_info.className = "alert alert-danger";
        } else {
            info_style_page_info.innerHTML = "ok";
            info_style_page_info.className = "alert alert-primary";
            info_style_page_bool = true;
        }

        if (text_style_page.value == "") {
            text_style_page_info.innerHTML = "VIDE";
            text_style_page_info.className = "alert alert-danger";
        } else {
            text_style_page_info.innerHTML = "ok";
            text_style_page_info.className = "alert alert-primary";
            text_style_page_bool = true;
        }
        if (name_style_page_bool && info_style_page_bool && text_style_page_bool) {


            _this.style.display = "none";

            document.getElementById("id_user_style_page").className = "";



            document.getElementById("id_user_style_page").innerHTML =
                '<div class="alert alert-success" role="alert">Le formulaire a été envoye avec succes redirection dans 1 seconces</div>';
            var id_user_style_page = document.getElementById("id_user_style_page").innerHTML;



            var ok = new Information("req_sql/add_style.php");
            ok.add("id_user_style_page", id_user_style_page); // ajout de l'information pour lenvoi
            ok.add("name_style_page", name_style_page.value); // ajout de l'information pour lenvoi
            ok.add("info_style_page", info_style_page.value); // ajout de l'information pour lenvoi 
            ok.add("text_style_page", text_style_page.value); // ajout de l'information pour lenvoi 

            console.log(ok.info()); // demande l'information dans le tableau
            ok.push(); // envoie l'information au code pkp 


            const myTimeout = setTimeout(myGreeting, 1000);

            function myGreeting() {
                window.location.href = "index.php";

            }

        }



    }

    function div_remove_style(_this) {

        _this.style.display = "none";


        var ok = new Information("req_sql/div_remove_style.php");
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 


        const myTimeout = setTimeout(myGreeting, 1500);

        function myGreeting() {
            window.location.href = "index.php";

        }
    }
    </script>



</body>

</html>


<style>
    body{
        background-color: aliceblue;
        color: red;
    }
    div{
        color: red;

    }
</style>

Lorem ipsum dolor sit amet c



12345645687498755555///

onsectetur adipisicing elit
. Non reprehenderit cupiditate perferendis quas
 libero tempora vel aperiam, tempore, dolorem voluptatum dolores tenetur repellat quam magni possimus molestiae. Aut, saepe ipsam.



