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
      <img width="20" height="20" src="https://img.icons8.com/office/20/shutdown--v1.png" alt="shutdown--v1"/>   Déconnexion
       </a>
     </li>
     <li title="<?= $index_3 ?>" class="cursor_pointer" onclick="add_id_sha1_user(this)">
    <img width="30" height="30" src="https://img.icons8.com/pastel-glyph/30/info--v3.png" alt="info--v3"/> ajouter informations 
    
    </li> 
  <li>      
    <img width="20" height="20" src="https://img.icons8.com/pulsar-gradient/20/women-shoe-side-view.png" alt="women-shoe-side-view"/> <a href="add_style.php" class="btn-style">Ajouter un style</a>
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