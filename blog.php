<?php
session_start();
if (isset($_SESSION["nombre"])) {
    $_SESSION["nombre"]++;
} else {
    $_SESSION["nombre"] = 0;
}
if ($_SESSION["nombre"] > 7) {
?>
    <meta http-equiv="refresh" content="0; URL=../index.php">
<?php
} else {
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
    require_once "Class/formaterDateFr.php";
    /*
require_once "src/css/blog_style_1.php";
require_once "src/css/blog_slider_1.php";
*/
?>

    <link rel="stylesheet" href="../src/css/blog_style_1.css">
    <link rel="stylesheet" href="../src/css/blog_slider_1.css">
<?php
    date_default_timezone_set('Europe/Paris');
    // Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
    $url = new Give_url();
    // Utilisation de la méthode split_basename pour séparer par "_"
    $url->split_basename('__');
    $url_ = $url->get_elements()[0];
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
            $url_2 = $google_title_projet[0];
            $_SESSION["id_sha1_comment"] = $id_sha1_projet[0];
            require_once "req_sql/require_once3.php";
            require_once "data/blog/blog_comment.php";
            require_once "data/blog/blog_alert_info_page.php";
            require_once "data/blog/blog_alert_like.php";
        }
    }
}
?>
<script>
    function redirection(_this) {
        _this.style.display = "none";
        window.location.href = "../index.php";
    }
</script>


<style>
    img {
        max-width: 100%;
    }
</style>