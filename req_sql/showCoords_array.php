<?php
require_once "require_once.php";
$id_sha1_projet = $_SESSION["index"][4];





 
 
$showCoords_array_event_clientX = $_POST["showCoords_array_event_clientX"];
$showCoords_array_event_clientY = $_POST["showCoords_array_event_clientY"];

$showCoords_array_url = $_POST["showCoords_array_url"];
$showCoords_array_ip = $_POST["showCoords_array_ip"];
$showCoords_array_user_id = $_POST["showCoords_array_user_id"];
 



if($showCoords_array_event_clientX!=""){

    $databaseHandler = new DatabaseHandler($dbname, $username);
    $time = time().'_'.rand(10,99);
    $databaseHandler->action_sql("INSERT INTO `showcoords` (
    showCoords_array_event_clientX,
    showCoords_array_event_clientY,
    showCoords_array_url,
    showCoords_array_ip,
    showCoords_array_user_id 
    
    
    ) 
    VALUES (
    '$showCoords_array_event_clientX',
    '$showCoords_array_event_clientY', 
    '$showCoords_array_url', 
    '$showCoords_array_ip', 
    '$showCoords_array_user_id'  
    
    )");
}


 
