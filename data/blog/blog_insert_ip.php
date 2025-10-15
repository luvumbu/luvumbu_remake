<?php 
// -----------------------
// Exemple d’utilisation
$tracker = new SessionTracker();
// Affichage global sur une seule ligne
// Affichage individuel
$ip = $tracker->getIp();
$host = $tracker->getHost();
$port = $tracker->getPort();
$userAgent = $tracker->getUserAgent();
$browser = $tracker->getBrowser();
$os = $tracker->getOs();
$language = $tracker->getLanguage();
$referer = $tracker->getReferer();
$method = $tracker->getPreviousPage();
$serverIp = $tracker->getMethod();
$serverName = $tracker->getServerIp();
$uri = $tracker->getServerName();
$protocol = $tracker->getUri();
$https = $tracker->getProtocol();
$visitDate = $tracker->getHttps();

if (isset($_SESSION["index"][3])) {
  $info = $_SESSION["index"][3];
} else {
  $info = "";
}

$date_inscription_visit = date("Y-m-d H:i:s");
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
    `id_ip_1`,
    `id_ip_2`



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
    '$url_',
    '$info'
);");

?>