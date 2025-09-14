<!DOCTYPE html>
<html>
<head>
    <title>Fond Futuriste Interactif</title>
    <style>
        body {
            margin: 0;
            overflow: hidden; /* Cache les barres de défilement si le canvas dépasse */
            background-color: #000; /* Fond noir pour le contraste */
        }
        canvas {
            display: block; /* Supprime l'espace blanc sous le canvas */
        }
    </style>
</head>
<body>
    <canvas id="futuristicCanvas"></canvas>
    <script src="futuristic.js"></script>
</body>
</html>
<script>
const canvas = document.getElementById('futuristicCanvas');
const ctx = canvas.getContext('2d');

let width, height;
let particles = [];
const numParticles = 1000; // Plus de particules pour un effet de profondeur
const particleBaseSize = .8; // Taille de base des particules
const maxLineDistance = 50; // Distance max pour les lignes
const particleBaseSpeed = 4.2; // Vitesse de base ralentie

// Couleurs futuristes (conservées selon votre demande)
const colors = {
    background: '#0a0a1a',
    particleNear: '#00ffff', // Cyan vif pour les proches
    particleFar: '#006666',  // Cyan plus sombre pour les lointaines
    line: 'rgba(0, 255, 255, 0.1)', // Cyan transparent
    core: '#00ccff' // Bleu vif au centre
};

let mouse = {
    x: undefined,
    y: undefined,
    radius: 100 // Rayon d'influence de la souris
};

// --- Gestion des événements de la souris ---
window.addEventListener('mousemove', function(event) {
    mouse.x = event.x;
    mouse.y = event.y;
});

// Réinitialiser la position de la souris quand elle quitte la fenêtre pour arrêter la répulsion
window.addEventListener('mouseout', function() {
    mouse.x = undefined;
    mouse.y = undefined;
});

// --- Fonction de redimensionnement du canvas ---
function resizeCanvas() {
    width = canvas.width = window.innerWidth;
    height = canvas.height = window.innerHeight;
}
window.addEventListener('resize', resizeCanvas); // Écouteur pour le redimensionnement
resizeCanvas(); // Appel initial pour définir la taille du canvas

// --- Classe Particle ---
class Particle {
    constructor() {
        this.x = Math.random() * width;
        this.y = Math.random() * height;
        this.vx = (Math.random() - 0.5) * particleBaseSpeed; // Vitesse initiale aléatoire
        this.vy = (Math.random() - 0.5) * particleBaseSpeed;
        
        // Nouvelle propriété: 'depth' (profondeur)
        // entre 0 (le plus lointain) et 1 (le plus proche)
        this.depth = Math.random(); 
        
        // La taille dépend de la profondeur (effet de perspective)
        this.size = particleBaseSize * (0.5 + this.depth * 1.5); 
        
        // La vitesse dépend aussi de la profondeur (effet de parallaxe)
        this.actualSpeed = particleBaseSpeed * (0.5 + this.depth * 1.5); 
        
        // La couleur dépend de la profondeur pour renforcer l'illusion
        this.color = this.depth > 0.5 ? colors.particleNear : colors.particleFar;
    }

    // Met à jour la position et l'état de la particule
    update() {
        // Mouvement de base
        this.x += this.vx * this.actualSpeed;
        this.y += this.vy * this.actualSpeed;

        // Rebonds sur les bords du canvas
        if (this.x < 0 || this.x > width) this.vx *= -1;
        if (this.y < 0 || this.y > height) this.vy *= -1;

        // Effet de répulsion de la souris
        if (mouse.x !== undefined && mouse.y !== undefined) {
            const dx = mouse.x - this.x;
            const dy = mouse.y - this.y;
            const distance = Math.hypot(dx, dy); // Distance entre la particule et le curseur

            if (distance < mouse.radius) {
                const forceDirectionX = dx / distance; // Direction de la force de répulsion
                const forceDirectionY = dy / distance;
                const force = (mouse.radius - distance) / mouse.radius; // Force inversement proportionnelle à la distance
                const maxForce = 5; // Limite la force de répulsion pour éviter qu'elle soit trop violente

                // Appliquer une force de répulsion. Les particules lointaines sont moins affectées.
                this.x -= forceDirectionX * force * maxForce * (1 - this.depth); 
                this.y -= forceDirectionY * force * maxForce * (1 - this.depth);
            }
        }
    }

    // Dessine la particule sur le canvas
    draw() {
        ctx.fillStyle = this.color;
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2); // Dessine un cercle
        ctx.fill();
    }
}

// --- Initialisation des particules ---
function init() {
    for (let i = 0; i < numParticles; i++) {
        particles.push(new Particle());
    }
}

// --- Boucle d'animation principale ---
function animate() {
    // Effacer l'écran à chaque frame avec la couleur de fond
    ctx.fillStyle = colors.background;
    ctx.fillRect(0, 0, width, height);

    // Dessiner un "noyau" lumineux central pour l'effet futuriste
    const centerX = width / 2;
    const centerY = height / 2;
    // Crée un dégradé radial (du centre vers l'extérieur)
    const gradient = ctx.createRadialGradient(centerX, centerY, 0, centerX, centerY, 200);
    gradient.addColorStop(0, colors.core); // Couleur vive au centre
    gradient.addColorStop(1, 'rgba(0, 0, 0, 0)'); // Transparent à l'extérieur
    ctx.fillStyle = gradient;
    ctx.fillRect(0, 0, width, height); // Applique le dégradé à tout le canvas

    // Mettre à jour et dessiner les particules
    // Trier les particules pour dessiner les lointaines en premier.
    // Cela assure que les particules proches recouvrent les lointaines, renforçant la profondeur.
    particles.sort((a, b) => a.depth - b.depth); 
    particles.forEach(p => {
        p.update();
        p.draw();
    });

    // Dessiner les lignes entre les particules proches (visuellement)
    for (let i = 0; i < numParticles; i++) {
        for (let j = i + 1; j < numParticles; j++) {
            const p1 = particles[i];
            const p2 = particles[j];
            const dist = Math.hypot(p1.x - p2.x, p1.y - p2.y);
            
            // Ne lier que les particules si elles sont proches les unes des autres
            // ET si leur profondeur est similaire pour éviter des liens illogiques.
            if (dist < maxLineDistance && Math.abs(p1.depth - p2.depth) < 0.3) {
                const alpha = 1 - (dist / maxLineDistance); // L'opacité diminue avec la distance
                // L'opacité des lignes est aussi modulée par la profondeur moyenne des deux particules
                ctx.strokeStyle = `rgba(0, 255, 255, ${alpha * 0.1 * (p1.depth + p2.depth) / 2})`; 
                ctx.lineWidth = 0.5; // Épaisseur des lignes
                ctx.beginPath();
                ctx.moveTo(p1.x, p1.y);
                ctx.lineTo(p2.x, p2.y);
                ctx.stroke();
            }
        }
    }

    // Demande au navigateur de préparer la prochaine frame pour une animation fluide
    requestAnimationFrame(animate);
}

// --- Démarrage de l'application ---
init();      // Crée les particules initiales
animate();   // Lance la boucle d'animation
</script>
</body>
</html>