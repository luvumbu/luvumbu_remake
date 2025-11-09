 <?php
// -------------------- Préparation des données --------------------
$title_projet_0       = AsciiConverter::asciiToString($title_projet[0]);
$description_projet_0 = AsciiConverter::asciiToString($description_projet[0]);
$img_src              = $img_projet_src1[0];
$date_inscription     = format_date_europeenne($date_inscription_projet[0]);
$has_audio            = !empty($id_sha1_projet_song[0]);

// -------------------- Affichage du titre --------------------
if ($title_projet_toggle[0] === "") {
    echo '<div class="title_1_1"><h1>' . replace_element_2($title_projet_0) . '</h1></div>';
} else {
    echo '<div class="title_1_2"><h1>' . replace_element_1($title_projet_0) . '</h1></div>';
}

// -------------------- Affichage de l'image --------------------
if ($img_src !== "") {
    $filename = "img_dw/" . $img_src;
    if (file_exists($filename)) {
        echo "<div class='img_dw'>";
        echo "<img src='../img_dw/$img_src' alt='image projet' onclick=\"openLightbox(this.src)\" />";
        echo "</div>";
    }
}

// -------------------- Affichage de la date --------------------
echo '<div class="date_inscription">' . $date_inscription . '</div>';

// -------------------- Affichage de la description --------------------
if ($description_projet_toggle[0] === "") {
    echo '<div class="description_1_2"><p>' . replace_element_2($description_projet_0) . '</p></div>';
} else {
    echo '<div class="description_1_2"><p>' . replace_element_1($description_projet_0) . '</p></div>';
}

// -------------------- Inclusion du blog audio si présent --------------------
$description_projet_boucle = $description_projet; 
$nombre = 0; // Indice de l'histoire à afficher
if ($has_audio) {
    require "data/blog/blog_audio_description0.php"; 
}
?>

 
 