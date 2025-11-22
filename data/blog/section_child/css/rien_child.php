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
    background: #e5e7eb;
    color: var(--muted);
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
   ⬇️ RESPONSIVE MOBILE & TABLETTE  
============================================================ */

/* === TABLETTE (≤ 900px) === */
@media (max-width: 900px) {
    .grid {
        grid-template-columns: 1fr;
        gap: 24px;
    }

    aside {
        order: 2;
    }

    main {
        order: 1;
    }

    .div_article_img img {
        height: 240px;
    }
}

/* === MOBILE (≤ 600px) === */
@media (max-width: 600px) {

    .container {
        padding: 0 12px;
    }

    .post-card {
        padding: 14px;
        border-radius: 10px;
    }

    .post-card h2 {
        font-size: 1.05rem;
    }

    .meta {
        font-size: 0.8rem;
    }

    .div_article_img img {
        height: 200px;
    }

    .tag {
        font-size: 11px;
        padding: 5px 7px;
    }

    aside .card {
        padding: 14px;
        border-radius: 10px;
    }
}

</style>