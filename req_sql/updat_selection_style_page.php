<?php
//session_start();
require_once "require_once.php";

 
 
 $id_sha1_projet = $_SESSION["index"][4];




$header_1_pages_projet = $_POST["header_1_pages_projet"] ; 
$section_1_pages_projet = $_POST["section_1_pages_projet"] ; 
$footer_1_pages_projet = $_POST["footer_1_pages_projet"] ; 



if(isset( $_POST["header_1_pages_projet"])){

    $header_1_pages_projet = $_POST["header_1_pages_projet"] ; 
    $section_1_pages_projet = $_POST["section_1_pages_projet"] ; 
    $footer_1_pages_projet = $_POST["footer_1_pages_projet"] ; 

    $databaseHandler = new DatabaseHandler($dbname, $username); 
    $databaseHandler->action_sql("UPDATE  `projet` SET `header_1_pages_projet` = '$header_1_pages_projet' WHERE  `id_sha1_projet` = '$id_sha1_projet'");
    $databaseHandler->action_sql("UPDATE  `projet` SET `section_1_pages_projet` = '$section_1_pages_projet' WHERE  `id_sha1_projet` = '$id_sha1_projet'");
    $databaseHandler->action_sql("UPDATE  `projet` SET `footer_1_pages_projet` = '$footer_1_pages_projet' WHERE  `id_sha1_projet` = '$id_sha1_projet'");




}
else{


    if(isset( $_POST["header_2_pages_projet"])){

    $header_2_pages_projet = $_POST["header_2_pages_projet"] ; 
    $section_2_pages_projet = $_POST["section_2_pages_projet"] ; 
    $footer_2_pages_projet = $_POST["footer_2_pages_projet"] ; 

    $databaseHandler = new DatabaseHandler($dbname, $username); 
    $databaseHandler->action_sql("UPDATE  `projet` SET `header_2_pages_projet` = '$header_2_pages_projet' WHERE  `id_sha1_projet` = '$id_sha1_projet'");
    $databaseHandler->action_sql("UPDATE  `projet` SET `section_2_pages_projet` = '$section_2_pages_projet' WHERE  `id_sha1_projet` = '$id_sha1_projet'");
    $databaseHandler->action_sql("UPDATE  `projet` SET `footer_2_pages_projet` = '$footer_2_pages_projet' WHERE  `id_sha1_projet` = '$id_sha1_projet'");



    }
    else{


    $header_3_pages_projet = $_POST["header_3_pages_projet"] ; 
    $section_3_pages_projet = $_POST["section_3_pages_projet"] ; 
    $footer_3_pages_projet = $_POST["footer_3_pages_projet"] ; 

    $databaseHandler = new DatabaseHandler($dbname, $username); 
    $databaseHandler->action_sql("UPDATE  `projet` SET `header_3_pages_projet` = '$header_3_pages_projet' WHERE  `id_sha1_projet` = '$id_sha1_projet'");
    $databaseHandler->action_sql("UPDATE  `projet` SET `section_3_pages_projet` = '$section_3_pages_projet' WHERE  `id_sha1_projet` = '$id_sha1_projet'");
    $databaseHandler->action_sql("UPDATE  `projet` SET `footer_3_pages_projet` = '$footer_3_pages_projet' WHERE  `id_sha1_projet` = '$id_sha1_projet'");



    }

  


}

 
?>