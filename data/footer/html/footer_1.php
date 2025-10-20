<footer>
  <div class="footer-content">
    <div class="footer-links">
      <?php if ($id_sha1_parent_projet[0] != "") { ?>
        <a href="<?= $id_sha1_parent_projet[0] ?>">↰ Page parent</a>
      <?php } ?>
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
