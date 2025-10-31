      <section class="about" id="Apropos">
          <h2 class="section-title wtop">À propos</h2>
          <div class="text_continent">

              <?php
                $img_user_b_ = 'img_dw/' . $img_user_c[0];
                if ($img_user_b_ != "") {
                    if (file_exists($img_user_b_)) {
                        $img_user_b_ = '../' . $img_user_b_;
                ?>



              <div class="img_dw2">
                  <img src="<?= $img_user_b_ ?>" alt="" srcset="">
              </div>
              <?php
                    }
                }
                ?>
          </div>
          <div>
              <p class="date_inscription">
                  <?= replace_element_2(AsciiConverter::asciiToString($description_user_c[0])); ?>
                  <?= ' ' . replace_element_2(AsciiConverter::asciiToString($title_user_c[0])); ?></p>
              <div class="about-text"></div>
              <div class="text_continent_p1">
                  <p><?= replace_element_2(AsciiConverter::asciiToString($info_user_1_c[0])); ?>
                  <p><?= replace_element_2(AsciiConverter::asciiToString($info_user_2_c[0])); ?>
                  <p><?= replace_element_2(AsciiConverter::asciiToString($info_user_3_c[0])); ?>
              </div>
          </div>
          </div>

      </section>
      <?php

$filename = 'qr_code_1/temp/'.$url_.'.png';

if (file_exists($filename)) {
  ?>
      <div class="qr_code">
          <img src="../qr_code_1/temp/<?= $url_?>.png" alt="" srcset="">
      </div>
      <?php
} else {

    $_SESSION["qr_code_page"] = $url_ ;  
    ?>
      <meta http-equiv="refresh" content="0;URL=../qr_code_1/index3.php">
      <?php 
    
}

 
?>
      <footer>
          <div class="footer-content">
              <div class="footer-links">
                  <?php if ($id_sha1_parent_projet[0] != "") { ?>
                  <a href="<?= $id_sha1_parent_projet[0] ?>">↰ Page parent</a>
                  <?php } ?>
  
                  <a href="#main-header">⬆</a>
                  <a href="../index.php">Home</a>
                  <a href="#privacy">Privacy Policy</a>
                  <a href="#terms">Terms of Service</a>
                  <a href="#careers">Careers</a>
                  <?php if (isset($_SESSION["password_projet"]) || isset($_SESSION["index"])) { ?>
                  <a href="../Class/session_destroy.php">Off</a>
                  <?php } ?>
              </div>
              <p class="copyright">
                  © 2025 <?php
        $text = replace_element_2(AsciiConverter::asciiToString($title_projet[0]));
        echo (mb_strlen($text, 'UTF-8') > 100) ? mb_substr($text, 0, 100, 'UTF-8') . '...' : $text;
      ?>. All rights reserved. Building tomorrow, today. | Design:
                  <a href="https://templatemo.com" target="_blank" rel="nofollow noopener">TemplateMo</a>
              </p>
          </div>

      </footer>