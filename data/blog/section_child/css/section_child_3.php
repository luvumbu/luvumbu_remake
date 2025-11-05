 

 <style>
  /* ==================== STYLE FUTURISTE NÉON ==================== */
 

/* ==================== TITRES ==================== */
.section_1_1 {
  text-align: center;
  margin-top: 70px;
  margin-bottom: 40px;
}

.section_1_1 h1 {
  font-size: 2.4em;
  color: #7b6cff;
 
  letter-spacing: 1.5px;

}

 

/* ==================== IMAGES DU PROJET ==================== */
.projet-images {
  display: flex;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap;
  margin: 25px auto 50px;
  max-width: 1100px;
}

.projet-imagex {
  overflow: hidden;
 

  position: relative;
}

.projet-imagex img {
  width: 260px;
  height: 180px;
  object-fit: cover;
  border-radius: 8px;
  cursor: pointer;
  transition: transform 0.5s ease;
  filter: brightness(0.85);
}



.projet-imagex img:hover {

  
  filter: brightness(1);
}

/* ==================== DATE ==================== */
.date_inscription {
  text-align: center;
  font-size: 1em;
  color: #a7a7c9;
  margin-bottom: 40px;
  font-style: italic;
  letter-spacing: 0.5px;
}

/* ==================== DESCRIPTION ==================== */
.description_2_1,
.description_2_2 {
  max-width: 950px;
  margin: 0 auto 50px;
  padding: 30px;
 
  
  line-height: 1.9;
  text-align: justify;
  background: rgba(255, 255, 255, 0.04);
  border: 1px solid rgba(123, 108, 255, 0.2);
  box-shadow: inset 0 0 30px rgba(123, 108, 255, 0.1);

}

.description_2_1:hover,
.description_2_2:hover {
  box-shadow: 0 0 40px rgba(100, 80, 255, 0.25);

  
}





/* ==================== BOUTON CTA ==================== */
.section_3_1 {
  text-align: center;
  margin: 50px 0;
}

.cta-button {
  display: inline-block;
  padding: 14px 30px;
  border-radius: 5px;
  font-weight: 700;
  text-decoration: none;
  transition: all 0.4s ease;
  font-family: 'Orbitron', sans-serif;
  letter-spacing: 1px;
}

.cta-primary {
  background: linear-gradient(135deg, #3affff, #7b6cff);
  color: #0a0a1a;
  box-shadow: 0 0 15px rgba(123, 108, 255, 0.4);
}

.cta-primary:hover {
  background: linear-gradient(135deg, #7b6cff, #3affff);

  
  box-shadow: 0 0 25px rgba(100, 80, 255, 0.8);
}

/* ==================== IMAGES ENFANTS ==================== */
.child_imgs_all {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 30px;
  margin: 90px auto;
  max-width: 1250px;
}

.child_imgs {
  background: rgba(255, 255, 255, 0.04);
  border: 1px solid rgba(123, 108, 255, 0.25);
  border-radius: 18px;
  padding: 12px;
  width: 220px;
  text-align: center;

  backdrop-filter: blur(6px);
}

.child_imgs:hover {

  
  box-shadow: 0 0 25px rgba(100, 80, 255, 0.3);
}

.child_imgs img {
  width: 100%;
  height: 180px;
  object-fit: cover;
  border-radius: 8px;

  filter: brightness(0.9);
}



.child_imgs p {
  margin-top: 12px;
  font-weight: 600;
 
  font-size: 0.95em;
}

/* ==================== LIENS ==================== */
.no_decoration {
  text-decoration: none;
 

}

.no_decoration:hover {
 
  text-shadow: 0 0 8px #3affff;
}





 </style>