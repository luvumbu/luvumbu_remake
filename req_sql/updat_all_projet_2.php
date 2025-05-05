<?php
require_once "require_once.php" ;

 

 $id_sha1_projet = $_POST['idSha1ProjetBoucle'];

 $google_title_projet_boucle = $_POST['google_title_projet_boucle'];




 $_SESSION["idSha1ProjetBoucle_"] = $_POST['idSha1ProjetBoucle'];

 $_SESSION["google_title_projet_boucle_"] = AsciiConverter::asciiToString($_POST['google_title_projet_boucle']);;
require "all_pages_script.php"; 

 


?>