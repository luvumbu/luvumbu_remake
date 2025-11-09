<style>
/* ===================== STYLE NÉON FUTURISTE ===================== */

/* Image d'en-tête */

#img_projet_src1_0::after {
  content: "";
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at 60% 40%, rgba(0,0,0,0.2), rgba(0,0,0,0.85));
  z-index: 1;
}

/* Titre principal */
.title_1_1 {
  position: relative;
  z-index: 2;
  background: rgba(0, 0, 0, 0.4);
  border: 1px solid rgba(255, 255, 255, 0.15);
  border-left: 4px solid var(--accent-color);
  padding: 25px 35px;
  border-radius: 14px;
  margin-bottom: 30px;
  box-shadow: 0 0 15px rgba(0,0,0,0.5);
  backdrop-filter: blur(8px);
  transition: all 0.3s ease;
}

.title_1_1:hover {
  transform: translateY(-6px);
  box-shadow: 0 0 25px var(--accent-color);
}

.title_1_1 h1 {
  margin: 0;
  font-size: 2.3rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  background: linear-gradient(90deg, var(--accent-color), var(--hover-color));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-shadow: 0 0 20px rgba(255,255,255,0.1);
}

/* Date d’inscription */
.date_inscription {
  margin-top: 10px;
  font-size: 0.9rem;
  color: var(--text-muted);
  text-align: right;
  font-style: italic;
  text-shadow: 0 0 5px rgba(255,255,255,0.1);
}

/* Description */
.description_1_2 {
  margin: 60px auto;
  width: 85%;
  padding: 30px 35px;
  font-size: 1.05rem;
  line-height: 1.8;
  color: var(--text-white);
  background: rgba(10, 10, 25, 0.8);
  border: 1px solid rgba(255, 255, 255, 0.15);
  border-radius: 14px;
  box-shadow: 0 0 18px rgba(0, 0, 0, 0.4);
  position: relative;
  backdrop-filter: blur(8px);
  transition: all 0.4s ease;
}

.description_1_2::before {
  content: "";
  position: absolute;
  inset: 0;
  border-radius: 14px;
  padding: 1px;
  background: linear-gradient(135deg, var(--accent-color), var(--hover-color));
  -webkit-mask: 
    linear-gradient(#fff 0 0) content-box, 
    linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
  mask-composite: exclude;
  pointer-events: none;
}

.description_1_2:hover {
  transform: scale(1.02);
  box-shadow: 0 0 30px var(--accent-color);
}

.description_1_2 strong {
  color: var(--hover-color);
  font-weight: 700;
  text-shadow: 0 0 5px var(--accent-color);
}

/* Effet d’apparition */
@keyframes fadeGlow {
  0% {
    opacity: 0;
    transform: translateY(25px);
    filter: blur(6px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
    filter: blur(0);
  }
}

.title_1_1, .description_1_2 {
  animation: fadeGlow 1s ease forwards;
}

/* ===================== Responsive ===================== */
@media (max-width: 768px) {
  #img_projet_src1_0 {
    height: 220px;
  }

  .title_1_1 {
    padding: 15px 20px;
    margin-bottom: 20px;
  }

  .title_1_1 h1 {
    font-size: 1.6rem;
    letter-spacing: 1px;
  }

  .description_1_2 {
    width: 92%;
    padding: 20px;
    font-size: 0.95rem;
  }
}
</style>
