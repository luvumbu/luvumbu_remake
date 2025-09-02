<?php
$condition = false;
if (isset($_SESSION["index"][6])) {
    if ($_SESSION["index"][6] != "") {
    } else {
        $condition = true;
    }
};

if($condition){
    $name_file = "../all_projet_img/" . $id_sha1_projet . ".php";
    $_SESSION["index"][7] = $name_file;
}
else{
    require_once "../req_sql/require_once.php" ; 
    $name_file = "../all_projet_img/" . $_SESSION["index"][4]  . ".php";
}
 


 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
         
            background-color: black;
            margin: 0;
            padding: 0;

       
        }
    </style>
</body>

</html>


<meta http-equiv="refresh" content="1; URL=../index.php">