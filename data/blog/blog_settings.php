<style>
    .blog_settings{
 position:fixed;
 bottom: 0;
 background-color: black;
 padding: 20px;
 text-align: center;
 width: 100%;
 color: white;
 z-index: 99999999999999999;
 margin-top: 250px;
    }
</style>

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
<label for="pet-select">Choose a pet:</label>
<select name="pets" onchange="header_css_pages_projet(this)">
<?php 
for ($i = 0; $i < count($header_css); $i++) { 
    echo '<option value="' . htmlspecialchars($header_css[$i]) . '">--' . htmlspecialchars($header_css[$i]) . '--</option>';
}
?>
</select>
<select name="pe0ts" onchange="section_css_pages_projet(this)">
<?php 
for ($i = 0; $i < count($section_css); $i++) { 
    echo '<option value="' . htmlspecialchars($section_css[$i]) . '">--' . htmlspecialchars($section_css[$i]) . '--</option>';
} 
?>
</select>

<select name="pe0cscsts" onchange="section_src_pages_projet(this)">
<?php 
for ($i = 0; $i < count($section_src); $i++) { 
    echo '<option value="' . htmlspecialchars($section_src[$i]) . '">--' . htmlspecialchars($section_src[$i]) . '--</option>';
} 
?>
</select>



<select  onchange="section_child_css_pages_projet(this)">
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

<h1>MON BLOG</h1>