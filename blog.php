<?php
require_once "data/all/requare_one_1.php";
require_once "Class/SessionTracker.php";
$stories = array();


require_once "data/blog/blog_index_head_8_css.php" ;  
require_once "data/blog/blog_index_1_0_css.php" ; 
require_once "data/blog/blog_index_1_1_css.php" ; 
require_once "data/blog/blog_index_2_css.php" ; 
require_once "data/blog/blog_index_3_css.php" ; 
require_once "data/blog/blog_index_head_8_css.php" ; 
require_once "data/blog/carouselles/carouselle_3_css.php" ; 


 
 
 
/*require_once "data/blog/blog_index_1_0 _css.php" ; 
require_once "data/blog/blog_index_1_0 _css.php" ; 
*/

?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Gowun+Dodum&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Gowun+Dodum&family=Roboto:ital,wght@0,100..900;1,100..900&family=Sansation:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
<style>
  .story-box select,.play,.pause,.stop {
 
width: 100px;
padding: 12px;
background-color: rgba(0, 0, 0, 0.1);
border: 1px solid rgba(0, 0, 0, 0.1);
color: rgba(0, 0, 0, 0.6);

 
  }

    .story-box select:hover,.play:hover,.pause:hover,.stop:hover {
 
width: 100px;
padding: 12px;
background-color: rgba(146, 55, 55, 0.2);
border: 1px solid rgba(66, 40, 138, 0.2);
color: rgba(0, 0, 0, 0.6);
cursor: pointer;
 
  }

</style>

<style>
  /*
 body{
  font-family: "Audiowide", sans-serif;
  font-weight: 400;
  font-style: normal;
}
  */
</style>
 

<style>
body {
  font-family: "Audiowide", sans-serif;
  font-weight: 400;
  font-style: normal;
}

</style>
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

    if ($_SESSION["password_projet"] ==  $password_projet_2) {
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
  .section_3_1{
    background-color: black;
    padding: 15px;
    width: 300px;
    text-align: center;

  }
  .section_3_1 a {
    color: white;
    text-decoration: none;
  }



/* --- Défilement fluide --- */
html {
  scroll-behavior: smooth;
}

/* --- Couleur du scroll (barre de défilement) --- */
/* Pour Chrome, Edge, Safari */
::-webkit-scrollbar {
  width: 10px;
}
::-webkit-scrollbar-track {
  background: #f1f1f1; /* fond clair */
}
::-webkit-scrollbar-thumb {
  background: #000; /* barre noire */
  border-radius: 5px;
}
::-webkit-scrollbar-thumb:hover {
  background: #333; /* légèrement gris au survol */
}

/* Pour Firefox */
html {
  scrollbar-width: thin;
  scrollbar-color: #000 #f1f1f1;
}

 

 </style>

 <style>
section {
  width: 100%;                  /* occupe toute la largeur disponible */
  max-width: 100%;              /* empêche de dépasser le conteneur */
  padding: 10px;                /* espace intérieur */
 
  white-space: normal;          /* autorise le retour à la ligne */
  word-break: break-word;       /* coupe les mots trop longs si possible */
  overflow-wrap: break-word;    /* compatibilité navigateurs */
  box-sizing: border-box;       /* inclut padding dans la largeur */
  font-family: Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5;
  
  overflow-x: auto;             /* scroll horizontal si ça dépasse */
  overflow-y: hidden;           /* pas de scroll vertical */
}

</style>