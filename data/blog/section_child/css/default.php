<style>
 

/* ============================================================
   LAYOUT GLOBAL
============================================================ */
.container {
    max-width: 1100px;
    margin: 28px auto;
    padding: 0 18px;
}

.grid {
    display: grid;
    grid-template-columns: 1fr 320px;
    gap: 18px;
}

main {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

/* ============================================================
   POST CARD
============================================================ */
.post-card {
    background: var(--card-bg);
    padding: 16px;
    border-radius: 12px;
    border: 1px solid var(--border);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.post-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
}

.post-card h2 {
    margin: 0 0 6px 0;
    font-size: 1.2rem;
    color: var(--text);
}

.meta {
    font-size: 0.85rem;
    color: var(--muted);
    margin-bottom: 10px;
}

.excerpt {
    color: var(--text);
}

/* TAGS */
.tags {
    display: flex;
    gap: 6px;
    flex-wrap: wrap;
    margin-top: 12px;
}

.tag {
    font-size: 12px;
    padding: 6px 8px;
    border-radius: 999px;
    background: var(--border);
    color: var(--muted);
}

.excerpt {
  
    overflow-x: auto;   /* Scroll horizontal si débordement */
    white-space: nowrap; /* Empêche le retour à la ligne pour forcer le scroll */
}

/* ============================================================
   IMAGES
============================================================ */
.div_article_img {
    width: 100%;
    margin: 20px 0;
}

.div_article_img img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 8px;
}

article{
  width: 100%;
}
.excerpt {
    
    overflow-x: auto;   /* Scroll horizontal si débordement */
    white-space: nowrap; /* Empêche le retour à la ligne pour forcer le scroll */
    max-width:600px;
    margin: auto;
            transition: 1s all;
   
}

@media (max-width: 1024px) {
    .excerpt {
            max-width:500px;
            transition: 1s all;

    }
}
.excerpt {
    

  
    box-sizing: border-box;

    height: auto;

    white-space: normal;       /* autorise retour à la ligne */
    overflow-wrap: anywhere;   /* casse les mots trop longs */
    word-break: break-word;    /* compatible anciens navigateurs */
}

/* ============================================================
   SIDEBAR
============================================================ */
aside .card {
    background: var(--card-bg);
    padding: 16px;
    border-radius: 12px;
    border: 1px solid var(--border);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    color: var(--text);
}

.popular li {
    margin-bottom: 10px;
}

.popular a {
    color: var(--accent);
    text-decoration: none;
}

.popular a:hover {
    text-decoration: underline;
}

.small {
    font-size: 0.9rem;
    color: var(--muted);
}

/* ============================================================
   📱 RESPONSIVE — TOUS LES BREAKPOINTS
============================================================ */

/* === ÉCRANS TRÈS PETITS ≤ 360px === */
@media (max-width: 360px) {
    .post-card {
        padding: 12px;
    }
    .post-card h2 {
        font-size: 1rem;
    }
    .div_article_img img {
        height: 180px;
    }
}

/* === PETITS TÉLÉPHONES ≤ 480px === */
@media (max-width: 480px) {
    .container {
        padding: 0 10px;
    }
    .div_article_img img {
        height: 200px;
    }
    .tag {
        font-size: 10px;
        padding: 4px 6px;
    }
}

/* === GRANDS TÉLÉPHONES / PHABLETTES ≤ 600px === */
@media (max-width: 600px) {
    .post-card {
        padding: 14px;
    }
    .post-card h2 {
        font-size: 1.05rem;
    }
    .grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    aside {
        order: 2;
    }
    main {
        order: 1;
    }
    .div_article_img img {
        height: 220px;
    }
}

/* === PETITES TABLETTES ≤ 768px === */
@media (max-width: 768px) {
    .grid {
        grid-template-columns: 1fr;
    }
    .div_article_img img {
        height: 240px;
    }
}

/* === TABLETTES STANDARDS ≤ 900px === */
@media (max-width: 900px) {
    .grid {
        grid-template-columns: 1fr;
        gap: 24px;
    }
    aside .card {
        padding: 14px;
    }
}

/* === GRANDES TABLETTES / PETITS LAPTOPS ≤ 1024px === */
@media (max-width: 1024px) {
    .container {
        max-width: 960px;
    }
    .post-card {
        padding: 18px;
    }
}

/* === LAPTOPS CLASSIQUES ≤ 1280px === */
@media (max-width: 1280px) {
    .container {
        max-width: 1000px;
    }
}

/* === ÉCRANS LARGES ≤ 1440px === */
@media (max-width: 1440px) {
    .container {
        max-width: 1050px;
    }
}

/* === ÉCRANS TRÈS GRANDS ≤ 1920px === */
@media (max-width: 1920px) {
    .container {
        max-width: 1100px;
    }
}
</style>
