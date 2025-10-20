 
 
<style>
 
.mySlides {
  display: none;
  background-color: #000; /* fond noir */
  position: relative;
}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
  background-color: #000; /* fond noir global */
}
html, body {
  max-width: 100%;
  overflow-x: hidden;
}

/* Images */
.slideshow-container img {
  width: 100%;
  height: 400px;
  object-fit: cover;
  border-radius: 8px;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  background-color: rgba(0,0,0,0.8);
}
.next {right: 0; border-radius: 3px 0 0 3px;}
.prev:hover, .next:hover {background-color: rgba(0,0,220,0.2);}

/* Caption text */
.text {
  color: #fff; /* texte blanc bien visible */
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text */
.numbertext {
  color: #fff;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
.text{
    font-size: 2em;
    text-shadow: 1px 1px 4px black;
}

/* Dots */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;

  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.active, .dot:hover {background-color: #717171;}

/* Animation */
.fade {animation-name: fade; animation-duration: 1.5s;}
@keyframes fade {from {opacity: .4} to {opacity: 1}}
</style>
</head>
<body>

<div class="slideshow-container">
  <?php 
  $i = 1;
  $total = count($images);
  foreach ($images as $src => $caption): ?>
    <div class="mySlides fade">
      <div class="numbertext"><?= $i ?> / <?= $total ?></div>
      <img src="<?= $src ?>" alt="">
      <div class="text"><?= $caption ?></div>
    </div>
  <?php $i++; endforeach; ?>

  <a class="prev" onclick="plusSlides(-1)">⟵</a>
  <a class="next" onclick="plusSlides(1)">⟶</a>
</div>

<br>

<div style="text-align:center">
  <?php for ($j=1; $j<=$total; $j++): ?>
    <span class="dot" onclick="currentSlide(<?= $j ?>)"></span>
  <?php endfor; ?>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) { showSlides(slideIndex += n); }
function currentSlide(n) { showSlides(slideIndex = n); }

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {slides[i].style.display = "none";}
  for (i = 0; i < dots.length; i++) {dots[i].className = dots[i].className.replace(" active", "");}
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

 