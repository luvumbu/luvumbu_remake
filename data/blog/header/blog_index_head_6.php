 
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f0f0f0;
    }

    /* Bouton Burger */
    .burger {
      position: fixed;
      top: 20px;
      right: 20px;
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

    .burger.active span:nth-child(1) { transform: rotate(45deg) translate(5px, 5px); }
    .burger.active span:nth-child(2) { opacity: 0; }
    .burger.active span:nth-child(3) { transform: rotate(-45deg) translate(6px, -6px); }

    /* Sidebar */
    .sidebar {
      position: fixed;
      top: 0;
      right: -250px;   /* cachée par défaut */
      width: 250px;    /* largeur augmentée */
      height: 100%;
      background: #222;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      padding-top: 60px;
      transition: right 0.3s;
      z-index: 1000;
    }

    .sidebar.active { right: 0; }

    .sidebar a {
      position: relative;
      display: flex;
      align-items: center;
      width: 100%;
      padding: 15px 20px;
      margin: 5px 0;
      background: #170a36ff;
      border-radius: 5px;
      text-decoration: none;
      color: #000;
      font-size: 18px;
      transition: 0.3s;
      color: white;
      box-sizing: border-box;
    }

    .sidebar a:hover { 
      background: #ff6600; 
      color: #fff; 
      transform: translateX(10px); 
    }

    /* Badge panier */
    .sidebar a.cart::after {
      content: "3";
      position: absolute;
      top: 8px;
      right: 10px;
      width: 18px;
      height: 18px;
      background: #850404ff;
      color: #fff;
      font-size: 12px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
 

  <!-- Bouton burger -->
  <div class="burger" id="burger">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
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
    const sidebar = document.getElementById("sidebar");

    // Ouvrir / fermer sidebar
    burger.addEventListener("click", (e) => {
      burger.classList.toggle("active");
      sidebar.classList.toggle("active");
      e.stopPropagation();
    });

    // Fermer sidebar si clic à l’extérieur
    document.addEventListener("click", (e) => {
      if(sidebar.classList.contains("active") && !sidebar.contains(e.target) && !burger.contains(e.target)) {
        sidebar.classList.remove("active");
        burger.classList.remove("active");
      }
    });
  </script>

</body>
</html>
