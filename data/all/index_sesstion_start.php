 
<?php
// Démarrage de la session pour stocker et manipuler les données utilisateur
session_start();
// ==================== VARIABLES PAR ORDRE ALPHABÉTIQUE STRICT ====================
// Configuration de base
$data_home = "data/home/";
$data_index = "data/index/";
$data_all = "data/all/";
/*
data/home
├─ index.php
*/
$home = $data_home."home.php";
$all_element = $data_home . "home_all_element.php";
$home_header  = $data_home . "home_header.php";
$home_sql_1  = $data_home . "sql/home_sql_1.php";
$home_script_1 = $data_home . "js/home_script_1.php";
$home_script_2 = $data_home . "js/home_script_2.php";
$home_dynamicVariables_1 = $data_home . "sql/home_dynamicVariables_1.php";
$home_dynamicVariables_2 = $data_home . "sql/home_dynamicVariables_2.php";
$home_style_page = $data_home . "css/home_style_page.php";
$home_modif_css_1 = $data_home . "css/home_modif_css_1.php";
$home_modif_css_2 = $data_home . "css/home_modif_css_2.php";
$verifyConnection = $data_index . "index_verifyConnection_all_projet.php";
$home_header_css_1 = $data_home . "css/home_header_css_1.php";
$home_header_css_2 = $data_home . "css/home_header_css_2.php";
$home_option_menu_1 = $data_home . "home_option_menu_1.php";
$home_stat = $data_home . "home_stat.php";
$requare_one_1 = "data/all/requare_one_1.php" ;  
$index_verifyConnection_css = $data_index . "index_verifyConnection_css.php";
$index_verifyConnection_js = $data_index . "index_verifyConnection_js.php";
$dbCheck = "Class/dbCheck.php";
$grande_image__ = "https://i.pinimg.com/236x/46/51/27/465127dc4dad2655628bd36e0e3c088a.jpg";
$nom_table = "projet";
$path = $dbCheck;
$path_general_js = "function/general_js.php";
$requestUri = $_SERVER['REQUEST_URI'];
$separation_url = '__';
$index_login_bdd_css_1 = $data_index . "index_login_bdd/index_login_bdd_css_1.php";
$index_login_bdd_script_1 = $data_index . "index_login_bdd/index_login_bdd_script_1.php";
$source_file = "Class";
$visible_1 = "https://img.icons8.com/ios/100/hide.png";
$visible_2 = "https://img.icons8.com/ios/50/visible--v1.png";
$login_bdd = 'data/index/index_login_bdd.php';
$index_script_1 = $data_index . "index_script_1.php";
/*
$index_script_1,
$lang,
$favicon,
$src_js,
$index_css,
$index_verif_url,
$home_updat_all,
$index_verifyConnection_all_projet ,   
├─ index.php
*/
$lang = "fr";
$favicon = "https://ih1.redbubble.net/image.1762483057.7729/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.webp";
$src_js = "Class/Js.js";
$getFileExtension ="Class/getFileExtension.php";
$getFileExtension ="Class/getFileExtension.php" ; 
$index_css = $data_index . "index_css.css";
$index_verif_url = $data_index . "index_verif_url.php";
$home_updat_all =$data_home . "home_updat_all.php";
$index_verifyConnection_all_projet = $data_index . "index_verifyConnection_all_projet.php";
$home_select_all= $data_all."home_select_all.php";
/*
├─ index.php
*/

$index_title = "WELCOM IN";
// Chemins des classes (déclarés après $source_file dont ils dépendent)
$pathAfficherValeurs = $source_file . '/afficherValeursFormattees2.php';
$pathAsciiConverter = $source_file . '/AsciiConverter.php';
$pathCheckFileExists = $source_file . '/CheckFileExists.php';
$pathDatabaseHandler = $source_file . '/DatabaseHandler.php';
$pathDeleteFile = $source_file . '/Delete_file.php';
$pathGiveUrl = $source_file . '/Give_url.php';
$pathNettoyerTexte = $source_file . '/nettoyerTexteHtml.php'; 
$home_insert =    $data_home."home_insert.php"; 
$home_insert_css= $data_home."css/home_insert_css.php";
$home_insert_js= $data_home."js/home_insert_js.php";
$home_js = $data_home."js/home_js.php";
$home_select_all_sql_1 =  $data_home."sql/home_select_all_sql_1.php" ; 
$home_select_all_css =$data_home."css/home_select_all_css.php"; 
$home_all_element_css = $data_home."css/home_all_element_css.php" ; 
$removeHtmlTags= $source_file."/removeHtmlTags.php";
$home_select_all_js=  $data_home."js/home_select_all_js.php" ; 
// ==================== INCLUSIONS DES CLASSES ====================
require_once $pathAfficherValeurs;
require_once $pathAsciiConverter;
require_once $pathCheckFileExists;
require_once $pathDatabaseHandler;
require_once $pathDeleteFile;
require_once $pathGiveUrl;
require_once $pathNettoyerTexte;
require_once $removeHtmlTags;
require_once $getFileExtension;
// Variable dépendante des inclusions
$urlParams = str_replace('index.php/', '', parse_url($requestUri, PHP_URL_PATH));
$urlPath = parse_url($requestUri, PHP_URL_PATH);
$urlParams = str_replace('index.php/', '', $urlPath);
?> 