<?php
session_start();

require_once '../Class/give_url.php';
require_once '../Class/path_config.php';
require_once '../Class/DatabaseHandler.php';
require_once '../Class/dbCheck.php';

$username_ = $_POST["username"] ; 
 
$req_sql = 'SELECT * FROM `'.$dbname.'` WHERE `nom_user` ="'.$username_.'" ' ;
 
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->getDataFromTable($req_sql, "id_user");
$id_user = $databaseHandler->tableList_info;



 
 

 
if($id_user[0]!=""){



if (isset($_POST["username"])) {
    $username = htmlspecialchars($_POST["username"], ENT_QUOTES, 'UTF-8');
    $_SESSION["session_general"][0] = $username;
    echo "Username: " . $username . "<br>";
    echo "Session General: " . $_SESSION["session_general"][0] . "<br>";
} else {
    echo "Le champ username est vide ou non défini.<br>";
}

$SERVER_NAME = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'nom_du_site_par_defaut';

$to = $_POST["username"];
$subject = 'Confirmation de la validation de votre inscription sur ' . $SERVER_NAME;

$message = '
<html>
<head>
  <title>Confirmation d\'inscription</title>
  <style>
    body { font-family: Arial, sans-serif; background-color: #f4f4f4; }
    .container { max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; }
    .header { background: #000; color: #fff; padding: 10px; text-align: center; }
    .btn { padding: 10px 20px; background: #000; color: #fff; text-decoration: none; border-radius: 5px; }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Bienvenue sur ' . $SERVER_NAME . '</h1>
    </div>
    <p>Bonjour,</p>
    <p>Nous avons le plaisir de vous informer que votre inscription sur <strong>' . $SERVER_NAME . '</strong> a été validée avec succès.</p>
    <a href="http://' . $SERVER_NAME . '/activation_info.php" class="btn">Accéder à mon compte</a>
  </div>
</body>
</html>';

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: support@' . $SERVER_NAME . "\r\n";
$headers .= 'Reply-To: support@' . $SERVER_NAME . "\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo '<div class="notification">E-mail envoyé avec succès.</div>';
} else {
    echo '<div class="notification">Échec de l\'envoi de l\'e-mail.</div>';
}
 
}
else {
  echo "ERROR" ; 
}
 
?>
