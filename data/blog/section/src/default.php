<style>
/* =================== CARROUSEL =================== */
.carousel-container {
  position: relative;
  width: 300px;
  height: 300px;
  margin: 50px auto;
  overflow: hidden;
  background: linear-gradient(180deg, #0a0a1e, #1b1b3a);
  box-shadow: 0 6px 20px rgba(0, 0, 50, 0.6);
}

/* Conteneur des images */
.carousel-track {
  display: flex;
  width: max-content;
  animation: scrollInfinite 25s linear infinite;
}

/* Chaque image */
.carousel-item {
  position: relative;
  width: 300px;
  height: 300px; /* carré parfait */
  flex-shrink: 0;
  overflow: hidden;
  border-radius: 6px;
}

/* Filtre noir transparent */
.carousel-item::after {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.35);
  pointer-events: none;
  z-index: 1;
  transition: background 0.5s ease;
}

.carousel-item:hover::after {
  background: rgba(0, 0, 0, 0.15);
}

/* Image */
.carousel-item img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* conserve le cadrage sans déformer */
  object-position: center;
  image-rendering: crisp-edges;
  transform: translateZ(0);

}



/* Animation de défilement infini */
@keyframes scrollInfinite {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}

/* Supprime les points */
.carousel-dots { display: none; }
</style>