<?php
session_start();
$id_sha1_projet_ = $_SESSION["index"][4];
$img_1 = "https://img.icons8.com/ios/50/toggle-on--v1.png";
$img_2 = "https://img.icons8.com/ios/50/toggle-off--v1.png";
$img_3 = "https://img.icons8.com/ios/40/lock-2.png";
$img_4 = "https://img.icons8.com/ios/40/unlock-2.png";
$img_5 = "https://img.icons8.com/ios/40/high-volume--v1.png";
$img_6 = "https://img.icons8.com/ios/40/no-audio--v1.png";
$img_7 = "https://img.icons8.com/ios-glyphs/40/invisible.png";
$img_8 = "https://img.icons8.com/ios-filled/40/invisible.png";

require_once $home_insert_css;
require_once $home_insert_js;
require_once "Class/replace_element.php";





?>
<script>
  const img_1 = "<?= $img_1  ?>";
  const img_2 = "<?= $img_2  ?>";
  const img_3 = "<?= $img_3  ?>";
  const img_4 = "<?= $img_4  ?>";
  const img_5 = "<?= $img_5  ?>";
  const img_6 = "<?= $img_6  ?>";
  const img_7 = "<?= $img_7  ?>";
  const img_8 = "<?= $img_8  ?>";

  function toggle(_this) {
    var img_src = document.getElementById(_this.id).src;
    if (img_src == img_1) {
      document.getElementById(_this.id).src = img_2;
    } else {
      document.getElementById(_this.id).src = img_1;
    }
  }
</script>
<?php
// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler = new DatabaseHandler($dbname, $username);
// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `projet` WHERE `id_sha1_projet`='$id_sha1_projet_'";
// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child("projet");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.
// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.
// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.
// Exemple : affichage d'une variable dynamique spécifique
$title_projet_ =   AsciiConverter::asciiToString($dynamicVariables['title_projet'][0]);
$description_projet_ = AsciiConverter::asciiToString($dynamicVariables['description_projet'][0]);
$change_meta_name_projet_ = AsciiConverter::asciiToString($dynamicVariables['change_meta_name_projet'][0]);
$change_meta_content_projet_ = AsciiConverter::asciiToString($dynamicVariables['change_meta_content_projet'][0]);
$google_title_projet_ = AsciiConverter::asciiToString($dynamicVariables['google_title_projet'][0]);
$id_sha1_projet__ = $dynamicVariables['id_sha1_projet'][0];














$google_title_projet__ = AsciiConverter::asciiToString($dynamicVariables['google_title_projet'][0]);
$id_projet_ = $dynamicVariables['id_projet'][0];
$id_sha1_user_projet__ =   $dynamicVariables['id_sha1_user_projet'][0];
$id_sha1_projet_lock__ = $dynamicVariables['id_sha1_projet_lock'][0];
$id_sha1_projet_song__ = $dynamicVariables['id_sha1_projet_song'][0];
$change_meta_name_projet_toggle =  $dynamicVariables['change_meta_name_projet_toggle'][0];
$change_meta_content_projet_toggle =  $dynamicVariables['change_meta_content_projet_toggle'][0];
$title_projet_toggle =  $dynamicVariables['title_projet_toggle'][0];
$description_projet_toggle =  $dynamicVariables['description_projet_toggle'][0];
$img_projet_src1_toggle =  $dynamicVariables['img_projet_src1_toggle'][0];
$visibility_1_projet =  $dynamicVariables['visibility_1_projet'][0];
$img_projet_src2_toggle =  $dynamicVariables['img_projet_src2_toggle'][0];
$img_projet_src1__ = $dynamicVariables['img_projet_src1'][0];
$img_projet_src1 = $dynamicVariables['img_projet_src1'];
$type_projet_0 = $dynamicVariables['type_projet'][0];


















$databaseHandler = new DatabaseHandler($dbname, $username);
// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `projet` WHERE `id_sha1_parent_projet`='$id_sha1_projet_'";
// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child("projet");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.
// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.
// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.
// Exemple : affichage d'une variable dynamique spécifique
$title_projet_c =   $dynamicVariables['title_projet'];
$description_projet_c = $dynamicVariables['description_projet'];
$google_title_projet_c = $dynamicVariables['google_title_projet'];
$change_meta_name_projet_c = $dynamicVariables['change_meta_name_projet'];
$change_meta_content_projet_c = $dynamicVariables['change_meta_content_projet'];
$id_sha1_projet_cc = $dynamicVariables['id_sha1_projet'];
$img_projet_src1_c = $dynamicVariables['img_projet_src1'];
// Création d'une instance de la classe `DatabaseHandler`
$databaseHandler = new DatabaseHandler($dbname, $username);
// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `projet_img` WHERE  `id_sha1_projet_img`='" . $id_sha1_projet_ . " ' ";
// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child("projet_img");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.
// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.
// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.
// Exemple : affichage d'une variable dynamique spécifique
$id_projet_img_c = $dynamicVariables['id_projet_img'];
$id_sha1_projet_c = $dynamicVariables['id_sha1_projet'];
$id_sha1_projet_img_c = $dynamicVariables['id_sha1_projet_img'];
$id_projet_img_c = $dynamicVariables['id_projet_img'];
$id_general = $dynamicVariables['id_general'];
for ($i = 0; $i < count($id_projet_img_c); $i++) {
  $filename = "img_dw/" . $id_projet_img_c[$i];
  if (file_exists($filename)) {
  } else {
    echo '<meta http-equiv="refresh" content="0; URL=req_sql/check_img_bdd.php">';
  }
}
?>
<div class="class_img_top">
  <img id="class_img_top" src="<?= 'img_dw/' . $img_projet_src1[0] ?>" alt="" srcset="">
</div>


<style>
  .class_img_top {
    width: 50%;
    margin: auto;
    background-color: black;
    text-align: center;
    margin-top: 75px;

  }

  .class_img_top img {
    max-width: 100%;

  }

  .display_img {
    display: flex;
    justify-content: space-around;
    margin-top: 75px;
    margin-bottom: 75px;
    flex-wrap: wrap;
    margin: 100px;
    width: 50%;
    margin: auto;
    max-width: 100%;

  }

  .display_img img {

    max-width: 100%;

  }

  .all_img {
    width: 400px;
    margin: 25px;
  }

  .all_img img {}

  .all_img__ {
    width: 100%;
  }

  .display_imgs {
    display: flex;
    justify-content: space-around;
    margin: 50px;
  }

  .display_imgs div:hover {
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 17px;
    cursor: pointer;
  }

  .display_imgs div {
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 17px;

  }

  .div_h1 {
    text-align: center;
  }
</style>
</head>

<body>

  <form method="post" action="submit.php">

    <!-- CHAMP 1 -->
    <div class="field-container" id="container-1">



      <div class="display_flex">
        <div title="" class="action_div" onclick="function_type(this)">
          <div>
            Blog
          </div>
          <div>
            <img width="40" height="40" src="https://img.icons8.com/pulsar-line/40/blog.png" alt="blog" />

          </div>
        </div>
        <div class="action_div <?= $type_projet_0 ?>" onclick="function_type(this)" title="quiz">
          <div>
            quiz
          </div>
          <div>
            <img width="40" height="40" src="https://img.icons8.com/ios/40/test-passed--v1.png" alt="test-passed--v1" />
          </div>
        </div>


      </div>

      <div class="div_h1">
        <h1><?= $_SESSION["index"][4] ?></h1>
      </div>
      <div class="field-header" id="title_projet_info">
        title_projet
        <button type="button" onclick="toggleToolbar('1')">Options</button>
      </div>
      <div class="field-toolbar" id="toolbar-1">
        <div class="btn-group">
          <button type="button" onclick="format('bold')"><b>B</b></button>
          <button type="button" onclick="format('italic')"><i>I</i></button>
          <button type="button" onclick="format('underline')"><u>U</u></button>
        </div>
        <div class="btn-group">
          <select onchange="changeFont(this.value, '1')">
            <option value="Arial">Arial</option>
            <option value="Verdana">Verdana</option>
            <option value="Georgia">Georgia</option>
          </select>
          <select onchange="changeSize(this.value, '1')">
            <option value="16px">Normal</option>
            <option value="20px">Grand</option>
          </select>
          <input type="color" onchange="changeColor(this.value, '1')">
          <input type="color" onchange="changeBg(this.value, '1')">
        </div>
      </div>
      <div class="editable-field" id="field-1" contenteditable="true"><?= $title_projet_ ?></div>
      <?php
      #toggle 1
      if ($title_projet_toggle != "") {
        echo '<div style="margin-top:75px"><img id="field_1_toggle" onclick="toggle(this)" width="50" height="50" src="' . $img_1 . '" alt="toggle-on--v1" /></div>';
      } else {
        echo '<div style="margin-top:75px"><img id="field_1_toggle" onclick="toggle(this)" width="50" height="50" src="' . $img_2 . '" alt="toggle-on--v1" /></div>';
      }
      ?>
      <img width="50" title="field-1" onclick='remove(this)' height="50" src="https://img.icons8.com/ios-filled/50/delete-forever.png" alt="delete-forever" />
    </div>
    <!-- CHAMP 2 -->
    <div class="field-container" id="container-2">
      <div class="field-header">
        <span id="description_projet_info">description_projet</span>
        <button type="button" onclick="toggleToolbar('2')">Options</button>
      </div>
      <div class="field-toolbar" id="toolbar-2">
        <div class="btn-group">
          <button type="button" onclick="format('bold')"><b>B</b></button>
          <button type="button" onclick="format('italic')"><i>I</i></button>
          <button type="button" onclick="format('underline')"><u>U</u></button>
        </div>
        <div class="btn-group">
          <select onchange="changeFont(this.value, '2')">
            <option value="Arial">Arial</option>
            <option value="Verdana">Verdana</option>
            <option value="Georgia">Georgia</option>
          </select>
          <select onchange="changeSize(this.value, '2')">
            <option value="16px">Normal</option>
            <option value="20px">Grand</option>
          </select>
          <input type="color" onchange="changeColor(this.value, '2')">
          <input type="color" onchange="changeBg(this.value, '2')">
        </div>
      </div>

      <div class="editable-field" id="field-2" contenteditable="true"><?= $description_projet_ ?></div>

      <?php
      #toggle 2
      if ($description_projet_toggle != "") {

        echo '<div style="margin-top:75px"><img id="field_2_toggle" onclick="toggle(this)" width="50" height="50" src="' . $img_1 . '" alt="toggle-on--v1" /></div>';
      } else {
        echo '<div style="margin-top:75px"><img id="field_2_toggle" onclick="toggle(this)" width="50" height="50" src="' . $img_2 . '" alt="toggle-on--v1" /></div>';
      }
      ?>
      <img width="50" title="field-2" onclick='remove(this)' height="50" src="https://img.icons8.com/ios-filled/50/delete-forever.png" alt="delete-forever" />
    </div>
    <!-- CHAMP 3 -->
    <div class="field-container" id="container-3">
      <div class="field-header">
        <span id="change_meta_name_projet_info">change_meta_name_projet</span>
        <button type="button" onclick="toggleToolbar('3')">Options</button>
      </div>
      <div class="field-toolbar" id="toolbar-3">
        <div class="btn-group">
          <button type="button" onclick="format('bold')"><b>B</b></button>
          <button type="button" onclick="format('italic')"><i>I</i></button>
          <button type="button" onclick="format('underline')"><u>U</u></button>
        </div>
        <div class="btn-group">
          <select onchange="changeFont(this.value, '3')">
            <option value="Arial">Arial</option>
            <option value="Verdana">Verdana</option>
            <option value="Georgia">Georgia</option>
          </select>
          <select onchange="changeSize(this.value, '3')">
            <option value="16px">Normal</option>
            <option value="20px">Grand</option>
          </select>
          <input type="color" onchange="changeColor(this.value, '3')">
          <input type="color" onchange="changeBg(this.value, '3')">
        </div>
      </div>
      <div class="editable-field" id="field-3" contenteditable="true"><?= $change_meta_name_projet_ ?></div>
      <img width="50" title="field-3" onclick='remove(this)' height="50" src="https://img.icons8.com/ios-filled/50/delete-forever.png" alt="delete-forever" />
    </div>

    <!-- CHAMP 4 -->
    <div class="field-container" id="container-4">
      <div class="field-header">
        <span id="change_meta_content_projet_info">change_meta_content_projet</span>
        <button type="button" onclick="toggleToolbar('4')">Options</button>
      </div>
      <div class="field-toolbar" id="toolbar-4">
        <div class="btn-group">
          <button type="button" onclick="format('bold')"><b>B</b></button>
          <button type="button" onclick="format('italic')"><i>I</i></button>
          <button type="button" onclick="format('underline')"><u>U</u></button>
        </div>
        <div class="btn-group">
          <select onchange="changeFont(this.value, '4')">
            <option value="Arial">Arial</option>
            <option value="Verdana">Verdana</option>
            <option value="Georgia">Georgia</option>
          </select>
          <select onchange="changeSize(this.value, '4')">
            <option value="16px">Normal</option>
            <option value="20px">Grand</option>
          </select>
          <input type="color" onchange="changeColor(this.value, '4')">
          <input type="color" onchange="changeBg(this.value, '4')">
        </div>
      </div>
      <div class="editable-field" id="field-4" contenteditable="true"><?= $change_meta_content_projet_ ?></div>
      <img width="50" title="field-4" onclick='remove(this)' height="50" src="https://img.icons8.com/ios-filled/50/delete-forever.png" alt="delete-forever" />
    </div>
    <!-- CHAMP 5 -->
    <div class="field-container" id="container-5">
      <div class="field-header">
        <span id="google_title_projet_info">google_title_projet</span>
        <button type="button" onclick="toggleToolbar('5')">Options</button>
      </div>
      <div class="field-toolbar" id="toolbar-5">
        <div class="btn-group">
          <button type="button" onclick="format('bold')"><b>B</b></button>
          <button type="button" onclick="format('italic')"><i>I</i></button>
          <button type="button" onclick="format('underline')"><u>U</u></button>
        </div>
        <div class="btn-group">
          <select onchange="changeFont(this.value, '5')">
            <option value="Arial">Arial</option>
            <option value="Verdana">Verdana</option>
            <option value="Georgia">Georgia</option>
          </select>
          <select onchange="changeSize(this.value, '5')">
            <option value="16px">Normal</option>
            <option value="20px">Grand</option>
          </select>
          <input type="color" onchange="changeColor(this.value, '5')">
          <input type="color" onchange="changeBg(this.value, '5')">
        </div>
      </div>
      <div class="editable-field" id="field-5" contenteditable="true"><?= $google_title_projet_ ?></div>
      <img width="50" title="field-5" onclick='remove(this)' height="50" src="https://img.icons8.com/ios-filled/50/delete-forever.png" alt="delete-forever" />
      <div class="display_img">
        <img id="class_img_top2" src="<?= 'img_dw/' . $img_projet_src1__ ?>" alt="" srcset="">
        <?php
        for ($i__ = 0; $i__ < count($id_projet_img_c); $i__++) {
        ?>
          <div class="all_img" id="<?= $id_sha1_projet_img_c[$i__] . $i__ ?>">
            <img class="all_img__" src="<?= 'img_dw/' . $id_projet_img_c[$i__] ?>" alt="">

            <div class="display_imgs">
              <div onclick="change_img_select(this)" title="<?= $id_projet_img_c[$i__] ?>">
                <img width="40" height="40" src="https://img.icons8.com/material-two-tone/40/hand-cursor.png" alt="hand-cursor" />
              </div>
              <div class="<?= $id_sha1_projet_img_c[$i__] . $i__ ?>" onclick="remove_img_select(this)" title="<?= $id_projet_img_c[$i__] ?>">
                <img width="40" height="40" src="https://img.icons8.com/fluency-systems-regular/40/delete-forever.png" alt="delete-forever" />
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
      <?php
      $acces = false;
      if ($_SESSION["index"][3] == $admin_id_sha1_user) {
        $acces = true;
      } else {
        if ($id_sha1_projet_lock__ == 1) {
          $acces = true;
        } else {
          if ($id_sha1_user_projet__ == $_SESSION["index"][3]) {
            $acces = true;
          }
        }
      }
      if ($acces) {
      ?>
        <div class="submit-btn cursor_pointer" onclick="valider(this)">Envoyer</div>
      <?php
      }
      ?>
      <div class="display_flex">




        <a href="req/done.php">
          <div class="cursor_pointer">
            <img width="80" height="80" src="https://img.icons8.com/color/80/checkmark--v1.png" alt="checkmark--v1" />
          </div>
        </a>
        <div onclick="add_child(this)" class="cursor_pointer">
          <img width="40" height="40" src="https://img.icons8.com/office/40/add--v1.png" alt="add--v1" />
        </div>
        <div class="cursor_pointer">
          <a href="img_dw/index.php">
            <img width="40" height="40" src="https://img.icons8.com/ios-glyphs/40/full-image.png" alt="full-image" />
          </a>

        </div>
        <div>
          <a href="<?= "blog.php/" . $google_title_projet__ ?>">
            <img width="40" height="40" src="https://img.icons8.com/ios/40/link--v1.png" alt="link--v1" />
          </a>
        </div>




        <?php
        if ($id_sha1_projet_song__ == "") {
        ?>
          <div class="cursor_pointer">
            <img onclick="function_song(this)" width="40" height="40" src="<?= $img_6 ?>" alt="high-volume--v1" />
          </div>



        <?php

        } else {
        ?>
          <div class="cursor_pointer">
            <img onclick="function_song(this)" width="40" height="40" src="<?= $img_5 ?>" alt="high-volume--v1" />
          </div>



        <?php
        }


        //$dynamicVariables['id_sha1_projet'][0]



        if ($visibility_1_projet[0] != "") {
        ?>
          <div class="cursor_pointer">
            <img onclick="function_visibility(this)" width="40" height="40" src="<?= $img_8 ?>" alt="high-volume--v1" />
          </div>
        <?php
        } else {
        ?>
          <div class="cursor_pointer">
            <img onclick="function_visibility(this)" width="40" height="40" src="<?= $img_7 ?>" alt="high-volume--v1" />
          </div>

        <?php
        }
        ?>



        <div>
          <div>

            <?php



            if ($acces) {
              if ($id_sha1_projet_lock__ == "") {
            ?>
                <img class="cursor_pointer" onclick="function_lock(this)" width="40" height="40" src="<?= $img_3 ?>" alt="lock-2" />
              <?php
              } else {
              ?>
                <img class="cursor_pointer" onclick="function_lock(this)" width="40" height="40" src="<?= $img_4 ?>" alt="lock-2" />

              <?php
              }
            } else {
              ?>
              <img onclick="function_done()" style="margin-top:57px" class="cursor_pointer" width="40" height="40" src="https://img.icons8.com/emoji/40/ok-hand-medium-dark-skin-tone.png" alt="ok-hand-medium-dark-skin-tone" />
            <?php
            }
            ?>

          </div>


        </div>

      </div>
    </div>
  </form>

  <div id="stats" class="display_none"><?php require_once 'data/home/home_stats.php' ?></div>


  <div class="div_elements" style="margin-bottom: 175px;margin-top: 175px;">
    <?php
    for ($i = 0; $i < count($title_projet_c); $i++) {

      $title_projet_c_ =   AsciiConverter::asciiToString($title_projet_c[$i]);

    ?>

      <div class="card_element cursor_pointer bordures_img" onclick="child_element(this)" title="<?= $id_sha1_projet_cc[$i] ?>">
        <div class="card_element_img">


          <?php

          if ($img_projet_src1_c[$i] == '') {
          ?>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwfimb60bedU2xAWQhwyEC40kxb8z3efu7CtFK0XzOEE9iVfcBpEvM96wwTUKZ-hqKtMy3UN5KPuWUI1flHUY4nRY2sq-hKIEqvW3rox4" alt="">
          <?php
          } else {
          ?>
            <div class="cursor_pointer" onclick="remove_projet(this)">
              <img width="40" height="40" src="https://img.icons8.com/fluency/40/delete-forever.png" alt="delete-forever" />
            </div>
            <img src="<?= 'img_dw/' . $img_projet_src1_c[$i] ?>" alt="" srcset="">
          
            <div>
          <img class="cursor_pointer" onclick="function_stats(this)" width="40" height="40" src="https://img.icons8.com/ios-filled/40/graph.png" alt="graph" />
        </div>
          <?php
          }
          ?>
        </div>

        <div class="card_element_title"><?= $title_projet_c_ ?></div>
      </div>
    <?php
    }


    ?>
  </div>



  <div>
    <?php

    require_once $home_stat;

    ?>
  </div>


  <style>
    .bordures_img {
      border-radius: 17px;
      border: 1px solid rgba(0, 0, 0, 0.2);
      padding: 1px;
    }

    .bordures_img img {
      border-radius: 17px;

    }

    .action_div:hover {
      border: 1px solid black;
      cursor: pointer;
      padding: 3px;
      border-radius: 7px;
    }

    .action_div {
      border: 1px solid rgba(0, 0, 0, 0);
      cursor: pointer;
      padding: 3px;
      text-align: center;
    }

    .quiz {

      background-color: rgba(200, 0, 0, 0.5);

    }
  </style>


</body>








<?php





switch ($type_projet_0) {
  case "":

    break;
  case "quiz":
?>

    <script>
      document.getElementById("title_projet_info").innerHTML = "Titre du quizz";
      document.getElementById("description_projet_info").innerHTML = "Déscription du blog";

      document.getElementById("change_meta_name_projet_info").innerHTML = "";

      document.getElementById("change_meta_content_projet_info").innerHTML = "";

      document.getElementById("google_title_projet_info").innerHTML = "";
    </script>
  <?php
    break;
  case "quiz_child":
  ?>

    <script>
      document.getElementById("title_projet_info").innerHTML = "Titre du quizz";
      document.getElementById("description_projet_info").innerHTML = "Question n°1";

      document.getElementById("change_meta_name_projet_info").innerHTML = "Question n°2";

      document.getElementById("change_meta_content_projet_info").innerHTML = "Question n°3";

      document.getElementById("google_title_projet_info").innerHTML = "Réponse du quiz de 1 a 3 ";
    </script>
<?php
    break;
}



$google_title_projet_ = replace_element_2($google_title_projet_);
$source = 'all_projet/' . $_SESSION["index"][4] . ".php";
$destination = 'all_projet/' . $google_title_projet_ . '.php';


copy($source, $destination);

require_once "Class/replace_element.php";


$google_title_projet_ = replace_element_2($google_title_projet_);
$source = 'all_projet_img/' . $_SESSION["index"][4] . ".php";
$destination = 'all_projet_img/' . $google_title_projet_ . '.php';


copy($source, $destination);








?>
<style>
  .quiz_child {
    background-color: rgba(0, 200, 0, 0.5);
  }
</style>


<script>
  function function_stats(_this) {


    if (_this.src == "https://img.icons8.com/ios-filled/40/graph.png") {
      _this.src = "https://img.icons8.com/dotty/50/graph.png";

      document.getElementById("stats").className = "";
    } else {
      _this.src = "https://img.icons8.com/ios-filled/40/graph.png";
      document.getElementById("stats").className = "display_none";


    }

  }
</script>