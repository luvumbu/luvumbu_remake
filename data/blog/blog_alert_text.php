<?php

$message_place ="Votre retour est important ! Expliquez-nous ce qui ne va pas..." ; 
?>
  <style>
    .bulle-personne {
      position: relative;
      background: #fff;
      border: 2px solid #333;
      border-radius: 16px;
      padding: 15px;
      width: 280px;
      box-shadow: 3px 3px 0 #333;
      font-family: 'Comic Sans MS', cursive, sans-serif;
    }

    .bulle-personne::after {
      content: "";
      position: absolute;
      bottom: -15px;
      left: 40px;
      width: 0;
      height: 0;
      border: 8px solid transparent;
      border-top-color: #fff;
      border-bottom: 0;
      margin-left: -8px;
      filter: drop-shadow(1px 1px 0 #333);
    }

    .bulle-textarea {
      width: 100%;
      height: 80px;
      border: none;
      background: transparent;
      resize: none;
      font-size: 14px;
      line-height: 1.4;
      font-family: inherit;
      outline: none;
    }

    .bulle-btn {
      margin-top: 10px;
      padding: 8px 16px;
      border: 2px solid #333;
      background: rgba(200, 0, 0, 0.3);
      border-radius: 10px;
      cursor: pointer;
      font-weight: bold;
      box-shadow: 2px 2px 0 #333;
      transition: transform 0.1s ease;
    }

    .bulle-btn:hover {
      background:rgba(200, 50, 0, 0.7);;
    }

    .bulle-btn:active {
      transform: translate(1px, 1px);
      box-shadow: 1px 1px 0 #333;
    }
  </style>
</head>
<body>
  <div class="bulle-personne">
    <textarea class="bulle-textarea" placeholder="<?= $message_place ?>"></textarea>
    <button class="bulle-btn">Envoyer</button>
  </div>
</body>
</html>
