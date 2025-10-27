 
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">

<style>
 

/* ==================== MENU TAILLE ==================== */
@media (min-width: 601px) and (max-width: 900px) {
  .nav-menu a {
    font-size: 0.8em !important;
  }
}

/* ==================== HEADER ==================== */
.main-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 12px 32px;
  border-bottom: 1px solid #ddd; /* fine ligne grise */
  background-color: white;       /* fond blanc */
  letter-spacing: 2px;
  position: relative;
  z-index: 1000;
}

/* LOGO / TITRE */
.logo {
  font-size: 1.4rem;
  font-weight: bold;
}

/* ==================== BURGER ==================== */
.burger {
  width: 28px;
  height: 22px;
  display: none;
  flex-direction: column;
  justify-content: space-between;
  cursor: pointer;
  z-index: 1001;
}
 

.burger span {
  display: block;
  height: 3px;
  background: #550a0aff;
  border-radius: 2px;
  transition: 0.3s;
}

/* ==================== MENU ==================== */
.nav-menu {
  display: flex;
  gap: 30px;
  align-items: center;
  transition: 0.4s ease;
}

.nav-menu a {
 
  text-decoration: none;
  font-size: 1.1rem;
  transition: color 0.2s;
}

.nav-menu a:hover {
  color: orange;
}

.nav-menu a {
  text-decoration: none;
  color: black;
}

/* BURGER ANIMATION */
.burger.active span:nth-child(1) { transform: rotate(45deg) translateY(9px); }
.burger.active span:nth-child(2) { opacity: 0; }
.burger.active span:nth-child(3) { transform: rotate(-45deg) translateY(-9px); }

/* ==================== MODE BURGER PHP ==================== */
<?php if ($isBurger): ?>
.nav-menu {
  position: fixed;
  top: 0; right: 0;
  height: 100vh; width: 220px;
  background: #ffffffff;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 25px;
  transform: translateX(100%);
  overflow-y: auto;
  padding-top: 50px;
  box-sizing: border-box;
}
.nav-menu.active { transform: translateX(0); }
.burger { display: flex; }
<?php else: ?>
@media (max-width: 700px) {
  .burger { display: flex; }
  .nav-menu {
    position: fixed;
    top: 0; right: 0;
    height: 100vh; width: 220px;
    background: #ffffffff;
box-shadow: 1px 2px 2px black;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    gap: 25px;
    transform: translateX(100%);
    overflow-y: auto;
    padding-top: 50px;
    box-sizing: border-box;
  }
  .nav-menu.active { transform: translateX(0); }
}
<?php endif; ?>
</style>
</head>



<script>
const burger = document.getElementById('burger');
const menu = document.getElementById('nav-menu');

// Toggle burger menu
burger.addEventListener('click', () => {
  burger.classList.toggle('active');
  menu.classList.toggle('active');
});

// Fermer le menu quand on clique sur un lien
document.querySelectorAll('.nav-menu a').forEach(link => {
  link.addEventListener('click', () => {
    burger.classList.remove('active');
    menu.classList.remove('active');
  });
});

// Fermer le menu quand on clique en dehors
document.addEventListener('click', (e) => {
  if (!menu.contains(e.target) && !burger.contains(e.target)) {
    burger.classList.remove('active');
    menu.classList.remove('active');
  }
});
</script>
