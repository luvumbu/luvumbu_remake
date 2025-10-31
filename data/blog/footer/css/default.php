<style>
    /* ==================== SECTION À PROPOS ==================== */
.about {
  width: 100%;
 
 
  color: #000024ff;
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
  border: 3px solid rgba(105, 105, 105, 0.6);
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
  color: #08041dff;
 
  border-radius: 20px;
 
 
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
 
    .qr_code{
        text-align: center;
        margin-bottom: 150px;
    }
    .qr_code img{
        width: 250px;
    }
 
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