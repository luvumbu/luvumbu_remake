<?php 
require_once "require_once.php" ; 
$id_sha1_projet =  $_SESSION["index"][4] ; 
require_once "all_pages_script.php" ; 
$google_title_projet_ = AsciiConverter::asciiToString($google_title_projet_dyn_name[0]);
var_dump( $google_title_projet_ ) ; 



$source = '../all_projet/' . $_SESSION["index"][4] . ".php";





 

if (file_exists($source)) {
    $destination = '../all_projet_img/' . $google_title_projet_ . "_" .$id_projet_dyn_name[0] . '.php';
    copy($source, $destination) ;
    $source = '../all_projet/' . $_SESSION["index"][4] . ".php";
    
    $destination = '../all_projet/' . $google_title_projet_ . "_" . $id_projet_dyn_name[0] . '.php';
    copy($source, $destination);
   
    $name_ = $google_title_projet_ . "_" . $id_projet_dyn_name[0];
    ?>
    <meta http-equiv="refresh" content="0; URL=../blog.php/<?= $name_ ?>"> 
   <?php 
}  
else{
?>

 <meta http-equiv="refresh" content="0; URL=../index.php"> 
<?php 
}







?>


 