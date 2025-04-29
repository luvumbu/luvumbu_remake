<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= $google_title_projet[0] ?></title>
  <meta charset="utf-8">
  <meta name="google-adsense-account" content="ca-pub-7899923856846249">
  <link rel="icon" type="image/x-icon" href="<?= '../img_dw/' . $img_projet_src1[0] ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <?php 
require_once "src/css/body_blog_css.php";
 ?>
</head>
 
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><?= $id_sha1_projet[0] ?></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">

          <?php



          for ($i = 0; $i < count($id_sha1_projet); $i++) {

            $title_projet_ = $title_projet_x[$i];
            if ($i == 0) {
          ?>
              <li class="active"><a href="#">
                  <?= $title_projet_  ?>
                </a></li>
            <?php
            } else {
            ?>
              <li><a href="#<?= $id_sha1_projet[$i] ?>"><?= $title_projet_  ?></a></li>

          <?php
            }
          }

          ?>

        </ul>


        <?php
        if (!isset($_SESSION["index"])) {
        ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../view/inscrption.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="../index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        <?php
        }

        ?>

      </div>
    </div>
  </nav>


  <?php

  require "data/blog/id_sha1_projet_song.php";
  $textes = $description_projet_z;
 
 
  if($type_projet[0]==""){
    require_once "data/blog/blog_audio.php";
  }
  else{
 


 // require_once "quiz_result.php" ; 

  require_once "data/blog/blog_quiz.php";


  }

  ?>
  <a href="../"><img width="25" height="25" src="https://img.icons8.com/sf-ultralight/25/return.png" alt="return" /></a>
 
</body>

</html>