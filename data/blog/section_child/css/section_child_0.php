 
<style>
.section_1_1 {
  text-align: center;
  margin-top: 60px;
  margin-bottom: 30px;
}
.section_1_1 h1 {
  font-size: 2.2em;
  color: #00ffd0;
  text-shadow: 0 0 10px rgba(0, 255, 200, 0.4);
  letter-spacing: 1.2px;

}

.section_1_1 h1:hover {
  transform: scale(1.04);
   
}

/* ==================== IMAGES DU PROJET ==================== */
.projet-images {
  display: flex;
  justify-content: center;
  gap: 15px;
  flex-wrap: wrap;
  margin: 20px auto 40px;
  max-width: 1000px;
}

.projet-imagex {
  position: relative;
  overflow: hidden;
  border-radius: 15px;

}

.projet-imagex img {
  width: 260px;
  height: 180px;
  object-fit: cover;
  border-radius: 15px;
  cursor: pointer;
  transition: transform 0.4s ease;
}

.projet-imagex:hover {
 
  box-shadow: 0 0 20px rgba(0, 255, 200, 0.3);
}

.projet-imagex img:hover {
  
}

/* ==================== DATE ==================== */
.date_inscription {
  text-align: center;
  font-size: 0.95em;
  color: #ccc;
  margin-bottom: 30px;
  font-style: italic;
}

/* ==================== DESCRIPTION ==================== */
.description_2_1,
.description_2_2 {
  max-width: 900px;
  margin: 0 auto 40px;
  padding: 25px;
  border-radius: 15px;
  line-height: 1.8;
  text-align: justify;
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);

}

.description_2_1:hover,
.description_2_2:hover {
  box-shadow: 0 0 25px rgba(0, 255, 200, 0.15);
 
}

/* Variante 1 & 2 couleur */
.description_2_1 {
  border-left: 4px solid #ff4f8b;
}
.description_2_2 {
  border-left: 4px solid #00ffd0;
}

/* ==================== BOUTON CTA ==================== */
.section_3_1 {
  text-align: center;
  margin: 40px 0;
}

.cta-button {
  display: inline-block;
  padding: 12px 25px;
  border-radius: 8px;
  font-weight: 600;
  text-decoration: none;
  transition: background 0.4s ease, transform 0.3s ease, box-shadow 0.3s ease;
}

.cta-primary {
  background: linear-gradient(135deg, #00ffd0, #00aaff);
  color: #0d0d0d;
  box-shadow: 0 0 10px rgba(0, 255, 200, 0.4);
}

.cta-primary:hover {
  background: linear-gradient(135deg, #00aaff, #00ffd0);
 
 
}

/* ==================== IMAGES ENFANTS (SOUS-PROJETS) ==================== */
.child_imgs_all {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 25px;
  margin: 80px auto;
  max-width: 1200px;
}

.child_imgs {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 15px;
  padding: 10px;
  width: 220px;

  text-align: center;
}

.child_imgs:hover {
 
  box-shadow: 0 0 15px rgba(0, 255, 200, 0.2);
}

.child_imgs img {
  width: 100%;
  height: 180px;
  object-fit: cover;
  border-radius: 12px;

}

.child_imgs img:hover {
 
}

.child_imgs p {
  text-align: center;
  margin-top: 10px;
  font-weight: 500;
  color: #f5f5f5;
  letter-spacing: 0.5px;
}

/* ==================== LIENS ==================== */
.no_decoration {
  text-decoration: none;
  color: #fff;
  transition: color 0.3s ease;
}

.no_decoration:hover {
  color: #00ffd0;
}





</style>