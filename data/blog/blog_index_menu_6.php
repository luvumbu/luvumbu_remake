<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Menu hamburger centré</title>
<style>
  body {
    background: #000;
    color: #fff;
    font-family: Arial, sans-serif;
  }
  nav {
    background: #000;
    padding: 1rem 2rem;
    position: relative;
  }
  ul {
    list-style: none;
    display: flex;
    justify-content: space-between;
    max-width: 900px;
    margin: 0 auto;
  }
  ul li a {
    color: #fff;
    text-decoration: none;
    padding: 0.5rem 0;
    display: block;
  }

  #menu-toggle {
    display: none;
  }

  .hamburger {
    display: none;
    position: absolute;
    top: 1rem;
    right: 2rem;
    width: 30px;
    height: 22px;
    flex-direction: column;
    justify-content: space-around;
    cursor: pointer;
  }
  .hamburger span {
    background: #fff;
    height: 3px;
    border-radius: 2px;
  }

  /* RESPONSIVE */
  @media (max-width: 600px) {
    ul {
      flex-direction: column;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease;
      background: #000;
      padding-left: 0;
      align-items: center;   /* CENTRER LES LI */
    }
    ul li {
      width: 100%;
      text-align: center;   /* TEXTE CENTRÉ */
      margin: 0.5rem 0;
    }
    #menu-toggle:checked + .hamburger + ul {
      max-height: 500px;
    }
    .hamburger {
      display: flex;
    }
  }
</style>
</head>
<body>
<nav>
  <input type="checkbox" id="menu-toggle" />
  <label for="menu-toggle" class="hamburger" aria-label="Menu">
    <span></span>
    <span></span>
    <span></span>
  </label>
  <ul>
    <li><a href="#">Accueil</a></li>
    <li><a href="#">Services</a></li>
    <li><a href="#">Portfolio</a></li>
    <li><a href="#">À propos</a></li>
    <li><a href="#">Contact</a></li>
    
    
  </ul>
</nav>
</body>
</html>
