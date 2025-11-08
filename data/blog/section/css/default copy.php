 <style>
/* ==================== VARIABLES ==================== */


/* ===================== STYLE MODERNE ÉPURÉ ===================== */

/* Image d'en-tête */
#img_projet_src1_0 {
  width: 100%;
  height: 600px;
  background-image: url('<?= $img_projet_src1_00 ?>');
  background-size: cover;
  background-position: center;
  display: flex;
  align-items: center; 
  color: var(--text-white);
  text-shadow: 2px 2px 4px var(--text-shadow-img);
  font-size: 2em;
  font-weight: bold;
  background-attachment: fixed;
  position: relative;
  overflow: hidden;
}

#img_projet_src1_0::after {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(to bottom, var(--overlay-dark-1), var(--overlay-dark-2));
}

/* Titre principal */
.title_1_1 {
  position: absolute;
  bottom: 20px;
  left: 20px;
  z-index: 2;
}

.title_1_1 h1 {
  margin: 0;
  font-size: 2.2rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-shadow: 0 2px 6px var(--text-shadow-main);
  background: linear-gradient(90deg, var(--accent-color), var(--hover-color));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Date d’inscription */
.date_inscription {
  margin-top: 15px;
  font-size: 0.9rem;
  color: var(--text-muted);
  text-align: right;
  font-style: italic;
}

/* Description */
.description_1_2 {
  margin-top: 20px;
  font-size: 1rem;
  line-height: 1.7;
  color: var(--text-main);
  padding: 15px 20px;
  border-radius: 10px;
  backdrop-filter: var(--backdrop-blur-1);
 
  width: 90%;
  margin: auto;
}

.description_1_2 strong {
  color: var(--text-strong);
  font-weight: 700;
}

/* ===================== Responsive ===================== */
@media (max-width: 768px) {
  .section_1 {
    width: 95%;
    padding: 15px;
  }

  #img_projet_src1_0 {
    height: 180px;
  }

  .title_1_1 h1 {
    font-size: 1.6rem;
  }

  .description_1_2 {
    font-size: 0.95rem;
  }
}
</style>
