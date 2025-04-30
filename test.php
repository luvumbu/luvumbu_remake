<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Commentaires</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f7f7f7;
      padding: 20px;
    }
    h2 {
      color: #333;
    }
    form {
      background: #fff;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
      margin-bottom: 30px;
    }
    input, textarea, button {
      display: block;
      width: 100%;
      margin-top: 10px;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    button {
      background: #007BFF;
      color: white;
      cursor: pointer;
    }
    .comment {
      background: #fff;
      padding: 15px;
      margin-bottom: 15px;
      border-left: 5px solid #007BFF;
      border-radius: 5px;
    }
    .comment .name {
      font-weight: bold;
    }
    .comment .date {
      font-size: 0.9em;
      color: #666;
    }
  </style>
</head>
<body>
<h2>Commentaires récents</h2>

<div class="comment">
  <div class="name">Jean Dupont</div>
  <div class="date">Publié le 25 avril 2025</div>
  <p>Super article, merci pour les infos !</p>
</div>

<div class="comment">
  <div class="name">Marie Durant</div>
  <div class="date">Publié le 23 avril 2025</div>
  <p>Très utile, j'ai pu résoudre mon problème rapidement.</p>
</div>

<div class="comment">
  <div class="name">Lucas Martin</div>
  <div class="date">Publié le 20 avril 2025</div>
  <p>Merci beaucoup ! Hâte de voir les prochaines publications.</p>
</div>



  <h2>Laissez un commentaire</h2>
  
    <textarea name="message" placeholder="Votre commentaire" rows="4" required></textarea>
    <button type="submit">Envoyer</button>
 



</body>
</html>
