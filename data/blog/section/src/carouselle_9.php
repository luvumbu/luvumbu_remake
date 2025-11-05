<style>
  /* ===================== CAROUSEL DOUBLE ===================== */
.carousel-wrapper {
  position: relative;
  width: 100%;
  max-width: 100%;
  height: 400px;
  overflow: hidden;
  background: #000;
}

/* ===================== SLIDES ===================== */
.carousel {
  display: flex;
  height: 100%;
  transition: transform 0.6s ease-in-out;
}

.carousel-item {
  flex: 0 0 50%; /* 2 images visibles */
  height: 100%;
  position: relative;
  overflow: hidden;
}

.carousel-item img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* pas de déformation */
  object-position: center;
  transition: transform 1s ease, filter 0.6s ease;
  filter: brightness(0.85) saturate(1.1);
}

.carousel-item img:hover {
  transform: scale(1.05);
  filter: brightness(1) saturate(1.2);
}

/* ===================== CAPTION ===================== */
.caption {
  position: absolute;
  bottom: 20px;
  left: 25px;
  background: rgba(0,0,0,0.45);
  color: #fff;
  padding: 6px 14px;
  font-size: 1em;
  border-radius: 6px;
  backdrop-filter: blur(6px);
  text-shadow: 0 2px 6px rgba(0,0,0,0.4);
}

/* ===================== NAV BUTTONS ===================== */
.carousel-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(255,255,255,0.1);
  border: none;
  color: white;
  font-size: 2.2em;
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
    height: 320px;
  }
}

@media (max-width: 768px) {
  .carousel-wrapper {
    height: 260px;
  }
  .carousel-item {
    flex: 0 0 100%; /* sur mobile -> une seule image visible */
  }
  .carousel-btn {
    font-size: 1.8em;
    padding: 4px 10px;
  }
  .caption {
    font-size: 0.9em;
    bottom: 15px;
    left: 15px;
    padding: 5px 10px;
  }
}

</style>