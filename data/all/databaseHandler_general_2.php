<?php

// Assure-toi que toutes les variables dynamiques sont présentes
foreach ($all_array_array as $base_name) {
    // Crée une version de la variable avec le suffixe "_a"
    $var_a = $base_name . $val_knock;

    // Si la variable dynamique n'est pas définie, passe à la suivante
    if (!isset($$var_a)) continue;

    $ref_data = $$var_a;  // Récupère la valeur de la variable dynamique (ex: $id_projet_a)

    // Crée un tableau avec les valeurs modifiées sans toucher à la variable de base
    for ($ii = 0; $ii < count($ref_data); $ii++) {
        $val = AsciiConverter::asciiToString($ref_data[$ii]);

        // Crée des versions modifiées des valeurs et les stocke dans des variables distinctes
        ${$base_name . '_1'}[$ii] = replace_element_1($val);
        ${$base_name . '_2'}[$ii] = replace_element_2($val);
        ${$base_name . '_3'}[$ii] = replace_element_3($val);
        ${$base_name . '_4'}[$ii] = replace_element_4($val);
    }
}

?>
