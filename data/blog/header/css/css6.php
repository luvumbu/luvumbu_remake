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

<style>/* ==================== BASE ==================== */


/* ==================== HEADER ==================== */
.main-header {
  width: 100%;
  padding: 15px 30px;
  background: linear-gradient(90deg, #1c0030 0%, #000b3a 100%);
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-sizing: border-box;
  box-shadow: 0 0 10px rgba(0, 255, 200, 0.3);
  border-bottom: 2px solid rgba(0, 255, 200, 0.5);
  position: relative;
  z-index: 1000;
}

/* ==================== LOGO / TITRE ==================== */
.logo {
  font-size: 1.6rem;
  font-weight: bold;
  letter-spacing: 2px;
  background: linear-gradient(90deg, #00f0c0, #80ff80);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-transform: uppercase;
  animation: logoPulse 3s infinite ease-in-out;
}

@keyframes logoPulse {
  0%, 100% { opacity: 0.9; transform: scale(1); }
  50% { opacity: 1; transform: scale(1.05); }
}

/* ==================== NAV MENU ==================== */
.nav-menu a {
  color: #eee;
  text-decoration: none;
  font-size: 1rem;
  letter-spacing: 1px;
  position: relative;
  transition: color 0.3s ease;
}

.nav-menu a::after {
  content: "";
  position: absolute;
  bottom: -4px;
  left: 0;
  width: 0%;
  height: 2px;
  background: linear-gradient(90deg, #00f0c0, #80ff80);
  transition: width 0.3s ease;
}

.nav-menu a:hover {
  color: #80ff80;
}

.nav-menu a:hover::after {
  width: 100%;
}

/* ==================== BURGER ==================== */
.burger span {
  display: block;
  height: 3px;
  background: linear-gradient(90deg, #00f0c0, #80ff80);
  border-radius: 3px;
  transition: 0.4s;
}

/* ==================== MENU MOBILE ==================== */
<?php if ($isBurger): ?>
.nav-menu {
  position: fixed;
  top: 0; right: 0;
  height: 100vh; width: 250px;
  background: rgba(0, 10, 50, 0.95);
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 25px;
  transform: translateX(100%);
  padding-top: 60px;
  box-sizing: border-box;
  box-shadow: -5px 0 15px rgba(0, 255, 200, 0.3);
  transition: transform 0.4s ease;
  backdrop-filter: blur(8px);
}
.nav-menu.active { transform: translateX(0); }
.burger { display: flex; }
<?php else: ?>
@media (max-width: 700px) {
  .burger { display: flex; }
  .nav-menu {
    position: fixed;
    top: 0; right: 0;
    height: 100vh; width: 250px;
    background: rgba(0, 10, 50, 0.95);
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    gap: 25px;
    transform: translateX(100%);
    padding-top: 60px;
    box-sizing: border-box;
    box-shadow: -5px 0 15px rgba(0, 255, 200, 0.3);
    transition: transform 0.4s ease;
    backdrop-filter: blur(8px);
  }
  .nav-menu.active { transform: translateX(0); }
}
<?php endif; ?>

</style>
