
 <style>
    /* =========================================
   VARIABLES (THEME)
========================================= */

/* =========================================
   RESET GLOBAL
========================================= */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
}

body {
    background: #f3f4f6;
    color: var(--text);
    line-height: 1.5;
}

/* =========================================
   HEADER + NAVIGATION
========================================= */
header {
    padding: 18px 28px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    position: sticky;
    top: 0;
    backdrop-filter: blur(6px);
    background-color: #ffffffcc;
    border-bottom: 1px solid var(--border);
    z-index: 10;
    color: var(--text);
}

/* --- Logo / Marque --- */
.brand {
    display: flex;
    align-items: center;
    gap: 12px;
}

.logo {
   /*
    width: 44px;

    */
    height: 44px;
    border-radius: 8px;
    background: linear-gradient(135deg, var(--logo-gradient-start), var(--logo-gradient-end));
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    color: #ffffff;
}

/* --- Menu --- */
nav ul {
    display: flex;
    gap: 12px;
    list-style: none;
}

nav a {
    color: var(--muted);
    text-decoration: none;
    padding: 8px 12px;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.2s;
}

nav a:hover {
    color: #ffffff;
    background: var(--accent);
}

/* =========================================
   BARRE DE RECHERCHE
========================================= */
.search-wrap {
    display: flex;
    align-items: center;
    gap: 8px;
}

.search {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 12px;
    border-radius: 10px;
    background: var(--glass);
    border: 1px solid var(--border);
}

.search input {
    background: transparent;
    border: 0;
    outline: none;
    color: inherit;
    width: 260px;
}

/* =========================================
   LAYOUT (GRID, CONTAINER)
========================================= */
/* =========================================
   FOOTER
========================================= */
 

/* =========================================
   RESPONSIVE
========================================= */
@media (max-width: 880px) {
    .grid {
        grid-template-columns: 1fr;
    }

    nav ul {
        display: none;
    }

    .search input {
        width: 140px;
    }
}

 </style>
 
 


   

    <script>
    (function() {
        const input = document.getElementById('searchInput');
        const posts = Array.from(document.querySelectorAll('#posts .post-card'));

        function normalize(str) {
            return (str || '').toString().trim().toLowerCase();
        }

        function matches(post, q) {
            if (!q) return true;
            const terms = q.split(/\s+/).filter(Boolean).map(normalize);
            const data = normalize(post.dataset.keywords + ' ' + post.dataset.title + ' ' + post.innerText);
            return terms.every(t => data.indexOf(t) !== -1);
        }

        function render() {
            const q = input.value;
            let anyVisible = false;
            posts.forEach(p => {
                if (matches(p, q)) {
                    p.style.display = '';
                    anyVisible = true;
                } else {
                    p.style.display = 'none';
                }
            });
            let noEl = document.getElementById('no-results');
            if (!anyVisible) {
                if (!noEl) {
                    noEl = document.createElement('div');
                    noEl.id = 'no-results';
                    noEl.style.marginTop = '8px';
                    noEl.style.padding = '12px';
                    noEl.style.border = '1px solid #ccc';
                    noEl.style.borderRadius = '8px';
                    noEl.innerText = 'Aucun article ne correspond à votre recherche.';
                    document.querySelector('main').appendChild(noEl);
                }
            } else if (noEl) {
                noEl.remove();
            }
        }
        input.addEventListener('input', render);
        input.addEventListener('keydown', function(e) {
            if (e.key === 'Enter') {
                const first = posts.find(p => p.style.display !== 'none');
                if (first) {
                    first.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    first.style.boxShadow = '0 6px 18px rgba(0,0,0,0.15)';
                    setTimeout(() => first.style.boxShadow = '', 1400);
                }
            }
        });
        render();
    })();
    </script>
 
