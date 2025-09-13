 
<?php

require_once "require_once.php";

$title_user =       $_POST["title_user"];
$description_user = $_POST["description_user"];

$info_user_1 = $_POST["info_user_1"];
$info_user_2 = $_POST["info_user_2"];
$info_user_3 = $_POST["info_user_3"];
 

$id_sha1_user = $_SESSION["index"][3] ; 
$title_user =        AsciiConverter::stringToAscii($title_user); // Affiche "72,101,108,108,111"
$description_user =  AsciiConverter::stringToAscii($description_user); // Affiche "72,101,108,108,111"
 
$info_user_1 = AsciiConverter::stringToAscii($info_user_1);  
$info_user_2 = AsciiConverter::stringToAscii($info_user_2);  
$info_user_3 = AsciiConverter::stringToAscii($info_user_3);  
 


$databaseHandler = new DatabaseHandler($dbname, $username);

$databaseHandler->action_sql('UPDATE  `' . $dbname . '` SET `title_user` = "' . $title_user . '"               WHERE  `id_sha1_user` ="' . $id_sha1_user . '" ');
$databaseHandler->action_sql('UPDATE  `' . $dbname . '` SET `description_user` = "' . $description_user . '"   WHERE  `id_sha1_user` ="' . $id_sha1_user . '" ');



$databaseHandler->action_sql('UPDATE  `' . $dbname . '` SET `info_user_1` = "' . $info_user_1 . '"   WHERE  `id_sha1_user` ="' . $id_sha1_user . '" ');
$databaseHandler->action_sql('UPDATE  `' . $dbname . '` SET `info_user_2` = "' . $info_user_2 . '"   WHERE  `id_sha1_user` ="' . $id_sha1_user . '" ');
$databaseHandler->action_sql('UPDATE  `' . $dbname . '` SET `info_user_3` = "' . $info_user_3 . '"   WHERE  `id_sha1_user` ="' . $id_sha1_user . '" ');

?>


 