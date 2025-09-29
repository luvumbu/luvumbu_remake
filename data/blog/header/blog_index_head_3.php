 





 





 <style>
 

  h1 {
    text-align: center;
  }

  /* --- Bouton Burger --- */
  .burger {
    position: fixed;
    top: 20px;
    left: 20px;
    width: 40px;
    height: 32px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    cursor: pointer;
    z-index: 1001;
  }

  .burger span {
    display: block;
    height: 4px;
    background: #ffcc00;
    border-radius: 3px;
    transition: 0.4s;
    transform-origin: center;
  }

  /* Animation croix propre */
  .burger.active span:nth-child(1) {
    transform: rotate(45deg) translate(5px, 6px);
  }
  .burger.active span:nth-child(2) {
    opacity: 0;
  }
  .burger.active span:nth-child(3) {
    transform: rotate(-45deg) translate(6px, -6px);
  }

  /* --- Menu --- */
  .menu {
    position: fixed;
    top: 0;
    left: -260px;
    width: 260px;
    height: 100%;
    background: rgba(0,0,0,0.95);
    display: flex;
    flex-direction: column;
    justify-content: center;
    transition: 0.4s;
    z-index: 1000;
  }

  .menu.active {
    left: 0;
  }

  .menu a {
    text-decoration: none;
    color: #ffcc00;
    padding: 15px;
    font-size: 22px;
    text-align: center;
    transition: 0.3s;
  }

  .menu a:hover {
    background: #ffcc00;
    color: black;
  }
</style>
</head>
<body>

 

<!-- Bouton burger -->
<div class="burger" id="burger">
  <span></span>
  <span></span>
  <span></span>
</div>

<!-- Menu -->

 
<nav class="menu" id="menu">
 
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
  const burger = document.getElementById("burger");
  const menu = document.getElementById("menu");

  // Toggle menu quand on clique sur le burger
  burger.addEventListener("click", (e) => {
    e.stopPropagation(); // Empêche le clic de se propager au document
    burger.classList.toggle("active");
    menu.classList.toggle("active");
  });

  // Fermer le menu si on clique ailleurs
  document.addEventListener("click", (e) => {
    if (!menu.contains(e.target) && !burger.contains(e.target)) {
      burger.classList.remove("active");
      menu.classList.remove("active");
    }
  });
</script>
