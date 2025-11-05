<style>
    /* ===================== CAROUSEL COMPACT ===================== */
.carousel-wrapper {
  position: relative;
  width: 100%;
  max-width: 100%;
  height: 420px; /* Hauteur plus petite */
  overflow: hidden;
  border-radius: 20px;
  margin: 60px auto;
  background: rgba(255,255,255,0.05);
  box-shadow: 0 8px 25px rgba(0,0,0,0.3);
  backdrop-filter: blur(10px);
}

/* ===================== SLIDES ===================== */
.carousel {
  display: flex;
  width: 100%;
  height: 100%;
  transition: transform 0.6s ease-in-out;
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
  object-fit: cover; /* conserve les proportions sans déformation */
  object-position: center;
  transition: transform 1s ease, filter 0.6s ease;
  filter: brightness(0.9) saturate(1.1);
}

.carousel-item img:hover {
  transform: scale(1.06);
  filter: brightness(1) saturate(1.2);
}

/* ===================== CAPTION ===================== */
.caption {
  position: absolute;
  bottom: 25px;
  left: 40px;
  background: rgba(0, 0, 0, 0.45);
  color: #fff;
  padding: 8px 18px;
  font-size: 1.1em;
  border-radius: 10px;
  backdrop-filter: blur(6px);
  font-weight: 500;
  letter-spacing: 0.5px;
  text-shadow: 0 2px 6px rgba(0,0,0,0.4);
}

/* ===================== NAV BUTTONS ===================== */
.carousel-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(255,255,255,0.1);
  border: none;
  color: #fff;
  font-size: 2em;
  cursor: pointer;
  padding: 6px 14px;
  border-radius: 50%;
  backdrop-filter: blur(5px);
  transition: background 0.3s, transform 0.3s;
  z-index: 10;
}

.carousel-btn:hover {
  background: rgba(255,255,255,0.25);
  transform: translateY(-50%) scale(1.1);
}

.carousel-btn.prev { left: 15px; }
.carousel-btn.next { right: 15px; }

/* ===================== DOTS ===================== */
.carousel-dots {
  position: absolute;
  bottom: 15px;
  width: 100%;
  text-align: center;
  z-index: 20;
}

.carousel-dots span {
  display: inline-block;
  width: 10px;
  height: 10px;
  background: rgba(255,255,255,0.4);
  border-radius: 50%;
  margin: 0 6px;
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
  .carousel-wrapper {
    height: 340px;
  }
  .caption {
    bottom: 20px;
    left: 25px;
    font-size: 1em;
  }
}

@media (max-width: 768px) {
  .carousel-wrapper {
    height: 260px;
  }
  .caption {
    bottom: 15px;
    left: 20px;
    font-size: 0.9em;
    padding: 6px 12px;
  }
  .carousel-btn {
    font-size: 1.8em;
    padding: 4px 10px;
  }
  .carousel-dots span {
    width: 8px;
    height: 8px;
    margin: 0 4px;
  }
}

</style>