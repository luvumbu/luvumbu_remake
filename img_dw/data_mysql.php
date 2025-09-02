<?php
session_start();
header("Access-Control-Allow-Origin: *");
require_once "../Class/DatabaseHandler.php";
require_once "../Class/dbCheck.php";
$databaseHandler = new DatabaseHandler($dbname, $username);
$id_user_projet_img = $_SESSION["index"][3];
$id_sha1_user_projet = $_SESSION["index"][3];
$img_projet_src_img =  $_SESSION["name"];
$id_projet_img = $_SESSION["file_path"];
$id_sha1_projet_img = $_SESSION["index"][4];
$id_sha1_projet_ = $_SESSION["index"][3];
$id_sha1_projet = $id_sha1_projet_img;
$id_general = time() . 'x' . rand(10, 99);

$extention_img = $_SESSION["extention_img"];
 
$id_sha1_projet = $id_sha1_projet_img;
$databaseHandler->action_sql("INSERT INTO `projet_img` (extention_img,id_general,id_projet_img,id_sha1_projet_img,id_user_projet_img,img_projet_src_img) VALUES ('$extention_img','$id_general','$id_projet_img','$id_sha1_projet_img','$id_user_projet_img','$img_projet_src_img')");
$databaseHandler = new DatabaseHandler($dbname, $username);

$id_sha1_user = $_SESSION["id_sha1_user"];

 


if (isset($_SESSION["card_profil"])) {



 




    $databaseHandler->action_sql("UPDATE `$dbname` SET `img_user` = '$id_projet_img' WHERE `id_sha1_user` = '$id_sha1_projet_'");
    unset($_SESSION["card_profil"]);
} else {


    if (!isset($_SESSION["id_sha1_user"])) {
        $databaseHandler->action_sql('UPDATE  `projet` SET `img_projet_src1`               = "' . $id_projet_img . '" WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
        unset($_SESSION["id_sha1_user"]);
    } else {
        $databaseHandler->action_sql("UPDATE `profil_user` SET `img_user` = '$id_projet_img' WHERE `id_sha1_user` = '$id_sha1_user'");
        
    }
}


/* This will give an error. Note the output
 * above, which is before the header() call */
/*
require_once "../req_sql/all_pages_img.php" ; 
header('Location: ../index.php');
exit;
 */
require_once "add.php";
