<div>
  <img
    id="dislikeBtn"
    class="dislike-img"
    width="40"
    height="40"
    src="https://img.icons8.com/ios/40/break--v2.png"
    alt="dislike"
  />
</div>

<div id="dislikeNombre">0</div>

<script>
  const dislikeBtn = document.getElementById('dislikeBtn');
  const dislikeCounter = document.getElementById('dislikeNombre');
  let isDisliked = false;

  dislikeBtn.addEventListener('click', () => {
    dislikeBtn.classList.add('dislike-animate');

    let currentDislike = parseInt(dislikeCounter.textContent);

    if (!isDisliked) {
      dislikeBtn.src = "https://img.icons8.com/ios-filled/40/break.png"; // version "dislikée"
      dislikeCounter.textContent = currentDislike + 1;
      isDisliked = true;
    } else {
      dislikeBtn.src = "https://img.icons8.com/ios/40/break--v2.png"; // version "non dislikée"
      dislikeCounter.textContent = currentDislike - 1;
      isDisliked = false;
    }

    var ok = new Information("../req_sql/update_alert_like.php"); // création de la classe 
    ok.add("info_page", ""); // ajout d'une deuxieme information denvoi  
    ok.add("id_like", isLiked); // ajout d'une deuxieme information denvoi  
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 






    dislikeBtn.addEventListener('animationend', () => {
      dislikeBtn.classList.remove('dislike-animate');
    }, { once: true });
  });
</script>
<style>
  .dislike-img {
  cursor: pointer;
  transition: transform 0.2s;
}

.dislike-animate {
  animation: alarmClock 0.6s ease-in-out;
}

@keyframes alarmClock {
  0%   { transform: rotate(0deg) scale(1); }
  10%  { transform: rotate(15deg) scale(1.05); }
  20%  { transform: rotate(-15deg) scale(1.05); }
  30%  { transform: rotate(15deg) scale(1.05); }
  40%  { transform: rotate(-15deg) scale(1.05); }
  50%  { transform: rotate(10deg) scale(1.02); }
  60%  { transform: rotate(-10deg) scale(1.02); }
  70%  { transform: rotate(5deg) scale(1.01); }
  80%  { transform: rotate(-5deg) scale(1.01); }
  90%  { transform: rotate(2deg) scale(1); }
  100% { transform: rotate(0deg) scale(1); }
}

</style>