<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trello-like Vanilla JS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f5f7;
            margin: 0;
            padding: 20px;
        }

        .app {
            max-width: 1200px;
            margin: 0 auto;
        }

        .lists-container {
            display: flex;
            gap: 10px;
            margin-top: 20px;
            overflow-x: auto;
        }

        .list {
            background: #ebecf0;
            border-radius: 4px;
            padding: 10px;
            min-width: 250px;
        }

        .list-title {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card {
            background: white;
            padding: 8px;
            margin-bottom: 8px;
            border-radius: 4px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            cursor: grab;
        }

        .card:active {
            cursor: grabbing;
        }

        button {
            background: #0079bf;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background: #026aa7;
        }

        .add-card-btn {
            background: transparent;
            color: #5e6c84;
            width: 100%;
            text-align: left;
            padding: 8px;
            margin-top: 8px;
        }

        .add-card-btn:hover {
            background: #091e4214;
        }
    </style>
</head>
<body>
    <div class="app">
        <h1>Tableau Kanban</h1>
        
        <!-- Bouton pour ajouter une liste -->
        <button id="addListBtn">+ Ajouter une liste</button>
        
        <!-- Conteneur des listes (colonnes) -->
        <div class="lists-container" id="listsContainer"></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const listsContainer = document.getElementById('listsContainer');
            const addListBtn = document.getElementById('addListBtn');

            // Données initiales (peuvent être chargées depuis localStorage)
            let lists = JSON.parse(localStorage.getItem('trello-lists')) || [];

            // Afficher les listes existantes
            renderLists();

            // Ajouter une nouvelle liste
            addListBtn.addEventListener('click', () => {
                const listTitle = prompt('Nom de la liste :');
                if (listTitle) {
                    lists.push({
                        id: Date.now().toString(),
                        title: listTitle,
                        cards: []
                    });
                    saveToLocalStorage();
                    renderLists();
                }
            });

            // Fonction pour rendre les listes
            function renderLists() {
                listsContainer.innerHTML = '';
                lists.forEach(list => {
                    const listElement = document.createElement('div');
                    listElement.className = 'list';
                    listElement.setAttribute('data-list-id', list.id);

                    listElement.innerHTML = `
                        <div class="list-title">${list.title}</div>
                        <div class="cards-container" data-cards-container="${list.id}">
                            ${list.cards.map(card => `
                                <div class="card" draggable="true" data-card-id="${card.id}">
                                    ${card.text}
                                </div>
                            `).join('')}
                        </div>
                        <button class="add-card-btn" data-list-id="${list.id}">+ Ajouter une carte</button>
                    `;

                    listsContainer.appendChild(listElement);

                    // Ajouter un écouteur pour le bouton "Ajouter une carte"
                    const addCardBtn = listElement.querySelector('.add-card-btn');
                    addCardBtn.addEventListener('click', () => {
                        const cardText = prompt('Texte de la carte :');
                        if (cardText) {
                            const currentList = lists.find(l => l.id === list.id);
                            currentList.cards.push({
                                id: Date.now().toString(),
                                text: cardText
                            });
                            saveToLocalStorage();
                            renderLists();
                        }
                    });

                    // Gestion du drag & drop
                    const cards = listElement.querySelectorAll('.card');
                    cards.forEach(card => {
                        card.addEventListener('dragstart', handleDragStart);
                    });

                    listElement.addEventListener('dragover', handleDragOver);
                    listElement.addEventListener('drop', handleDrop);
                });
            }

            // Variables pour le drag & drop
            let draggedCard = null;
            let draggedCardParentListId = null;

            function handleDragStart(e) {
                draggedCard = e.target;
                draggedCardParentListId = e.target.closest('.list').getAttribute('data-list-id');
                e.dataTransfer.setData('text/plain', e.target.getAttribute('data-card-id'));
            }

            function handleDragOver(e) {
                e.preventDefault();
            }

            function handleDrop(e) {
                e.preventDefault();
                const targetListId = e.currentTarget.getAttribute('data-list-id');
                const cardId = e.dataTransfer.getData('text/plain');

                // Trouver la carte dans les données
                const sourceList = lists.find(list => list.id === draggedCardParentListId);
                const cardIndex = sourceList.cards.findIndex(card => card.id === cardId);
                const card = sourceList.cards[cardIndex];

                // Supprimer la carte de l'ancienne liste
                sourceList.cards.splice(cardIndex, 1);

                // Ajouter la carte à la nouvelle liste
                const targetList = lists.find(list => list.id === targetListId);
                targetList.cards.push(card);

                // Sauvegarder et rafraîchir
                saveToLocalStorage();
                renderLists();
            }

            // Sauvegarder dans localStorage
            function saveToLocalStorage() {
                localStorage.setItem('trello-lists', JSON.stringify(lists));
            }
        });
    </script>
</body>
</html>