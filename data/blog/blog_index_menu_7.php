
<nav class="neon-nav">
  <a href="#">Accueil</a>
  <a href="#">Projets</a>
  <a href="#">Équipe</a>
  <a href="#">Contact</a>
</nav>

<style>
body {
  margin: 0;
  background: #0d0d0d;
  font-family: 'Orbitron', sans-serif;
}

.neon-nav {
  display: flex;
  justify-content: center;
  gap: 3rem;
  padding: 2rem;
  background: #111;
  box-shadow: 0 0 10px #0ff;
}

.neon-nav a {
  position: relative;
  color: #0ff;
  text-decoration: none;
  font-size: 1.2rem;
  padding: 0.5rem 1rem;
  transition: 0.3s;
  border: 1px solid transparent;
  text-shadow: 0 0 5px #0ff, 0 0 10px #0ff;
}

.neon-nav a:hover {
  border-color: #0ff;
  box-shadow: 0 0 20px #0ff;
  background: rgba(0, 255, 255, 0.1);
}
</style>

