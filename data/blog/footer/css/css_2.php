<style>
/* ==================== SECTION À PROPOS ==================== */
.about {
  text-align: center;
}

/* ==================== TITRE ==================== */
.about .section-title {
  font-size: 2.4em;
  color: #5c54ff;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin: 0;
  display: inline-block;
  position: relative;
  animation: fadeInUp 0.8s ease forwards;
}

.about .section-title::after {
  content: "";
  display: block;
  width: 60%;
  height: 3px;
  margin: 10px auto 0;
  background: linear-gradient(90deg, #7b6cff, #36bfff);
  border-radius: 10px;
  opacity: 0.6;
}

/* ==================== CONTENEUR IMAGE ==================== */
.text_continent {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  gap: 30px;
  margin-top: 25px;
}

.img_dw2 {
  width: 220px;
  height: 220px;
  border-radius: 50%;
  overflow: hidden;
  border: 3px solid rgba(123, 108, 255, 0.2);
  box-shadow: 0 0 25px rgba(123, 108, 255, 0.15);
  transition: transform 0.5s ease, box-shadow 0.5s ease;
  background: rgba(255, 255, 255, 0.5);
  backdrop-filter: blur(8px);
}

.img_dw2 img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  filter: brightness(0.95) contrast(1.05);
  transition: transform 0.5s ease, filter 0.5s ease;
}

.img_dw2:hover {
  transform: scale(1.05);
  box-shadow: 0 0 30px rgba(58, 255, 255, 0.3);
}

.img_dw2:hover img {
  transform: scale(1.08);
  filter: brightness(1.1) contrast(1.15);
}

/* ==================== CONTENU PRINCIPAL TEXTE ==================== */
.text_continent_p1 {
  max-width: 850px;
  margin: 25px auto 0;
  text-align: justify;
  font-size: 1.05em;
  line-height: 1.8;
  color: #2b2b4d;
  background: rgba(255, 255, 255, 0.6);
  border-radius: 15px;
  box-shadow: inset 0 0 25px rgba(123, 108, 255, 0.08);
  padding: 20px;
  animation: fadeInUp 1s ease forwards;
}

.text_continent_p1 p {
  margin: 0;
}

/* ==================== QR CODE ==================== */
.qr_code {
  text-align: center;
  margin-top: 50px;
  margin-bottom: 50px;
}

.qr_code img {
  width: 220px;
  display: block;
  margin: 0 auto;
  filter: drop-shadow(0 0 10px rgba(123, 108, 255, 0.3));
  transition: transform 0.5s ease;
}

.qr_code img:hover {
  transform: scale(1.05);
}

/* ==================== FOOTER ==================== */
footer {
  width: 100%;
  background: linear-gradient(180deg, #eaeaff, #dcdcff);
  color: #3c3c6f;
  text-align: center;
  border-top: 1px solid rgba(123, 108, 255, 0.2);
  box-shadow: 0 -2px 15px rgba(123, 108, 255, 0.1);
  position: relative;
  padding: 10px 0 20px 0;
  margin: 0;
}

/* ==================== LIENS ==================== */
.footer-links {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 25px;
  margin: 0;
  padding: 10px 0;
}

.footer-links a {
  text-decoration: none;
  color: #6b64ff;
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
</style>
