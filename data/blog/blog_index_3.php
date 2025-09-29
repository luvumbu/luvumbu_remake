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

  <style>
    footer {
      background-color: #111;
      color: #ccc;
      padding: 30px 20px;
      font-family: 'Segoe UI', Tahoma, sans-serif;
    }

    .footer-content {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .footer-links {
      margin-bottom: 15px;
    }

    .footer-links a {
      color: #e7b81fff;
      text-decoration: none;
      margin: 0 12px;
      font-weight: 500;
      transition: color 0.3s;
    }

    .footer-links a:hover {
       color: #e7b81fff;
    }

    .copyright {
      font-size: 0.9rem;
      color: #aaa;
      line-height: 1.5;
      max-width: 800px;
    }

    .copyright a {
       color: #e7b81fff;
      text-decoration: none;
      transition: color 0.3s;
    }

    .copyright a:hover {
       color: #e7b81fff;
    }

    /* Responsive */
    @media (max-width: 600px) {
      .footer-links a {
        display: block;
        margin: 8px 0;
      }
    }
  </style>
</footer>
