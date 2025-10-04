<?php
$nombre = "_0"; // numéro pour les IDs dynamiques
 

$test = replace_element_2(AsciiConverter::asciiToString($description_projet[0]));
?>

<style>
.story-box {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    margin: 20px auto;
    padding: 15px;
}
select {
    border: 1px solid rgba(0,0,0,0.2);
    color: rgba(0,0,0,0.5);
    padding: 6px;
    border-radius: 6px;
    margin-bottom:10px;
}
button {
    margin-right: 8px;
    padding: 8px 14px;
    border: none;
    border-radius: 6px;
    color: #fff;
    cursor: pointer;
}
.play { background: green; }
.pause { background: orange; }
.stop { background: red; }
.reader-container { margin-bottom: 30px; }
</style>

<div class="story-box reader-container" id="reader<?= $nombre ?>">
    <label for="voiceSelect<?= $nombre ?>">🎤 Choisir une voix :</label>
    <select id="voiceSelect<?= $nombre ?>"></select>
    <button id="playBtn<?= $nombre ?>" class="play">▶️ Lire</button>
    <button id="pauseBtn<?= $nombre ?>" class="pause">⏸️ Pause</button>
    <button id="stopBtn<?= $nombre ?>" class="stop">⏹️ Stop</button>
</div>

<script>
 
document.addEventListener('DOMContentLoaded', () => {
    new SpeechController(<?= json_encode($test) ?>, {
        lang: 'fr-FR',
        voiceSelectId: 'voiceSelect<?= $nombre ?>',
        playBtnId: 'playBtn<?= $nombre ?>',
        pauseBtnId: 'pauseBtn<?= $nombre ?>',
        stopBtnId: 'stopBtn<?= $nombre ?>'
    });
});
</script>
