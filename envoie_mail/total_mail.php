<?php
session_start();
header("Access-Control-Allow-Origin: *");

require_once "../Class/DatabaseHandler.php";
require_once "../Class/dbCheck.php";
require_once "../Class/AsciiConverter.php";
require_once "../Class/FrenchClock.php";




$req_sql = "SELECT * FROM `mail_send` ORDER BY `mail_send`.`id_mail_send` DESC";
$db = new DatabaseHandler($dbname, $username);

// Appel de la fonction
$result = $db->know_variables_name("mail_send", "_x", $req_sql);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des mails envoyés</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f6fb;

        }

        h1 {
            text-align: center;
            color: #2f80ed;
            margin-bottom: 30px;
        }

        .mail-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 20px;
        }

        .mail-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.2s ease;
        }
        .mail-card {
    
 

    max-height: 300px; /* Limite la hauteur à moitié de ce que c'était avant */
    overflow: hidden;  /* Cache le contenu qui dépasse */
  overflow-y: scroll;    
}





        .mail-card:hover {
            transform: translateY(-5px);
        }

        .mail-message {
            font-size: 15px;
            margin-bottom: 15px;
            color: #444;
            line-height: 1.5;
        }

        .image_mail {
            margin-bottom: 15px;
            border-radius: 8px;
            overflow: hidden;
        }

        .image_mail img {
            width: 100%;
            display: block;
            object-fit: cover;
        }

        .mail-date {
            font-size: 13px;
            color: #777;
            text-align: right;
        }
    </style>
</head>

<body>


<?php 


if(isset( $_SESSION["send_mail"]) && $_SESSION["send_mail"] ==true){



    ?>
    <h1>📧 Liste des mails envoyés</h1>
    <!-- Menu principal -->
    <nav class="main-menu">
        <ul>
            <li><a href="ajout.php">Ajouter une nouvelle adresse mail</a></li>
            <li><a href="index.php">Envoyer un mail groupé</a></li>

        </ul>
    </nav>

    <style>
        .main-menu {
            text-align: center;
            margin-bottom: 40px;
        }

        .main-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .main-menu li {
            display: inline-block;
            margin: 0 15px;
        }

        .main-menu a {
            text-decoration: none;
            color: #2f80ed;
            font-weight: bold;
            font-size: 16px;
            padding: 8px 15px;
            border-radius: 6px;
            transition: background 0.2s, color 0.2s;
        }

        .main-menu a:hover {
            background-color: #2f80ed;
            color: #fff;
        }
        .i_plus{
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            margin-bottom: 30px;
        }
    </style>

    <div class="mail-container">
        <?php
        for ($i = 0; $i < count($message_mail_send_x); $i++) {
            echo '<div class="mail-card">'.'<div class="i_plus">'.$i.'</div>' ;

            echo '<div class="mail-message">' . AsciiConverter::asciiToString($message_mail_send_x[$i]) . '</div>';

            if ($src_mail_send_x[$i] != "") {
                echo '<div class="image_mail"><img src="uploads/' . $src_mail_send_x[$i] . '" alt="Image du mail"></div>';
            }

             $baseDate = $date_mail_send_x[$i];
            $clock = new FrenchClock($baseDate);
 

 
echo "<b>3️⃣ Posté depuis :</b> ".$clock->diffFromBaseHuman()."<br>";
 

echo '</div>' ; 



       
       
        }

    }
        ?>
    </div>
</body>

</html>