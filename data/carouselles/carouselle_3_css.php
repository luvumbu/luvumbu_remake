
<style>
.projet-images {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  justify-content: center;
}

.projet-image {
  width: 49%;
  height: 250px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  border-radius: 6px; /* optionnel */
  background: #f0f0f0; /* optionnel : fond si l’image est plus petite */
}
.projet-imagex{
    width: 20%;
  height: 20%;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  border-radius: 6px; /* optionnel */
  background: #f0f0f0; /* optionnel : fond si l’image est plus petite */
}

.projet-image img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* ✅ carré parfait sans déformation */
  display: block;
  cursor: pointer;
  transition: transform 0.2s;
}

.projet-image img:hover {
  transform: scale(1.05);
}

/* Lightbox */
.lightbox {
  display: none; 
  position: fixed;
  z-index: 9999;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.9);
  justify-content: center;
  align-items: center;
}

.lightbox img {
  max-width: 90%;
  max-height: 90%;
  object-fit: contain;
}

.lightbox .close {
  position: absolute;
  top: 20px; 
  right: 30px;
  color: white;
  font-size: 40px;
  cursor: pointer;
}
</style>

 
