
<style>


  :root {
    --box-shadow-color: #ffffff; /* couleur de l'ombre */
}

body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
  
    color: #1a1a1a;
}


/* Défilement interne progressif (clic sur un lien href="#contact") */
:root{
  --scroll-thumb: #f6c800;       /* jaune principal */
  --scroll-thumb-hover: #ffdd33; /* jaune au survol */
  --scroll-track: #fff9e6;       /* piste subtile */
}

/* Activer le scroll lisse */
html {
  scroll-behavior: smooth;
  /* si vous avez un header fixe, ajustez la valeur ci-dessous */
  scroll-padding-top: 1rem;
}

/* Respecter la préférence "réduire les mouvements" */
@media (prefers-reduced-motion: reduce) {
  html { scroll-behavior: auto; }
}

/* ===== Styles de scrollbar pour WebKit (Chrome, Edge, Safari) ===== */
*::-webkit-scrollbar {
  width: 12px;
  height: 12px;
}

*::-webkit-scrollbar-track {
  background: var(--scroll-track);
  border-radius: 999px;
  box-shadow: inset 0 0 6px rgba(0,0,0,0.03);
}

*::-webkit-scrollbar-thumb {
  background: linear-gradient(180deg, var(--scroll-thumb), var(--scroll-thumb-hover));
  border-radius: 999px;
  border: 3px solid rgba(255,255,255,0.6); /* apporte un léger effet "passe-partout" */
  box-shadow: 0 2px 6px rgba(0,0,0,0.08), inset 0 1px 0 rgba(255,255,255,0.22);
  transition: transform 150ms ease, box-shadow 150ms ease;
}

*::-webkit-scrollbar-thumb:hover {
  transform: translateY(-1px) scale(1.02);
  box-shadow: 0 4px 10px rgba(0,0,0,0.12);
}

/* ===== Styles pour Firefox ===== */
* {
  scrollbar-width: thin; /* "auto", "thin" ou "none" */
  scrollbar-color: var(--scroll-thumb) var(--scroll-track);
}



.description_2_2{
  text-align: justify;
}







@media (max-width: 768px) {
  .section_1 {
 
    width: 98%;
  }
}

    /* --- Conteneur général de la section --- */
    .section_1 {
      
      margin: 50px auto; /* marge autour de la section */
      padding: 20px;
    }

    /* --- Titre section_1_1 --- */
    .description_1_1 h1 ,  .description_2_1 h1  {
      font-size: 2.8rem;
      font-weight: 700;
      color: #222;
      letter-spacing: 1px;
      margin: 15px 0;
      text-align: center;
      border-bottom: 3px solid #444;
      display: inline-block;
      padding-bottom: 5px;
    }

    /* --- Paragraphe section_1_2 --- */
    .description_1_1 p ,  .description_2_2 p{
      font-size: 1.1rem;
      line-height: 1.6;
      color: #444;
      background: #fff;
      padding: 18px 25px;
      border-radius: 8px;
      text-align: justify;
      box-shadow: 0 3px 8px rgba(0,0,0,0.08);
      margin: 20px 0;
    }

  
    .text_continent_p1{
            font-size: 1.1rem;
      line-height: 1.6;
      color: #444;
      background: #fff;
      padding: 18px 25px;
      border-radius: 8px;
      text-align: justify;
      box-shadow: 0 3px 8px rgba(0,0,0,0.08);
    margin: auto;
      width: 90%;
    }
</style>


