<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Écran Télévision Zoom Dynamique</title>
<style>
body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: #222;
  margin: 0;
}

/* Cadre très plat et fin */
.tv {
  width: 500px;
  height: 280px;
  border: 4px solid #555;
  border-radius: 2px;
  background: #000;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 0 6px 18px rgba(0,0,0,0.5);
  position: relative;
  overflow: hidden; /* pour ne pas dépasser du cadre */
}

/* Écran avec image + zoom et déplacement rapide */
.screen {
  width: 100%;
  height: 100%;
  border-radius: 1px;
  background: url('https://i.pinimg.com/736x/a9/33/58/a93358ca66ad9c9b39dafdca9c249b4e.jpg') no-repeat;
  background-size: 120%;
  background-position: center center;
  display: flex;
  justify-content: center;
  align-items: center;
  animation: zoomPan 4s infinite alternate; /* zoom rapide */
}

/* Animation zoom et changement de partie */
@keyframes zoomPan {
  0% {
    transform: scale(1);
    background-position: center center;
  }
  25% {
    transform: scale(1.1);
    background-position: top left;
  }
  50% {
    transform: scale(1);
    background-position: top right;
  }
  75% {
    transform: scale(1.1);
    background-position: bottom left;
  }
  100% {
    transform: scale(1);
    background-position: bottom right;
  }
}

/* Pied discret */
.tv::after {
  content: "";
  position: absolute;
  bottom: -10px;
  left: 50%;
  transform: translateX(-50%);
  width: 100px;
  height: 5px;
  background: #444;
  border-radius: 2px;
  box-shadow: 0 3px 8px rgba(0,0,0,0.4);
}
</style>
</head>
<body>

<div class="tv">
  <div class="screen"></div>
</div>

</body>
</html>
