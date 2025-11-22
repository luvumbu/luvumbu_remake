<?php
 

$histoire0 = replace_element_2(AsciiConverter::asciiToString($description_projet_a[$nombre_0]));
?>



<!-- Lecteur Histoire 1 -->
<div class="story-box reader-container" id="reader<?= $nombre_0 ?>">
    <label for="voiceSelect<?= $nombre_0 ?>">🎤 Choisir une voix pour Histoire <?= $nombre_0 ?> :</label>
    <select style="border-radius: 17px;padding:15px; border:1px solid rgba(0,0,0,0)" id="voiceSelect<?= $nombre_0 ?>"></select>
 
   
    <button style="border-radius: 17px;padding:15px; border:1px solid rgba(0,0,0,0)" id="playBtn<?= $nombre_0 ?>" class="play">▶️ Lire</button>
    <button style="border-radius: 17px;padding:15px; border:1px solid rgba(0,0,0,0)" id="pauseBtn<?= $nombre_0 ?>" class="pause">⏸️ Pause</button>
    <button style="border-radius: 17px;padding:15px; border:1px solid rgba(0,0,0,0)" id="stopBtn<?= $nombre_0 ?>" class="stop">⏹️ Stop</button>
</div>

 

<script>

// Initialisation des lecteurs dynamiques
var lecteur<?= $nombre_0 ?> = new SpeechController(<?= json_encode($histoire0) ?>, {
    lang: 'fr-FR',
    voiceSelectId: 'voiceSelect<?= $nombre_0 ?>',
    playBtnId: 'playBtn<?= $nombre_0 ?>',
    pauseBtnId: 'pauseBtn<?= $nombre_0 ?>',
    stopBtnId: 'stopBtn<?= $nombre_0 ?>'
});

 
</script>
<?php 

$nombre_0  =  $nombre_0+1;

?>