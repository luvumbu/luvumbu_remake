<style>
 .animation{
    position: fixed;
    right: 0;
    z-index: 1;
    width: 100px;
    height: 100px;
    top: 200px;
 }
 .animation img{
    width: 100%;
    border-radius: 100%;
 }
 #blog_settings{
    position: fixed;
   bottom: 0 ;
    z-index: 1;
    background-color: rgba(24, 15, 58, 0.3);

    width: 100%;
    text-align: center;
    }
    #blog_settings select{
        width: 20%;
        text-align: center;
    background-color: rgba(24, 15, 58, 0.3);
    color: white;
    padding: 10px;
    

    }
</style>



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

    <select onchange="function_section_general(this);" id="header_css_pages_projet_id"
        title="header_css_pages_projet___header_css_">
  <option value="<?=  $header_css_pages_projet[0] ?>" selected ><?= $header_css_pages_projet[0] ?></option>
        <?php 

 
for ($i = 0; $i < count($header_css); $i++) { 
    echo '<option value="' . htmlspecialchars($header_css[$i]) . '">--' . htmlspecialchars($header_css[$i]) . '--</option>';
?>


<?php

}
 


 
?>
    </select>




    <select onchange="function_section_general(this);" id="section_css_pages_projet_id"
        title="section_css_pages_projet___section_css_">





   




  <option value="<?=  $section_css_pages_projet[0] ?>" selected ><?= $section_css_pages_projet[0] ?></option>

        <?php 
for ($i = 0; $i < count($section_css); $i++) { 
    echo '<option value="' . htmlspecialchars($section_css[$i]) . '">--' . htmlspecialchars($section_css[$i]) . '--</option>';
} 
?>
    </select>


    <select onchange="function_section_general(this); " id="section_src_pages_projet_id"
        title="section_src_pages_projet___section_src_">




    
       
  <option value="<?=  $section_src_pages_projet[0] ?>" selected ><?= $section_src_pages_projet[0] ?></option>
       


        <?php 
for ($i = 0; $i < count($section_src); $i++) { 
    echo '<option value="' . htmlspecialchars($section_src[$i]) . '">--' . htmlspecialchars($section_src[$i]) . '--</option>';
} 
?>
    </select>



    <select onchange="function_section_general(this); " id="section_child_css_pages_projet_id"
        title="section_child_css_pages_projet___section-child_css_">


  <option value="<?=  $section_child_css_pages_projet[0] ?>" selected ><?= $section_child_css_pages_projet[0] ?></option>
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

    var path_blog = "../data/blog";

    function function_section_general(_this) {

        function_general_var = afficherValeursFormattees2(_this.title, "__");

        let src_1 = function_general_var[1].replace("_", "/");
        let src_2 = src_1.replace("_", "/");
        let src_3 = src_2.replace("_", "/");
        let src_4 = src_3.replace("-", "_");

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            document.getElementById(function_general_var[0]).innerHTML =
                this.responseText;
            window.location.hash = function_general_var[0];


            var header_css_pages_projet_id = document.getElementById("header_css_pages_projet_id").value;
            var section_css_pages_projet_id = document.getElementById("section_css_pages_projet_id").value;
            var section_src_pages_projet_id = document.getElementById("section_src_pages_projet_id").value;
            var section_child_css_pages_projet_id = document.getElementById("section_child_css_pages_projet_id").value;

 
 
             
 

            var ok = new Information("../req_sql/update_selection_style.php"); // création de la classe 
            ok.add("header_css_pages_projet", header_css_pages_projet_id); // ajout de l'information pour lenvoi 
            ok.add("section_css_pages_projet", section_css_pages_projet_id); // ajout de l'information pour lenvoi 
            ok.add("section_src_pages_projet", section_src_pages_projet_id); // ajout de l'information pour lenvoi 
            ok.add("section_child_css_pages_projet", section_child_css_pages_projet_id); // ajout de l'information pour lenvoi 
 
            ok.add("id_sha1_projet", <?= $url_?>); // ajout de l'information pour lenvoi 

     
            console.log(ok.info()); // demande l'information dans le tableau
            ok.push(); // envoie l'information au code pkp 






        }
        xhttp.open("GET", path_blog + src_4 + _this.value);
        xhttp.send();
    }


 
    </script>

    </select>



</div>

<script>

</script>