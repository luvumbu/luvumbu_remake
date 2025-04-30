<?php
require_once "require_once.php";
$id_sha1_projet = $_SESSION["index"][4];
$title_projet_toggle = $_POST["title_projet_toggle"];
$description_projet_toggle = $_POST["description_projet_toggle"];
$title_projet = AsciiConverter::stringToAscii($_POST["title_projet"]);
$description_projet = AsciiConverter::stringToAscii($_POST["description_projet"]);
$google_title_projet = AsciiConverter::stringToAscii($_POST["google_title_projet"]);
$change_meta_name_projet = AsciiConverter::stringToAscii($_POST["change_meta_name_projet"]);
$change_meta_content_projet = AsciiConverter::stringToAscii($_POST["change_meta_content_projet"]);
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->action_sql('UPDATE  `projet` SET `title_projet` = "' . $title_projet . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `description_projet` = "' . $description_projet . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `google_title_projet` = "' . $google_title_projet . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `change_meta_name_projet` = "' . $change_meta_name_projet . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `change_meta_content_projet` = "' . $change_meta_content_projet . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');

$databaseHandler->action_sql('UPDATE  `projet` SET `title_projet_toggle` = "' . $title_projet_toggle . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
$databaseHandler->action_sql('UPDATE  `projet` SET `description_projet_toggle` = "' . $description_projet_toggle . '"   WHERE  `id_sha1_projet` ="' . $id_sha1_projet . '" ');
require_once "all_pages_script.php";
$_SESSION["index"][4]  = "";

//$google_title_projet_ = replace_element_2($google_title_projet_);
$source = '../all_projet_img/' . $_SESSION["index"][4] . ".php";
$destination = '../all_projet_img/' . $google_title_projet ."_".$id_projet_. '.php';

 



  if (copy($source, $destination)) {
 
  }  
?>

