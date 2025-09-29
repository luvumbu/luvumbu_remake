<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrousel miroir</title>
  <style>
    .my-carousel {
      position: relative;
      width: 40%;
      max-width: 600px;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
      margin: 50px auto;
      background: #000;
    }

    .my-carousel-track {
      display: flex;
      transition: transform 0.6s ease-in-out;
    }

    .my-carousel img {
      width: 100%;
      height: auto;
      flex: 0 0 100%;
      object-fit: contain;
      background: #000;
      -webkit-box-reflect: below 5px linear-gradient(transparent, rgba(0,0,0,0.4));
    }

    .my-carousel button {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(0,0,0,0.5);
      border: none;
      color: white;
      font-size: 1.5rem;
      padding: 6px;
      cursor: pointer;
      border-radius: 50%;
      z-index: 10;
    }

    .my-carousel button:hover {
      background: rgba(0,0,0,0.8);
    }

    .my-prev { left: 5px; }
    .my-next { right: 5px; }
  </style>
</head>
<body>

  <div class="my-carousel">
    <div class="my-carousel-track">
      <img src="https://i.pinimg.com/736x/98/ef/02/98ef026c23982445a77f245939762fd9.jpg" alt="Image 1">
      <img src="https://i.pinimg.com/736x/45/47/48/454748751c22a206c30b9fd8ca784632.jpg" alt="Image 2">
      <img src="https://i.pinimg.com/1200x/3c/8d/f8/3c8df805e864f9255eb61e8baf607206.jpg" alt="Image 3">
      <img src="https://i.pinimg.com/736x/98/ef/02/98ef026c23982445a77f245939762fd9.jpg" alt="Clone">
    </div>
    <button class="my-prev">&#10094;</button>
    <button class="my-next">&#10095;</button>
  </div>

  <script>
    function initCarousel(carouselSelector) {
      const carousel = document.querySelector(carouselSelector);
      const track = carousel.querySelector('.my-carousel-track');
      const slides = Array.from(track.children);
      const nextButton = carousel.querySelector('.my-next');
      const prevButton = carousel.querySelector('.my-prev');

      let currentIndex = 0;
      let isTransitioning = false;

      function updateCarousel() {
        track.style.transition = "transform 0.6s ease-in-out";
        track.style.transform = `translateX(-${currentIndex * 100}%)`;
      }

      nextButton.addEventListener('click', () => {
        if (isTransitioning) return;
        isTransitioning = true;
        currentIndex++;
        updateCarousel();
      });

      prevButton.addEventListener('click', () => {
        if (isTransitioning) return;
        isTransitioning = true;
        currentIndex--;
        updateCarousel();
      });

      track.addEventListener('transitionend', () => {
        if (currentIndex === slides.length - 1) {
          track.style.transition = "none";
          currentIndex = 0;
          track.style.transform = `translateX(0)`;
        }
        if (currentIndex < 0) {
          track.style.transition = "none";
          currentIndex = slides.length - 2;
          track.style.transform = `translateX(-${currentIndex * 100}%)`;
        }
        setTimeout(() => isTransitioning = false, 50);
      });

      setInterval(() => {
        if (!isTransitioning) {
          currentIndex++;
          updateCarousel();
        }
      }, 4000);
    }

    initCarousel('.my-carousel');
  </script>

</body>
</html>
