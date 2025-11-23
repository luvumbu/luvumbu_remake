<style>
/* ===================== STYLE GLASSMORPHISME — PALETTE PERSONNALISÉE ===================== */

#img_projet_src1_0::after {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(
    to top,
    rgba(0, 0, 0, 0.7) 10%,
    rgba(0, 0, 0, 0.1) 80%
  );
  z-index: 1;
}

/* ---------- Titre principal ---------- */
.title_1_1 {
  position: relative;
  z-index: 2;
  padding: 25px 40px;
  margin-bottom: 25px;
  background: var(--glass);
  backdrop-filter: blur(12px);
  border-radius: 18px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.25);
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.title_1_1:hover {
  transform: translateY(-4px);
  box-shadow: 0 10px 28px rgba(0, 0, 0, 0.35);
}

.title_1_1 h1 {
  margin: 0;
  font-size: 2.4rem;
  font-weight: 800;
  letter-spacing: 2px;
  text-transform: uppercase;

  /* Dégradé texte aux couleurs de ta palette */
  background: linear-gradient(
    90deg,
    var(--accent),
    var(--logo-gradient-end)
  );
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* ---------- Date d’inscription ---------- */
.date_inscription {
  margin-top: 10px;
  font-size: 0.9rem;
  color: var(--muted);
  text-align: right;
  font-style: italic;
  letter-spacing: 0.5px;
}

/* ---------- Description ---------- */
.description_1_2 {
  margin: 60px auto;
  padding: 25px 30px;
  width: 85%;
  border-radius: 16px;
  color: var(--text);
  line-height: 1.8;
  font-size: 1.05rem;
  background: rgba(255, 255, 255, 0.55);
  backdrop-filter: blur(10px);
  box-shadow: 0 4px 18px rgba(0, 0, 0, 0.15);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.description_1_2:hover {
  transform: scale(1.02);
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.22);
}

.description_1_2 strong {
  color: var(--accent);
  font-weight: 700;
}

/* ---------- Animation subtile ---------- */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.title_1_1, .description_1_2 {
  animation: fadeInUp 0.9s ease both;
}

/* ===================== Responsive ===================== */
@media (max-width: 768px) {
  #img_projet_src1_0 {
    height: 220px;
  }

  .title_1_1 {
    padding: 15px 25px;
    margin-bottom: 15px;
  }

  .title_1_1 h1 {
    font-size: 1.7rem;
    letter-spacing: 1px;
  }

  .description_1_2 {
    width: 92%;
    font-size: 0.95rem;
    padding: 20px;
    margin: 40px auto;
  }
}
</style>
