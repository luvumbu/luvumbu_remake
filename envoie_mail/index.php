<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Envoyer un mail</title>
  <style>
 
  </style>
</head>
<body>

  <style>
      body {
          background: #f5f8ff;
          font-family: "Segoe UI", sans-serif;
          color: #333;
          margin: 0;
          padding: 0;
      }
      .form-container {
          max-width: 650px;
          margin: 60px auto;
          background: #fff;
          border-radius: 15px;
          padding: 30px;
          box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      }
      h1, h2 {
          text-align: center;
          margin-bottom: 20px;
      }
      h1 a {
          text-decoration: none;
          color: #007bff;
          font-size: 1.2em;
          transition: color 0.3s ease-in-out;
      }
      h1 a:hover {
          color: #0056b3;
      }
      form {
          display: flex;
          flex-direction: column;
          gap: 15px;
      }
      label {
          font-weight: bold;
          margin-top: 10px;
          color: #444;
      }
      textarea {
          resize: none;
          padding: 12px;
          border-radius: 8px;
          border: 1px solid #ccc;
          font-size: 1em;
          transition: border-color 0.3s ease-in-out;
      }
      textarea:focus {
          border-color: #007bff;
          outline: none;
      }
      input[type="file"] {
          padding: 8px;
          border-radius: 8px;
          border: 1px solid #ccc;
          background: #fafafa;
          cursor: pointer;
      }
      input[type="submit"] {
          background: #28a745;
          color: white;
          font-weight: bold;
          border: none;
          border-radius: 8px;
          padding: 12px;
          cursor: pointer;
          font-size: 1.1em;
          transition: background 0.3s ease-in-out;
      }
      input[type="submit"]:hover {
          background: #218838;
      }
      .password_input{
        width: 80%;
        margin: auto;
      }
      .display_none{
        display: none;
      }
      .password_input{
        border: 1px solid rgba(0,0,0,0);
        border-bottom: 2px solid black;
        padding: 10px;
      }
  </style>
 


  <div class="form-container">

    <a href="ajout.php"> <h1>Cliquez ici pour ajouter une adresse mail</h1></a>
    <input type="password" onkeyup="checkPasswordStrength(this)" placeholder="Entrez votre mot de passe" class="password_input">

    <h2>📧 Envoyer un mail</h2>
    <form action="send_mail.php" method="post" enctype="multipart/form-data">
      <label for="message">Votre message :</label>
      <textarea name="message" id="message" rows="8" placeholder="Écrivez votre texte ici..." required></textarea>

      <label for="images">Ajouter des images :</label>
      <input type="file" name="images[]" id="images" multiple accept="image/*">

      <input type="submit" value="Envoyer" id="send_button" class="display_none">

    </form>
  </div>
</body>
</html>

<script>
  function checkPasswordStrength(_this){
console.log(_this.value);

if(_this.value === "send_mail"){
  document.getElementById("send_button").className = "display_block";
} else {
  document.getElementById("send_button").className = "display_none";
}
  }
</script>