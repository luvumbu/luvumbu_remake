 
<div class="container"> 
  <div id="myCarousel" class="my-carousel">
    <div class="carousel-inner">

 
 <?php 


for ($i=0; $i <count($id_projet_img) ; $i++) { 





$img_user_b_  =  $id_projet_img[$i] ;



                if ($img_user_b_ != "") {
                    if (file_exists('img_dw/'.$img_user_b_)) {
                        $img_user_b_ = '../img_dw/' . $img_user_b_;
                ?>

                      <div class="carousel-item active">
                            <img src="<?= $img_user_b_ ?>" alt="" srcset="">

                        </div>

                <?php
                    }
                 
                }
        





 
}

?>
    </div>
    <button class="carousel-control prev">&lt;</button>
    <button class="carousel-control next">&gt;</button>
    <div class="carousel-indicators">
      <span class="active" data-index="0"></span>
      <span data-index="1"></span>
      <span data-index="2"></span>
    </div>
  </div>
</div>
<style>
  /* Carousel container */
.my-carousel {
  position: relative;      /* nécessaire pour positionner les boutons */
  max-width: 100%;        /* largeur max du carousel */
  height: 400px;           /* hauteur fixe */
  margin: 0 auto;
  overflow: hidden;        /* masque le débordement des slides */
}

/* Slides */
.carousel-inner {
  display: flex;
  transition: transform 0.5s ease-in-out;
  height: 100%;            /* prend toute la hauteur du container */
}

.carousel-item {
  min-width: 100%;
  height: 100%;  
  opacity: 0.6;
  
  /* même hauteur que le container */
}

.carousel-item img {
  width: 100%;
  height: 100%;            /* remplit le container */
  object-fit: cover;       /* garde le ratio sans déformation */
  display: block;
}

/* Controls */
.carousel-control {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(0,0,0,0.5);
  color: white;
  border: none;
  padding: 10px 15px;
  cursor: pointer;
  z-index: 2;
  font-size: 20px;
  line-height: 1;
}

.carousel-control.prev { left: 10px; }
.carousel-control.next { right: 10px; }

/* Indicators */
.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  gap: 5px;
  z-index: 2;
}

.carousel-indicators span {
  width: 12px;
  height: 12px;
  background: rgba(255,255,255,0.5);
  border-radius: 50%;
  cursor: pointer;
  display: inline-block;
}

.carousel-indicators .active {
  background: white;
}

/* Optionnel : style du titre */
.container h2 {
  text-align: center;
  margin-bottom: 20px;
}

</style>

<script>
(function(){
  const carousel = document.getElementById('myCarousel');
  const inner = carousel.querySelector('.carousel-inner');
  const items = carousel.querySelectorAll('.carousel-item');
  const prevBtn = carousel.querySelector('.carousel-control.prev');
  const nextBtn = carousel.querySelector('.carousel-control.next');
  const indicators = carousel.querySelectorAll('.carousel-indicators span');
  let index = 0;
  const total = items.length;

  function showSlide(i){
    index = (i + total) % total;
    inner.style.transform = `translateX(-${index * 100}%)`;
    indicators.forEach(ind => ind.classList.remove('active'));
    indicators[index].classList.add('active');
  }

  prevBtn.addEventListener('click', () => showSlide(index - 1));
  nextBtn.addEventListener('click', () => showSlide(index + 1));
  indicators.forEach(ind => {
    ind.addEventListener('click', () => showSlide(parseInt(ind.dataset.index)));
  });

  // Auto slide
  setInterval(() => showSlide(index + 1), 3000);

})();
</script>
