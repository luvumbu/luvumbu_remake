<?php
//session_start();
require_once "require_once.php";
$id_sha1_projet = $_SESSION["index"][4];

$header_1_pages_projet_check_box = $_POST["header_1_pages_projet_check_box"] ;
$section_1_pages_projet_check_box = $_POST["section_1_pages_projet_check_box"] ;
$footer_1_pages_projet_check_box = $_POST["footer_1_pages_projet_check_box"] ;


$header_2_pages_projet_check_box = $_POST["header_2_pages_projet_check_box"] ;
$section_2_pages_projet_check_box = $_POST["section_2_pages_projet_check_box"] ;
$footer_2_pages_projet_check_box = $_POST["footer_2_pages_projet_check_box"] ;

$header_3_pages_projet_check_box = $_POST["header_3_pages_projet_check_box"] ;
$section_3_pages_projet_check_box = $_POST["section_3_pages_projet_check_box"] ;
$footer_3_pages_projet_check_box = $_POST["footer_3_pages_projet_check_box"] ;


 







$databaseHandler = new DatabaseHandler($dbname, $username); 

    $databaseHandler->action_sql("UPDATE  `projet` SET `header_1_pages_projet_check_box` = '$header_1_pages_projet_check_box' WHERE  `id_sha1_projet` = '$id_sha1_projet'");
    $databaseHandler->action_sql("UPDATE  `projet` SET `section_1_pages_projet_check_box` = '$header_1_pages_projet_check_box' WHERE  `id_sha1_projet` = '$id_sha1_projet'");
    $databaseHandler->action_sql("UPDATE  `projet` SET `footer_1_pages_projet_check_box` = '$header_1_pages_projet_check_box' WHERE  `id_sha1_projet` = '$id_sha1_projet'");
 

    $databaseHandler->action_sql("UPDATE  `projet` SET `header_2_pages_projet_check_box` = '$header_2_pages_projet_check_box' WHERE  `id_sha1_projet` = '$id_sha1_projet'");
    $databaseHandler->action_sql("UPDATE  `projet` SET `section_2_pages_projet_check_box` = '$section_2_pages_projet_check_box' WHERE  `id_sha1_projet` = '$id_sha1_projet'");
    $databaseHandler->action_sql("UPDATE  `projet` SET `footer_2_pages_projet_check_box` = '$footer_2_pages_projet_check_box' WHERE  `id_sha1_projet` = '$id_sha1_projet'");
 

     $databaseHandler->action_sql("UPDATE  `projet` SET `header_3_pages_projet_check_box` = '$header_3_pages_projet_check_box' WHERE  `id_sha1_projet` = '$id_sha1_projet'");
     $databaseHandler->action_sql("UPDATE  `projet` SET `section_3_pages_projet_check_box` = '$section_3_pages_projet_check_box' WHERE  `id_sha1_projet` = '$id_sha1_projet'");
     $databaseHandler->action_sql("UPDATE  `projet` SET `footer_3_pages_projet_check_box` = '$footer_3_pages_projet_check_box' WHERE  `id_sha1_projet` = '$id_sha1_projet'");
 


?>