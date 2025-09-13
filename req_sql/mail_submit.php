<?php
session_start();
require_once "require_once.php";
$id_user_mail_user = $_SESSION["index"][3];
$name_mail_user = $_POST["name_mail_user"];
$info_mail_user = $_POST["info_mail_user"];

$db = new DatabaseHandler($dbname, $username);
$id_user_mail_user =  $_SESSION["index"][3];
$req_sql = "SELECT * FROM `mail_user` WHERE `id_user_mail_user`='$id_user_mail_user'";
// Appel de la fonction
$result = $db->know_variables_name("mail_user", "_x", $req_sql);

 

if (in_array($info_mail_user, $info_mail_user_x)) {

    $_SESSION["info_mail"] = '<div class="alert alert-danger" role="alert">
  L\'adresse existe déja elle na pas été ajouté 
</div>';
} else {

    $_SESSION["info_mail"] = '<div class="alert alert-success" role="alert">
  ajout avec succes
</div>';
    $databaseHandler = new DatabaseHandler($dbname, $username);
    $databaseHandler->action_sql("INSERT INTO  `mail_user` (`name_mail_user`,`info_mail_user`,`id_user_mail_user`) VALUES ('$name_mail_user','$info_mail_user','$id_user_mail_user');");



  }
?>