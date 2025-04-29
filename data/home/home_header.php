<?php

$__ = "__";
$index_0 = $_SESSION["index"][0];
$index_1 = $_SESSION["index"][1];
$index_2 = $_SESSION["index"][2];
$index_3 = $_SESSION["index"][3];



$index = $index_0 . $__ . $index_1 . $__ . $index_2 . $__ . $index_3;

$index_insert = $_SESSION["index"][3] . '__insert';
$index_update = $index . $__ . "update" . $__;
$index_all = $index . $__ . "all" . $__;
$index_remove = $index . $__ . "remove" . $__;
$index_add = $index . $__ . "add" . $__;

$index_sitting = $index . $__ . "sitting" . $__;
$index_img = $index . $__ . "img" . $__;
$index_calendar = $index . $__ . "calendar" . $__;

$index_visivility = $index . $__ . "visivility" . $__;

$index_profil = $index . $__ . "profil" . $__;


$index_style = $index . $__ . "style" . $__;



$index_img_user = $index . $__ . "img_2" . $__;
$databaseHandler = new DatabaseHandler($dbname, $username);



$header_text_1 = "Option insert";
$header_text_2 = "MES PROJET";
$header_text_3 = "MON PROFIL";
$header_text_4 = "Liste style";





$databaseHandler__ = new DatabaseHandler($dbname, $username);


// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `style_pages` WHERE 1";

// Récupération des informations des tables enfant liées
$databaseHandler__->getListOfTables_Child("style_pages");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

// Récupération des données de la table via une méthode spécialisée
$databaseHandler__->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

// Génération de variables dynamiques à partir des données récupérées
$databaseHandler__->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.

// Exemple : affichage d'une variable dynamique spécifique


$id_style_page_auto__ = $dynamicVariables['id_style_page_auto'];
$id_general__ = $dynamicVariables['id_general'];

$name_style_pages__ = $dynamicVariables['name_style_pages'];
$header_style_pages__ = $dynamicVariables['header_style_pages'];
$total_style_pages__ = $dynamicVariables['total_style_pages'];
$total_style_parent_pages__ = $dynamicVariables['total_style_parent_pages'];
$id_sha1_style_page__ = $dynamicVariables['id_sha1_style_page'];





$id_style_page__ = $dynamicVariables['id_style_page'];
$id_user_style_page__ = $dynamicVariables['id_user_style_page'];
$date_inscription_style_page__ = $dynamicVariables['date_inscription_style_page'];







$html_mode_projet_1_dynamic_1_ = $html_mode_projet_1_dynamic_1[$i];
$html_mode_projet_2_dynamic_1_ = $html_mode_projet_2_dynamic_1[$i];

$total_style_parent_pages__x = $dynamicVariables['total_style_parent_pages'][$i];







?>

<script>
    const header_text_1 = '<?= $header_text_1 ?>';
    const header_text_2 = '<?= $header_text_2 ?>';
    const header_text_3 = '<?= $header_text_3 ?>';
    const header_text_4 = '<?= $header_text_4 ?>';
</script>

<div class="header_element" onkeyup="">






    <?php

    if ($dbname == $_SESSION["index"][0]) {
          ?>
    <div class="<?php echo  $index_insert ?>" onclick="function_global(this)"><?= $header_text_1 ?></div>
    <div class="<?php echo  $index_all ?>" onclick="a(this)"><?= $header_text_2 ?></div>
    <div class="<?php echo  $index_style ?>" onclick="a(this)"><?= $header_text_4 ?></div>


    <?php   
    }  

    

    ?>
    <div class="<?php echo  $index_profil ?>" onclick="a(this)"><?= $header_text_3 ?></div>


    <a href="Class/session_destroy.php" class="deconexion">
        <div>DECONNEXION</div>
    </a>

</div>