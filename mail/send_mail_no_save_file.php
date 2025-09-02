<?php
session_start();
header("Access-Control-Allow-Origin: *");



require_once "../Class/DatabaseHandler.php" ;
require_once "../Class/dbCheck.php" ;
require_once "../Class/AsciiConverter.php" ;

 

 

 
 
$db = new DatabaseHandler($dbname, $username);
$req_sql = "SELECT DISTINCT `nom_adresse_mail_coops` FROM `adresse_mail_coops` WHERE 1;";
// Appel de la fonction
$result = $db->know_variables_name("adresse_mail_coops", "_x", $req_sql);
 
 
 
 
 




 




 
// --- Infos de base ---
$nom_personne  = "Coop à fourchon";
$name          = "_";
$SERVER_NAME   = $_SERVER['SERVER_NAME'];

// --- Destinataires (toujours contact@bokonzi.com + autres si besoin) ---

   

$destinataires = ["luvumbu.n@gmail.com"];

//$destinataires = $nom_adresse_mail_coops_x;

// --- Récupération du texte ---
$textePerso = isset($_POST['message']) ? trim($_POST['message']) : "";
if (empty($textePerso)) {
    die("Erreur : vous devez saisir un message.");
}

// --- Récupération du fichier image (upload via formulaire) ---
$attachments = [];
if (!empty($_FILES['images']['name'][0])) {
    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        if (is_uploaded_file($tmp_name)) {
            $attachments[] = [
                "name" => $_FILES['images']['name'][$key],
                "tmp_name" => $tmp_name,
                "type" => $_FILES['images']['type'][$key]
            ];
        }
    }
}

// --- Sujet + lien ---
$subject = "Message de $nom_personne via $SERVER_NAME";
$link    = "https://$SERVER_NAME/we_transfert/all_doc.php/$name";

// --- Corps du mail HTML ---
$htmlMessage = '
<html>
<head>
  <meta charset="UTF-8">
  <title>' . htmlspecialchars($subject) . '</title>
</head>
<body>
  <h2>' . htmlspecialchars($subject) . '</h2>
  <p>' . nl2br(htmlspecialchars($textePerso)) . '</p>
 
</body>
</html>';

// --- Construction MIME ---
$boundary = md5(time());
$headers  = "From: Support <support@$SERVER_NAME>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"".$boundary."\"\r\n";

// --- Message principal ---
$body  = "--".$boundary."\r\n";
$body .= "Content-Type: text/html; charset=UTF-8\r\n";
$body .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
$body .= $htmlMessage."\r\n";

// --- Ajout des pièces jointes ---
foreach ($attachments as $att) {
    $fileContent = chunk_split(base64_encode(file_get_contents($att["tmp_name"])));
    $body .= "--".$boundary."\r\n";
    $body .= "Content-Type: ".$att["type"]."; name=\"".$att["name"]."\"\r\n";
    $body .= "Content-Disposition: attachment; filename=\"".$att["name"]."\"\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= $fileContent."\r\n";
}

// Fin du message
$body .= "--".$boundary."--";

// Envoi
$to = implode(",", $destinataires);
if (mail($to, $subject, $body, $headers)) {
    echo "✅ E-mail envoyé avec succès à ".implode(", ", $destinataires);

$htmlMessage =  AsciiConverter::stringToAscii(nl2br(htmlspecialchars($textePerso)));
 
$databaseHandler = new DatabaseHandler($dbname, $username);
 
$databaseHandler->action_sql("INSERT INTO  `mail_send` (`message_mail_send`) VALUES ('$htmlMessage');");

 
/*
// Exemple d'utilisation
$asciiString = "72, 101, 108, 108, 111";
$string = "Hello";
// Conversion de ASCII à chaîne de caractères
echo AsciiConverter::asciiToString($asciiString); // Affiche "Hello"

// Conversion de chaîne de caractères à ASCII
echo AsciiConverter::stringToAscii($string); // Affiche "72,101,108,108,111"
*/








} else {
    echo "❌ Échec de l'envoi.";
}
 
?>
