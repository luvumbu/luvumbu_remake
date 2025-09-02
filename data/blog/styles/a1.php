<?php
$src_img_array = array();
$slidesData = [];
for ($i = 0; $i < count($id_projet_img_y); $i++) {
    if ($img_activate_y[$i] == "1" && $id_projet_img_y[$i] != "") {
        $title_projet_xx_ = ($title_projet_toggle_x[0] == "") 
            ? $title_projet_x[0] 
            : replace_element_2($title_projet_x[0]);

        $slidesData[] = [
            "url" => "../img_dw/{$id_projet_img_y[$i]}",
            "caption" => $title_projet_xx_
        ];
    }
}
?>

<style>
* { box-sizing: border-box; }
.mySlides { display: none; }
img { vertical-align: middle; object-fit: cover; height: 500px; width: 100%; }
.slideshow-container { max-width: 100%; position: relative; margin: auto; }
.prev, .next {
  cursor: pointer; position: absolute; top: 50%; width: auto; padding: 16px;
  margin-top: -22px; color: white; font-weight: bold; font-size: 18px;
  transition: 0.6s ease; border-radius: 0 3px 3px 0; user-select: none; z-index: 10;
}
.next { right: 0; border-radius: 3px 0 0 3; }
.prev:hover, .next:hover { background-color: rgba(0,0,0,0.8); }
.text {
  color: white; text-shadow: 1px 1px 3px black; font-size: 2em;
  padding: 8px 12px; position: absolute; bottom: 8px; width: 100%; text-align: center;
}
.numbertext { color: #f2f2f2; font-size: 12px; padding: 8px 12px; position: absolute; top: 0; }
.dot {
  cursor: pointer; height: 15px; width: 15px; margin: 0 2px;
  background-color: #bbb; border-radius: 50%; display: inline-block;
  transition: background-color 0.6s ease;
}
.active, .dot:hover { background-color: #717171; }
.fade { animation-name: fade; animation-duration: 1.5s; }
@keyframes fade { from { opacity: .4 } to { opacity: 1 } }
@media only screen and (max-width: 300px) { .prev, .next, .text { font-size: 11px; } }
</style>

<div class="slideshow-container" id="slideshow-container">
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>
</div>
<br>
<div style="text-align:center" id="dots-container"></div>

<script>
const slidesData = <?php echo json_encode($slidesData); ?>;
const slideshowContainer = document.getElementById("slideshow-container");
const dotsContainer = document.getElementById("dots-container");

// Génération automatique des slides et dots
slidesData.forEach((slide, index) => {
  const slideDiv = document.createElement("div");
  slideDiv.className = "mySlides fade";
  slideDiv.innerHTML = `
    <div class="numbertext">${index + 1} / ${slidesData.length}</div>
    <img src="${slide.url}">
    <div class="text">${slide.caption}</div>
  `;
  slideshowContainer.insertBefore(slideDiv, slideshowContainer.children[0]);

  const dotSpan = document.createElement("span");
  dotSpan.className = "dot";
  dotSpan.onclick = () => currentSlide(index);
  dotsContainer.appendChild(dotSpan);
});

// Initialisation
let slideIndex = 0;
showSlides();
let slideInterval = setInterval(() => plusSlides(1), 6000);

// Fonctions
function plusSlides(n) {
  slideIndex += n;
  showSlides();
  resetInterval();
}

function currentSlide(n) {
  slideIndex = n;
  showSlides();
  resetInterval();
}

function showSlides() {
  const slides = document.getElementsByClassName("mySlides");
  const dots = document.getElementsByClassName("dot");

  // Masquer toutes les slides et désactiver tous les dots
  for (let i = 0; i < slides.length; i++) slides[i].style.display = "none";
  for (let i = 0; i < dots.length; i++) dots[i].className = dots[i].className.replace(" active", "");

  // Gestion des limites
  if (slideIndex >= slides.length) slideIndex = 0;
  if (slideIndex < 0) slideIndex = slides.length - 1;

  // Affichage
  slides[slideIndex].style.display = "block";
  dots[slideIndex].className += " active";
}

function resetInterval() {
  clearInterval(slideInterval);
  slideInterval = setInterval(() => plusSlides(1), 6000);
}
</script>
