<?php

 
require_once "data/all/requare_one_1.php";
require_once "Class/formatDateFr.php";
require_once "Class/fichierExiste.php";
require_once "Class/FrenchClock.php";
require_once "Class/dbCheck.php";
require_once "Class/Js.php";







 
 


 

?>

  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>




<div class="body">
        <?php 



if (isset($_SESSION["index"])) {
    $_SESSION["index"][4] = $url_;
 

  
    require_once "data/mail_programe/mail_programe_all_mail.php";
    require_once "data/mail_programe/mail_programe_form.php" ; 
    require_once "data/mail_programe/mail_form_send.php" ; 

 

}
else{
          header('Location:index.php');
  exit();
}
 


?>
<a href="total_mail.php">
    <img width="50" height="50" src="https://img.icons8.com/ios/50/mail.png" alt="mail"/>
</a>

</div>

</body>
</html>