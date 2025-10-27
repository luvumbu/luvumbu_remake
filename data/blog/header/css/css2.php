<style>/* ==================== BASE ==================== */
 
/* ==================== BASE ==================== */

/* ==================== HEADER ==================== */
.main-header {
  width: 100%;
  padding: 15px 30px;
  background: linear-gradient(135deg, #2c0030 0%, #1a001f 100%);
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-sizing: border-box;
  box-shadow: 0 0 15px rgba(200, 0, 255, 0.4);
  border-bottom: 2px solid rgba(200, 0, 255, 0.6);
  position: relative;
  z-index: 1000;
}

/* ==================== LOGO / TITRE ==================== */
.logo {
  font-size: 1.6rem;
  font-weight: bold;
  letter-spacing: 2px;
  background: linear-gradient(90deg, #ff00ff, #ff80ff);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-transform: uppercase;
  animation: logoGlow 2.5s infinite alternate;
}

@keyframes logoGlow {
  0% { text-shadow: 0 0 5px #ff00ff; transform: scale(1); }
  50% { text-shadow: 0 0 15px #ff80ff, 0 0 25px #ff00ff; transform: scale(1.08); }
  100% { text-shadow: 0 0 10px #ff00ff; transform: scale(1); }
}

/* ==================== NAV MENU ==================== */
.nav-menu {
  display: flex;
  gap: 25px;
}

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
  background: linear-gradient(90deg, #ff00ff, #ff80ff);
  transition: width 0.3s ease;
}

.nav-menu a:hover {
  color: #ff80ff;
}

.nav-menu a:hover::after {
  width: 100%;
}

/* ==================== BURGER ==================== */
.burger {
  display: none;
  flex-direction: column;
  justify-content: space-between;
  width: 25px;
  height: 18px;
  cursor: pointer;
}

.burger span {
  display: block;
  height: 3px;
  background: linear-gradient(90deg, #ff00ff, #ff80ff);
  border-radius: 3px;
  transition: all 0.4s ease;
}

.burger.active span:nth-child(1) {
  transform: rotate(45deg) translate(5px, 5px);
}
.burger.active span:nth-child(2) {
  opacity: 0;
}
.burger.active span:nth-child(3) {
  transform: rotate(-45deg) translate(5px, -5px);
}

/* ==================== MENU MOBILE ==================== */
<?php if ($isBurger): ?>
.nav-menu {
  position: fixed;
  top: 0; right: 0;
  height: 100vh;
  width: 250px;
  background: rgba(30, 0, 30, 0.95);
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 30px;
  transform: translateX(100%);
  padding-top: 60px;
  box-sizing: border-box;
  box-shadow: -5px 0 20px rgba(255, 0, 255, 0.4);
  transition: transform 0.4s ease;
  backdrop-filter: blur(10px);
}
.nav-menu.active { transform: translateX(0); }
.burger { display: flex; }
<?php else: ?>
@media (max-width: 700px) {
  .burger { display: flex; }
  .nav-menu {
    position: fixed;
    top: 0; right: 0;
    height: 100vh;
    width: 250px;
    background: rgba(30, 0, 30, 0.95);
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    gap: 30px;
    transform: translateX(100%);
    padding-top: 60px;
    box-sizing: border-box;
    box-shadow: -5px 0 20px rgba(255, 0, 255, 0.4);
    transition: transform 0.4s ease;
    backdrop-filter: blur(10px);
  }
  .nav-menu.active { transform: translateX(0); }
}
<?php endif; ?>
 


</style>