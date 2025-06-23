 <?php
  require_once $home_header_css_1;
  require_once $home_js;


  $index_3 = $_SESSION["index"][3];


  ?>
 <nav>
   <ul class="menu">
     <li class="cursor_pointer" onclick="add_projet(this)" id="add_projet_">➕ Ajouter un projet</li>
     <li class="cursor_pointer">
       <a href="Class/session_destroy.php">
         Déconnexion
       </a>
     </li>
     <li title="<?= $index_3 ?>" class="cursor_pointer" onclick="add_id_sha1_user(this)"><img width="30" height="30" src="https://img.icons8.com/office/30/add--v1.png" alt="add--v1" />

     </li>
   </ul>


 </nav>





 <?php


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

 <div onclick="update_all()" class="cursor_pointer">

   <img width="100" height="100" src="https://img.icons8.com/pastel-glyph/100/loop.png" alt="loop" />
   <p>
     update_all
   </p>
 </div>

 <script>
   function update_all() {
     var ok = new Information("update_home_projet.php"); // création de la classe 
     console.log(ok.info()); // demande l'information dans le tableau
     ok.push(); // envoie l'information au code pkp 


     var ok = new Information("update_home_profil.php"); // création de la classe 
     console.log(ok.info()); // demande l'information dans le tableau
     ok.push(); // envoie l'information au code pkp 


     var ok = new Information("update_home_profil2.php"); // création de la classe 
     console.log(ok.info()); // demande l'information dans le tableau
     ok.push(); // envoie l'information au code pkp 




     var ok = new Information("update_home_img.php"); // création de la classe 
     console.log(ok.info()); // demande l'information dans le tableau
     ok.push(); // envoie l'information au code pkp 

   }
   var ok = new Information("update_home_projet.php"); // création de la classe 
   console.log(ok.info()); // demande l'information dans le tableau
   ok.push(); // envoie l'information au code pkp 


   var ok = new Information("update_home_profil.php"); // création de la classe 
   console.log(ok.info()); // demande l'information dans le tableau
   ok.push(); // envoie l'information au code pkp 


   var ok = new Information("update_home_profil2.php"); // création de la classe 
   console.log(ok.info()); // demande l'information dans le tableau
   ok.push(); // envoie l'information au code pkp 




   var ok = new Information("update_home_img.php"); // création de la classe 
   console.log(ok.info()); // demande l'information dans le tableau
   ok.push(); // envoie l'information au code pkp 






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