<style>
/* ===================== STYLE MODERNE CHAUD / DORÉ ===================== */

/* Section principale */
.section_1 {
  width: 90%;
  margin: auto;
  padding: 20px;
  box-sizing: border-box;
}

/* Image d'en-tête avec effet verre chaud */
#img_projet_src1_0 {
  width: 100%;
  height: 500px;
  background-image: url('<?= $img_projet_src1_00 ?>');
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  display: flex;
  align-items: flex-end;
  justify-content: flex-start;
  position: relative;
  overflow: hidden;
  border-radius: 12px;
  box-shadow: 0 8px 30px rgba(0,0,0,0.5);
}

/* Overlay dégradé chaud pour contraste */
#img_projet_src1_0::after {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(50,25,0,0.6));
  backdrop-filter: blur(6px) saturate(150%);
  pointer-events: none;
}

/* Titre principal flottant */
.title_1_1 {
  position: absolute;
  bottom: 30px;
  left: 30px;
  z-index: 2;
}

.title_1_1 h1 {
  margin: 0;
  font-size: 2.4rem;
  font-weight: 800;
  letter-spacing: 1px;

  /* Dégradé doré chaud */
  background: linear-gradient(90deg, #ffb347, #ffcc33);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;

  text-shadow: 0 0 10px rgba(255,179,71,0.6),
               0 0 15px rgba(255,204,51,0.5),
               0 2px 6px rgba(0,0,0,0.4);
}

/* Date d’inscription */
.date_inscription {
  margin-top: 15px;
  font-size: 0.9rem;
  color: #e0d8b0;
  text-align: right;
  font-style: italic;
}

/* Description avec verre chaud */
.description_1_2 {
  margin-top: 20px;
  font-size: 1rem;
  line-height: 1.7;
  color: #fff4e0;
  padding: 20px;
  border-radius: 12px;
  backdrop-filter: blur(10px) saturate(130%);
  background: rgba(50, 35, 10, 0.5);
  text-align: justify;
  width: 90%;
  margin: auto;
  box-shadow: 0 8px 20px rgba(50,35,10,0.3);
}

.description_1_2 strong {
  color: #ffeb99;
  font-weight: 700;
}

/* ===================== Responsive ===================== */
@media (max-width: 768px) {
  .section_1 {
    width: 95%;
    padding: 15px;
  }

  #img_projet_src1_0 {
    height: 300px;
  }

  .title_1_1 h1 {
    font-size: 1.8rem;
  }

  .description_1_2 {
    font-size: 0.95rem;
  }
}
</style>
