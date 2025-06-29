<header>
  <div class="logo">MySite</div>
  <input type="checkbox" id="menu-toggle" />
  <label for="menu-toggle" class="hamburger">&#9776;</label>
  <nav>
    <a href="#">Home</a>
    <a href="#">Features</a>
    <a href="#">Pricing</a>
    <a href="#">Contact</a>
  </nav>
</header>

<style>
  body{
    margin: 0;
  }
header {
  background: #222;
  padding: 1rem 2rem;
  color: white;
  display: flex;
  align-items: center;
  justify-content: space-between;
  position: relative;
}
.logo {
  font-size: 1.5rem;
}
.hamburger {
  font-size: 2rem;
  cursor: pointer;
  display: none;
}
nav {
  display: flex;
  gap: 1.5rem;
}
nav a {
  text-decoration: none;
  color: white;
  transition: color 0.3s;
}
nav a:hover {
  color: #00fff0;
}
#menu-toggle {
  display: none;
}
@media (max-width: 768px) {
  nav {
    display: none;
    flex-direction: column;
    background: #333;
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
  }
  #menu-toggle:checked + .hamburger + nav {
    display: flex;
  }
  .hamburger {
    display: block;
  }
}
</style>
