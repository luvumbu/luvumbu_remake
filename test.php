<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Aperçu style Trello avec sous-tâches</title>
  <style>
    :root{
      --bg-dark:#0f1724;--col-dark:#0b1220;--card-dark:#0f1726;--text-dark:#e6eef6;--muted-dark:#a7b0c0;
      --bg-light:#f9fafb;--col-light:#ffffff;--card-light:#f1f5f9;--text-light:#111827;--muted-light:#6b7280;
      --accent:#06b6d4
    }
    *{box-sizing:border-box}
    html,body{height:100%;margin:0;font-family:Inter,system-ui,Arial,Helvetica,sans-serif;background:var(--bg-dark);color:var(--text-dark);transition:all .3s ease}
    body.light{background:var(--bg-light);color:var(--text-light)}
    header{display:flex;align-items:center;gap:16px;padding:16px 20px;border-bottom:1px solid rgba(255,255,255,0.05)}
    body.light header{border-color:rgba(0,0,0,0.05)}
    header h1{font-size:18px;margin:0;flex:1}
    .board-area{display:flex;gap:20px;align-items:flex-start;padding:18px;overflow:auto;height:calc(100vh - 72px)}
    .column{background:var(--col-dark);min-width:280px;border-radius:10px;padding:12px;box-shadow:0 6px 18px rgba(2,6,23,0.6);transition:all .3s}
    body.light .column{background:var(--col-light);box-shadow:0 2px 8px rgba(0,0,0,0.1)}
    .col-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:10px}
    .col-title{font-weight:600}
    .col-count{font-size:12px;color:var(--muted-dark)}
    body.light .col-count{color:var(--muted-light)}
    .cards{display:flex;flex-direction:column;gap:10px;min-height:20px}
    .card{background:var(--card-dark);padding:10px;border-radius:8px;cursor:grab;border-left:4px solid transparent;transition:all .3s}
    body.light .card{background:var(--card-light)}
    .card.dragging{opacity:0.6;transform:scale(.995);cursor:grabbing}
    .labels{display:flex;gap:6px;margin-bottom:8px}
    .label{height:10px;padding:4px 8px;border-radius:6px;font-size:11px;display:inline-flex;align-items:center}
    .small{font-size:13px}
    .subtasks{margin-top:8px;padding-left:10px;border-left:1px dashed rgba(255,255,255,0.1)}
    body.light .subtasks{border-color:rgba(0,0,0,0.1)}
    .subtasks div{display:flex;align-items:center;gap:6px;margin-bottom:4px}
    .subtasks input[type=checkbox]{cursor:pointer}
    .add-subtask{font-size:12px;color:var(--accent);cursor:pointer;margin-left:18px}
    .add-card{margin-top:8px;background:rgba(255,255,255,0.02);padding:8px;border-radius:8px;cursor:pointer;font-size:14px;text-align:center}
    .control{display:flex;gap:8px;align-items:center}
    .btn{background:transparent;border:1px solid rgba(255,255,255,0.04);padding:8px 10px;border-radius:8px;color:inherit;cursor:pointer;transition:all .3s}
    body.light .btn{border-color:rgba(0,0,0,0.1)}
    .search{padding:6px 10px;border-radius:8px;border:1px solid rgba(255,255,255,0.03);background:transparent;color:inherit}
    body.light .search{border-color:rgba(0,0,0,0.1)}
    @media(max-width:800px){.board-area{padding:12px}.column{min-width:230px}}
  </style>
</head>
<body>
  <header>
    <h1>Tableau — Trello avec sous-tâches</h1>
    <div class="control">
      <input class="search" placeholder="Rechercher..." id="search" />
      <button class="btn" id="toggleTheme">Mode clair/sombre</button>
      <button class="btn" id="addColumnBtn">+ Colonne</button>
    </div>
  </header>

  <main class="board-area" id="board">
    <section class="column" data-col-id="todo">
      <div class="col-header">
        <div><div class="col-title">À faire</div><div class="col-count" data-count></div></div>
      </div>
      <div class="cards" ondragover="allowDrop(event)" ondrop="dropCard(event)">
        <article class="card" draggable="true" ondragstart="dragStart(event)" ondragend="dragEnd(event)" data-id="t1">
          <div class="labels"><span class="label" style="background:#ffb4a2">Urgent</span></div>
          <div class="small">Corriger le bug d'inscription</div>
          <div class="subtasks">
            <div><input type="checkbox"/> Vérifier les logs</div>
            <div><input type="checkbox"/> Tester le formulaire</div>
            <div class="add-subtask" onclick="addSubtask(this)">+ Ajouter une sous-tâche</div>
          </div>
        </article>
      </div>
      <div class="add-card" onclick="showAddCard(this)">+ Ajouter une tâche</div>
    </section>

    <section class="column" data-col-id="doing">
      <div class="col-header"><div><div class="col-title">En cours</div><div class="col-count" data-count></div></div></div>
      <div class="cards" ondragover="allowDrop(event)" ondrop="dropCard(event)">
        <article class="card" draggable="true" ondragstart="dragStart(event)" ondragend="dragEnd(event)" data-id="t2">
          <div class="labels"><span class="label" style="background:#caffbf">Revue</span></div>
          <div class="small">Rédaction documentation</div>
          <div class="subtasks">
            <div><input type="checkbox" checked/> Sommaire terminé</div>
            <div><input type="checkbox"/> Section API</div>
            <div class="add-subtask" onclick="addSubtask(this)">+ Ajouter une sous-tâche</div>
          </div>
        </article>
      </div>
      <div class="add-card" onclick="showAddCard(this)">+ Ajouter une tâche</div>
    </section>

    <section class="column" data-col-id="done">
      <div class="col-header"><div><div class="col-title">Terminé</div><div class="col-count" data-count></div></div></div>
      <div class="cards" ondragover="allowDrop(event)" ondrop="dropCard(event)">
        <article class="card" draggable="true" ondragstart="dragStart(event)" ondragend="dragEnd(event)" data-id="t3">
          <div class="labels"><span class="label" style="background:#d4f1be">Livrable</span></div>
          <div class="small">Maquette validée</div>
          <div class="subtasks">
            <div><input type="checkbox" checked/> Design</div>
            <div><input type="checkbox" checked/> Validation client</div>
          </div>
        </article>
      </div>
      <div class="add-card" onclick="showAddCard(this)">+ Ajouter une tâche</div>
    </section>
  </main>

  <template id="addCardTemplate">
    <div style="margin-top:8px">
      <input placeholder="Titre de la tâche" style="width:100%;padding:8px;border-radius:6px;border:1px solid rgba(255,255,255,0.1);background:transparent;color:inherit" class="newCardInput" />
      <div style="display:flex;gap:8px;margin-top:8px">
        <button onclick="createCard(this)" class="btn">Créer</button>
        <button onclick="cancelAdd(this)" class="btn">Annuler</button>
      </div>
    </div>
  </template>

  <script>
    let dragged=null;
    function dragStart(e){dragged=e.target;e.target.classList.add('dragging');e.dataTransfer.setData('text/plain',e.target.dataset.id)}
    function dragEnd(e){e.target.classList.remove('dragging');dragged=null;updateCounts()}
    function allowDrop(e){e.preventDefault()}
    function dropCard(e){e.preventDefault();const id=e.dataTransfer.getData('text/plain');const card=document.querySelector('[data-id="'+id+'"]');const target=closestCardsContainer(e.target);if(target&&card&&target!==card.parentElement){target.appendChild(card);updateCounts();}}
    function closestCardsContainer(el){while(el&& !el.classList)el=el.parentElement;if(!el)return null;return el.closest('.cards');}

    function showAddCard(btn){const col=btn.closest('.column');if(col.querySelector('.newCardInput'))return;const tpl=document.getElementById('addCardTemplate');const node=tpl.content.cloneNode(true);btn.style.display='none';col.appendChild(node);}
    function cancelAdd(btn){const col=btn.closest('.column');const inputBlock=col.querySelector('.newCardInput');if(inputBlock){inputBlock.closest('div').remove();}col.querySelector('.add-card').style.display='block';}
    function createCard(btn){const col=btn.closest('.column');const input=col.querySelector('.newCardInput');const text=input.value.trim();if(!text)return alert('Écris le titre');const card=document.createElement('article');card.className='card';card.draggable=true;card.dataset.id='t'+Date.now();card.innerHTML='<div class="labels"><span class="label" style="background:#ffd6a5">Nouvelle</span></div><div class="small">'+escapeHtml(text)+'</div><div class="subtasks"><div class="add-subtask" onclick="addSubtask(this)">+ Ajouter une sous-tâche</div></div>';
      card.addEventListener('dragstart',e=>dragStart(e));card.addEventListener('dragend',e=>dragEnd(e));col.querySelector('.cards').appendChild(card);cancelAdd(btn);updateCounts();}

    function escapeHtml(s){return s.replaceAll('&','&amp;').replaceAll('<','&lt;').replaceAll('>','&gt;');}

    function addSubtask(btn){const txt=prompt('Sous-tâche :');if(!txt)return;const div=document.createElement('div');div.innerHTML='<input type="checkbox"/> '+escapeHtml(txt);btn.parentElement.insertBefore(div,btn);}

    document.getElementById('addColumnBtn').addEventListener('click',()=>{const name=prompt('Nom de la colonne ?','Nouvelle colonne');if(!name)return;const col=document.createElement('section');col.className='column';col.dataset.colId='col'+Date.now();col.innerHTML=`<div class="col-header"><div><div class="col-title">${escapeHtml(name)}</div><div class="col-count" data-count></div></div></div><div class="cards" ondragover="allowDrop(event)" ondrop="dropCard(event)"></div><div class="add-card" onclick="showAddCard(this)">+ Ajouter une tâche</div>`;document.getElementById('board').appendChild(col);updateCounts();});

    document.getElementById('search').addEventListener('input',e=>{const q=e.target.value.toLowerCase();document.querySelectorAll('.card').forEach(c=>{const t=c.innerText.toLowerCase();c.style.display=t.includes(q)?'':'none';});});

    function updateCounts(){document.querySelectorAll('.column').forEach(col=>{const n=col.querySelectorAll('.cards .card').length;const el=col.querySelector('[data-count]');if(el)el.textContent=n+(n>1?' tâches':' tâche');});}
    updateCounts();

    document.getElementById('toggleTheme').addEventListener('click',()=>{document.body.classList.toggle('light');});
  </script>
</body>
</html>
