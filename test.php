<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Transition Jour/Nuit avec 1 div</title>
  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100vh;
    }

    .background {
      width: 410px;
      height: 800px;
      margin: auto;
      background-size: cover;
      background-position: center;
      animation: backgroundFade 8s infinite alternate ease-in-out;
    }

    @keyframes backgroundFade {
      0% {
        background-image: url('marion_dessin/01.png');
      }
      100% {
        background-image: url('marion_dessin/02.png');
      }
    }
  </style>
</head>
<body>
  <div class="background"></div>
</body>
</html>
