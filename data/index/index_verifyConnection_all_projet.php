
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 2rem;
    }

    /* Formulaire */
    form {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      max-width: 400px;
      margin-bottom: 2rem;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    form input,
    form button {
      display: block;
      width: 100%;
      margin-bottom: 15px;
      padding: 10px;
      font-size: 16px;
    }

    form button {
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }

    form button:hover {
      background-color: #45a049;
    }

    /* Card */
    .card {
      background-color: white;
      padding: 20px;
      max-width: 400px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .card h3 {
      margin-top: 0;
    }

    .card p {
      color: #555;
    }
  </style>
</head>
 
<div class="form-container">
     <h2>Vérification de Connexion</h2>
      
         <label for="dbname">Nom d'utilisateur ou adresse mail</label>
         <input type="text" id="dbname" name="dbname" required>

         <label for="username">Mot de passe</label>
         <input type="password" id="username" name="username" required>

         <!-- Div acting as a button -->

         <div class="password_forgot">
             <a href="view/password_forgot.php">Mot de passe oublié</a>
         </div>
         <div class="inscrption">
             <a href="view/inscrption.php">Inscription</a>
         </div>
         <div class="submit-btn" onclick="verifyConnection_(this)">Vérifier la Connexion</div>
 
     
 </div>



 <?php


    // Création d'une instance de la classe `DatabaseHandler`
    $databaseHandler = new DatabaseHandler($username, $dbname);

    // Requête SQL pour récupérer toutes les données de la table
    $req_sql = "SELECT * FROM `projet` WHERE `id_sha1_parent_projet` ='' AND `visibility_1_projet`='1' ";

    // Récupération des informations des tables enfant liées
    $databaseHandler->getListOfTables_Child("projet");
    // La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.

    // Récupération des données de la table via une méthode spécialisée
    $databaseHandler->getDataFromTable2X($req_sql);
    // La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.

    // Génération de variables dynamiques à partir des données récupérées
    $databaseHandler->get_dynamicVariables();
    // La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.

    // Exemple : affichage d'une variable dynamique spécifique

    // `id_sha1_projet` est une clé générée dynamiquement qui correspond à une colonne ou une donnée récupérée dans la table.

    /*
 * Remarque :
 * - Les variables dynamiques sont utiles pour générer du contenu ou manipuler des données
 *   sans connaître à l'avance les noms des colonnes ou des champs.
 * - Assurez-vous que les noms de colonnes dans `$dynamicVariables` existent dans la table cible.
 * - Cette approche peut être utilisée pour des tâches nécessitant une flexibilité dans le traitement des données.
 */
    // Requête SQL pour sélectionner toutes les lignes de la table `projet`
    $req_sql = "SELECT * FROM `projet` WHERE `id_sha1_parent_projet` ='' AND visibility_1_projet!='' ";
    // Création d'une instance de la classe `DatabaseHandler`
    // Cette classe gère la connexion et l'exécution des requêtes SQL
    $databaseHandler = new DatabaseHandler($dbname, $username);
    // Exécution de la méthode pour obtenir les données d'une table
    // Le deuxième paramètre ("id_projet") est utilisé pour spécifier la colonne à extraire
    $databaseHandler->getDataFromTable($req_sql, "title_projet");
    // Récupération des résultats dans une propriété de la classe
    $title_projet = $databaseHandler->tableList_info;
    // Le deuxième paramètre ("id_projet") est utilisé pour spécifier la colonne à extraire
    $databaseHandler->getDataFromTable($req_sql, "id_sha1_projet");
    // Récupération des résultats dans une propriété de la classe
    $id_sha1_projet = $databaseHandler->tableList_info;
    // Le deuxième paramètre ("id_projet") est utilisé pour spécifier la colonne à extraire
    $databaseHandler->getDataFromTable($req_sql, "img_projet_src1");
    // Récupération des résultats dans une propriété de la classe
    $img_projet_src1 = $databaseHandler->tableList_info;
    ?>







 <style>

 </style>


 <?php



    $nom_table = "projet";
    $databaseHandler = new DatabaseHandler($dbname, $username);

    // Requête SQL pour récupérer toutes les données de la table
    $req_sql = "SELECT * FROM `$nom_table` WHERE `id_sha1_parent_projet`='' ";

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



    $id_sha1_projet = $dynamicVariables['id_sha1_projet'];
    $img_projet_src1 = $dynamicVariables['img_projet_src1'];
    $img_projet_visibility_h = $dynamicVariables['img_projet_visibility'];



  



    //echo  AsciiConverter::asciiToString($title_projet_parent[0]); // Affiche "Hello"

 
    ?>


 
 <style>
  .div_elements{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
  }
 </style>
<div class="div_elements" >
  <?php
 require "data/all/all_select_all.php" ;
  ?>
 


  <style>
 
  </style>

  <style>
    
.form-container {
    width: 400px;
    padding: 25px;
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    border: 1px solid #d1d1d1;
}

.form-container h2 {
    color: #1a1a1d;
    font-size: 18px;
    margin-bottom: 15px;
}

.form-container form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.form-container label {
    width: 100%;
    text-align: left;
    margin-bottom: 5px;
    font-size: 14px;
    color: #333;
}

.form-container input {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
    background: #fafafa;
    color: #1a1a1d;
    outline: none;
}

.form-container input:focus {
    border-color: #007bff;
}

.password_forgot,
.inscrption {
    margin-top: 8px;
    text-align: center;
    width: 100%;
}

.password_forgot a,
.inscrption a {
    text-decoration: none;
    color: #007bff;
    font-size: 13px;
    font-weight: bold;
    display: inline-block;
    padding: 5px 0;
}

.password_forgot a:hover,
.inscrption a:hover {
    text-decoration: underline;
}

.submit-btn {
    margin-top: 15px;
    width: 100%;
    padding: 10px;
    background: #007bff;
    color: white;
    text-align: center;
    font-weight: bold;
    cursor: pointer;
    border-radius: 6px;
    font-size: 14px;
    transition: background 0.2s ease-in-out;
}

.submit-btn:hover {
    background: #0056b3;
}


    .card {
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      width: 400px;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card img {
      width: 100%;
      height: 300px;
      object-fit: cover;
      /* Important : permet de recadrer sans déformer */
      display: block;
    }

    .card-content {
      padding: 20px;
    }

    .card-content h2 {
      font-size: 1.4em;
      margin-bottom: 10px;
      color: #333;
    }

    .card-content p {
      font-size: 0.95em;
      color: #666;
      margin-bottom: 15px;

    }

    .btn {
      display: inline-block;
      padding: 10px 16px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    body {
      width: 90%;
      margin: auto;
    }

    .p_img {
      width: 100%;
      margin: auto;

      text-align: center;
      margin-top: 80px;
      margin-bottom: 80px;



    }

    .p_img img {
      width: 380px;
      text-align: center;
      border-radius: 7px;
    }

    .p_img_1 img {
      box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.8);
    }

    .p_img_1 img:hover {
      box-shadow: 2px 2px 8px rgba(0, 0, 0, 1);

    }

    .cursor_pointer:hover {
      cursor: pointer;
      transition: 1s all;
    }

    .cursor_pointer {

      transition: 1s all;
    }

    .date_originale {
      color: rgba(0, 0, 0, 0.5);
      font-size: 12px;

    }
 
 
  .form-container{
 
    width:300px;
    margin: auto;
    text-align: center;
  }
</style>


<script>
    function verifyConnection_() {

 
    
        const dbname = document.getElementById("dbname").value;
        const username = document.getElementById("username").value;
        var ok = new Information("data/index/req_sql/index_re_sql_verifyConnection.php"); // création de la classe 
        ok.add("dbname", dbname); // ajout de l'information pour lenvoi 
        ok.add("username", username); // ajout d'une deuxieme information denvoi  
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 
        const myTimeout = setTimeout(verifyConnection, 250);

        function verifyConnection() {
        location.reload();
        }
    }
</script>