<style>
  /* ===================== CAROUSEL 4 IMAGES — SANS BORDURE ===================== */

/* Wrapper pleine largeur */
.carousel-wrapper {
  position: relative;
  width: 100%;
  max-width: 100%;
  margin: 80px 0;
  overflow: hidden;
  border-radius: 0;
  box-shadow: none;
  background: transparent;
  backdrop-filter: none;
}

/* ===================== SLIDES ===================== */
.carousel {
  display: flex;
  transition: transform 0.6s ease;
  will-change: transform;
  width: 100%;
  height: 100%;
}

/* Chaque item occupe 1/4 (4 images visibles) */
.carousel-item {
  flex: 0 0 25%;
  max-width: 25%;
  position: relative;
  overflow: hidden;
  margin: 0;
  padding: 0;
  border-radius: 0;
}

/* Image : remplit parfaitement sans déformation */
.carousel-item img {
  width: 100%;
  height: 480px;           /* ajuste la hauteur si tu veux */
  object-fit: cover;
  object-position: center;
  display: block;
  filter: brightness(0.95);
  transition: transform 0.6s ease, filter 0.45s ease;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

/* Zoom léger au survol */
.carousel-item img:hover {
  transform: scale(1.03);
  filter: brightness(1);
}

/* ===================== CAPTION ===================== */
.caption {
  position: absolute;
  bottom: 20px;
  left: 20px;
  font-size: 1.1em;
  color: #fff;
  background: rgba(0,0,0,0.35);
  padding: 8px 14px;
  border-radius: 6px;
  backdrop-filter: blur(4px);
}

/* ===================== NAVIGATION ===================== */
.carousel-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0,0,0,0.35);
  border: none;
  color: #fff;
  font-size: 2.2em;
  cursor: pointer;
  padding: 8px 14px;
  border-radius: 50%;
  z-index: 12;
  transition: background 0.3s ease;
}

.carousel-btn:hover {
  background: rgba(0,0,0,0.55);
}

.carousel-btn.prev { left: 12px; }
.carousel-btn.next { right: 12px; }

/* ===================== DOTS ===================== */
.carousel-dots {
  text-align: center;
  position: absolute;
  bottom: 18px;
  width: 100%;
  z-index: 12;
}

.carousel-dots span {
  display: inline-block;
  width: 10px;
  height: 10px;
  background: rgba(255,255,255,0.45);
  border-radius: 50%;
  margin: 0 6px;
  cursor: pointer;
  transition: background 0.25s, transform 0.25s;
}

.carousel-dots .active {
  background: #00ffd0;
  transform: scale(1.15);
}

/* ===================== RESPONSIVE ===================== */
/* Tablette : 2 images visibles */
@media (max-width: 900px) {
  .carousel-item { flex: 0 0 50%; max-width: 50%; }
  .carousel-item img { height: 400px; }
}

/* Mobile : 1 image visible */
@media (max-width: 600px) {
  .carousel-item { flex: 0 0 100%; max-width: 100%; }
  .carousel-item img { height: 320px; }
  .carousel-btn { font-size: 1.6em; padding: 6px 10px; }
  .carousel-dots span { width: 8px; height: 8px; margin: 0 4px; }
}

</style>