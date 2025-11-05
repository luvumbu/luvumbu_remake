<style>
  /* ===================== CAROUSEL 1 IMAGE DYNAMIQUE ===================== */
.carousel-wrapper {
  position: relative;
  width: 100%;
  max-width: 1100px;
  margin: 60px auto;
  overflow: hidden;
  border-radius: 12px;
  background: rgba(0,0,0,0.05);
  backdrop-filter: blur(8px);
}

.carousel {
  display: flex;
  transition: transform 0.8s ease-in-out;
  width: 100%;
}

.carousel-item {
  min-width: 100%;  /* une seule image visible */
  transition: opacity 0.8s ease, transform 0.8s ease;
  position: relative;
  overflow: hidden;
}

.carousel-item img {
  width: 100%;
  height: 550px;
  object-fit: cover;
  display: block;
  filter: brightness(0.95);
  transition: transform 0.8s ease, filter 0.5s ease;
}

/* Zoom au hover */
.carousel-item img:hover {
  transform: scale(1.05);
  filter: brightness(1);
}

/* ===================== NAVIGATION ===================== */
.carousel-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0,0,0,0.35);
  color: #fff;
  border: none;
  font-size: 2rem;
  padding: 8px 14px;
  cursor: pointer;
  border-radius: 50%;
  z-index: 10;
  transition: background 0.3s ease, transform 0.3s ease;
}

.carousel-btn:hover {
  background: rgba(0,0,0,0.6);
  transform: translateY(-50%) scale(1.1);
}

.carousel-btn.prev { left: 12px; }
.carousel-btn.next { right: 12px; }

/* ===================== DOTS ===================== */
.carousel-dots {
  text-align: center;
  position: absolute;
  bottom: 16px;
  width: 100%;
  z-index: 10;
}

.carousel-dots span {
  display: inline-block;
  width: 12px;
  height: 12px;
  background: rgba(255,255,255,0.45);
  border-radius: 50%;
  margin: 0 5px;
  cursor: pointer;
  transition: all 0.25s ease;
}

.carousel-dots .active {
  background: #00ffd0;
  transform: scale(1.3);
  box-shadow: 0 0 12px #00ffd0;
}

/* ===================== RESPONSIVE ===================== */
@media (max-width: 768px) {
  .carousel-item img { height: 350px; }
  .carousel-btn { font-size: 1.6rem; padding: 6px 10px; }
  .carousel-dots span { width: 8px; height: 8px; margin: 0 4px; }
}

</style>