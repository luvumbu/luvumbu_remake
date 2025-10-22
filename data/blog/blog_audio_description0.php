<?php
$nombre = "_0"; // numéro pour les IDs dynamiques
 

$test = replace_element_2(AsciiConverter::asciiToString($description_projet[0]));
?>

<style>
/* ==================== STORY BOX ==================== */
.story-box {
 
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 15px;
  padding: 20px 25px;
  margin: 30px auto;
  max-width: 600px;
 
             
 
  backdrop-filter: blur(5px);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.story-box:hover {
  transform: scale(1.02);
  box-shadow: 0 0 25px rgba(0, 255, 200, 0.2),
              0 0 15px rgba(255, 0, 90, 0.2);
}

/* ==================== LABEL ==================== */
.story-box label {
  display: block;
  font-size: 1rem;
 
  margin-bottom: 8px;
  font-weight: 600;
  text-shadow: 0 0 6px rgba(255, 0, 120, 0.4);
}

/* ==================== SELECT ==================== */
.story-box select {
  width: 100%;
 
  border: 1px solid rgba(255, 255, 255, 0.15);
  color: #130505ff;
  padding: 10px;
  border-radius: 8px;
  margin-bottom: 15px;
  outline: none;
  transition: border-color 0.3s ease, color 0.3s ease;
}

.story-box select:focus {
  border-color: #00ffd0;
 
}

/* ==================== BUTTONS ==================== */
.story-box button {
  margin-right: 8px;
  padding: 10px 16px;
  border: none;
  border-radius: 8px;
 
  cursor: pointer;
  font-weight: 600;
  letter-spacing: 0.5px;
  font-family: "Poppins", sans-serif;
  box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
  transition: background 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
}

/* Boutons thématiques */
.play {
  background: linear-gradient(135deg, #00d47c, #00b3a4);
  box-shadow: 0 0 10px rgba(0, 255, 180, 0.3);
}
.pause {
  background: linear-gradient(135deg, #ff9800, #ff5e00);
  box-shadow: 0 0 10px rgba(255, 140, 0, 0.3);
}
.stop {
  background: linear-gradient(135deg, #ff3b3b, #ff006a);
  box-shadow: 0 0 10px rgba(255, 60, 60, 0.3);
}

/* Effets hover */
.play:hover,
.pause:hover,
.stop:hover {
  transform: scale(1.05);
  box-shadow: 0 0 20px rgba(255, 255, 255, 0.25);
}

/* ==================== CONTAINER ==================== */
.reader-container {
  text-align: center;
  animation: fadeIn 0.6s ease forwards;
}

/* ==================== ANIMATION ==================== */
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(10px); }
  to { opacity: 1; transform: translateY(0); }
}

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
