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
<style>
  /* ==================== FOOTER ==================== */
footer {
  width: 100%;
  background: radial-gradient(circle at bottom right, #060612, #0a0a1e 90%);
  color: #d8d8ff;
 
  text-align: center;
  border-top: 1px solid rgba(123, 108, 255, 0.2);
  box-shadow: 0 -2px 25px rgba(123, 108, 255, 0.15);
  position: relative;
  overflow: hidden;
  padding-top: 25px;
}

/* ==================== LIENS ==================== */
.footer-links {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 25px;
  margin-bottom: 35px;
  animation: fadeInUp 0.8s ease forwards;
}

.footer-links a {
  text-decoration: none;
  color: #9f9fff;
  font-weight: 500;
  letter-spacing: 0.6px;
  transition: color 0.3s ease, text-shadow 0.3s ease;
  position: relative;
}

.footer-links a::after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: -4px;
  width: 0;
  height: 2px;
  background: linear-gradient(90deg, #7b6cff, #3affff);
  border-radius: 2px;
  transition: all 0.3s ease;
  transform: translateX(-50%);
}

.footer-links a:hover {
  color: #3affff;
  text-shadow: 0 0 8px #3affff;
}

.footer-links a:hover::after {
  width: 100%;
}

/* ==================== COPYRIGHT ==================== */
.copyright {
  font-size: 0.95em;
  color: #aaaaf0;
  max-width: 900px;
  margin: 0 auto;
  line-height: 1.7;
  animation: fadeInUp 1s ease forwards;
}

.copyright a {
  color: #7b6cff;
  text-decoration: none;
  font-weight: 600;
  transition: color 0.3s ease, text-shadow 0.3s ease;
}

.copyright a:hover {
  color: #3affff;
  text-shadow: 0 0 8px #3affff;
}

/* ==================== DÉCORATION LUMIÈRE BAS ==================== */
footer::before {
  content: "";
  position: absolute;
  bottom: -40px;
  left: 50%;
  width: 400px;
  height: 120px;
  background: radial-gradient(circle, rgba(123, 108, 255, 0.25), transparent 70%);
  transform: translateX(-50%);
  filter: blur(50px);
  opacity: 0.7;
}

/* ==================== ANIMATION ==================== */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(15px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* ==================== RESPONSIVE ==================== */
@media (max-width: 768px) {
  .footer-links {
    flex-direction: column;
    gap: 15px;
  }

  .copyright {
    font-size: 0.9em;
    
  }
}

</style>