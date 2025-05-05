<?php
session_start();
$idSha1ProjetBoucle_ = $_SESSION["idSha1ProjetBoucle_"];
$google_title_projet_boucle_ = $_SESSION["google_title_projet_boucle_"];
//$source = 'all_projet_img/' . $_SESSION["index"][4] . ".php";



$source = '../all_projet/' . $idSha1ProjetBoucle_ . '.php';
//$destination = 'all_projet_img/' . $google_title_projet_ . '.php';
$destination = '../all_projet/' . $google_title_projet_boucle_ . '.php';
copy($source, $destination);

?>
