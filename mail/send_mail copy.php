<?php
session_start();
header("Access-Control-Allow-Origin: *");

require_once "../Class/DatabaseHandler.php";
require_once "../Class/dbCheck.php";
require_once "../Class/AsciiConverter.php";




$db = new DatabaseHandler($dbname, $username);
$req_sql = "SELECT DISTINCT `nom_adresse_mail_coops` FROM `adresse_mail_coops` WHERE 1;";
// Appel de la fonction
$result = $db->know_variables_name("adresse_mail_coops", "_x", $req_sql);


// --- Infos ---
$nom_personne  = "Coop à fourchon";
$name          = "_";
$SERVER_NAME   = $_SERVER['SERVER_NAME'];
//$destinataires = ["luvumbu.n@gmail.com"];
$destinataires = $nom_adresse_mail_coops_x;

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

// --- Récupération et sauvegarde ---
$attachments = [];
if (!empty($_FILES['images']['name'][0])) {
    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        if (is_uploaded_file($tmp_name)) {
            $fileName = time() . "_" . basename($_FILES['images']['name'][$key]);
            $destination = $uploadDir . $fileName;

            if (move_uploaded_file($tmp_name, $destination)) {
                // ✅ fichier bien sauvegardé
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
        $url = "https://$SERVER_NAME/uploads/" . urlencode($att["name"]);
 
        // affichage inline
        $htmlMessage .= '<p><img src="cid:'.$att["cid"].'" style="max-width:300px;"></p>';
    }
    $htmlMessage .= "</ul>";
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
    
    
    $_SESSION["send_mail"]  =true ;
    foreach ($attachments as $att) {
   
    }

    // Sauvegarde du message en ASCII
    $htmlMessageAscii = AsciiConverter::stringToAscii(nl2br(htmlspecialchars($textePerso)));
    $databaseHandler = new DatabaseHandler($dbname, $username);
    $databaseHandler->action_sql("INSERT INTO  `mail_send` (`message_mail_send`) VALUES ('$htmlMessageAscii');");

} else {
    echo "❌ Échec de l'envoi.";
    $_SESSION["send_mail"]  =false ;
}
?>



<script>

    const myTimeout = setTimeout(myGreeting, 300);

function myGreeting() {
    alert() ; 
     window.location.replace("total_mail.php");

}


</script>