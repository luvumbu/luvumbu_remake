 
<?php

require_once "require_once.php";


$img_activate =       $_POST["img_activate"];
$id_projet_img = $_POST["id_projet_img"];
$databaseHandler = new DatabaseHandler($dbname, $username);
$databaseHandler->action_sql('UPDATE  `projet_img` SET `img_activate` = "' . $img_activate . '"               WHERE  `id_projet_img` ="' . $id_projet_img . '" ');

require_once "all_pages_script.php"; 
?>

 
 


 

 