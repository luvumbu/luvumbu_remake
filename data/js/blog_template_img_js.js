// =========================================
// Coverflow 3D avec Réflexion - Version corrigée
// =========================================

const items = document.querySelectorAll('.coverflow-item');
const dotsContainer = document.getElementById('dots');
const container = document.querySelector('.coverflow-container');
const menuToggle = document.getElementById('menuToggle');
const mainMenu = document.getElementById('mainMenu');
let currentIndex = 0;
let isAnimating = false;

// ---------------------
// Mobile menu toggle
// ---------------------
menuToggle.addEventListener('click', () => {
    menuToggle.classList.toggle('active');
    mainMenu.classList.toggle('active');
});

document.querySelectorAll('.menu-item:not(.external)').forEach(item => {
    item.addEventListener('click', () => {
        menuToggle.classList.remove('active');
        mainMenu.classList.remove('active');
    });
});

document.addEventListener('click', (e) => {
    if (!menuToggle.contains(e.target) && !mainMenu.contains(e.target)) {
        menuToggle.classList.remove('active');
        mainMenu.classList.remove('active');
    }
});

// ---------------------
// Create dots
// ---------------------
items.forEach((_, index) => {
    const dot = document.createElement('div');
    dot.className = 'dot';
    dot.addEventListener('click', () => goToIndex(index));
    dotsContainer.appendChild(dot);
});

const dots = document.querySelectorAll('.dot');
let autoplayInterval = null;
let isPlaying = true;
const playIcon = document.querySelector('.play-icon');
const pauseIcon = document.querySelector('.pause-icon');

// ---------------------
// Update coverflow
// ---------------------
function updateCoverflow() {
    if (isAnimating) return;
    isAnimating = true;

    items.forEach((item, index) => {
        let offset = index - currentIndex;

        if (offset > items.length / 2) offset -= items.length;
        else if (offset < -items.length / 2) offset += items.length;

        const absOffset = Math.abs(offset);
        const sign = Math.sign(offset);

        let translateX = offset * 220;
        let translateZ = -absOffset * 200;
        let rotateY = -sign * Math.min(absOffset * 60, 60);
        let opacity = 1 - absOffset * 0.2;
        let scale = 1 - absOffset * 0.1;

        if (absOffset > 3) {
            opacity = 0;
            translateX = sign * 800;
        }

        item.style.transform = `
            translateX(${translateX}px)
            translateZ(${translateZ}px)
            rotateY(${rotateY}deg)
            scale(${scale})
        `;
        item.style.opacity = opacity;
        item.style.zIndex = 100 - absOffset;
        item.classList.toggle('active', index === currentIndex);
    });

    dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === currentIndex);
    });
}

// ---------------------
// Navigation
// ---------------------
function navigate(direction) {
    if (isAnimating) return;

    currentIndex += direction;
    if (currentIndex < 0) currentIndex = items.length - 1;
    if (currentIndex >= items.length) currentIndex = 0;

    updateCoverflow();
}

function goToIndex(index) {
    if (isAnimating || index === currentIndex) return;
    currentIndex = index;
    updateCoverflow();
}

// ---------------------
// Keyboard navigation
// ---------------------
container.setAttribute('tabindex', '0');
container.focus();
container.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') navigate(-1);
    if (e.key === 'ArrowRight') navigate(1);
});

// ---------------------
// Click on items
// ---------------------
items.forEach((item, index) => {
    item.addEventListener('click', () => goToIndex(index));
});

// ---------------------
// Touch/swipe support
// ---------------------
let touchStartX = 0;
let touchEndX = 0;
let touchStartY = 0;
let touchEndY = 0;
let isSwiping = false;

container.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].screenX;
    touchStartY = e.changedTouches[0].screenY;
    isSwiping = true;
}, { passive: true });

container.addEventListener('touchmove', (e) => {
    if (!isSwiping) return;
    const currentX = e.changedTouches[0].screenX;
    const diff = currentX - touchStartX;
    if (Math.abs(diff) > 10) e.preventDefault();
}, { passive: false });

container.addEventListener('touchend', (e) => {
    if (!isSwiping) return;
    touchEndX = e.changedTouches[0].screenX;
    touchEndY = e.changedTouches[0].screenY;
    handleSwipe();
    isSwiping = false;
}, { passive: true });

function handleSwipe() {
    const swipeThreshold = 30;
    const diffX = touchStartX - touchEndX;
    const diffY = touchStartY - touchEndY;
    if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > swipeThreshold) {
        handleUserInteraction();
        if (diffX > 0) navigate(1);
        else navigate(-1);
    }
}

// ---------------------
// Initialize reflections
// ---------------------
items.forEach((item) => {
    const img = item.querySelector('img');
    const reflection = item.querySelector('.reflection');

    img.onload = function() {
        reflection.style.backgroundImage = `url(${this.src})`;
        reflection.style.backgroundSize = 'cover';
        reflection.style.backgroundPosition = 'center';
    };
});

// ---------------------
// Autoplay
// ---------------------
function startAutoplay() {
    if (autoplayInterval) clearInterval(autoplayInterval);
    autoplayInterval = setInterval(() => {
        currentIndex = (currentIndex + 1) % items.length;
        updateCoverflow();
    }, 4000);
    isPlaying = true;
    if(playIcon) playIcon.style.display = 'none';
    if(pauseIcon) pauseIcon.style.display = 'block';
}

function stopAutoplay() {
    if (autoplayInterval) clearInterval(autoplayInterval);
    autoplayInterval = null;
    isPlaying = false;
    if(playIcon) playIcon.style.display = 'block';
    if(pauseIcon) pauseIcon.style.display = 'none';
}

function toggleAutoplay() {
    if (isPlaying) stopAutoplay();
    else startAutoplay();
}

function handleUserInteraction() {
    stopAutoplay();
}

items.forEach((item) => item.addEventListener('click', handleUserInteraction));
document.querySelector('.nav-button.prev').addEventListener('click', () => { handleUserInteraction(); navigate(-1); });
document.querySelector('.nav-button.next').addEventListener('click', () => { handleUserInteraction(); navigate(1); });
dots.forEach((dot) => dot.addEventListener('click', handleUserInteraction));

// ---------------------
// Transition end pour stabiliser l'animation
// ---------------------
items.forEach(item => {
    item.addEventListener('transitionend', () => {
        isAnimating = false;
    });
});

// ---------------------
// Initialisation finale
// ---------------------
window.addEventListener('load', () => {
    updateCoverflow();
    startAutoplay();
});
