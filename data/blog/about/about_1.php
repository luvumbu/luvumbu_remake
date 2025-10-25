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
<style>
    /* ==================== SECTION À PROPOS ==================== */
.about {
  width: 100%;
 
 
  color: #e8e8ff;
  text-align: center;
  overflow: hidden;
  border-top: 1px solid rgba(123, 108, 255, 0.15);
  border-bottom: 1px solid rgba(123, 108, 255, 0.1);
}

/* ==================== TITRE ==================== */
.about .section-title {
  font-size: 2.3em;
  color: #7b6cff;
  text-transform: uppercase;
  letter-spacing: 2px;
  text-shadow: 0 0 10px #7b6cff, 0 0 20px #3affff;
  margin-bottom: 40px;
  position: relative;
  display: inline-block;
  animation: fadeInUp 0.8s ease forwards;
}

.about .section-title::after {
  content: "";
  display: block;
  width: 60%;
  height: 3px;
  margin: 12px auto 0;
  background: linear-gradient(90deg, #7b6cff, #3affff);
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(123, 108, 255, 0.6);
}

/* ==================== CONTENEUR IMAGE ==================== */
.text_continent {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  margin-bottom: 40px;
}

.img_dw2 {
  width: 230px;
  height: 230px;
  border-radius: 50%;
  overflow: hidden;
  border: 3px solid rgba(100, 80, 255, 0.6);
  box-shadow: 0 0 30px rgba(123, 108, 255, 0.4);
  transition: transform 0.5s ease, box-shadow 0.5s ease;
  margin: 0 auto;
}

.img_dw2 img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  filter: brightness(0.9) saturate(1.1);
  transition: transform 0.6s ease, filter 0.4s ease;
}

.img_dw2:hover {
  transform: scale(1.06);
  box-shadow: 0 0 40px rgba(58, 255, 255, 0.4);
}

.img_dw2 img:hover {
  transform: scale(1.1);
  filter: brightness(1) saturate(1.3);
}

/* ==================== TEXTE INFOS ==================== */
.date_inscription {
  font-size: 1em;
  color: #aaaaf0;
  margin: 25px auto;
  font-style: italic;
  text-align: center;
  letter-spacing: 0.5px;
  animation: fadeInUp 0.9s ease forwards;
}

/* ==================== CONTENU PRINCIPAL TEXTE ==================== */
.text_continent_p1 {
  max-width: 850px;
  margin: 0 auto;
  text-align: justify;
  font-size: 1.05em;
  line-height: 1.9;
  color: #ddd;
 
  border-radius: 20px;
  background: rgba(255, 255, 255, 0.04);
  border: 1px solid rgba(123, 108, 255, 0.15);
  box-shadow: inset 0 0 25px rgba(123, 108, 255, 0.08);
  animation: fadeInUp 1s ease forwards;
}

.text_continent_p1 p {
  margin-bottom: 15px;
}

.text_continent_p1 p:last-child {
  margin-bottom: 0;
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
  .about {
 
  }

  .about .section-title {
    font-size: 1.8em;
  }

  .img_dw2 {
    width: 180px;
    height: 180px;
  }

  .text_continent_p1 {
    font-size: 1em;
  
  }
}

</style>