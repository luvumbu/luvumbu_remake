 <style>
 

  h1 {
    text-align: center;
  }

  /* --- Bouton Burger --- */
  .burger2 {
    position: fixed;
    top: 20px;
    right: 20px;
    width: 40px;
    height: 30px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    cursor: pointer;
    z-index: 1001;
  }

  .burger2 span {
    display: block;
    height: 4px;
    background: #132222ff; /* cyan néon */
    border-radius: 2px;
    transition: 0.5s;
  }

  /* Animation du burger2 en croix diagonale */
  .burger2.active span:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
  }
  .burger2.active span:nth-child(2) {
    transform: scaleX(0);
  }
  .burger2.active span:nth-child(3) {
    transform: rotate(-45deg) translate(5px, -5px);
  }

  /* --- Menu Slide Down --- */
  .menu2 {
    position: fixed;
    top: -100%;
    left: 0;
    width: 100%;
    background: rgba(10,10,10,0.95);
    display: flex;
    flex-direction: column;
    align-items: center;
    transition: top 0.5s ease;
    z-index: 1000;
    padding: 50px 0;
  }

  .menu2.active {
    top: 0;
  }

  .menu2 a {
    text-decoration: none;
    color: #f3f3f3ff;
    font-size: 24px;
    padding: 15px 0;
    transition: 0.3s;
  }

  .menu2 a:hover {
    color: #ff00ff;
  }
</style>
 
 

<!-- Bouton burger 2 -->
<div class="burger2" id="burger2">
  <span></span>
  <span></span>
  <span></span>
</div>

<!-- Menu -->
<nav class="menu2" id="menu2">
 <?php 

      for ($i = 0; $i < count($title_projet_a); $i++) {
      ?>
       
         <a href="#<?= $id_sha1_projet_a[$i] ?>" >
           <?= replace_element_2(AsciiConverter::asciiToString($title_projet_a[$i])) ?>
         </a>
    
     <?php
      }
?>
 
 
</nav>

<script>
  const burger2 = document.getElementById("burger2");
  const menu2 = document.getElementById("menu2");

  // Toggle du menu au clic sur le burger
  burger2.addEventListener("click", (e) => {
    e.stopPropagation(); // Empêche que le clic se propage
    burger2.classList.toggle("active");
    menu2.classList.toggle("active");
  });

  // Fermer si on clique ailleurs
  document.addEventListener("click", (e) => {
    if (!menu2.contains(e.target) && !burger2.contains(e.target)) {
      burger2.classList.remove("active");
      menu2.classList.remove("active");
    }
  });

  // (Optionnel) Fermer le menu quand on clique sur un lien
  menu2.querySelectorAll("a").forEach(link => {
    link.addEventListener("click", () => {
      burger2.classList.remove("active");
      menu2.classList.remove("active");
    });
  });
</script>
