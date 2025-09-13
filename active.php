<?php
 
require_once "Class/DatabaseHandler.php";
require_once "Class/fichierExiste.php";
require_once "Class/AsciiConverter.php";
require_once "Class/dbCheck.php";
require_once "Class/Give_url.php";
require_once "Class/SessionTracker.php";

date_default_timezone_set('Europe/Paris');
 
$now = date('Y-m-d H:i:s');


// Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
$url = new Give_url();
// Utilisation de la méthode split_basename pour séparer par "_"
$url->split_basename('__');
$url_ = $url->get_elements()[0];

$google_title_projet= AsciiConverter::stringToAscii($url_);
 

 

 
$table_name ="projet" ; 
 
$db = new DatabaseHandler($dbname, $username);
$id_user_mail_user =  $_SESSION["index"][3];
$req_sql = "SELECT * FROM `$table_name` WHERE `google_title_projet`='$google_title_projet'";
// Appel de la fonction
$result = $db->know_variables_name($table_name, "_x", $req_sql);

 
 

 
 
 

if($google_title_projet_x>0){
 
 
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->action_sql("INSERT INTO  `visit`

 ( 
`id_ip_0`,
`id_ip_1`,
`id_ip_2`,
`id_ip_3`,
`id_ip_4`,

`id_ip_5`,
`id_ip_6`,
`id_ip_7`,
`id_ip_8`,
`id_ip_9`,

`id_ip_10`,
`id_ip_11`,
`id_ip_12`,
`id_ip_13`,
`id_ip_14`,
`id_ip_15`,
`date_inscription_visit`  



) VALUES (

'$ip',
'$host',
'$port',
'$browser',
'$os',
'$userAgent',

'$language',
'$referer',
'$method',
'$serverIp',
'$serverName',

'$uri',
'$protocol',
'$https',
'$visitDate',
'$now',
'$now'


);");





// Affichage
echo "IP : $ip <br>";
echo "Nom d'hôte : $host <br>";
echo "Port : $port <br>";
echo "Navigateur : $browser <br>";
echo "OS : $os <br>";
echo "User-Agent : $userAgent <br>";
echo "Langue : $language <br>";
echo "Referer : $referer <br>";
echo "Méthode : $method <br>";
echo "Serveur IP : $serverIp <br>";
echo "Nom serveur : $serverName <br>";
echo "Page demandée : $uri <br>";
echo "Protocole : $protocol <br>";
echo "HTTPS : $https <br>";
echo "Date de visite : $visitDate <br>";
 

$id_sha1_projet_x_ =$id_sha1_projet_x[0] ; 
// Redirection vers une autre page du site
header("Location: ../blog.php/$id_sha1_projet_x_");
exit; // Toujours mettre exit après une redirection
 
}
else{
    echo "VIDE"; 
}
