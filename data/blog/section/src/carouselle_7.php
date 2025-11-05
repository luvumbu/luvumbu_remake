<style>
  /* ===================== CAROUSEL PLEIN ÉCRAN ===================== */
.carousel-wrapper {
  position: relative;
  width: 100%;
  height: 100vh; /* prend toute la hauteur visible */
  overflow: hidden;
  background: #000;
}

/* ===================== SLIDES ===================== */
.carousel {
  display: flex;
  transition: transform 0.8s ease-in-out;
  width: 100%;
  height: 100%;
}

.carousel-item {
  min-width: 100%;
  height: 100%;
  position: relative;
  overflow: hidden;
}

.carousel-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transform: scale(1.05);
  filter: brightness(0.7);
  transition: transform 1.2s ease, filter 0.8s ease;
}

.carousel-item img:hover {
  transform: scale(1.1);
  filter: brightness(0.9);
}

/* ===================== CAPTION ===================== */
.caption {
  position: absolute;
  bottom: 60px;
  left: 80px;
  color: #fff;
  font-size: 2.2em;
  font-weight: 600;
  background: rgba(0, 0, 0, 0.45);
  padding: 12px 24px;
  border-radius: 14px;
  text-shadow: 0 3px 10px rgba(0,0,0,0.6);
  backdrop-filter: blur(6px);
}

/* ===================== NAV BUTTONS ===================== */
.carousel-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(255,255,255,0.08);
  border: none;
  color: white;
  font-size: 3em;
  cursor: pointer;
  padding: 10px 22px;
  border-radius: 50%;
  backdrop-filter: blur(6px);
  transition: background 0.3s, transform 0.3s;
  z-index: 15;
}

.carousel-btn:hover {
  background: rgba(255,255,255,0.25);
  transform: translateY(-50%) scale(1.1);
}

.carousel-btn.prev { left: 40px; }
.carousel-btn.next { right: 40px; }

/* ===================== DOTS ===================== */
.carousel-dots {
  position: absolute;
  bottom: 35px;
  width: 100%;
  text-align: center;
  z-index: 20;
}

.carousel-dots span {
  display: inline-block;
  width: 14px;
  height: 14px;
  background: rgba(255,255,255,0.4);
  border-radius: 50%;
  margin: 0 8px;
  cursor: pointer;
  transition: transform 0.3s, background 0.3s;
}

.carousel-dots span:hover {
  transform: scale(1.3);
}

.carousel-dots .active {
  background: #00ffd0;
  box-shadow: 0 0 10px #00ffd0;
}

/* ===================== RESPONSIVE ===================== */
@media (max-width: 1024px) {
  .caption {
    font-size: 1.6em;
    left: 40px;
    bottom: 40px;
  }

  .carousel-btn {
    font-size: 2.4em;
    padding: 6px 16px;
  }
}

@media (max-width: 768px) {
  .caption {
    font-size: 1.2em;
    left: 20px;
    bottom: 30px;
    padding: 8px 14px;
  }

  .carousel-btn.prev { left: 20px; }
  .carousel-btn.next { right: 20px; }

  .carousel-dots span {
    width: 10px;
    height: 10px;
    margin: 0 5px;
  }
}

</style>