 <?php
  require_once $home_header_css_1;
  require_once $home_js;

 
 
  ?>
 <nav>
   <ul class="menu">
     <li class="cursor_pointer" onclick="add_projet(this)" id="add_projet_">➕ Ajouter un projet</li>
     <li class="cursor_pointer">
       <a href="Class/session_destroy.php">
         Déconnexion
       </a>
     </li>
   </ul>
 </nav>
 <section>
 


   <?php
    if ($_SESSION["index"][4] != "") {
       require_once "home_setting_files.php" ; 
      require_once   $home_insert;
    } else {
      require_once $home_select_all;
    }
 ?>
 </section>

