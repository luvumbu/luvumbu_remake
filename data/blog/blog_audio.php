<div class="audio_bloc_texte">
  <h2>🔊 Choisir une voix</h2>
  <select id="listeVoix"></select>
</div>
<?php foreach ($textes as $index => $texte): ?>

  <div class="audio_bloc_texte" id="<?= $id_sha1_projet[$index] ?>">
    <div class="audio_img">

      <?php
      if ($img_projet_src1[$index] != "") {


      ?>
        <img src="<?= '../img_dw/' . $img_projet_src1[$index] ?>" alt="" srcset="">

      <?php
      }
      ?>
    </div>


    <div style="margin-top: 145px;margin-bottom: 45px;">
      <?php

      if ($description_projet_toggle[$index] == "") {




        $description_projet_ =    $description_projet[$index];
        $description_projet_ = replace_element_1($description_projet_);


        echo $description_projet_;
      } else {

        $description_projet_ =    $description_projet[$index];
        $description_projet_ = replace_element_2($description_projet_);


        echo $description_projet_;
      }


      ?>

    </div>


    <?php

    require "all_projet/" . $id_sha1_projet[$index] . ".php";




    ?>


    <p class="text-x" id="texte-<?= $index ?>"><?= htmlspecialchars($texte) ?></p>
    <button onclick="lireTexte(<?= $index ?>)">▶️ Écouter</button>
    <button onclick="arreterLecture()">⏹️ Arrêter</button>
    <button onclick="mettreEnPause()">⏸️ Pause</button>
    <button onclick="reprendreLecture()">▶️ Reprendre</button>




    <div class="audio_display_flex">
      <?php
      for ($i = 1; $i < count($row_projet); $i++) {

        if ($index != 0) {


          $description_projet_o =    AsciiConverter::asciiToString($row_projet[$i]["description_projet"]);
          $description_projet_o = replace_element_2($description_projet_o);



          $description_projet_oo =    AsciiConverter::asciiToString($row_projet[$i]["description_projet"]);
          $description_projet_oo = replace_element_1($description_projet_oo);




          $title_projet_oo =    AsciiConverter::asciiToString($row_projet[$i]["title_projet"]);
          $title_projet_oo = replace_element_2($title_projet_oo);

          $title_projet_o =    AsciiConverter::asciiToString($row_projet[$i]["title_projet"]);
          $title_projet_o = replace_element_2($title_projet_oo);

          //var_dump($row_projet[$i]["description_projet_toggle"]);

      ?>


          <div class="audio_child_projet">

            <?php

            if ($row_projet[$i]["title_projet_toggle"] == "") {
            ?>

              <div>
                <p class="audio_child_projet_t">
                  <?= $title_projet_o  ?>
              </div>

            <?php
            } else {
            ?>
              <div>
                <p class="audio_child_projet_t">
                  <?= $title_projet_oo  ?>
              </div>
            <?php
            }
            ?>
            </p>
            <div class="audio_p_img">
              <?php

              if ($row_projet[$i]["img_projet_src1"] != "") {
              ?>
                <img src="<?= '../img_dw/' . $row_projet[$i]["img_projet_src1"] ?>" alt="" srcset="">

              <?php
              }
              ?>
            </div>



            <?php

            if ($row_projet[$i]["description_projet_toggle"] == "") {
            ?>

              <div class="audio_description"><?= $description_projet_oo ?></div>


            <?php
            } else {
            ?>
              <div class="audio_description"><?= $description_projet_o ?></div>

            <?php
            }
            ?>
            <a href="<?= $row_projet[$i]["id_sha1_projet"] ?>">
              <p class="audio_complet_a">
                Voir article complet
              </p>
            </a>
          </div>

      <?php

        }
      }



      ?>
    </div>
  </div>
  <br>
<?php endforeach; ?>

<script>
  const synth = window.speechSynthesis;
  const selectVoix = document.getElementById("listeVoix");
  let utteranceEnCours = null;
  let enPause = false;
  let positionPause = 0;

  function peuplerVoix() {
    const voixDisponibles = synth.getVoices().filter(v => v.lang.startsWith("fr"));
    voixDisponibles.forEach((voice, index) => {
      const option = document.createElement("option");
      option.value = index;
      option.textContent = `${voice.name} (${voice.lang})`;
      selectVoix.appendChild(option);
    });
  }

  function lireTexte(id) {
    const texte = document.getElementById("texte-" + id).innerText;
    const voix = synth.getVoices().filter(v => v.lang.startsWith("fr"));
    const utterance = new SpeechSynthesisUtterance(texte);
    utterance.voice = voix[selectVoix.value];
    utterance.rate = 1.3;
    utterance.pitch = 0.8;
    synth.cancel();
    utteranceEnCours = utterance;
    synth.speak(utterance);
    enPause = false;
  }

  function arreterLecture() {
    if (utteranceEnCours) {
      synth.cancel();
      utteranceEnCours = null;
      enPause = false;
    }
  }

  function mettreEnPause() {
    if (utteranceEnCours) {
      synth.pause();
      enPause = true;
      positionPause = synth.getVoices()[selectVoix.value].currentTime;
    }
  }

  function reprendreLecture() {
    if (enPause && utteranceEnCours) {
      synth.resume();
      enPause = false;
    }
  }

  if (speechSynthesis.onvoiceschanged !== undefined) {
    speechSynthesis.onvoiceschanged = peuplerVoix;
  }
</script>

<?php
require_once "src/css/audio_css_2.php";
?>

<style>
  .text-x {
    display: none;
  }

    
  @media screen and (max-width: 1000px) {
    .audio_display_flex  div  {

width: 100%;



 
    }
    .audio_display_flex     {

width: 100%;



 
    }
    .audio_display_flex img{
      width: 80%;
    }
    .audio_description{
      padding: 20px;
    }
  
}
</style>