<style>
  .like-img {
    cursor: pointer;
    transition: transform 0.2s;
  }

  .like-animate {
    animation: thumbUp 0.5s ease;
  }

  @keyframes thumbUp {
    0% {
      transform: scale(1) rotate(0deg);
    }

    25% {
      transform: scale(1.2) rotate(-10deg);
    }

    50% {
      transform: scale(1.3) rotate(10deg);
    }

    75% {
      transform: scale(1.2) rotate(-5deg);
    }

    100% {
      transform: scale(1) rotate(0deg);
    }
  }
</style>
</head>

<?php




if ($id_like_bool) {


  if ($id_like[0] != "false") {
    $src_img = "https://img.icons8.com/ios-filled/40/facebook-like.png";
  } else {

    $src_img = "https://img.icons8.com/ios/40/facebook-like--v1.png";
  }
} else {
  $src_img = "https://img.icons8.com/ios/40/facebook-like--v1.png";
}


$id_sha1_projet_info_0  =  $id_sha1_projet;
$REMOTE_ADDR_ = $_SERVER["REMOTE_ADDR"];


?>


<div class="likeBtn">
  <img
    id="likeBtn"
    class="like-img"
    title="<?= $id_sha1_projet_info_0 ?>"
    width="40"
    height="40"
    src="<?= $src_img ?>"
    alt="<?= $REMOTE_ADDR_ ?>" />

  <div id="nombre"><?= $id_like_count ?></div>
</div>




<script>
  const likeBtn = document.getElementById('likeBtn');
  const likeCounter = document.getElementById('nombre');
  let isLiked = false;

  likeBtn.addEventListener('click', () => {




    var ok = new Information("../req_sql/update_alert_like.php"); // création de la classe 
    likeBtn.classList.add('like-animate');
    let currentValue = parseInt(likeCounter.textContent);




    var img_2 = "https://img.icons8.com/ios-filled/40/facebook-like.png";
    var img_1 = "https://img.icons8.com/ios/40/facebook-like--v1.png";
    if (likeBtn.src == img_1) {
      likeBtn.src = img_2;
      likeCounter.textContent = currentValue + 1;
      isLiked = true;
    } else {
      likeBtn.src = img_1;
      likeCounter.textContent = currentValue - 1;

      isLiked = false;

    }




    ok.add("id_sha1_user", likeBtn.alt); // ajout d'une deuxieme information denvoi  
    ok.add("id_sha1_projet", likeBtn.title); // ajout d'une deuxieme information denvoi  





    ok.add("info_page", "id_like"); // ajout d'une deuxieme information denvoi  
    ok.add("id_like", isLiked); // ajout d'une deuxieme information denvoi  
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 



    likeBtn.addEventListener('animationend', () => {
      likeBtn.classList.remove('like-animate');
    }, {
      once: true
    });
  });
</script>

<style>
  .likeBtn {
    text-align: center;
    margin-top: 45px;
    margin-bottom: 75px;
  }
</style>