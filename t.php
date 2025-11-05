<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit Digital - Présentation avec Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f9;
            color: #333;
            line-height: 1.6;
            scroll-behavior: smooth;
        }

        /* Header et navigation */
        header {
            background: #6C63FF;
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        header h1 {
            margin: 0;
            font-size: 1.8rem;
        }
        nav {
            display: flex;
            gap: 20px;
        }
        #nav-menu a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }
        #nav-menu a.active-link {
            color: #FF6584; /* couleur du lien actif */
        }

        /* Burger Menu */
        #burger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 5px;
        }
        #burger div {
            width: 25px;
            height: 3px;
            background-color: white;
        }
        #nav-menu {
            display: flex;
            gap: 20px;
        }
        #nav-menu.active {
            display: flex;
            position: absolute;
            top: 70px;
            right: 20px;
            background: #6C63FF;
            padding: 20px;
            border-radius: 10px;
            flex-direction: column;
        }

        /* Sections */
        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
        }
        .section {
            margin-bottom: 60px;
        }
        .product-image {
            text-align: center;
        }
        .product-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        h2 {
            color: #6C63FF;
            margin-bottom: 20px;
        }
        .features, .advantages, .faqs, .testimonials {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .card {
            background: white;
            flex: 1 1 45%;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        .card h3 {
            margin-top: 0;
            color: #333;
        }
        .card p {
            margin: 10px 0 0;
        }
        .buy-button {
            display: block;
            width: 220px;
            text-align: center;
            margin: 40px auto;
            padding: 15px;
            background: #FF6584;
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 50px;
            transition: background 0.3s;
        }
        .buy-button:hover {
            background: #FF3366;
        }
        footer {
            text-align: center;
            padding: 30px;
            background: #eee;
            margin-top: 50px;
            font-size: 0.9rem;
            color: #666;
        }
        .testimonial {
            background: #e7e0ff;
            padding: 15px;
            border-radius: 10px;
        }
        .faq-item {
            margin-bottom: 15px;
        }
        .faq-item h4 {
            margin: 0 0 5px;
            color: #6C63FF;
        }

        /* Responsive */
        @media (max-width: 768px) {
            #burger {
                display: flex;
            }
            #nav-menu {
                display: none;
                flex-direction: column;
                gap: 10px;
            }
            .card {
                flex: 1 1 100%;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Produit Digital</h1>
    <nav>
        <div id="burger">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div id="nav-menu">
            <a href="#description">Description</a>
            <a href="#advantages">Avantages</a>
            <a href="#features">Fonctionnalités</a>
            <a href="#testimonials">Témoignages</a>
            <a href="#faqs">FAQ</a>
            <a href="#buy">Acheter</a>
        </div>
    </nav>
</header>

<div class="container">

    <!-- Description -->
    <div class="section product-image" id="description">
        <img src="https://via.placeholder.com/800x450" alt="Produit Digital">
        <h2>Description</h2>
        <p>
            Notre produit digital révolutionnaire vous permet de gérer vos tâches, projets et données plus efficacement. 
            Profitez d’une interface intuitive, d’outils performants et d’une accessibilité instantanée sur tous vos appareils.
        </p>
    </div>

    <!-- Avantages -->
    <div class="section advantages" id="advantages">
        <h2>Avantages</h2>
        <div class="card">
            <h3>Gain de temps</h3>
            <p>Automatisez vos tâches répétitives et concentrez-vous sur l’essentiel.</p>
        </div>
        <div class="card">
            <h3>Accessibilité</h3>
            <p>Disponible partout, sur ordinateur, tablette et mobile.</p>
        </div>
        <div class="card">
            <h3>Sécurité</h3>
            <p>Vos données sont protégées avec les dernières technologies de chiffrement.</p>
        </div>
        <div class="card">
            <h3>Support client</h3>
            <p>Une équipe réactive pour vous accompagner à tout moment.</p>
        </div>
    </div>

    <!-- Fonctionnalités -->
    <div class="section features" id="features">
        <h2>Fonctionnalités</h2>
        <div class="card">
            <h3>Tableaux de bord personnalisés</h3>
            <p>Visualisez vos données et statistiques en un coup d’œil.</p>
        </div>
        <div class="card">
            <h3>Synchronisation cloud</h3>
            <p>Accédez à vos informations à tout moment et depuis n’importe quel appareil.</p>
        </div>
        <div class="card">
            <h3>Notifications intelligentes</h3>
            <p>Restez informé en temps réel sans être submergé par les alertes.</p>
        </div>
        <div class="card">
            <h3>Intégrations</h3>
            <p>Connectez vos outils préférés et centralisez vos données.</p>
        </div>
    </div>

    <!-- Témoignages -->
    <div class="section testimonials" id="testimonials">
        <h2>Témoignages</h2>
        <div class="testimonial">
            <p>"Un produit incroyable ! Il m’a permis de mieux organiser mon travail et gagner du temps chaque jour." - Claire D.</p>
        </div>
        <div class="testimonial">
            <p>"Interface très intuitive et facile à utiliser. Je recommande vivement !" - Julien R.</p>
        </div>
    </div>

    <!-- FAQ -->
    <div class="section faqs" id="faqs">
        <h2>FAQ</h2>
        <div class="faq-item">
            <h4>Comment accéder au produit ?</h4>
            <p>Après l’achat, vous recevez un lien et vos identifiants pour accéder immédiatement au produit.</p>
        </div>
        <div class="faq-item">
            <h4>Est-ce compatible mobile ?</h4>
            <p>Oui, le produit est accessible sur mobile, tablette et ordinateur.</p>
        </div>
        <div class="faq-item">
            <h4>Y a-t-il une assistance en cas de problème ?</h4>
            <p>Oui, notre support client est disponible 24/7 pour vous aider.</p>
        </div>
    </div>

    <!-- Appel à l'action -->
    <div class="section" id="buy">
        <a href="#" class="buy-button">Acheter maintenant</a>
    </div>

</div>

<footer>
    &copy; 2025 Nom de votre entreprise. Tous droits réservés.
</footer>

<script>
    const burger = document.getElementById('burger');
    const menu = document.getElementById('nav-menu');

    // Toggle burger menu sur mobile
    burger.addEventListener('click', () => {
        menu.classList.toggle('active');
    });

    // Scroll spy : mettre en surbrillance le lien actif
    const sections = document.querySelectorAll('.section');
    const menuLinks = document.querySelectorAll('#nav-menu a');

    window.addEventListener('scroll', () => {
        let currentSection = '';

        sections.forEach(section => {
            const sectionTop = section.offsetTop - 120; // ajuste selon la hauteur du header
            const sectionHeight = section.offsetHeight;
            if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                currentSection = section.getAttribute('id');
            }
        });

        menuLinks.forEach(link => {
            link.classList.remove('active-link');
            if (link.getAttribute('href') === '#' + currentSection) {
                link.classList.add('active-link');
            }
        });
    });
</script>

</body>
</html>
