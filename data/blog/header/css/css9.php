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







<style>
/* ==================== BASE ==================== */
:root {
  --bg-color: rgba(15, 15, 20, 0.8);
  --accent-color: #00c3ff;
  --text-color: #f0f0f0;
  --hover-color: #00ffe0;
  --transition: 0.3s ease;
  backdrop-filter: blur(10px);
}


/* ==================== HEADER ==================== */
.main-header {
  width: 100%;
  padding: 15px 30px;
  background: var(--bg-color);
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-sizing: border-box;
  position: fixed;
  top: 0;
  z-index: 1000;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(12px);
}

/* ==================== LOGO ==================== */
.logo {
  font-size: 1.5rem;
  font-weight: 700;
  color: var(--accent-color);
  letter-spacing: 1px;
  text-shadow: 0 0 8px rgba(0, 255, 255, 0.3);
}

/* ==================== BURGER ==================== */
.burger {
  width: 30px;
  height: 24px;
  display: none;
  flex-direction: column;
  justify-content: space-between;
  cursor: pointer;
  z-index: 1001;
}

.burger span {
  display: block;
  height: 3px;
  background: var(--accent-color);
  border-radius: 2px;
  transition: var(--transition);
  box-shadow: 0 0 6px var(--accent-color);
}

.burger.active span:nth-child(1) {
  transform: rotate(45deg) translateY(9px);
}
.burger.active span:nth-child(2) {
  opacity: 0;
}
.burger.active span:nth-child(3) {
  transform: rotate(-45deg) translateY(-9px);
}

/* ==================== MENU ==================== */
.nav-menu {
  display: flex;
  gap: 35px;
  align-items: center;
  transition: var(--transition);
}

.nav-menu a {
  color: var(--text-color);
  text-decoration: none;
  font-size: 1.1rem;
  position: relative;
  transition: var(--transition);
}

.nav-menu a::after {
  content: "";
  position: absolute;
  bottom: -5px;
  left: 0;
  width: 0%;
  height: 2px;
  background: var(--accent-color);
  transition: var(--transition);
}

.nav-menu a:hover {
  color: var(--hover-color);
  text-shadow: 0 0 6px var(--hover-color);
}

.nav-menu a:hover::after {
  width: 100%;
}

/* ==================== RESPONSIVE ==================== */
@media (min-width: 601px) and (max-width: 900px) {
  .nav-menu a {
    font-size: 0.9em !important;
  }
}

/* ==================== MODE BURGER PHP ==================== */
<?php if ($isBurger): ?>
.nav-menu {
  position: fixed;
  top: 0;
  right: 0;
  height: 100vh;
  width: 240px;
  background: rgba(20, 20, 30, 0.9);
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 30px;
  transform: translateX(100%);
  padding-top: 80px;
  box-sizing: border-box;
  box-shadow: -2px 0 10px rgba(0, 0, 0, 0.5);
  transition: transform var(--transition);
}
.nav-menu.active {
  transform: translateX(0);
}
.burger {
  display: flex;
}
<?php else: ?>
@media (max-width: 700px) {
  .burger {
    display: flex;
  }
  .nav-menu {
    position: fixed;
    top: 0;
    right: 0;
    height: 100vh;
    width: 240px;
    background: rgba(20, 20, 30, 0.9);
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    gap: 30px;
    transform: translateX(100%);
    padding-top: 80px;
    box-sizing: border-box;
    box-shadow: -2px 0 10px rgba(0, 0, 0, 0.5);
    transition: transform var(--transition);
  }
  .nav-menu.active {
    transform: translateX(0);
  }
}
<?php endif; ?>
</style>



 