<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Blog — Exemple avec recherche</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg: #0f1724;
      --card: #0b1220;
      --muted: #9aa4b2;
      --accent: #6ee7b7;
      --glass: rgba(255,255,255,0.03);
      color-scheme: dark;
    }
    *{box-sizing:border-box}
    body{
      margin:0;
      font-family:Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      background: linear-gradient(180deg,#071022 0%, #0b1220 100%);
      color:#e6eef6;
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
      line-height:1.5;
    }
    header{
      padding:18px 28px;
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:16px;
      position:sticky;
      top:0;
      backdrop-filter: blur(6px);
      background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(0,0,0,0.04));
      border-bottom:1px solid rgba(255,255,255,0.03);
      z-index:10;
    }
    .brand{display:flex;align-items:center;gap:12px}
    .logo{
      width:44px;height:44px;border-radius:8px;background:linear-gradient(135deg,var(--accent),#60a5fa);display:flex;align-items:center;justify-content:center;font-weight:700;color:#021018
    }
    nav ul{display:flex;gap:12px;list-style:none;padding:0;margin:0}
    nav a{color:var(--muted);text-decoration:none;padding:8px 12px;border-radius:8px;font-weight:600}
    nav a:hover{color:var(--accent);background:var(--glass)}
    .search-wrap{display:flex;align-items:center;gap:8px}
    .search{
      display:flex;align-items:center;gap:8px;padding:8px 12px;border-radius:10px;background:rgba(255,255,255,0.02);border:1px solid rgba(255,255,255,0.02);
    }
    .search input{background:transparent;border:0;outline:none;color:inherit;width:260px}
    .container{max-width:1100px;margin:28px auto;padding:0 18px}

    .grid{display:grid;grid-template-columns:1fr 320px;gap:18px}

    /* Main column */
    main{display:flex;flex-direction:column;gap:16px}
    .post-card{background:linear-gradient(180deg, rgba(255,255,255,0.01), rgba(255,255,255,0.02));padding:16px;border-radius:12px;border:1px solid rgba(255,255,255,0.03)}
    .post-card h2{margin:0 0 6px 0;font-size:1.2rem}
    .meta{font-size:0.85rem;color:var(--muted);margin-bottom:10px}
    .excerpt{color:#cfe7ee}
    .tags{display:flex;gap:6px;flex-wrap:wrap;margin-top:12px}
    .tag{font-size:12px;padding:6px 8px;border-radius:999px;background:rgba(255,255,255,0.02);color:var(--muted)}

    /* Sidebar */
    aside .card{background:linear-gradient(180deg, rgba(255,255,255,0.01), rgba(255,255,255,0.02));padding:16px;border-radius:12px;border:1px solid rgba(255,255,255,0.03)}
    .popular li{margin-bottom:10px}
    .small{font-size:0.9rem;color:var(--muted)}

    footer{max-width:1100px;margin:28px auto;padding:18px;color:var(--muted);text-align:center}

    @media (max-width:880px){
      .grid{grid-template-columns:1fr;}
      nav ul{display:none}
      .search input{width:140px}
    }
  </style>
</head>
<body>
  <header>
    <div class="brand">
      <div class="logo">B</div>
      <div>
        <div style="font-weight:700">Mon Blog</div>
        <div style="font-size:12px;color:var(--muted)">Écrits — idées — tutoriels</div>
      </div>
    </div>

    <nav aria-label="Menu principal">
      <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Articles</a></li>
        <li><a href="#">À propos</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>

    <div class="search-wrap">
      <div class="search" role="search" aria-label="Recherche sur le blog">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M21 21l-4.35-4.35" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><circle cx="11" cy="11" r="6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></circle></svg>
        <input id="searchInput" type="search" placeholder="Rechercher par mot-clé..." aria-label="Rechercher" />
      </div>
    </div>
  </header>

  <div class="container">
    <div class="grid">
      <main id="posts">
        <!-- Les posts seront inclus ici statiquement pour l'exemple -->
        <article class="post-card" data-keywords="javascript,tutoriel,web" data-title="Débuter en JavaScript">
          <h2>Débuter en JavaScript</h2>
          <div class="meta">Publié le 10 octobre 2025 — Tutoriel</div>
          <div class="excerpt">Un guide pas-à-pas pour comprendre les bases du langage JavaScript, variables, fonctions, et DOM.</div>
          <div class="tags"><span class="tag">javascript</span><span class="tag">tutoriel</span><span class="tag">web</span></div>
        </article>

        <article class="post-card" data-keywords="css,design,astuce" data-title="Astuce CSS — grilles et responsive">
          <h2>Astuce CSS — grilles et responsive</h2>
          <div class="meta">Publié le 3 octobre 2025 — Design</div>
          <div class="excerpt">Comment construire une grille adaptable et garder un rendu propre sur mobile sans trop de médias queries.</div>
          <div class="tags"><span class="tag">css</span><span class="tag">design</span></div>
        </article>

        <article class="post-card" data-keywords="php,backend,exemples" data-title="Organiser son projet PHP">
          <h2>Organiser son projet PHP</h2>
          <div class="meta">Publié le 28 septembre 2025 — Backend</div>
          <div class="excerpt">Bonnes pratiques pour structurer un projet PHP, autoload, controllers, et sécurité basique.</div>
          <div class="tags"><span class="tag">php</span><span class="tag">backend</span></div>
        </article>

        <article class="post-card" data-keywords="athletisme,entrainement,400m" data-title="Programme pour améliorer le 400m">
          <h2>Programme pour améliorer le 400m</h2>
          <div class="meta">Publié le 15 septembre 2025 — Sport</div>
          <div class="excerpt">Séances hebdomadaires, fractionnés et renforcement pour gagner du temps sur 400 m.</div>
          <div class="tags"><span class="tag">athletisme</span><span class="tag">entrainement</span></div>
        </article>

      </main>

      <aside>
        <div class="card">
          <h3>Rechercher — astuces</h3>
          <p class="small">Tape un mot-clé (ex: "php", "css", "athletisme") et les articles correspondant s'afficheront automatiquement.</p>
        </div>

        <div style="height:12px"></div>

        <div class="card">
          <h3>Articles populaires</h3>
          <ul class="popular">
            <li><a href="#">Débuter en JavaScript</a></li>
            <li><a href="#">Organiser son projet PHP</a></li>
            <li><a href="#">Astuce CSS — grilles et responsive</a></li>
          </ul>
        </div>
      </aside>
    </div>
  </div>

  <footer>
    © Mon Blog — Exemple. Créé automatiquement.
  </footer>

  <script>
    // Recherche par mot-clé simple — filtre en temps réel
    (function(){
      const input = document.getElementById('searchInput');
      const posts = Array.from(document.querySelectorAll('#posts .post-card'));

      function normalize(str){
        return (str||'').toString().trim().toLowerCase();
      }

      function matches(post, q){
        if(!q) return true;
        const terms = q.split(/\s+/).filter(Boolean).map(normalize);
        const data = normalize(post.dataset.keywords + ' ' + post.dataset.title + ' ' + post.innerText);
        return terms.every(t => data.indexOf(t) !== -1);
      }

      function render(){
        const q = input.value;
        let anyVisible = false;
        posts.forEach(p => {
          if(matches(p,q)){
            p.style.display = '';
            anyVisible = true;
          } else {
            p.style.display = 'none';
          }
        });
        // Si aucun résultat, afficher un message
        let noEl = document.getElementById('no-results');
        if(!anyVisible){
          if(!noEl){
            noEl = document.createElement('div');
            noEl.id = 'no-results';
            noEl.style.marginTop = '8px';
            noEl.style.padding = '12px';
            noEl.style.background = 'rgba(255,255,255,0.02)';
            noEl.style.border = '1px solid rgba(255,255,255,0.03)';
            noEl.style.borderRadius = '8px';
            noEl.innerText = 'Aucun article ne correspond à votre recherche.';
            document.querySelector('main').appendChild(noEl);
          }
        } else if(noEl){
          noEl.remove();
        }
      }

      input.addEventListener('input', render);

      // Recherche si l'utilisateur presse Enter: focus premier résultat
      input.addEventListener('keydown', function(e){
        if(e.key === 'Enter'){
          const first = posts.find(p => p.style.display !== 'none');
          if(first){
            first.scrollIntoView({behavior:'smooth', block:'start'});
            first.style.boxShadow = '0 6px 18px rgba(0,0,0,0.6)';
            setTimeout(()=> first.style.boxShadow = '', 1400);
          }
        }
      });

      // initial render
      render();

    })();
  </script>
</body>
</html>
