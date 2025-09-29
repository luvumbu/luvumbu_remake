<div class="inputs_val">
    <div class="info">🔒 Cette page est protégée. Veuillez entrer le mot de passe :</div>
    <input id="password_projet" type="password" placeholder="Mot de passe">
    <div class="password_projet" onclick="password_projet(this)">Valider</div>
</div>

<style>
.inputs_val {
    width: 60%;
    max-width: 400px;
    margin: auto;
    position: absolute;
    top: 200px;
    left: 0;
    right: 0;

    display: flex;
    flex-direction: column;
    gap: 10px;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.9);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
    backdrop-filter: blur(6px);
}

.inputs_val .info {
    font-size: 14px;
    color: #444;
    font-weight: 500;
    margin-bottom: 5px;
}

.inputs_val input {
    padding: 12px 14px;
    border: 1px solid #ccc;
    border-radius: 8px;
    outline: none;
    font-size: 15px;
    transition: 0.2s;
}

.inputs_val input:focus {
    border-color: #007BFF;
    box-shadow: 0 0 4px rgba(0, 123, 255, 0.4);
}

.inputs_val .password_projet {
    background: #007BFF;
    color: white;
    padding: 12px 0;
    border-radius: 8px;
    cursor: pointer;
    font-weight: bold;
    text-align: center;
    transition: 0.3s;
    user-select: none;
}

.inputs_val .password_projet:hover {
    background: #0056b3;
}
.password_projet:hover{
  cursor: pointer;
}

body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

img {
    position: fixed;
    width: 140%;
    left: -20%;
    z-index: -1;
}
</style>
<script>
function password_projet(_this) {


_this.style.display="none" ; 
    const password_projet = document.getElementById("password_projet").value;
    console.log(password_projet);
    var ok = new Information("../req_sql/password_projet.php"); // création de la classe 
    ok.add("password_projet", password_projet); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp


    const myTimeout = setTimeout(x, 250);

    function x() {
      location.reload();
    }





}
</script>
<img src="../src/img/404.webp" alt="">