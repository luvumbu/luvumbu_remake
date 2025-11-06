<style>
    .blog_settings{
 
    }
    .animation{
      position: fixed;
      top: 100px;
      width: 100px;
      height: 100px;
    }
        .animation:hover{
   cursor: pointer;
    }
        .animation img{
   width: 100%;
      border-radius: 100%;

    }
 
</style>

<style>
  .blog_settings {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  background: rgba(10, 10, 10, 0.95);
  backdrop-filter: blur(12px);
  padding: 20px 0;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  gap: 15px;
  border-top: 2px solid rgba(255, 255, 255, 0.15);
  box-shadow: 0 -4px 15px rgba(0, 0, 0, 0.4);
  z-index: 99999;
  font-family: "Poppins", sans-serif;
}

/* --- Animation du logo GIF flottant --- */
.animation {
  position: fixed;
  top: -50px;
  right: 20px;
  width: 90px;
  height: 90px;
  border-radius: 50%;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(255, 0, 90, 0.4);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.animation:hover {
  cursor: pointer;
  transform: scale(1.1) rotate(5deg);
  box-shadow: 0 0 25px rgba(255, 0, 90, 0.7);
}

.animation img {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  object-fit: cover;
}

/* --- Style des select --- */
.blog_settings select {
  background: rgba(255, 255, 255, 0.1);
  border: 1px solid rgba(255, 255, 255, 0.25);
  border-radius: 8px;
  color: #fff;
  padding: 10px 15px;
  font-size: 15px;
  outline: none;
  transition: all 0.3s ease;
  width: 220px;
  backdrop-filter: blur(5px);
}

.blog_settings select:hover {
 
  border-color: #00bfff;
}

.blog_settings select:focus {
  border-color: #ff3366;
  box-shadow: 0 0 10px rgba(255, 51, 102, 0.5);
}

/* --- Option text --- */
.blog_settings option {
  color: #000;
  background: #fff;
}

/* --- Titre du blog --- */
#test {
  text-align: center;
  font-size: 2em;
  margin: 50px auto;
  color: #ff3366;
  font-family: "Audiowide", cursive;
  letter-spacing: 1px;
  text-shadow: 0 0 10px rgba(255, 51, 102, 0.6);
}

/* --- Scrollbar personnalisée --- */
::-webkit-scrollbar {
  width: 8px;
}
::-webkit-scrollbar-track {
  background: rgba(255, 255, 255, 0.1);
}
::-webkit-scrollbar-thumb {
  background: linear-gradient(180deg, #ff3366, #c91432);
  border-radius: 10px;
}
::-webkit-scrollbar-thumb:hover {
  background: linear-gradient(180deg, #ff6688, #ff3366);
}


#blog_settings{
  display: none;
}
</style>


<div class="animation" >
<img onclick="toggleBlogSettings()" src="https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExbW5sZWE3Y2k1MjMyN3gzaXRic3A1MmU1bzFvMmpqNGsxbXJlaWl1MSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/IffLnwlgZNgAQlVFT1/giphy.gif" alt="" srcset="">

</div>

<div id="blog_settings">


<?php
function lireFichiersDossier($dossier) {
    $fichiers = [];

    // Vérifie si le dossier existe
    if (is_dir($dossier)) {
        // Ouvre le dossier
        if ($handle = opendir($dossier)) {
            // Parcourt le dossier
            while (($entry = readdir($handle)) !== false) {
                // Ignore les dossiers spéciaux "." et ".."
                if ($entry != "." && $entry != "..") {
                    $fichiers[] = $entry;
                }
            }
            // Ferme le dossier
            closedir($handle);
        }
    } else {
        echo "Le dossier n'existe pas.";
    }

    return $fichiers;
}

// Exemple d'utilisation
$header_css = lireFichiersDossier('data/blog/header/css');
$section_css = lireFichiersDossier('data/blog/section/css');
$section_child_css = lireFichiersDossier('data/blog/section_child/css');
$footer_css = lireFichiersDossier('data/blog/footer/css'); 
$section_src = lireFichiersDossier('data/blog/section/src');
 ?>
 
  <select onchange="header_css_pages_projet(this); window.location.hash='header_css_pages_projet';">

<?php 
for ($i = 0; $i < count($header_css); $i++) { 
    echo '<option value="' . htmlspecialchars($header_css[$i]) . '">--' . htmlspecialchars($header_css[$i]) . '--</option>';
}
?>
</select>

 


  <select onchange="section_css_pages_projet(this); window.location.hash='section_css_pages_projet';">

<?php 
for ($i = 0; $i < count($section_css); $i++) { 
    echo '<option value="' . htmlspecialchars($section_css[$i]) . '">--' . htmlspecialchars($section_css[$i]) . '--</option>';
} 
?>
</select>

 
  <select onchange="section_src_pages_projet(this); window.location.hash='section_src_pages_projet';">

<?php 
for ($i = 0; $i < count($section_src); $i++) { 
    echo '<option value="' . htmlspecialchars($section_src[$i]) . '">--' . htmlspecialchars($section_src[$i]) . '--</option>';
} 
?>
</select>


 
  <select onchange="section_child_css_pages_projet(this); window.location.hash='section_child_css_pages_projet';">

<?php 
for ($i = 0; $i < count($section_child_css); $i++) { 
    echo '<option value="' . htmlspecialchars($section_child_css[$i]) . '">--' . htmlspecialchars($section_child_css[$i]) . '--</option>';
}
?>
</select>

<?php  
 
 
 

 $img_projet_src1_src= "../img_dw/".$img_projet_src1_ ;

?>

<script>
 /*

*/
  function header_css_pages_projet(_this){
         const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("header_css_pages_projet").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "../data/blog/header/css/"+_this.value);
  xhttp.send();
  }


  


    function header_src_pages_projet(_this){
         const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("header_src_pages_projet").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "../data/blog/header/src/"+_this.value);
  xhttp.send();
  }



    function section_css_pages_projet(_this){

     
         const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("section_css_pages_projet").innerHTML =
    this.responseText;

 


  }
  xhttp.open("GET", "../data/blog/section/css/"+_this.value);
  xhttp.send();
  }

  
    function section_src_pages_projet(_this){

     
         const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("section_src_pages_projet").innerHTML =
    this.responseText;

 


  }
  xhttp.open("GET", "../data/blog/section/src/"+_this.value);
  xhttp.send();
  }





      function section_child_css_pages_projet(_this){

       
 
     
         const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("section_child_css_pages_projet").innerHTML =
    this.responseText;

 


  }
  xhttp.open("GET", "../data/blog/section_child/css/"+_this.value);
  xhttp.send();
 
  }


/* 

  header_css_pages_projet
section_css_pages_projet
section_child_css_pages_projet
*/



</script>
 
</select>

 

</div>

<script>
function toggleBlogSettings() {
 
  const settings = document.getElementById("blog_settings").style.display;

  if(settings=="block"){
  document.getElementById("blog_settings").style.display="none";

  }
  else{
  document.getElementById("blog_settings").style.display="block";

  }
 
}
</script>
