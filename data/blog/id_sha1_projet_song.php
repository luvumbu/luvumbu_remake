<?php
$google_title_projet_z = $row_projet[0]["google_title_projet"];
$description_projet_1_z = $row_projet[0]["description_projet"];
$description_projet_2_z =$row_projet[0]["description_projet"];
$title_projet_1_z =$row_projet[0]["title_projet"];
$title_projet_2_z =$row_projet[0]["title_projet"];
$all_array_z = [];
$source_local_img_z = '../img_dw/';
$src_0_z = "https://i.pinimg.com/736x/89/ac/b1/89acb1bbb6eb95757be726c0ea0929a7.jpg";
$src_img_1_z = "https://i.pinimg.com/736x/89/ac/b1/89acb1bbb6eb95757be726c0ea0929a7.jpg";
$width_img_z = "40";
$height_img_z = "40";
$wh_img_z = "40";
$div_array_z = array();
$element_2_array_z = array();
$header_array_z = array();
// Création des variables dynamiques vides
foreach ($row_projet[0] as $key_z => $value_z) {
    ${$key_z . '_z'} = [];
    $all_array_z[] = $key_z;   
} 
$count_array_z = count($all_array_z);
$count_row_projet_z = count($row_projet);
// Boucle pour remplir les variables dynamiques
foreach ($row_projet as $key_row_z => $value_row_z) {
    for ($i_z = 0; $i_z < $count_array_z; $i_z++) {
        $cle_z = $all_array_z[$i_z];
        ${$cle_z . '_z'}[] = $row_projet[$key_row_z][$cle_z];
    }
}
for ($i_z = 0; $i_z < count($all_array_z); $i_z++) {
    if ($all_array_z[$i_z] == "google_title_projet") {
        for ($ii_z = 0; $ii_z < count($google_title_projet_z); $ii_z++) {
            $google_title_projet_z[$ii_z] = AsciiConverter::asciiToString($google_title_projet_z[$ii_z]);
        }
    }
    if ($all_array_z[$i_z] == "change_meta_name_projet") {
        for ($ii_z = 0; $ii_z < count($change_meta_name_projet_z); $ii_z++) {
            $change_meta_name_projet_z[$ii_z] = AsciiConverter::asciiToString($change_meta_name_projet_z[$ii_z]);
        }
    }
    if ($all_array_z[$i_z] == "change_meta_content_projet") {
        for ($ii_z = 0; $ii_z < count($change_meta_content_projet_z); $ii_z++) {
            $change_meta_content_projet_z[$ii_z] = AsciiConverter::asciiToString($change_meta_content_projet_z[$ii_z]);
        }
    }
    if ($all_array_z[$i_z] == "title_projet") {
        for ($ii_z = 0; $ii_z < count($title_projet_z); $ii_z++) {
            $title_projet_z[$ii_z] = AsciiConverter::asciiToString($title_projet_z[$ii_z]);
        }
    }
    if ($all_array_z[$i_z] == "description_projet") {
        for ($ii_z = 0; $ii_z < count($description_projet_z); $ii_z++) {

                $description_projet_z[$ii_z] = AsciiConverter::asciiToString($description_projet_z[$ii_z]);
                $description_projet_z[$ii_z] = replace_element_2($description_projet_z[$ii_z]);
    
        }
    }
}

 
?>
