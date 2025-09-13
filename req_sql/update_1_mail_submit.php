<?php
//session_start();
require_once "require_once.php";
$id_user_mail_user = $_SESSION["index"][3];
$activation_mail_user = $_POST["activation_mail_user"];
$id_mail_user = $_POST["id_mail_user"] ; 
$databaseHandler = new DatabaseHandler($dbname, $username); 
$databaseHandler->action_sql("UPDATE  `mail_user` SET `activation_mail_user` = '$activation_mail_user' WHERE  `id_mail_user` = '$id_mail_user'");
?>