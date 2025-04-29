<?php


require_once "require_once2.php";
$date_inscription_visit = date("Y-m-d H:i:s");



$databaseHandler = new DatabaseHandler($dbname, $username);
$time = time() . '_' . rand(1000, 9999);




$INDEX_3 =  $_SESSION["index"][3];


$PHP_SELF = $_SERVER['PHP_SELF'];
$SERVER_NAME = $_SERVER['SERVER_NAME'];
$HTTP_HOST = $_SERVER['HTTP_HOST'];
$HTTP_REFERER = $_SERVER['HTTP_REFERER'];
$HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT'];
$SCRIPT_NAME = $_SERVER['SCRIPT_NAME'];

$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];
if (!isset($_SESSION["index"])) {




    $databaseHandler->action_sql("INSERT INTO `visit` (
    id_ip_0,
    id_ip_1,
    id_ip_2,
    id_ip_3,
    id_ip_4,
    id_ip_5,
    id_ip_6,
    id_ip_7,
    REMOTE_ADDR,
    
    date_inscription_visit 
    
    ) VALUES (
    '$url_',
    '$time',
    '$PHP_SELF',
    '$SERVER_NAME',
    '$HTTP_HOST',
    '$HTTP_REFERER',
    '$HTTP_USER_AGENT',
    '$SCRIPT_NAME',
    '$REMOTE_ADDR',
    '$date_inscription_visit' 
    
    )");
} else {

    $databaseHandler->action_sql("INSERT INTO `log` (

        id_ip_0,
        id_ip_1,
        id_ip_2,
        id_ip_3,
        id_ip_4,
        id_ip_5,
        id_ip_6,
        id_ip_7,
        id_ip_8,
        REMOTE_ADDR,
        date_inscription_visit 
        
        ) VALUES (
        '$url_',
        '$time',
        '$PHP_SELF',
        '$SERVER_NAME',
        '$HTTP_HOST',
        '$HTTP_REFERER',
        '$HTTP_USER_AGENT',
        '$INDEX_3',
        '$SCRIPT_NAME',
        '$REMOTE_ADDR',

        
        '$date_inscription_visit' 
        
        )");
}
