<?php
$google_title_projet_0 = $row_projet[0]["google_title_projet"];
$description_projet_0_1 = AsciiConverter::asciiToString(replace_element_1($row_projet[0]["description_projet"]));
$description_projet_0_2 = AsciiConverter::asciiToString(replace_element_2($row_projet[0]["description_projet"]));
$title_projet_0_1 = replace_element_1($row_projet[0]["title_projet"]);
$title_projet_0_2 = replace_element_2($row_projet[0]["title_projet"]);
$all_array_array = [];
$source_local_img = '../img_dw/';
$src_0 = "https://i.pinimg.com/736x/89/ac/b1/89acb1bbb6eb95757be726c0ea0929a7.jpg";
$src_img_1 = "https://i.pinimg.com/736x/89/ac/b1/89acb1bbb6eb95757be726c0ea0929a7.jpg";
$width_img = "40";
$height_img = "40";
$wh_img = "40";
$div_array = array();
$element_2_array = array();
$header_array = array();
// Création des variables dynamiques vides
foreach ($row_projet[0] as $key => $value) {
    ${$key} = [];
    $all_array_array[] = $key;
}
$count_array = count($all_array_array);
$count_row_projet = count($row_projet);
// Boucle pour remplir les variables dynamiques
foreach ($row_projet as $key_row => $value_row) {
    for ($i = 0; $i < $count_array; $i++) {
        $cle = $all_array_array[$i];
        ${$cle}[] = $row_projet[$key_row][$cle]; // 💡 Ajout ici
    }
}
for ($i = 0; $i < count($all_array_array); $i++) {
    if ($all_array_array[$i] == "google_title_projet") {
        for ($ii = 0; $ii < count($google_title_projet); $ii++) {
            $google_title_projet[$ii] =    AsciiConverter::asciiToString($google_title_projet[$ii]);
            $google_title_projet_1[$ii] =    replace_element_1($google_title_projet[$ii]);
            $google_title_projet_2[$ii] =    replace_element_2($google_title_projet[$ii]);
       }
    }
    if ($all_array_array[$i] == "change_meta_name_projet") {
        for ($ii = 0; $ii < count($change_meta_name_projet); $ii++) {
            $change_meta_name_projet[$ii] =    AsciiConverter::asciiToString($change_meta_name_projet[$ii]);
            $change_meta_name_projet_1[$ii] =   replace_element_1($change_meta_name_projet[$ii]);
            $change_meta_name_projet_2[$ii] =   replace_element_2($change_meta_name_projet[$ii]);
        }
    }
    if ($all_array_array[$i] == "change_meta_content_projet") {
        for ($ii = 0; $ii < count($change_meta_content_projet); $ii++) {
            $change_meta_content_projet[$ii] =    AsciiConverter::asciiToString($change_meta_content_projet[$ii]);
            $change_meta_content_projet_1[$ii] =    replace_element_1($change_meta_content_projet[$ii]);
            $change_meta_content_projet_2[$ii] =    replace_element_2($change_meta_content_projet[$ii]);
        }
    }
    if ($all_array_array[$i] == "title_projet") {
        for ($ii = 0; $ii < count($title_projet); $ii++) {
            $title_projet[$ii] =    AsciiConverter::asciiToString($title_projet[$ii]);
            $title_projet_1[$ii] = replace_element_1($title_projet[$ii]);
            $title_projet_2[$ii] =  replace_element_2($title_projet[$ii]);
        }
    }
    if ($all_array_array[$i] == "description_projet") {
        for ($ii = 0; $ii < count($description_projet); $ii++) {
            if ($description_projet_toggle[$ii] == "") {
                $description_projet[$ii] =    AsciiConverter::asciiToString($description_projet[$ii]);
                $description_projet[$ii] = replace_element_1($description_projet[$ii]);
            } else {
                $description_projet[$ii] =    AsciiConverter::asciiToString($description_projet[$ii]);
                $description_projet[$ii] = replace_element_2($description_projet[$ii]);
            }
            $description_projet_2[$ii] =  replace_element_1($description_projet[$ii]);
            $description_projet_1[$ii] =  replace_element_1($description_projet[$ii]);
        }
    }
}


?>