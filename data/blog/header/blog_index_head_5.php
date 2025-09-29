<style>
  /* Bouton burger */
  .burger {
    position: fixed;
    top: 20px;
    left: 20px;
    width: 35px;
    height: 25px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    cursor: pointer;
    z-index: 1001;
  }

  .burger span {
    height: 4px;
    background: #333;
    border-radius: 2px;
    transition: 0.4s;
  }

  /* Animation croix */
  .burger.active span:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
  }
  .burger.active span:nth-child(2) {
    opacity: 0;
  }
  .burger.active span:nth-child(3) {
    transform: rotate(-45deg) translate(6px, -6px);
  }

  /* Menu latéral */
  .side-menu {
    position: fixed;
    top: 0;
    left: -250px;
    width: 250px;
    height: 100%;
    background: #222;
    color: #fff;
    transition: 0.4s;
    padding-top: 60px;
    z-index: 1000;
  }

  .side-menu.active {
    left: 0;
  }

  .side-menu a {
    display: block;
    padding: 15px 25px;
    color: #fff;
    text-decoration: none;
    font-size: 18px;
    border-bottom: 1px solid rgba(255,255,255,0.1);
    transition: 0.3s;
  }

  .side-menu a:hover {
    background: #ff6600;
    padding-left: 35px;
  }
</style>

<!-- Bouton burger -->
<div class="burger" id="burger">
  <span></span>
  <span></span>
  <span></span>
</div>

<!-- Menu latéral -->
<div class="side-menu" id="sideMenu">
  <?php 
    for ($i = 0; $i < count($title_projet_a); $i++) {
  ?>
    <a href="#<?= $id_sha1_projet_a[$i] ?>">
      <?= replace_element_2(AsciiConverter::asciiToString($title_projet_a[$i])) ?>
    </a>
  <?php } ?>
</div>

<script>
  const burger = document.getElementById("burger");
  const sideMenu = document.getElementById("sideMenu");

  // --- Gestion ouverture/fermeture
  burger.addEventListener("click", (e) => {
    burger.classList.toggle("active");
    sideMenu.classList.toggle("active");
    e.stopPropagation();
  });

  document.addEventListener("click", (e) => {
    if(sideMenu.classList.contains("active")) {
      if(!sideMenu.contains(e.target) && !burger.contains(e.target)) {
        sideMenu.classList.remove("active");
        burger.classList.remove("active");
      }
    }
  });

  // --- Gestion automatique des icônes
  const icons = ["🏠","📦","🔥","🛒","👤","☎️","⭐","💡","🎁","⚙️"]; 
  let loopIcons = true; // boolean : si true, recommence quand on dépasse

  const links = sideMenu.querySelectorAll("a");
  links.forEach((link, index) => {
    let iconIndex = index;

    if (loopIcons) {
      // modulo : recommence à 0 quand on dépasse la taille du tableau
      iconIndex = index % icons.length;
    } else if (index >= icons.length) {
      // pas d’icône si on a dépassé
      return;
    }

    link.innerHTML = icons[iconIndex] + " " + link.innerHTML;
  });
</script>
