<?php
require_once "data/all/requare_one_1.php";
require_once "Class/SessionTracker.php";
require_once "Class/SpeechController.php";

$stories = array();




 

  
/*
require_once "data/blog/blog_index_head_8_css.php" ;  
require_once "data/blog/blog_index_1_0_css.php" ; 
require_once "data/blog/blog_index_1_1_css.php" ; 
require_once "data/blog/blog_index_2_css.php" ; 
require_once "data/blog/blog_index_3_css.php" ; 
require_once "data/blog/blog_index_head_8_css.php" ; 
require_once "data/blog/carouselles/carouselle_3_css.php" ; 
 */

 
 

?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Audiowide&family=Gowun+Dodum&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Audiowide&family=Gowun+Dodum&family=Roboto:ital,wght@0,100..900;1,100..900&family=Sansation:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
    rel="stylesheet">
 
<script>
    
class SpeechController {
    constructor(text, options = {}) {
        this.text = text;
        this.lang = options.lang || 'fr-FR';
        this.voiceSelect = document.getElementById(options.voiceSelectId);
        this.playBtn = document.getElementById(options.playBtnId);
        this.pauseBtn = document.getElementById(options.pauseBtnId);
        this.stopBtn = document.getElementById(options.stopBtnId);
        this.isPaused = false;
        this.utterance = null;

        this._loadVoices();
        this._setupEvents();
    }

    _loadVoices() {
        const load = () => {
            let voices = speechSynthesis.getVoices();
            if (!voices.length) return setTimeout(load, 50); // attendre les voix
            this.voiceSelect.innerHTML = '';
            voices.forEach(voice => {
                const option = document.createElement('option');
                option.value = voice.name;
                option.textContent = `${voice.name} (${voice.lang})`;
                if (voice.lang.startsWith('fr')) option.textContent += ' 🇫🇷';
                this.voiceSelect.appendChild(option);
            });
            const defaultVoice = voices.find(v => v.lang.startsWith('fr')) || voices[0];
            if (defaultVoice) this.voiceSelect.value = defaultVoice.name;
        };
        load();
        speechSynthesis.onvoiceschanged = load;
    }

    _setupEvents() {
        this.playBtn.addEventListener('click', () => this.play());
        this.pauseBtn.addEventListener('click', () => this.pause());
        this.stopBtn.addEventListener('click', () => this.stop());
        this.voiceSelect.addEventListener('change', () => this.changeVoice());
    }

    play() {
        if (this.isPaused) {
            speechSynthesis.resume();
            this.isPaused = false;
            return;
        }
        speechSynthesis.cancel();
        this.utterance = new SpeechSynthesisUtterance(this.text);
        this.utterance.lang = this.lang;
        const voices = speechSynthesis.getVoices();
        let selectedVoice = voices.find(v => v.name === this.voiceSelect.value) || voices[0];
        this.utterance.voice = selectedVoice;
        speechSynthesis.speak(this.utterance);
    }

    pause() {
        if (speechSynthesis.speaking && !speechSynthesis.paused) {
            speechSynthesis.pause();
            this.isPaused = true;
        }
    }

    stop() {
        speechSynthesis.cancel();
        this.isPaused = false;
    }

    changeVoice() {
        if (speechSynthesis.speaking || speechSynthesis.paused) {
            this.stop();
            this.play();
        }
    }
}


</script>

<?php

// Création d'une instance de la classe, avec $_SERVER['PHP_SELF'] par défaut
$url = new Give_url();


// Utilisation de la méthode split_basename pour séparer par "_"
$url->split_basename('__');
$url_ = $url->get_elements()[0];
$nom_table = "projet"; // Nom de la table cible
$id_sha1_projet = $url_;
 

 


 


// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `$nom_table` WHERE `id_sha1_projet` ='$id_sha1_projet'";
// Instanciation de la classe
$db = new DatabaseHandler($dbname, $username);
// Appel de la fonction
$result = $db->know_variables_name($nom_table, "", $req_sql);
if ($id_projet) {
  // Requête SQL pour récupérer toutes les données de la table
  $req_sql = 'SELECT * FROM `projet_img` WHERE `id_sha1_projet_img`="' . $id_sha1_projet[0] . '" ';
  // Instanciation de la classe
  $db = new DatabaseHandler($dbname, $username);
  // Appel de la fonction
  $result = $db->know_variables_name("projet_img", "", $req_sql);
  $title_projet_0 =replace_element_2(AsciiConverter::asciiToString($title_projet[0])); 

  $img_projet_src1_ = $img_projet_src1[0];

  
  // Requête SQL pour récupérer toutes les données de la table
  $req_sql = 'SELECT * FROM `projet` WHERE `id_sha1_parent_projet` ="' . $id_sha1_projet[0] . '" ORDER BY `id_sha1_parent_projet` ASC';
  // Instanciation de la classe
  $db = new DatabaseHandler($dbname, $username);
  // Appel de la fonction
  $result = $db->know_variables_name($nom_table, "_a", $req_sql);
  $id_sha1_user_projet_ = $id_sha1_user_projet[0];

  $style_projet_ = $style_projet[0];
  // Requête SQL pour récupérer toutes les données de la table
  $req_sql = 'SELECT * FROM `style_page` WHERE `id_style_page` ="' . $style_projet_ . '"';
  // Instanciation de la classe
  $db = new DatabaseHandler($dbname, $username);
  // Appel de la fonction
  $result = $db->know_variables_name("style_page", "", $req_sql);
  $text_style_page_ =  AsciiConverter::asciiToString($text_style_page[0]);


 

 
  // Requête SQL pour récupérer toutes les données de la table
  $req_sql = 'SELECT * FROM `' . $dbname . '` WHERE `id_sha1_user`="' . $id_sha1_user_projet_ . '" ';
  // Instanciation de la classe
  $db = new DatabaseHandler($dbname, $username);
  // Appel de la fonction
  $result = $db->know_variables_name($dbname, "_b", $req_sql);




 

  $id_user_b_               = $id_user_b[0];
  $date_user_b_             = $date_user_b[0];
  $id_sha1_user_b_          = $id_sha1_user_b[0];
  $id_parent_user_b_        = $id_parent_user_b[0];
  $description_user_b_      = replace_element_2(AsciiConverter::asciiToString($description_user_b[0]));
  $title_user_b_            = replace_element_2(AsciiConverter::asciiToString($title_user_b[0]));
  $info_user_1_b_            = replace_element_2(AsciiConverter::asciiToString($info_user_1_b[0]));
  $info_user_2_b_            = replace_element_2(AsciiConverter::asciiToString($info_user_2_b[0]));
  $info_user_3_b_           = replace_element_2(AsciiConverter::asciiToString($info_user_3_b[0]));



  $img_user_b_              = 'img_dw/' . $img_user_b[0];
  $img_user_b_2              = 'img_dw/' . $img_user_b[0];
  $nom_user_b_              = $nom_user_b[0];
  $prenom_user_b_           = $prenom_user_b[0];
  $password_user_b_         = $password_user_b[0];
  $email_user_b_            = $email_user_b[0];
  $activation_user_b_       = $activation_user_b[0];
  $date_inscription_user_b_ = $date_inscription_user_b[0];

  $req_sql = 'SELECT * FROM `' . $dbname . '` WHERE `id_sha1_user`="' . $id_sha1_user_projet_ . '" ';
  // Instanciation de la classe
  $db = new DatabaseHandler($dbname, $username);
  // Appel de la fonction
  $result = $db->know_variables_name($dbname, "_c", $req_sql);
 
 

?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
    <?php

    if ($text_style_page_ == "style") {
   echo $text_style_page_;
    } else {
      echo "<style>";
   echo $text_style_page_;
      echo "</style>";
    }

    if ($img_projet_src1_ != "") {
      echo ' <link rel="icon" type="image/x-icon" href="img_dw/' . $img_projet_src1_ . '">';
    } else {
      echo ' <link rel="icon" type="image/x-icon" href="/images/favicon.ico">';
    }

    ?>
    <title><?= replace_element_2(AsciiConverter::asciiToString($google_title_projet[0])) ?></title>
</head>

<body>
    <?php
  $password_projet_1 = AsciiConverter::stringToAscii($_SESSION["password_projet"]);
  $password_projet_2 = $password_projet[0];

  //echo "01";
  if (isset($_SESSION["password_projet"])) {

    if ($password_projet_1==  $password_projet[0]) {
      require_once 'data/blog/blog_index.php';
    } else {
 
      require_once 'data/blog/blog_x_no1.php';
    }
  } else {

    if (!isset($_SESSION["index"][3])) {

      if ($visibility_1_projet[0] == "" && $id_sha1_projet_lock[0] == "") {
        header('Location: ../index.php');
        exit();
      } else {
        if ($visibility_1_projet[0] == "") {
          header('Location: ../index.php');
          exit();
        } else {

     
          if ($id_sha1_projet_lock[0] != "") {
            require_once 'data/blog/blog_index.php';
          } else {
            require_once 'data/blog/blog_x_no1.php';
          }
        }
      }
    } else {
      if ($_SESSION["index"][3] == $id_sha1_user_c[0]) {
        require_once 'data/blog/blog_index.php';
      } else {

        if ($visibility_1_projet[0] == "" && $id_sha1_projet_lock[0] == "") {
           require_once 'data/blog/blog_x_no1.php';
        } else {
          if ($visibility_1_projet[0] == "") {
           require_once 'data/blog/blog_x_no1.php';
          } else {
          }
        }
      }
    }
  }
} else {
  require_once 'data/blog/blog_x_no2.php';
}
require_once "data/blog/blog_insert_ip.php" ; 

  ?>

    <style>

        /*
    .section_3_1 {
    
        padding: 15px;
        width: 300px;
        text-align: center;

    }

    .section_3_1 a {
       
        text-decoration: none;
    }



  
    html {
        scroll-behavior: smooth;
    }

  
    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
      
    }

    ::-webkit-scrollbar-thumb {
        background: #000;
     
        border-radius: 5px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #333;
      
    }

  
    html {
        scrollbar-width: thin;
        scrollbar-color: #000 #f1f1f1;
    }
 
    section {
        width: 100%;
       
        max-width: 100%;
         
        padding: 10px;
       

 
      
        word-break: break-word;
        
        overflow-wrap: break-word;
        
        box-sizing: border-box;
         
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;

        overflow-x: auto;
         
        overflow-y: hidden;
         
    }  
    body{
        color:     rgba(0, 0, 0, 0.9);
    }
    .section_3_1{
        background-color:  rgba(0, 0, 0, 0.9);
        padding: 15px;
        width: 300px;
margin: auto;
        margin-top: 15px;
        margin-bottom: 15px;
        text-align: center;

    }
    .section_3_1 a {
        text-decoration: none;
       

    }
    .main-header{
      background-color: rgba(0, 0, 0, 0.9);
    }
      */
       body {
  font-family: "Audiowide", sans-serif;
  font-weight: 400;
  font-style: normal;
  margin: 0;
  padding: 0;
 
}
 html {
  scroll-behavior: smooth; /* rend le défilement progressif */
}

.btn-scroll {
  background: #007bff;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 10px;
  cursor: pointer;
  transition: background 0.3s, transform 0.3s;
}

.btn-scroll:hover {
  background: #0056b3;
  transform: scale(1.05);
}

#target {
  margin-top: 1000px; /* juste pour avoir à scroller */
  padding: 100px;
  background: #f0f0f0;
  border-radius: 20px;
}

.section_3_1{
  margin-top: 100px;
}
.section_3_1 a{

text-decoration: none;
  color: white;
  background-color: black;
 padding: 20px;



}

.section_3_1 a:hover{

 
  background-color: rgba(0, 0, 0, 0.6);
 



}
.description_1_1 ,.title_1_2,.title_2_2 ,.description_1_2{
  width: 100%;
  max-height: 300px; /* hauteur max avant scroll (à ajuster) */
  overflow-y: auto;  /* active un scroll vertical si ça déborde */
  overflow-x: auto; /* pas de scroll horizontal */
  padding: 10px;
  box-sizing: border-box;
  border-radius: 8px;
   margin-bottom: 40px;
}

/* ===== Scroll global pour toute la page ===== */
body {
  scrollbar-width: thin; /* pour Firefox */
  scrollbar-color: #c91432 #f0f0f0; /* curseur / fond */
}

/* Pour Chrome, Edge et Safari */
::-webkit-scrollbar {
  width: 10px; /* largeur du scroll vertical */
  height: 10px; /* hauteur du scroll horizontal */
}

::-webkit-scrollbar-track {
  background: #f0f0f0; /* couleur du fond du rail */
}

::-webkit-scrollbar-thumb {
  background: linear-gradient(180deg, #9b111e, #c91432); /* double rouge rubis */
  border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
  background: linear-gradient(180deg, #b51227, #e01a3d); /* plus vif au survol */
}

::-webkit-scrollbar-corner {
  background: #f0f0f0; /* coin entre les barres si présent */
}


    </style>
    <script>
  // Fonction pour ouvrir la lightbox
  function openLightbox(src) {
    // Créer l'élément lightbox
    const lightbox = document.createElement('div');
    lightbox.id = 'lightbox';
    lightbox.style.position = 'fixed';
    lightbox.style.top = '0';
    lightbox.style.left = '0';
    lightbox.style.width = '100%';
    lightbox.style.height = '100%';
    lightbox.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
    lightbox.style.display = 'flex';
    lightbox.style.justifyContent = 'center';
    lightbox.style.alignItems = 'center';
    lightbox.style.zIndex = '1000';

    // Créer l'image agrandie
    const img = document.createElement('img');
    img.src = src;
    img.style.maxWidth = '90%';
    img.style.maxHeight = '90%';
    img.style.boxShadow = '0 0 20px rgba(255, 255, 255, 0.5)';
    img.style.borderRadius = '10px';

    // Ajouter l'image à la lightbox
    lightbox.appendChild(img);

    // Ajouter la lightbox au corps du document
    document.body.appendChild(lightbox);

    // Fermer la lightbox au clic
    lightbox.addEventListener('click', function() {
      document.body.removeChild(lightbox);
    });
  }
</script>