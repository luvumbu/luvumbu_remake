 <?php
  require_once $home_header_css_1;
  require_once $home_js;
  $index_3 = $_SESSION["index"][3];

  if (isset($_SESSION["add_projet"])) {
    //var_dump($_SESSION["add_projet"]);
    unset($_SESSION["add_projet"]);
    header('Location:qr_code_1/index.php ');
    exit();
    
  }
  ?>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

 <nav>
     <ul class="menu">
         <li class="cursor_pointer" onclick="add_projet(this)" id="add_projet_">➕ Ajouter un projet</li>
         <li class="cursor_pointer">

             <a href="Class/session_destroy.php">
                 <img width="20" height="20" src="https://img.icons8.com/office/20/shutdown--v1.png"
                     alt="shutdown--v1" /> Déconnexion
             </a>
         </li>
         <li title="<?= $index_3 ?>" class="cursor_pointer" onclick="add_id_sha1_user(this)">
             <img width="30" height="30" src="https://img.icons8.com/pastel-glyph/30/info--v3.png" alt="info--v3" />
             ajouter informations

         </li>
         <li>
             <img width="20" height="20" src="https://img.icons8.com/pulsar-gradient/20/women-shoe-side-view.png"
                 alt="women-shoe-side-view" /> <a href="add_style.php" class="btn-style">Ajouter un style</a>
         </li>
         <li>
             <a href="mail_programe.php">
                 <img width="50" height="50" src="https://img.icons8.com/ios/50/mail.png" alt="mail" />

             </a>
         </li>
     </ul>
 </nav>


 <?php
  $lorem = "

 Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores ducimus eius eligendi! Sint ex possimus earum veritatis sapiente. Dolor beatae quo minus earum nisi, aspernatur dignissimos eligendi optio mollitia rem.
";
  require_once 'data/home/home_all_style.php';



  require_once 'data/home/add_profil.php';


  require_once 'data/home/update_profil.php';



  if (isset($_SESSION["index"][4])) {
    if ($_SESSION["index"][4] != "") {
      //require_once "home_setting_files.php" ; 

      require_once   $home_insert;
    } else {
      require_once $home_select_all;
    }
  } else {
    require_once $home_select_all;
  }






  $index_3 =  $_SESSION["index"][3];







  $nom_table = $dbname; // Nom de la table cible

  // Création d'une instance de la classe `DatabaseHandler`

  $databaseHandler = new DatabaseHandler($dbname, $username);


  // Requête SQL pour récupérer toutes les données de la table
  $req_sql = "SELECT * FROM `$nom_table` WHERE `id_sha1_user` = $index_3 ";

  // Récupération des informations des tables enfant liées
  $databaseHandler->getListOfTables_Child($nom_table);
  // La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

  // Récupération des données de la table via une méthode spécialisée
  $databaseHandler->getDataFromTable2X($req_sql);
  // La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

  // Génération de variables dynamiques à partir des données récupérées
  $databaseHandler->get_dynamicVariables();
  // La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.

  // Exemple : affichage d'une variable dynamique spécifique


  $description_user_0 =   $dynamicVariables['description_user'][0]; // description_user
  $title_user_0 =   $dynamicVariables['title_user'][0]; // nom








  ?>



 <script>
function terminer(_this) {

    _this.display = "none";


    var ok = new Information("data/all/req_sql/terminer.php"); // création de la classe 
    ok.add("login", "root"); // ajout de l'information pour lenvoi 

    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 

    const myTimeout = setTimeout(xx, 250);

    function xx() {
        location.reload();
    }
}
 </script>

 <style>
.center {
    text-align: center;
    padding: 15px;
    margin-top: 15px;
    margin-bottom: 15px;

}

.display_flex img:hover {
    cursor: pointer;
}
 </style>

 <script>
function section_checkbox(_this) {

    var header_1_pages_projet_check_box = document.getElementById("header_select_html_page_checkbox").checked;
    var section_1_pages_projet_check_box = document.getElementById("section_select_html_page_checkbox").checked;
    var footer_1_pages_projet_check_box = document.getElementById("footer_select_css_page_checkbox").checked;





    var header_2_pages_projet_check_box = document.getElementById("header_select_css_page_checkbox").checked;
    var section_2_pages_projet_check_box = document.getElementById("section_select_css_page_checkbox").checked;
    var footer_2_pages_projet_check_box = document.getElementById("footer_select_css_page_checkbox").checked;




    var header_3_pages_projet_check_box = document.getElementById("header_select_js_page_checkbox").checked;
    var section_3_pages_projet_check_box = document.getElementById("section_select_js_page_checkbox").checked;
    var footer_3_pages_projet_check_box = document.getElementById("footer_select_js_page_checkbox").checked;












    var ok = new Information("req_sql/update_section_checkbox.php"); // création de la classe 
 

if(header_1_pages_projet_check_box){
    header_1_pages_projet_check_box = "1";
}
else{
    header_1_pages_projet_check_box = "";

}

if(section_1_pages_projet_check_box){
    section_1_pages_projet_check_box = "1";
}
else{
    section_1_pages_projet_check_box = "";

}

if(footer_1_pages_projet_check_box){
    footer_1_pages_projet_check_box = "1";
}
else{
    footer_1_pages_projet_check_box = "";
}





if(header_2_pages_projet_check_box){
    header_2_pages_projet_check_box = "1";
}
else{
    header_2_pages_projet_check_box = "";

}

if(section_2_pages_projet_check_box){
    section_2_pages_projet_check_box = "1";
}
else{
    section_2_pages_projet_check_box = "";

}

if(footer_2_pages_projet_check_box){
    footer_2_pages_projet_check_box = "1";
}
else{
    footer_2_pages_projet_check_box = "";
}




if(header_3_pages_projet_check_box){
    header_3_pages_projet_check_box = "1";
}
else{
    header_3_pages_projet_check_box = "";

}

if(section_3_pages_projet_check_box){
    section_3_pages_projet_check_box = "1";
}
else{
    section_3_pages_projet_check_box = "";

}

if(footer_3_pages_projet_check_box){
    footer_3_pages_projet_check_box = "1";
}
else{
    footer_3_pages_projet_check_box = "";
}



 
 
    ok.add("header_1_pages_projet_check_box", header_1_pages_projet_check_box); // ajout de l'information pour lenvoi 
    ok.add("section_1_pages_projet_check_box", section_1_pages_projet_check_box); // ajout de l'information pour lenvoi 
    ok.add("footer_1_pages_projet_check_box", footer_1_pages_projet_check_box); // ajout de l'information pour lenvoi 
    
    ok.add("header_2_pages_projet_check_box", header_2_pages_projet_check_box); // ajout de l'information pour lenvoi 
    ok.add("section_2_pages_projet_check_box", section_2_pages_projet_check_box); // ajout de l'information pour lenvoi 
    ok.add("footer_2_pages_projet_check_box", footer_2_pages_projet_check_box); // ajout de l'information pour lenvoi 
    
    ok.add("header_3_pages_projet_check_box", header_3_pages_projet_check_box); // ajout de l'information pour lenvoi 
    ok.add("section_3_pages_projet_check_box", section_3_pages_projet_check_box); // ajout de l'information pour lenvoi 
    ok.add("footer_3_pages_projet_check_box", footer_3_pages_projet_check_box); // ajout de l'information pour lenvoi 

    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 




}
 </script>