<?php
session_start();
header("Access-Control-Allow-Origin: *");
require_once "Class/dbCheck.php";
require_once "Class/DatabaseHandler.php";
require_once "Class/AsciiConverter.php";
require_once "Class/extraireAlphabetique.php";
require_once "Class/Give_url.php";
require_once "Class/removeHtmlTags.php";
require_once "Class/replace_element.php";
require_once "Class/add_element.php";
require_once "Class/afficherValeursFormattees2.php";
require_once "Class/Js.php";
require_once "Class/format_date_europeenne.php";
require_once "Class/limiterMots.php";


date_default_timezone_set('Europe/Paris');
// Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
$url = new Give_url();
// Utilisation de la méthode split_basename pour séparer par "_"
$url->split_basename('__');
$url_ = $url->get_elements()[0];
$_SESSION["index"][4] = $url_;
$filename = "all_projet/" . $url_ . '.php';
$filename2 = "all_projet_img/" . $url_ . '.php';


if (file_exists($filename)) {
    require_once $filename;
    if (file_exists($filename2)) {
        require_once $filename2;
    }
    if ($row_projet[0]["visibility_1_projet"] == "1") {




        require_once "data/blog/blog_sql.php";
        require_once "data/blog/blog_index.php";
        require_once "src/css/blog_style_1.php";

 
    

if($url_!=$google_title_projet[0]){
?>


<meta http-equiv="refresh" content="0; URL=<?=$google_title_projet[0] ?>">
</head>
<?php 
}
?>

<?php





 

    } else {
?>
        <style>
            img {
                width: 100%;
                height: 100%;
            }
            body {
                margin: 0;
                background-color: black;
            }
        </style>
        <div onclick="redirection(this)">
            <img src="../src/img/65523fde-63db-4d5f-95b8-b503bfcbd62b.webp" alt="" srcset="">
        </div>
<?php
    }
}
else{
    ?>
        <style>
            img {
                width: 100%;
                height: 100%;
            }
            body {
                margin: 0;
                background-color: black;
            }
        </style>
        <div onclick="redirection(this)">
            <img src="../src/img/65523fde-63db-4d5f-95b8-b503bfcbd62b.webp" alt="" srcset="">
        </div>
<?php
}
?>
<script>
    function redirection(_this) {
        _this.style.display = "none";
        window.location.href = "../index.php";
    }
</script>

