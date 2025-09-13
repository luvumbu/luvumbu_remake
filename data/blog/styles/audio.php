<?php

 

?>
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Histoires + Lecture vocale</title>
<style>
.container{max-width:900px;margin:auto;}
.card_s{background:#fff;border-radius:12px;box-shadow:0 6px 20px rgba(0,0,0,0.08);padding:18px;margin-bottom:20px;}
h1{margin-top:0;text-align:center;}
.controls{display:flex;gap:8px;flex-wrap:wrap;margin-top:12px;align-items:center;}
button,select{border-radius:8px;padding:6px 10px;font-weight:bold;cursor:pointer;}
button{background:#0f62fe;color:#fff;border:none;}
button.secondary{background:#e6eefc;color:#0f62fe;border:1px solid #cfe0ff;}
button.danger{background:#ff6b6b;}
textarea{width:100%;height:120px;margin-top:8px;padding:8px;border-radius:8px;border:1px solid #ccc;font-size:1rem;box-sizing:border-box;}
</style>
</head>
<body>
<div class="container">
 


<?php


$id_sha1_projet_song_array=array();
 
  

for($index = 1; $index < count($stories); $index++){

if($index==0){
array_push($id_sha1_projet_song_array,$id_sha1_projet_song_x[0]);

}
else{


array_push($id_sha1_projet_song_array,$id_sha1_projet_song_y[$index-1]);

}

  
    $text = $stories[$index];

 

 

   
    ?>



<div class="images_container_all">
    <?php
    if (!empty($src_img_array) && is_array($src_img_array)) {
        $count = count($src_img_array);
        
            $src = trim($src_img_array[$index]); // supprime les espaces inutiles

            if ($src !== '') { // ignorer valeurs vides
                echo '<div>';
                echo '<img src="' . htmlspecialchars($src) . '" alt="">';
                echo '</div>';
        
        }
        
    }
    ?>
</div>



    <div class="card_s" data-index="<?= $index ?>">
  
      <textarea><?= htmlspecialchars($text) ?></textarea>
      <div class="controls">
        <label for="voiceSelect_<?= $index ?>" style="font-weight:bold;">Voix :</label>
        <select id="voiceSelect_<?= $index ?>"></select>
        <button class="playBtn">▶ Lire</button>
        <button class="pauseBtn secondary">⏸ Pause</button>
        <button class="resumeBtn secondary">▶ Reprendre</button>
        <button class="stopBtn danger">⏹ Arrêter</button>
        <button class="copyBtn secondary">📋 Copier</button>
        <button class="downloadBtn secondary">⬇ Télécharger</button>
      </div>
    </div>
<?php
}





?>

</div>

<script>
if(!("speechSynthesis" in window)){
  alert("La synthèse vocale n’est pas disponible dans votre navigateur.");
}

let voices = [];
function populateVoices(){
  voices = speechSynthesis.getVoices();
  document.querySelectorAll('select[id^="voiceSelect_"]').forEach(select=>{
    select.innerHTML = '';
    let defaultIndex = 0;
    voices.forEach((v,i)=>{
      const option = document.createElement('option');
      option.value=i;
      option.textContent = `${v.name} (${v.lang})${v.default?' - Défaut':''}`;
      select.appendChild(option);

      // Voix française Paul par défaut si disponible
      if(v.name.toLowerCase().includes("paul") && v.lang.startsWith("fr")){
        defaultIndex = i;
      }
    });
    select.value = defaultIndex;
  });
}
speechSynthesis.onvoiceschanged = populateVoices;
populateVoices();

document.querySelectorAll('.card_s').forEach(card_s=>{
  const textarea = card_s.querySelector('textarea');
  let utterance = null;
  const voiceSelect = card_s.querySelector('select');

  const playBtn = card_s.querySelector('.playBtn');
  const pauseBtn = card_s.querySelector('.pauseBtn');
  const resumeBtn = card_s.querySelector('.resumeBtn');
  const stopBtn = card_s.querySelector('.stopBtn');
  const copyBtn = card_s.querySelector('.copyBtn');
  const downloadBtn = card_s.querySelector('.downloadBtn');

  playBtn.onclick = ()=>{
    if(!textarea.value.trim()) return;
    if(!utterance){
      utterance = new SpeechSynthesisUtterance(textarea.value);
      utterance.lang="fr-FR";
      const idx = Number(voiceSelect.value);
      if(voices[idx]) utterance.voice = voices[idx];
      utterance.onend = ()=>{ utterance=null; };
      speechSynthesis.speak(utterance);
    } else if(speechSynthesis.paused){
      speechSynthesis.resume();
    }
  };
  pauseBtn.onclick = ()=>{ if(speechSynthesis.speaking && !speechSynthesis.paused) speechSynthesis.pause(); };
  resumeBtn.onclick = ()=>{ if(speechSynthesis.paused) speechSynthesis.resume(); };
  stopBtn.onclick = ()=>{ if(speechSynthesis.speaking || speechSynthesis.paused){ speechSynthesis.cancel(); utterance=null; } };
  copyBtn.onclick = async ()=>{ await navigator.clipboard.writeText(textarea.value); alert("Texte copié !"); };
  downloadBtn.onclick = ()=>{ const blob = new Blob([textarea.value], {type:"text/plain;charset=utf-8"}); const url = URL.createObjectURL(blob); const a=document.createElement("a"); a.href=url; a.download="histoire_"+(parseInt(card_s.dataset.index)+1)+".txt"; a.click(); URL.revokeObjectURL(url);}
});
</script>
</body>
</html>
