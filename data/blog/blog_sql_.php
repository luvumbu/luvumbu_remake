<?php
$_google_title_projet_0 = $row_projet[0]["google_title_projet"];
$_row_projet = $row_projet;
$_description_projet_0_1 = replace_element_1($row_projet[0]["description_projet"]);
$_description_projet_0_2 = replace_element_2($row_projet[0]["description_projet"]);
$_title_projet_0_1 = replace_element_1($row_projet[0]["title_projet"]);
$_title_projet_0_2 = replace_element_2($row_projet[0]["title_projet"]);
$_all_array_array = [];
$_source_local_img = '../img_dw/';
$_src_0 = "https://i.pinimg.com/736x/89/ac/b1/89acb1bbb6eb95757be726c0ea0929a7.jpg";
$_src_img_1 = "https://i.pinimg.com/736x/89/ac/b1/89acb1bbb6eb95757be726c0ea0929a7.jpg";
$_width_img = "40";
$_height_img = "40";
$_wh_img = "40";
$_div_array = array();
$_element_2_array = array();
$_header_array = array();

// Création des variables dynamiques vides
foreach ($row_projet[0] as $_key => $_value) {
    ${"_".$_key} = [];
    $_all_array_array[] = $_key;
}

$_count_array = count($_all_array_array);
$_count_row_projet = count($row_projet);

// Boucle pour remplir les variables dynamiques
foreach ($row_projet as $_key_row => $_value_row) {
    for ($_i = 0; $_i < $_count_array; $_i++) {
        $_cle = $_all_array_array[$_i];
        ${"_".$_cle}[] = $row_projet[$_key_row][$_cle];
    }
}

for ($_i = 0; $_i < count($_all_array_array); $_i++) {
    if ($_all_array_array[$_i] == "google_title_projet") {
        for ($_ii = 0; $_ii < count($_google_title_projet); $_ii++) {
            $_google_title_projet[$_ii] = AsciiConverter::asciiToString($_google_title_projet[$_ii]);
            $_google_title_projet_1[$_ii] = replace_element_1($_google_title_projet[$_ii]);
            $_google_title_projet_2[$_ii] = replace_element_2($_google_title_projet[$_ii]);
        }
    }
    if ($_all_array_array[$_i] == "change_meta_name_projet") {
        for ($_ii = 0; $_ii < count($_change_meta_name_projet); $_ii++) {
            $_change_meta_name_projet[$_ii] = AsciiConverter::asciiToString($_change_meta_name_projet[$_ii]);
            $_change_meta_name_projet_1[$_ii] = replace_element_1($_change_meta_name_projet[$_ii]);
            $_change_meta_name_projet_2[$_ii] = replace_element_2($_change_meta_name_projet[$_ii]);
        }
    }
    if ($_all_array_array[$_i] == "change_meta_content_projet") {
        for ($_ii = 0; $_ii < count($_change_meta_content_projet); $_ii++) {
            $_change_meta_content_projet[$_ii] = AsciiConverter::asciiToString($_change_meta_content_projet[$_ii]);
            $_change_meta_content_projet_1[$_ii] = replace_element_1($_change_meta_content_projet[$_ii]);
            $_change_meta_content_projet_2[$_ii] = replace_element_2($_change_meta_content_projet[$_ii]);
        }
    }
    if ($_all_array_array[$_i] == "title_projet") {
        for ($_ii = 0; $_ii < count($_title_projet); $_ii++) {
            $_title_projet[$_ii] = AsciiConverter::asciiToString($_title_projet[$_ii]);
            $_title_projet_1[$_ii] = replace_element_1($_title_projet[$_ii]);
            $_title_projet_2[$_ii] = replace_element_2($_title_projet[$_ii]);
        }
    }
    if ($_all_array_array[$_i] == "description_projet") {
        for ($_ii = 0; $_ii < count($_description_projet); $_ii++) {
            if ($_description_projet_toggle[$_ii] == "") {
                $_description_projet[$_ii] = AsciiConverter::asciiToString($_description_projet[$_ii]);
                $_description_projet[$_ii] = replace_element_1($_description_projet[$_ii]);
            } else {
                $_description_projet[$_ii] = AsciiConverter::asciiToString($_description_projet[$_ii]);
                $_description_projet[$_ii] = replace_element_2($_description_projet[$_ii]);
            }
            $_description_projet_2[$_ii] = replace_element_2($_description_projet[$_ii]);
            $_description_projet_1[$_ii] = replace_element_1($_description_projet[$_ii]);
        }
    }
}
?>
