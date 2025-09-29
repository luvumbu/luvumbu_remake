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






 <style>
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 50px;
    border-bottom: 1px solid #ccc;
}

.navbar .logo {
    letter-spacing: 3px;
}

.navbar .menu {
    display: flex;
    gap: 30px;
    letter-spacing: 2px;
}

.navbar a {
    text-decoration: none;
    color: black;
    font-size: 14px;
}
 </style>







 