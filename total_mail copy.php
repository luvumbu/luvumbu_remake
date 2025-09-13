<?php
require_once "data/all/requare_one_1.php";
require_once "Class/formatDateFr.php";
require_once "Class/fichierExiste.php";
require_once "Class/FrenchClock.php";
require_once "Class/dbCheck.php";
require_once "Class/AsciiConverter.php";
require_once "Class/formatMailTextToHtml.php";

/*
id_send_mail,
id_user_send_mail,
name_send_mail,
info_send_mail,
info_plus_1_send_mail,
info_plus_2_send_mail,
info_plus_3_send_mail,
info_plus_4_send_mail,
info_plus_5_send_mail,
text_send_mail,
activation_send_mail,
REMOTE_ADDR,
date_inscription_send_mail
*/

if(isset($_SESSION["index"])){
    $info_plus_1_send_mail = $_SESSION["index"][3];
    $db = new DatabaseHandler($dbname, $username);
    $id_user_mail_user =  $_SESSION["index"][3];
    $req_sql = "SELECT * FROM `send_mail` WHERE `info_plus_1_send_mail`='$id_user_mail_user'";
    $result = $db->know_variables_name("send_mail", "_x", $req_sql);
}

$sentMails = []; // tableau vide avant la boucle

for ($i = 0; $i < count($info_plus_1_send_mail_x); $i++) { 
    $sentMails[] = [
        "id"      => $i + 1,
        "to"      => $info_send_mail_x[$i],
        "subject" => "", 
        "body"    => formatMailTextToHtml(AsciiConverter::asciiToString($text_send_mail_x[$i])),
        "time"    => $date_inscription_send_mail_x[$i]
    ];
}
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Boîte d’envoi</title>
  <style>
    body{font-family:Inter,system-ui,Arial; margin:0; background:#f6f8fb; color:#111}
    .app{
    margin:28px auto; display:grid; grid-template-columns:260px 1fr; gap:20px; padding:20px}
    .sidebar{background:#fff; border-radius:12px; padding:16px; box-shadow:0 6px 18px rgba(0,0,0,0.06)}
    .main{display:flex;flex-direction:column;gap:16px}
    .panel{background:#fff;border-radius:12px;box-shadow:0 6px 18px rgba(0,0,0,0.06);overflow:hidden;display:grid;grid-template-columns:1fr 420px}
    .list{border-right:1px solid #eef2f7}
    .item{padding:14px;border-bottom:1px solid #f1f4f8;cursor:pointer}
    .item:hover{background:#f8fbff}
    .to{font-size:14px;font-weight:600}
    .subject{color:#555;font-size:13px}
    .time{font-size:12px;color:#999;float:right}
    .reader{padding:20px}
    .reader h2{margin:0 0 12px}
    .reader .to{color:#555;margin-bottom:8px}
    .reader .body{white-space:pre-wrap;line-height:1.5;color:#222}
  </style>
</head>
<body>
  <div class="app">
    <aside >

 
    </aside>

    <main class="main">
      <div class="panel">
        <section class="list" id="mail-list">
          <?php foreach($sentMails as $mail): ?>
            <div class="item" onclick="openMail(<?= $mail['id'] ?>)">
              <div class="to">À: <?= htmlspecialchars($mail['to']) ?> <span class="time"><?= $mail['time'] ?></span></div>
              <div class="subject"><?= htmlspecialchars($mail['subject']) ?></div>
            </div>
          <?php endforeach; ?>
        </section>

        <aside class="reader" id="reader">
          <h2>Sélectionnez un mail envoyé</h2>
          <div class="to"></div>
          <div class="body" style="color:#999">Le contenu apparaîtra ici.</div>
        </aside>
      </div>
    </main>
  </div>

  <script>
    const mails = <?php echo json_encode($sentMails, JSON_UNESCAPED_UNICODE); ?>;
    const reader = document.getElementById('reader');

    function openMail(id){
      const m = mails.find(x=>x.id==id);
      if(!m) return;
      reader.querySelector('h2').textContent=m.subject;
      reader.querySelector('.to').textContent="À : " + m.to;
      reader.querySelector('.body').innerHTML=m.body; // utiliser innerHTML pour le HTML formaté
    }
  </script>
</body>
</html>
