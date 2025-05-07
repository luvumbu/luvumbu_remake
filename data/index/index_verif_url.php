<?php
// verification de l'url
if (isset($_SESSION["index"])) {
    $url = new Give_url(); // Création d'une instance de Give_url
    $url->split_basename($separation_url); // Séparation de l'URL avec "__"
    $id_sha1_projet = $url->get_basename();

    if ($id_sha1_projet != "index.php") {
?>
        <script>
                window.location.replace("../index.php");
        </script>
<?php
    }
}
?>