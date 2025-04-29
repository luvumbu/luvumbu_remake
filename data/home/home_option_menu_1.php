<div class="liste__" style="margin-top:175px">

  <!-- 1. input -->
  <div class="section">
    <label for="input1">Input</label>
    <input type="text" id="input1">
    <div class="inline-buttons">
      <button class="btn btn-toggle">Toggle Input</button>
      <button class="btn btn-remove">Remove Text</button>
    </div>
  </div>

  <!-- 2. textarea -->
  <div class="section">
    <label for="textarea1">Textarea</label>
    <textarea id="textarea1" rows="3"></textarea>
    <div class="inline-buttons">
      <button class="btn btn-toggle">Toggle Textarea</button>
      <button class="btn btn-remove">Remove Textarea</button>
    </div>
  </div>

  <!-- 3,4,5 input/textarea -->
  <div class="section">
    <label for="input2">Input 2</label>
    <input type="text" id="input2">

    <label for="input3">Input 3</label>
    <input type="text" id="input3">

    <label for="textarea2">Textarea 2</label>
    <textarea id="textarea2" rows="3"></textarea>
  </div>

  <!-- 6,7 select -->
  <div class="section">
    <label for="select1">Select 1</label>
    <select id="select1">
      <option>Option A</option>
      <option>Option B</option>
    </select>

    <label for="select2">Select 2</label>
    <select id="select2">
      <option>Option 1</option>
      <option>Option 2</option>
    </select>
  </div>

  <!-- 8. liste des images projet -->
  <div class="section">
    <label>Liste des images projet</label>
    <div class="image-list">
      <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSOQQflekWcfjiqxSL3ubV0m8jcjlRCRcsWqI3-B5NkaBn0hs_AVsBNBFow5KjWU0obp1fu3_xMqBqU2nV-Is7FuXV5bX1vhYE4h2OiNLM" alt="Image projet">
      <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSOQQflekWcfjiqxSL3ubV0m8jcjlRCRcsWqI3-B5NkaBn0hs_AVsBNBFow5KjWU0obp1fu3_xMqBqU2nV-Is7FuXV5bX1vhYE4h2OiNLM" alt="Image projet">
    </div>
  </div>

  <!-- 9. mon image -->
  <div class="section">
    <label>Mon image</label>
    <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSOQQflekWcfjiqxSL3ubV0m8jcjlRCRcsWqI3-B5NkaBn0hs_AVsBNBFow5KjWU0obp1fu3_xMqBqU2nV-Is7FuXV5bX1vhYE4h2OiNLM" alt="Mon image">
  </div>

  <!-- 10. ajouter une image -->
  <div class="section">
    <label for="ajouterImage">Ajouter une image</label>
    <input type="file" id="ajouterImage">
  </div>

  <!-- 11. groupe horizontal -->
  <div class="section horizontal-group">
    <div>
      <button class="btn btn-remove">Remove All Projet</button>
    </div>
    <div>
      <button class="btn btn-link">Link Projet</button>
    </div>
    <div>
      <button class="btn btn-on">Visibilité ON</button>
      <button class="btn btn-off">Visibilité OFF</button>
    </div>
    <div>
      <button class="btn btn-add">Ajouter un sous-projet</button>
    </div>
  </div>

</div>

<!-- Aperçu du texte collé -->
<div id="pastePreview"></div>

<style>
 
 

  .liste__ {
    max-width: 800px;
    margin: 0 auto;
    background: #fff;
    padding: 2rem;
    border-radius: 16px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  }

  .section {
    margin-bottom: 2rem;
  }

  label {
    display: block;
    font-weight: bold;
    margin-bottom: 0.5rem;
    color: #333;
  }

  input[type="text"],
  textarea,
  select,
  input[type="file"] {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ccc;
    border-radius: 12px;
    margin-bottom: 1rem;
    font-size: 1rem;
  }

  textarea {
    resize: vertical;
  }

  .inline-buttons {
    display: flex;
    gap: 1rem;
  }

  .btn {
    padding: 0.5rem 1.2rem;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 0.95rem;
    transition: background-color 0.3s ease;
  }

  .btn-toggle {
    background-color: #007bff;
    color: white;
  }

  .btn-toggle:hover {
    background-color: #0056b3;
  }

  .btn-remove {
    background-color: #dc3545;
    color: white;
  }

  .btn-remove:hover {
    background-color: #a71d2a;
  }

  .btn-link {
    background-color: #17a2b8;
    color: white;
  }

  .btn-link:hover {
    background-color: #0e7b94;
  }

  .btn-on {
    background-color: #28a745;
    color: white;
  }

  .btn-on:hover {
    background-color: #1e7e34;
  }

  .btn-off {
    background-color: #ffc107;
    color: black;
  }

  .btn-off:hover {
    background-color: #e0a800;
  }

  .btn-add {
    background-color: #6f42c1;
    color: white;
  }

  .btn-add:hover {
    background-color: #563d7c;
  }

  .horizontal-group {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    justify-content: space-between;
  }

  .horizontal-group > div {
    flex: 1 1 45%;
  }

  .image-list {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
  }

  .image-list img,
  .section img {
    width: 100px;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  }

  #pastePreview {
    margin-top: 2rem;
    padding: 1rem;
    background-color: #eef2f7;
    border-radius: 12px;
    border: 1px dashed #ccc;
    color: #333;
    font-style: italic;
  }
</style>

</style>

 

 
 