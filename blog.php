<?php
require_once "data/all/requare_one_1.php";
require_once "Class/formatDateFr.php";
require_once "Class/fichierExiste.php";
?>
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<link rel="stylesheet" href="../data/blog/css/blog_style_1.css">
<link rel="stylesheet" href="../data/blog/css/blog_slider_1.css">
<?php
// Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
$url = new Give_url();
// Utilisation de la méthode split_basename pour séparer par "_"
$url->split_basename('__');
$url_ = $url->get_elements()[0];

if (isset($_SESSION["index"])) {
    $_SESSION["index"][4] = $url_;
    /* permet que lors que  lutilisateur
              se connecte puisse acceder directement au dossier selectionné 
    */
}


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

?>
<script>
    function redirection(_this) {
        _this.style.display = "none";
        window.location.href = "../index.php";
    }
</script>


<script>
    /*
    // Supprimer toutes les feuilles de style externes et internes
document.querySelectorAll('link[rel="stylesheet"], style').forEach(el => el.remove());
*/
</script>