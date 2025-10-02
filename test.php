<div class="projets">

  <div class="projet">
    <img src="https://i.pinimg.com/736x/3d/58/45/3d5845fcbbd01dfa883f79dec9274f0b.jpg"
         alt="Projet 1">
    <h3>Projet 1</h3>
    <p>Description du projet 1.</p>
  </div>

  <div class="projet">
    <img src="https://i.pinimg.com/736x/3d/58/45/3d5845fcbbd01dfa883f79dec9274f0b.jpg"
         alt="Projet 2">
    <h3>Projet 2</h3>
    <p>Description du projet 2.</p>
  </div>

  <div class="projet">
    <img src="https://i.pinimg.com/736x/3d/58/45/3d5845fcbbd01dfa883f79dec9274f0b.jpg"
         alt="Projet 3">
    <h3>Projet 3</h3>
    <p>Description du projet 3.</p>
  </div>

  <div class="projet">
    <img src="https://i.pinimg.com/736x/3d/58/45/3d5845fcbbd01dfa883f79dec9274f0b.jpg"
         alt="Projet 4">
    <h3>Projet 4</h3>
    <p>Description du projet 4.</p>
  </div>

  <div class="projet">
    <img src="https://i.pinimg.com/736x/3d/58/45/3d5845fcbbd01dfa883f79dec9274f0b.jpg"
         alt="Projet 5">
    <h3>Projet 5</h3>
    <p>Description du projet 5.</p>
  </div>

  <div class="projet">
    <img src="https://i.pinimg.com/736x/3d/58/45/3d5845fcbbd01dfa883f79dec9274f0b.jpg"
         alt="Projet 6">
    <h3>Projet 6</h3>
    <p>Description du projet 6.</p>
  </div>

</div>

<style>
.projets {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 15px;
  max-width: 1000px;
  margin: 20px auto;
  padding: 0 10px;
}

.projet {
  border: 1px solid #ddd;
  border-radius: 8px;
  padding: 10px;
  text-align: center;
  background-color: #fafafa;
}

.projet img {
  width: 100%;
  height: 150px;
  object-fit: cover;
  border-radius: 6px;
  margin-bottom: 8px;
}

.projet h3 {
  margin: 8px 0 4px;
  font-size: 1.1rem;
}

.projet p {
  margin: 0;
  font-size: 0.9rem;
  color: #555;
}
</style>
