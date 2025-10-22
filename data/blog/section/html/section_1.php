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
    echo '<div class="description_1_1"><p>' . replace_element_2($description_projet_0) . '</p></div>';
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

 <style>
    /* ==================== BASE ==================== */
 
/* ==================== TITRES ==================== */
.title_1_1 h1,
.title_1_2 h1 {
  font-size: 2em;
  text-align: center;
  margin: 0 0 20px 0;
  letter-spacing: 1.5px;
  transition: transform 0.3s ease, color 0.3s ease;
}

/* Variation visuelle selon la version */
.title_1_1 h1 {
  color: #ff4747;
  text-shadow: 0 0 10px rgba(255, 70, 70, 0.6);
}

.title_1_2 h1 {
  color: #00bcd4;
  text-shadow: 0 0 10px rgba(0, 188, 212, 0.6);
}

.title_1_1 h1:hover,
.title_1_2 h1:hover {
  transform: scale(1.03);
}

/* ==================== IMAGE ==================== */
.img_dw {
  display: flex;
  justify-content: center;
  margin: 20px auto;
}

.img_dw img {
  max-width: 80%;
  border-radius: 20px;
  box-shadow: 0 0 20px rgba(255, 255, 255, 0.15);
  transition: transform 0.4s ease, box-shadow 0.4s ease;
  cursor: pointer;
}

.img_dw img:hover {
  transform: scale(1.05);
  box-shadow: 0 0 25px rgba(255, 255, 255, 0.3);
}

/* ==================== DATE ==================== */
.date_inscription {
  text-align: center;
  font-size: 0.9em;
  color: #aaa;
  margin-bottom: 20px;
  font-style: italic;
}

/* ==================== DESCRIPTION ==================== */
.description_1_1,
.description_1_2 {
  max-width: 850px;
  margin: 0 auto;
  padding: 20px;
  border-radius: 12px;
  line-height: 1.6;
  text-align: justify;
  transition: background 0.4s ease, box-shadow 0.4s ease;
}

/* Version 1 */
.description_1_1 {
  background: rgba(255, 70, 70, 0.07);
  border: 1px solid rgba(255, 70, 70, 0.2);
}

/* Version 2 */
.description_1_2 {
  background: rgba(0, 188, 212, 0.07);
  border: 1px solid rgba(0, 188, 212, 0.2);
}

.description_1_1:hover,
.description_1_2:hover {
  box-shadow: 0 0 15px rgba(255, 255, 255, 0.1);
}

/* ==================== SCROLL INTERNE (si texte long) ==================== */
.description_1_1 p,
.description_1_2 p {
  max-height: 300px;
  overflow-y: auto;
  padding-right: 10px;
}

/* Scroll personnalisé */
.description_1_1 p::-webkit-scrollbar,
.description_1_2 p::-webkit-scrollbar {
  width: 10px;
}
.description_1_1 p::-webkit-scrollbar-thumb,
.description_1_2 p::-webkit-scrollbar-thumb {
  background: linear-gradient(180deg, #ff2e63, #ff9a9e);
  border-radius: 10px;
}
.description_1_1 p::-webkit-scrollbar-track,
.description_1_2 p::-webkit-scrollbar-track {
  background: #1e1e1e;
}

/* ==================== ANIMATION LÉGÈRE ==================== */
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.title_1_1,
.title_1_2,
.img_dw,
.date_inscription,
.description_1_1,
.description_1_2 {
  animation: fadeIn 0.8s ease forwards;
}

 </style>

 