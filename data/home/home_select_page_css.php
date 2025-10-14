
<div class="center">
        <div>
            css
        </div>
 <?php


?>

</div>
            <div class="style_container_css">

                <div class="menu_styles_css">
                    <select title="header_select_css" id="header_select_css" onchange="selection_style_page_css(this)">
                        <option value="">HEADER —                   </option>


                        <?php
$dir = 'data/blog/header/css';

if (is_dir($dir)) {
    $files = scandir($dir);
    // Affiche tous les fichiers/dossiers sauf '.' et '..'
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            echo '<option value="'.$file.'">'.$file.'</option><br>';
        }
    }
} else {
    echo "Le dossier n'existe pas.";
}
?>
                    </select>
<?php 
if($header_2_pages_projet_check_box!=""){
?>
                  <input checked type="checkbox" id="header_select_css_page_checkbox" onclick="section_checkbox(this)" >

<?php 
}
else{
    ?>
                  <input  type="checkbox" id="header_select_css_page_checkbox" onclick="section_checkbox(this)" >

    <?php 
}

?>
                    <select title="section_select_css" id="section_select_css" onchange="selection_style_page_css(this)">
                        <option value="">SECTION —            </option>
                        <?php
$dir = 'data/blog/section/css';

if (is_dir($dir)) {
    $files = scandir($dir);
    // Affiche tous les fichiers/dossiers sauf '.' et '..'
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            echo '<option value="'.$file.'">'.$file.'</option><br>';
        }
    }
} else {
    echo "Le dossier n'existe pas.";
}
?>
                    </select>



                  <?php 
if($section_2_pages_projet_check_box!=""){
?>
                  <input checked type="checkbox" id="section_select_css_page_checkbox" onclick="section_checkbox(this)" >

<?php 
}
else{
    ?>
                  <input  type="checkbox" id="section_select_css_page_checkbox" onclick="section_checkbox(this)" >

    <?php 
}

?>


                    <select title="footer_select_css" id="footer_select_css" onchange="selection_style_page_css(this)">
                        <option value="">FOOTER — 

                        </option>
                        <?php
$dir = 'data/blog/footer/css';
 
 
if (is_dir($dir)) {
    $files = scandir($dir);
    // Affiche tous les fichiers/dossiers sauf '.' et '..'
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            echo '<option value="'.$file.'">'.$file.'</option><br>';
        }
    }
} else {
    echo "Le dossier n'existe pas.";
}
?>
                    </select>



                                    <?php 
if($footer_2_pages_projet_check_box!=""){
?>
                  <input checked type="checkbox" id="footer_select_css_page_checkbox" onclick="section_checkbox(this)" >

<?php 
}
else{
    ?>
                  <input  type="checkbox" id="footer_select_css_page_checkbox" onclick="section_checkbox(this)" >

    <?php 
}

?>
                </div>

                <header id="header_select_css_page" class="page_header">
              
                    <?php

?>
                <?= $header_2_pages_projet ?></header>

                <section id="section_select_css_page" class="page_section"><?= $section_2_pages_projet ?></section>
              
                <footer id="footer_select_css_page" class="page_footer"><?= $footer_2_pages_projet ?></footer>

            </div>










<style>
.style_container_css {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 12px;
    padding: 20px;
    background: #1a1a1a;
    border-radius: 12px;
    width: 80%;
    margin: 30px auto;
    box-shadow: 0 0 12px rgba(0, 0, 0, 0.5);
}

/* --- Menus --- */
.style_container_css .menu_styles_css {
    display: flex;
    gap: 10px;
}

.style_container_css select {
    appearance: none;
    background-color: #222;
    color: #fff;
    border: none;
    padding: 10px 40px 10px 16px;
    border-radius: 8px;
    font-size: 15px;
    cursor: pointer;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.3);
    text-align: center;
}

/* --- Zones principales (avec couleurs de base différentes) --- */
.style_container_css .page_header {
    width: 90%;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    font-weight: bold;
    background: #003366;
    /* bleu profond */
    color: #fff;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.4);
    transition: all 0.3s ease;
}

.style_container_css .page_section {
    width: 90%;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    font-weight: bold;
    background: #264d00;
    /* vert foncé */
    color: #fff;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.4);
    transition: all 0.3s ease;
}

.style_container_css .page_footer {
    width: 90%;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    font-weight: bold;
    background: #660000;
    /* rouge foncé */
    color: #fff;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.4);
    transition: all 0.3s ease;
}

/* === Styles appliqués via menus === */
.style_container_css .style1 {
    background: #1b1b1b;
    color: #00bfff;
}
#header_select_css{
  background-color: #003366 ;
}
#section_select_css{
  background-color: #264d00 ;
}
#footer_select_css{
  background-color: #660000 ;
}
.style_container_css .style2 {
    background: #f5f5f5;
    color: #222;
}

.style_container_css .style3 {
    background: linear-gradient(135deg, #ff6b6b, #ffcc00);
    color: #222;
}
</style>

<script>
function selection_style_page_css(_this) {
    document.getElementById(_this.title + '_page').innerHTML = _this.value;
    const myTimeout = setTimeout(x, 250);
    function x() {

       var ok = new Information("req_sql/updat_selection_style_page.php"); // création de la classe 
       var header_2_pages_projet = document.getElementById("header_select_css_page").innerHTML ; 
       var section_2_pages_projet = document.getElementById("section_select_css_page").innerHTML ; 
       var footer_2_pages_projet = document.getElementById("footer_select_css_page").innerHTML ; 
     
        ok.add("header_2_pages_projet", header_2_pages_projet); // ajout de l'information pour lenvoi 
        ok.add("section_2_pages_projet", section_2_pages_projet); // ajout de l'information pour lenvoi 
        ok.add("footer_2_pages_projet", footer_2_pages_projet); // ajout de l'information pour lenvoi 
       
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 



    }
}
</script>