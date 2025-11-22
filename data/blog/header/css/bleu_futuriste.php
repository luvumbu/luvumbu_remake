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
  --bg-blur: rgba(20, 30, 50, 0.6);
  --accent-color: #3b82f6;
  --hover-color: #60a5fa;
  --text-color: #e3f0ff;

  --white: #ffffff;
  --white-dim: rgba(255, 255, 255, 0.1);
  --dark-bg1: rgba(15, 25, 45, 0.75);
  --dark-bg2: rgba(25, 40, 70, 0.85);
  --dark-bg3: rgba(20, 30, 50, 0.6);
  --shadow-dark: rgba(0, 0, 20, 0.35);
  --shadow-side: rgba(0, 0, 30, 0.45);
  --shadow-soft: rgba(0, 0, 20, 0.25);

  --transition: 0.35s ease;
  --shadow: 0 4px 25px var(--shadow-dark);

  backdrop-filter: blur(15px);
}


/* ==================== HEADER ==================== */
.main-header {
  width: 100%;
  padding: 12px 28px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-sizing: border-box;
  background: var(--bg-blur);
  position: fixed;
  top: 0;
  z-index: 1000;
  box-shadow: var(--shadow);
  backdrop-filter: blur(18px);
}

/* ==================== LOGO ==================== */
.logo {
  font-family: "Audiowide", sans-serif;
  font-size: 1.4rem;
  font-weight: 600;
  letter-spacing: 1px;
  background: linear-gradient(45deg, var(--accent-color), var(--hover-color));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-shadow: 0 0 8px var(--white-dim);
}

/* ==================== MENU ==================== */
.nav-menu {
  display: flex;
  gap: 30px;
  align-items: center;
  transition: var(--transition);
}

.nav-menu a {
  color: var(--text-color);
  text-decoration: none;
  font-size: 1rem;
  letter-spacing: 0.5px;
  position: relative;
  padding: 4px 0;
  transition: var(--transition);
}

.nav-menu a::before {
  content: "";
  position: absolute;
  bottom: 0;
  left: 50%;
  width: 0%;
  height: 2px;
  background: linear-gradient(90deg, var(--accent-color), var(--hover-color));
  transition: var(--transition);
  transform: translateX(-50%);
}

.nav-menu a:hover {
  color: var(--white);
}

.nav-menu a:hover::before {
  width: 100%;
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
  height: 3px;
  background: linear-gradient(90deg, var(--accent-color), var(--hover-color));
  transition: var(--transition);
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
  width: 230px;
  background: var(--dark-bg1);
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 28px;
  transform: translateX(100%);
  padding-top: 80px;
  box-sizing: border-box;
  box-shadow: -5px 0 15px var(--shadow-side);
  transition: transform var(--transition);
  backdrop-filter: blur(20px);
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
  width: 230px;

  background: linear-gradient(
    to right,
    var(--dark-bg2),
    var(--dark-bg3)
  );

  backdrop-filter: blur(20px) saturate(180%) contrast(110%) brightness(1.05);

  box-shadow: -5px 0 30px var(--shadow-soft);

  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 28px;
  transform: translateX(100%);
  padding-top: 80px;
  box-sizing: border-box;

  transition: transform var(--transition);
}

  .nav-menu.active {
    transform: translateX(0);
  }
}
<?php endif; ?>
</style>
