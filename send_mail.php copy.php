<?php
session_start();
header("Access-Control-Allow-Origin: *");

require_once "Class/DatabaseHandler.php";
require_once "Class/dbCheck.php";
require_once "Class/AsciiConverter.php";

$id_user_mail_user =  $_SESSION["index"][3];
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
if (!empty($_FILES['images']['name'][0])) {
    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        if (is_uploaded_file($tmp_name)) {
            // Nouveau nom basé uniquement sur time()
            $extension = pathinfo($_FILES['images']['name'][$key], PATHINFO_EXTENSION);
            $fileName = time() . "." . $extension;  // <-- nom du fichier
            $destination = $uploadDir . $fileName;

            if (move_uploaded_file($tmp_name, $destination)) {
                $cid = md5($fileName);
                $attachments[] = [
                    "name" => $fileName,
                    "tmp_name" => $destination,
                    "type" => $_FILES['images']['type'][$key],
                    "cid"  => $cid,
                    "path" => $destination
                ];
            } else {
                die("❌ Erreur lors de la sauvegarde du fichier : $fileName");
            }
        }
    }
}

// --- Sujet ---
$subject = "Message de $nom_personne via $SERVER_NAME";

// --- Corps du mail ---
$htmlMessage = '<html><head><meta charset="UTF-8"></head><body>';
$htmlMessage .= "<h2>" . htmlspecialchars($subject) . "</h2>";
$htmlMessage .= "<p>" . nl2br(htmlspecialchars($textePerso)) . "</p>";

if (!empty($attachments)) {
    foreach ($attachments as $att) {
        $htmlMessage .= '<p><img src="cid:'.$att["cid"].'" style="max-width:300px;"></p>';
    }
}
$htmlMessage .= '</body></html>';

// --- MIME ---
$boundary = md5(time());
$headers  = "From: Support <support@$SERVER_NAME>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/related; boundary=\"".$boundary."\"\r\n";

// --- Partie texte ---
$body  = "--".$boundary."\r\n";
$body .= "Content-Type: text/html; charset=UTF-8\r\n";
$body .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
$body .= $htmlMessage."\r\n";

// --- Pièces jointes inline ---
foreach ($attachments as $att) {
    $fileContent = chunk_split(base64_encode(file_get_contents($att["tmp_name"])));
    $body .= "--".$boundary."\r\n";
    $body .= "Content-Type: ".$att["type"]."; name=\"".$att["name"]."\"\r\n";
    $body .= "Content-Disposition: inline; filename=\"".$att["name"]."\"\r\n";
    $body .= "Content-ID: <".$att["cid"].">\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= $fileContent."\r\n";
}
$body .= "--".$boundary."--";

// --- Envoi ---
$to = implode(",", $destinataires);
if (mail($to, $subject, $body, $headers)) {
    echo "✅ E-mail envoyé avec succès à ".implode(", ", $destinataires)."<br>";
    
    $_SESSION["send_mail"]  = true;

    // --- Sauvegarde du message en ASCII dans send_mail ---
    $htmlMessageAscii = AsciiConverter::stringToAscii(nl2br(htmlspecialchars($textePerso)));
    $databaseHandler = new DatabaseHandler($dbname, $username);
     // --- Sauvegarde des emails dans info_send_mail sous forme de string ---
    $emailsString = implode(",", $destinataires);
    $databaseHandler->action_sql("INSERT INTO `send_mail` (`text_send_mail`,`info_send_mail`) VALUES ('$htmlMessageAscii',$emailsString);");

  

} else {
    echo "❌ Échec de l'envoi.";
    $_SESSION["send_mail"]  = false;
}
?>

<script>
const myTimeout = setTimeout(myGreeting, 3000);

function myGreeting() {
     window.location.replace("total_mail.php");
}
</script>
