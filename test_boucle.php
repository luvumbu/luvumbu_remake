<?php
// Connexion à la base de données (à adapter selon ton serveur)
$pdo = new PDO("mysql:host=localhost;dbname=ma_base;charset=utf8", "utilisateur", "motdepasse");

// Inclusion des classes et fonctions utiles
require_once 'AsciiConverter.php'; // Classe avec asciiToString
require_once 'functions.php';      // Fonctions replace_element_1, replace_element_2

// Requête pour récupérer les projets
$stmt = $pdo->query("SELECT * FROM projets"); // À adapter selon ta table
$row_projet = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Vérification de données
if (empty($row_projet)) {
    die("Aucun projet trouvé.");
}

// Variables initiales
$_google_title_projet_0 = $row_projet[0]["google_title_projet"];
$_row_projet = $row_projet;

$_all_array_array = [];
$_source_local_img = '../img_dw/';
$_src_0 = "https://i.pinimg.com/736x/89/ac/b1/89acb1bbb6eb95757be726c0ea0929a7.jpg";
$_src_img_1 = $_src_0;
$_width_img = "40";
$_height_img = "40";
$_wh_img = "40";

$_div_array = [];
$_element_2_array = [];
$_header_array = [];

// Variables à initialiser
$_google_title_projet = [];
$_google_title_projet_1 = [];
$_google_title_projet_2 = [];
$_change_meta_name_projet = [];
$_change_meta_name_projet_1 = [];
$_change_meta_name_projet_2 = [];
$_change_meta_content_projet = [];
$_change_meta_content_projet_1 = [];
$_change_meta_content_projet_2 = [];
$_title_projet = [];
$_title_projet_1 = [];
$_title_projet_2 = [];
$_description_projet = [];
$_description_projet_1 = [];
$_description_projet_2 = [];
$_description_projet_toggle = []; // Par défaut vide ou peut venir d'une autre source

// Création des variables dynamiques
foreach ($row_projet[0] as $_key => $_value) {
    ${"_".$_key} = [];
    $_all_array_array[] = $_key;
}

// Comptages
$_count_array = count($_all_array_array);
$_count_row_projet = count($row_projet);

// Remplissage dynamique des tableaux
foreach ($row_projet as $_key_row => $_value_row) {
    for ($_i = 0; $_i < $_count_array; $_i++) {
        $_cle = $_all_array_array[$_i];
        ${"_".$_cle}[] = $row_projet[$_key_row][$_cle];
    }
}

// Traitements spécifiques
for ($_i = 0; $_i < $_count_array; $_i++) {
    $_clef = $_all_array_array[$_i];

    switch ($_clef) {
        case "google_title_projet":
            for ($_ii = 0; $_ii < count($_google_title_projet); $_ii++) {
                $_google_title_projet[$_ii] = AsciiConverter::asciiToString($_google_title_projet[$_ii]);
                $_google_title_projet_1[$_ii] = replace_element_1($_google_title_projet[$_ii]);
                $_google_title_projet_2[$_ii] = replace_element_2($_google_title_projet[$_ii]);
            }
            break;

        case "change_meta_name_projet":
            for ($_ii = 0; $_ii < count($_change_meta_name_projet); $_ii++) {
                $_change_meta_name_projet[$_ii] = AsciiConverter::asciiToString($_change_meta_name_projet[$_ii]);
                $_change_meta_name_projet_1[$_ii] = replace_element_1($_change_meta_name_projet[$_ii]);
                $_change_meta_name_projet_2[$_ii] = replace_element_2($_change_meta_name_projet[$_ii]);
            }
            break;

        case "change_meta_content_projet":
            for ($_ii = 0; $_ii < count($_change_meta_content_projet); $_ii++) {
                $_change_meta_content_projet[$_ii] = AsciiConverter::asciiToString($_change_meta_content_projet[$_ii]);
                $_change_meta_content_projet_1[$_ii] = replace_element_1($_change_meta_content_projet[$_ii]);
                $_change_meta_content_projet_2[$_ii] = replace_element_2($_change_meta_content_projet[$_ii]);
            }
            break;

        case "title_projet":
            for ($_ii = 0; $_ii < count($_title_projet); $_ii++) {
                $_title_projet[$_ii] = AsciiConverter::asciiToString($_title_projet[$_ii]);
                $_title_projet_1[$_ii] = replace_element_1($_title_projet[$_ii]);
                $_title_projet_2[$_ii] = replace_element_2($_title_projet[$_ii]);
            }
            break;

        case "description_projet":
            for ($_ii = 0; $_ii < count($_description_projet); $_ii++) {
                $_description_projet[$_ii] = AsciiConverter::asciiToString($_description_projet[$_ii]);
                if (empty($_description_projet_toggle[$_ii])) {
                    $_description_projet[$_ii] = replace_element_1($_description_projet[$_ii]);
                } else {
                    $_description_projet[$_ii] = replace_element_2($_description_projet[$_ii]);
                }
                $_description_projet_1[$_ii] = replace_element_1($_description_projet[$_ii]);
                $_description_projet_2[$_ii] = replace_element_2($_description_projet[$_ii]);
            }
            break;
    }
}
?>
