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
            max-height: 120px; /* Hauteur initiale réduite */
            overflow: hidden;
            position: relative;
        }

        .mail-card:hover {
            transform: translateY(-5px);
        }

        .mail-card.expanded {
            max-height: none; /* Supprime la limite quand on clique */
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

        .see-more-btn {
            display: block;
            margin-top: 10px;
            background-color: #2f80ed;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }

        .see-more-btn:hover {
            background-color: #1c5bbf;
        }

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

    <div class="mail-container">
        <?php
        for ($i = 0; $i < count($message_mail_send_x); $i++) {
            echo '<div class="mail-card">';
      echo '<button class="see-more-btn">Voir plus</button>';
            // Message du mail
            echo '<div class="mail-message">' . AsciiConverter::asciiToString($message_mail_send_x[$i]) . '</div>';

            // Image si disponible
            if ($src_mail_send_x[$i] != "") {
                echo '<div class="image_mail"><img src="uploads/' . $src_mail_send_x[$i] . '" alt="Image du mail"></div>';
            }

            // Date
            $baseDate = $date_mail_send_x[$i];
            $clock = new FrenchClock($baseDate);
            echo "<b>3️⃣ Posté depuis :</b> ".$clock->diffFromBaseHuman()."<br>";

            // Bouton Voir plus
      

            echo '</div>'; // fermeture mail-card
        }
        ?>
    </div>

    <script>
        document.querySelectorAll('.see-more-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const card = btn.parentElement;
                card.classList.toggle('expanded');
                btn.textContent = card.classList.contains('expanded') ? 'Voir moins' : 'Voir plus';
            });
        });
    </script>

    <?php 


}


?>
</body>
</html>
