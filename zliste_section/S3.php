<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Section Important – Deux parties</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, sans-serif;
      background: #f5f5f5;
      color: #222;
    }

    /* Conteneur général */
    .section_1_1 {
     
      margin: 50px auto;
      padding: 0; /* on gère le padding par partie */
    }

    /* Partie titre */
    .section_1_1_title {
      border-left: 6px solid #ff4b2b; /* bordure gauche importante */
      background: #fff3f0; /* fond léger */
      padding: 20px 25px;
      border-radius: 10px 10px 0 0; /* arrondi haut seulement */
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }

    .section_1_1_title h1 {
      font-size: 2.5rem;
      font-weight: 800;
      color: #ff4b2b;
      margin: 0;
      letter-spacing: 1px;
    }

    /* Partie texte */
    .section_1_1_text {
      background: #fff3f0;
      border-left: 6px solid #ff4b2b;
      padding: 18px 25px;
      border-radius: 0 0 10px 10px; /* arrondi bas seulement */
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      margin-top: 0; /* coller juste sous le titre */
    }

    .section_1_1_text p {
      font-size: 1.15rem;
      line-height: 1.7;
      color: #444;
      margin: 0;
      text-align: justify;
    }

    /* Optionnel : hover léger */
    .section_1_1_title:hover,
    .section_1_1_text:hover {
      transform: translateY(-2px);
      transition: 0.3s;
      box-shadow: 0 6px 18px rgba(0,0,0,0.15);
    }
  </style>
</head>
<body>
    <div class="section_1_1_title">
      <h1>Attention : Point important</h1>
    </div>
  <div class="section_1_1">


    <div class="section_1_1_text">
      <p>
        Cette section met en avant un message important à ne pas manquer.  
        La division en deux parties permet de distinguer clairement le titre et le contenu, tout en restant élégant et lisible.
      </p>
    </div>
  </div>

</body>
</html>
