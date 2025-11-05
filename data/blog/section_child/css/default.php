<style>
  /* ===================== GALERIE D'IMAGES ===================== */

.projet-images {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 18px;
  margin: 60px auto;
  width: 90%;
  padding: 20px;
  box-sizing: border-box;
  justify-items: center;
}

.projet-imagex {
  position: relative;
  overflow: hidden;
  border-radius: 14px;
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.projet-imagex img {
  width: 100%;
  height: 100%;
  max-height: 240px;
  object-fit: cover;
  display: block;
  border-radius: 14px;
  transition: transform 0.6s ease, filter 0.4s ease;
  cursor: pointer;
}

/* Effet au survol */
.projet-imagex:hover {
  transform: scale(1.03);
  box-shadow: 0 0 25px var(--accent-color);
}

.projet-imagex:hover img {
  transform: scale(1.12);
  filter: brightness(1.15) saturate(1.2);
}

/* Effet au clic */
.projet-imagex:active img {
  transform: scale(1.06);
  filter: brightness(1.3);
}

/* Halo lumineux */
.projet-imagex::before {
  content: "";
  position: absolute;
  inset: 0;
  border-radius: 14px;
  background: linear-gradient(135deg, var(--accent-color), var(--hover-color));
  opacity: 0;
  transition: opacity 0.4s ease;
  pointer-events: none;
}

.projet-imagex:hover::before {
  opacity: 0.5;
  mix-blend-mode: overlay;
}

/* ===================== TITRES ET TEXTES ===================== */

.section_1_1 {
  text-align: center;
}

.description_2_1 {
  padding: 25px;
}

/* ===================== LIGHTBOX ===================== */

.lightbox {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0, 0, 0, 0.85);
  backdrop-filter: blur(10px);
  justify-content: center;
  align-items: center;
  z-index: 9999;
  animation: fadeIn 0.3s ease;
}
.section_3_1{
  text-align: center;
}
.lightbox img {
  max-width: 90%;
  max-height: 85%;
  border-radius: 12px;
  box-shadow: 0 0 25px var(--accent-color);
  animation: zoomIn 0.4s ease;
}

.lightbox-close {
  position: absolute;
  top: 25px;
  right: 40px;
  font-size: 2.5rem;
  color: var(--hover-color);
  cursor: pointer;
  text-shadow: 0 0 10px var(--accent-color);
  transition: transform 0.2s ease, color 0.3s ease;
}

.lightbox-close:hover {
  transform: scale(1.2);
  color: #fff;
}

/* ===================== ANIMATIONS ===================== */

@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

@keyframes zoomIn {
  from { transform: scale(0.85); opacity: 0; }
  to { transform: scale(1); opacity: 1; }
}

/* ===================== RESPONSIVE ===================== */

@media (max-width: 768px) {
  .projet-images {
    gap: 12px;
    width: 95%;
  }

  .projet-imagex img {
    max-height: 180px;
  }

  .lightbox-close {
    font-size: 2rem;
    top: 15px;
    right: 25px;
  }
}

</style>


<style>
/* ===================== GALERIE ENFANTS ===================== */

.child_imgs_all {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
  margin: 40px auto;
  width: 90%;
  box-sizing: border-box;
}

.child_imgs_all a.no_decoration {
  text-decoration: none;
  color: inherit;
}

.child_imgs {
  background: var(--color-bg-card);
  border-radius: 12px;
  overflow: hidden;
  width: 220px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  text-align: center;
}

.child_imgs:hover {
  transform: translateY(-6px);
  box-shadow: 0 8px 18px rgba(0,0,0,0.25);
}

.child_imgs img {
  width: 100%;
  height: 160px;
  object-fit: cover;
  display: block;
}

.child_imgs p {
  font-size: var(--font-size-text);
  font-weight: 600;
  color: var(--color-text-primary);
  padding: 10px;
  margin: 0;
  background: var(--color-bg-light);
  text-transform: uppercase;
  letter-spacing: 0.5px;
}
</style>
