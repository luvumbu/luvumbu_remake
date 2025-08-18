<?php 


session_start() ; 


include_once "Class/DatabaseHandler.php" ; 
include_once "Class/AsciiConverter.php" ; 

include_once "Class/js.php" ; 
if(isset($_SESSION["index"])){

require_once "add_style_index.php" ;
}    
else{
    
  header('Location: index.php');
  exit();
 
}

?>