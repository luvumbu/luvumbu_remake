<?php

require_once "data/all/requare_one_1.php";
require_once "Class/SessionTracker.php" ; 
 date_default_timezone_set('Europe/Paris');
// Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
$url = new Give_url();
// Utilisation de la méthode split_basename pour séparer par "_"
$url->split_basename('__');
$url_ = $url->get_elements()[0];
$change_meta_name_projet =    AsciiConverter::stringToAscii($url_);
/*
// Exemple d'utilisation
$asciiString = "72, 101, 108, 108, 111";
$string = "Hello";
// Conversion de ASCII à chaîne de caractères
echo AsciiConverter::asciiToString($asciiString); // Affiche "Hello"

// Conversion de chaîne de caractères à ASCII
echo AsciiConverter::stringToAscii($string); // Affiche "72,101,108,108,111"
*/

 

 
 // -----------------------
// Exemple d’utilisation

$tracker = new SessionTracker();

// Affichage global sur une seule ligne
 
 

    $ip=$tracker->getIp();
    $host=$tracker->getHost();
    $port=$tracker->getPort();
    $userAgent=$tracker->getUserAgent();
    $browser=$tracker->getBrowser();
    $os=$tracker->getOs();
    $language=$tracker->getLanguage();
    $referer=$tracker->getReferer();
    $method=$tracker->getPreviousPage();
    $serverIp=$tracker->getMethod();
    $serverName= $tracker->getServerIp();
    $uri=$tracker->getServerName();
    $protocol= $tracker->getUri();
    $https=$tracker->getProtocol();
    $visitDate=$tracker->getHttps();

 


$date_inscription_visit = date("Y-m-d H:i:s") ; 
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->action_sql("INSERT INTO  `visite` (
    `ip`,
    `host`,
    `port`,
    `userAgent`,
    `browser`,
    `os`,
    `language`,
    `referer`,
    `method`,
    `serverIp`,
    `serverName`,
    `uri`,
    `protocol`,
    `https`,
    `visitDate`,
    `date_inscription_visit`,
    `id_ip_1`



) VALUES (
    '$ip',
    '$host',
    '$port',
    '$userAgent',
    '$browser',
    '$os',
    '$language',
    '$referer',
    '$method',
    '$serverIp',
    '$serverName',
    '$uri',
    '$protocol',
    '$https',
    '$visitDate',
    '$date_inscription_visit',
    '$url_'
);");
 



  $nom_table="projet" ; 
$db = new DatabaseHandler($dbname, $username);
$id_user_mail_user =  $_SESSION["index"][3];
 
$req_sql = "SELECT * FROM `$nom_table` WHERE `change_meta_name_projet` LIKE '%$change_meta_name_projet%'";

// Appel de la fonction
$result = $db->know_variables_name($nom_table, "", $req_sql);






 

 if(!$id_sha1_projet){
 
    header('Location: ../index.php');
    
  exit();

 
 
  
}
else{
   
   $_SESSION["password_projet"] = $password_projet[0] ; 
     header('Location: ../blog.php/'.$id_sha1_projet[0].'');
  exit();
 
 
}



 
?>