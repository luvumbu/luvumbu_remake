<?php
session_start();
header("Access-Control-Allow-Origin: *");

require_once "Class/DatabaseHandler.php";
require_once "Class/dbCheck.php";
require_once "Class/AsciiConverter.php";

// --- Fuseau horaire européen ---
date_default_timezone_set('Europe/Paris'); // Paris/Bruxelles
$date_inscription_send_mail = date('Y-m-d H:i:s'); // format MySQL DATETIME

$id_user_mail_user   = $_SESSION["index"][3];
$info_plus_1_send_mail = $_SESSION["index"][3];

$db = new DatabaseHandler($dbname, $username);
$req_sql = "SELECT * FROM `mail_user` WHERE `id_user_mail_user`='$id_user_mail_user' AND `activation_mail_user`='1'";
$result = $db->know_variables_name("mail_user", "_x", $req_sql);

// --- Infos ---
$nom_personne  = "Ndenga luvumbu";
$SERVER_NAME   = $_SERVER['SERVER_NAME'];

// --- Destinataires ---
$destinataires = $info_mail_user_x;  // tableau récupéré de la BDD

// --- Message ---
$textePerso = isset($_POST['message']) ? trim($_POST['message']) : "";
if (empty($textePerso)) {
    die("Erreur : vous devez saisir un message.");
}

// --- Dossier permanent ---
$uploadDir = __DIR__ . "/uploads/";
if (!is_dir($uploadDir)) {
    if (!mkdir($uploadDir, 0777, true)) {
        die("❌ Impossible de créer le dossier uploads/");
    }
}

// --- Récupération et sauvegarde des fichiers ---
$attachments = [];
if (!empty($_FILES['fichiers']['name'][0])) {
    foreach ($_FILES['fichiers']['tmp_name'] as $key => $tmp_name) {
        if (is_uploaded_file($tmp_name)) {
            $originalName = basename($_FILES['fichiers']['name'][$key]);
            $extension    = pathinfo($originalName, PATHINFO_EXTENSION);
            $fileName     = time() . "_" . $key . "." . $extension;
            $destination  = $uploadDir . $fileName;

            if (move_uploaded_file($tmp_name, $destination)) {
                $cid = md5($fileName);
                $attachments[] = [
                    "name" => $fileName,
                    "original" => $originalName,
                    "tmp_name" => $destination,
                    "type" => $_FILES['fichiers']['type'][$key],
                    "cid"  => $cid,
                    "path" => $destination
                ];
            } else {
                die("❌ Erreur lors de la sauvegarde du fichier : $originalName");
            }
        }
    }
}

// --- Préparation de info_plus_2_send_mail ---
$info_plus_2_send_mail = '';
if (!empty($attachments)) {
    $fileNames = [];
    foreach ($attachments as $att) {
        $fileNames[] = $att['name'];  // nom final sauvegardé
    }
    $info_plus_2_send_mail = implode(",", $fileNames);
    $info_plus_2_send_mail = addslashes($info_plus_2_send_mail);
}

// --- Sujet ---
$subject = "Message de $nom_personne via $SERVER_NAME";

// --- Corps du mail ---
$htmlMessage = '<html><head><meta charset="UTF-8"></head><body>';
$htmlMessage .= "<h2>" . htmlspecialchars($subject) . "</h2>";
$htmlMessage .= "<p>" . nl2br(htmlspecialchars($textePerso)) . "</p>";

// 🔑 Si c’est une image, on l’affiche inline
if (!empty($attachments)) {
    foreach ($attachments as $att) {
        if (strpos($att["type"], "image/") === 0) {
            $htmlMessage .= '<p><img src="cid:'.$att["cid"].'" style="max-width:300px;"></p>';
        } else {
            $htmlMessage .= "<p>📎 Pièce jointe : " . htmlspecialchars($att["original"]) . "</p>";
        }
    }
}
$htmlMessage .= '</body></html>';

// --- MIME ---
$boundary = md5(time());
$headers  = "From: Support <support@$SERVER_NAME>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"".$boundary."\"\r\n";

// --- Partie texte ---
$body  = "--".$boundary."\r\n";
$body .= "Content-Type: text/html; charset=UTF-8\r\n";
$body .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
$body .= $htmlMessage."\r\n";

// --- Pièces jointes ---
foreach ($attachments as $att) {
    $fileContent = chunk_split(base64_encode(file_get_contents($att["tmp_name"])));
    $body .= "--".$boundary."\r\n";
    $body .= "Content-Type: ".$att["type"]."; name=\"".$att["original"]."\"\r\n";

    if (strpos($att["type"], "image/") === 0) {
        // Image inline
        $body .= "Content-Disposition: inline; filename=\"".$att["original"]."\"\r\n";
        $body .= "Content-ID: <".$att["cid"].">\r\n";
    } else {
        // Autres fichiers : en pièce jointe
        $body .= "Content-Disposition: attachment; filename=\"".$att["original"]."\"\r\n";
    }

    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= $fileContent."\r\n";
}
$body .= "--".$boundary."--";

// --- Envoi ---
$to = implode(",", $destinataires);
if (mail($to, $subject, $body, $headers)) {
    echo "✅ E-mail envoyé avec succès à ".implode(", ", $destinataires)."<br>";
    $_SESSION["send_mail"] = true;

    // --- Sauvegarde du message et informations dans send_mail ---
    $htmlMessageAscii = AsciiConverter::stringToAscii(nl2br(htmlspecialchars($textePerso)));
    $emailsString = implode(",", $destinataires);
    $emailsString = addslashes($emailsString);

    $databaseHandler = new DatabaseHandler($dbname, $username);
    $databaseHandler->action_sql(
        "INSERT INTO `send_mail` 
        (`text_send_mail`, `info_send_mail`, `info_plus_1_send_mail`, `info_plus_2_send_mail`, `date_inscription_send_mail`) 
        VALUES ('$htmlMessageAscii', '$emailsString', '$info_plus_1_send_mail', '$info_plus_2_send_mail', '$date_inscription_send_mail');"
    );

} else {
    echo "❌ Échec de l'envoi.";
    $_SESSION["send_mail"] = false;
}
?>

<script>
const myTimeout = setTimeout(myGreeting, 300);
function myGreeting() {
     window.location.replace("total_mail.php");
}
</script>
