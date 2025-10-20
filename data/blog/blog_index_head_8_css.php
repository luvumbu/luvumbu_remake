 
<style>
  
body {
  margin: 0;
  font-family: "Times New Roman", serif;
}

/* ====== HEADER PRINCIPAL ====== */
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
  color: rgba(0, 0, 0,0.3);
}

/* ====== LOGO / TITRE ====== */
.main-header .logo {
  font-size: 14px;
  font-weight: normal;
}

/* ====== MENU NAVIGATION ====== */
.nav-menu {
  display: flex;
  gap: 40px;
}

.nav-menu a {
  text-decoration: none;
  color: rgba(0, 0, 0, 0.9) ;
  font-size: 14px;
}

.nav-menu a:hover {
  text-decoration: underline;
}

/* ====== BURGER ====== */
.burger {
  display: none;
  flex-direction: column;
  justify-content: space-between;
  width: 22px;
  height: 16px;
  cursor: pointer;
}

.burger span {
  height: 2px;
  background: rgba(0, 0, 0, 0.9);
  border-radius: 1px;
}

/* ====== VERSION MOBILE ====== */
@media (max-width: 700px) {
  .nav-menu {
    display: none;
    flex-direction: column;
    position: absolute;
    top: 48px;
    right: 32px;
    background: white;
    border: 1px solid #ddd;
    padding: 10px 0;
    width: 150px;
  }

  .nav-menu a {
    padding: 10px 20px;
    display: block;
  }

  .burger {
    display: flex;
  }

  .nav-menu.active {
    display: flex;
  }
}
</style>
 