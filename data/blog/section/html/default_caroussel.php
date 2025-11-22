<!-- ===================== HEADER ===================== -->
<section class="header" id="header">
    <a href="#home" class="logo-container">
        <div class="logo"></div>
    </a>
    <div class="menu-toggle" id="menuToggle"></div>
</section>

<!-- ===================== SECTION HOME ===================== -->
<section id="home" class="section">
  <div class="carousel-wrapper">
    <div class="carousel" id="carousel">

      <?php
      // ======== Boucle d'affichage des images ========
      for ($i = 0; $i < count($id_projet_img); $i++) {
        $img = $id_projet_img[$i];
        if ($img && file_exists('img_dw/' . $img)) {
          $src = '../img_dw/' . $img;
          echo '
            <div class="carousel-item">
              <img src="' . $src . '" alt="image ' . $i . '"> 
            </div>';
        }
      }
      ?>

    </div>

    <!-- Boutons navigation -->
    <button class="carousel-btn prev" onclick="moveSlide(-1)">&#10094;</button>
    <button class="carousel-btn next" onclick="moveSlide(1)">&#10095;</button>

    <!-- Points de navigation -->
    <div class="carousel-dots" id="carouselDots"></div>
  </div>
</section>
 
<script>
/* ===================== CAROUSEL 4 IMAGES — JS ===================== */

// Sélections
const carousel = document.querySelector(".carousel");
const slides = document.querySelectorAll(".carousel-item");
const dotsContainer = document.getElementById("carouselDots");
const totalSlides = slides.length;
let slideIndex = 0;
let autoPlay = true;
let interval;

// Création dynamique des points
slides.forEach((_, i) => {
  const dot = document.createElement("span");
  dot.addEventListener("click", () => showSlide(i));
  dotsContainer.appendChild(dot);
});

const dots = dotsContainer.querySelectorAll("span");

// Fonction d'affichage
function showSlide(index) {
  // Si on dépasse la fin → retour instantané
  if (index >= totalSlides) slideIndex = 0;
  else if (index < 0) slideIndex = totalSlides - 1;
  else slideIndex = index;

  // Translation du carrousel (25% = 4 images visibles)
  carousel.style.transition = "transform 0.6s ease";
  carousel.style.transform = `translateX(-${slideIndex * 25}%)`;

  // Actualisation des points
  dots.forEach(dot => dot.classList.remove("active"));
  dots[slideIndex % dots.length].classList.add("active");
}

// Fonctions de navigation
function moveSlide(n) {
  showSlide(slideIndex + n);
}

// Boucle automatique
function startAutoPlay() {
  interval = setInterval(() => {
    slideIndex++;
    if (slideIndex >= totalSlides) {
      // Retour instantané (sans effet de glissement)
      carousel.style.transition = "none";
      carousel.style.transform = "translateX(0)";
      slideIndex = 0;
      dots.forEach(dot => dot.classList.remove("active"));
      dots[0].classList.add("active");
    } else {
      carousel.style.transition = "transform 0.6s ease";
      carousel.style.transform = `translateX(-${slideIndex * 25}%)`;
      dots.forEach(dot => dot.classList.remove("active"));
      dots[slideIndex].classList.add("active");
    }
  }, 3000); // 3 secondes entre les slides
}

function stopAutoPlay() {
  clearInterval(interval);
}

// Contrôle des boutons
document.querySelector(".carousel-btn.prev").addEventListener("click", () => {
  stopAutoPlay();
  moveSlide(-1);
  if (autoPlay) startAutoPlay();
});

document.querySelector(".carousel-btn.next").addEventListener("click", () => {
  stopAutoPlay();
  moveSlide(1);
  if (autoPlay) startAutoPlay();
});

// Initialisation
showSlide(0);
if (autoPlay) startAutoPlay();

</script>
