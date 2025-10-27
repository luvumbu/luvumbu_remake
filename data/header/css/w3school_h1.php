  <nav class="navbar">
     <div class="logo"><?= replace_element_2(AsciiConverter::asciiToString($title_projet[0])) ?></div>
     <div class="menu">
         <a href="#Apropos">About</a>
         <?php 

      for ($i = 0; $i < count($title_projet_a); $i++) {
      ?>
       
         <a href="#<?= $id_sha1_projet_a[$i] ?>" >
           <?= replace_element_2(AsciiConverter::asciiToString($title_projet_a[$i])) ?>
         </a>
    
     <?php
      }
?>

     </div>
 </nav>


