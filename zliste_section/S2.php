<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Autre style description_1_1</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, sans-serif;
      background: #f9f9f9;
      color: #222;
    }

    /* --- Conteneur général --- */
    .description_1_1_new {
      max-width: 750px;
      margin: 50px auto;
      padding: 20px;
    }

    /* --- Nouveau style pour le titre --- */
    .description_1_1_new h1 {
      font-size: 2.5rem;
      font-weight: 600;
      color: #1a1a1a;
      text-align: left;
      margin-bottom: 15px;
      position: relative;
      padding-left: 10px;
    }

    .description_1_1_new h1::before {
      content: "";
      position: absolute;
      left: 0;
      top: 50%;
      transform: translateY(-50%);
      width: 5px;
      height: 100%;
      background-color: #ff6f61;
      border-radius: 2px;
    }

    /* --- Nouveau style pour le paragraphe --- */
    .description_1_1_new p {
      font-size: 1.05rem;
      line-height: 1.7;
      color: #333;
      background: #fff;
      padding: 15px 20px;
      border-radius: 6px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
      text-align: justify;
      margin: 15px 0;
    }

    /* Classe alternative pour paragraphe, similaire à .text_continent_p1 */
    .text_continent_p1_new {
      font-size: 1.05rem;
      line-height: 1.7;
      color: #333;
      background: #fff;
      padding: 15px 20px;
      border-radius: 6px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
      text-align: justify;
      margin: 15px 0;
    }
  </style>
</head>
<body>

  <div class="description_1_1_new">
    <h1>Nouveau style de titre</h1>
    <p>
      Voici un paragraphe au style minimaliste et élégant. La ligne colorée à gauche du titre apporte un repère visuel subtil et moderne. Idéal pour une présentation claire et professionnelle.
    </p>
  
  </div>

</body>
</html>
