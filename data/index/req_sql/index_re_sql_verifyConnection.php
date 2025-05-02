<?php

session_start() ; 
header("Access-Control-Allow-Origin: *");
require_once '../../../Class/DatabaseHandler.php'; 
require_once '../../../Class/dbCheck.php'; 

$servername = "localhost";
$dbname_ =$_POST["dbname"] ;
$username_ =$_POST["username"] ;
 
$_SESSION["pass"][0] =  $dbname; 
 if($dbname!=$dbname_){
    $username_=  sha1($username_) ; 
 }


 
 
$req_sql = 'SELECT * FROM `'.$dbname.'` WHERE `nom_user`="'.$dbname_.'" AND `password_user`="'.$username_.'" ';

$databaseHandler = new DatabaseHandler($dbname, $username);



$databaseHandler->getListOfTables_Child($dbname);
$databaseHandler->getDataFromTable2X($req_sql);
$databaseHandler->get_dynamicVariables();
 
$id_user = $dynamicVariables['id_user'][0];
$id_sha1_user = $dynamicVariables['id_sha1_user'][0] ;




if(count($dynamicVariables['id_user'])>0){
    $_SESSION["index"] = array($dbname_, $username_,$id_user,$id_sha1_user);

}
 
 




 
?>