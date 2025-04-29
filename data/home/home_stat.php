 

<?php


$databaseHandler = new DatabaseHandler($dbname, $username);




$index_4 = $_SESSION["index"][4];


// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `log` WHERE `id_ip_0` ='$index_4' ";
// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child("log");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.
// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.
// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.
// Exemple : affichage d'une variable dynamique spécifique




 
?>

<div style="background-color: black;padding:10px;color:white;text-align:center">
  TOTAL  : <?= count($dynamicVariables['id_visit'])?>
</div>
<div class="tableau">




  <?php

  for ($i = 0; $i < count($dynamicVariables['id_visit']); $i++) {


  ?>
    <div>
      <?= $dynamicVariables['id_visit'][$i] ?>
    </div>
    <div>
      <?= $dynamicVariables['id_ip_0'][$i] ?>
    </div>
    <div>
      <?= $dynamicVariables['id_ip_1'][$i] ?>
    </div>
    <div>
      <?= $dynamicVariables['id_ip_2'][$i] ?>
    </div>
    <div>
      <?= $dynamicVariables['id_ip_3'][$i] ?>
    </div>
    <div>
      <?= $dynamicVariables['id_ip_4'][$i] ?>
    </div>
    <div>
      <?= $dynamicVariables['id_ip_5'][$i] ?>
    </div>
    <div>
      <?= $dynamicVariables['id_ip_6'][$i] ?>
    </div>
    <div>
      <?= $dynamicVariables['id_ip_7'][$i] ?>
    </div>
    <div>
      <?= $dynamicVariables['id_ip_8'][$i] ?>
    </div>
    <div>
      <?= $dynamicVariables['REMOTE_ADDR'][$i] ?>
    </div>
    <div >
      <?= $dynamicVariables['date_inscription_visit'][$i] ?>
    </div>

    <div class="blue__">

    </div>
 

  <?php

  }
  ?>




</div>

<style>


  .tableau{
    color: white;
 background-color: rgba(8, 32, 19, 0.6);

  }
  .tableau2   
  {
    background-color: rgba(250, 19, 8, 0.6);
  

  }
  .tableau div,.tableau2 div  {
    border: 1px solid white;
    padding: 10px;
    max-width: 80%;
    margin: auto;
   

  }

  
  .bottom_blue{
    border-bottom: 10px solid rgba(18, 37, 20, 0.6);
margin-bottom: 5px;

  }
  .blue__{
  padding: 5px;
  background-color: black;
  padding: 10px;
  height: 50px;
}
</style>






















 

<?php


$databaseHandler = new DatabaseHandler($dbname, $username);




$index_4 = $_SESSION["index"][4];


// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT * FROM `visit` WHERE `id_ip_0` ='$index_4' ";
// Récupération des informations des tables enfant liées
$databaseHandler->getListOfTables_Child("visit");
// La méthode `getListOfTables_Child` récupère les tables enfants associées à `$nom_table`.
// Récupération des données de la table via une méthode spécialisée
$databaseHandler->getDataFromTable2X($req_sql);
// La méthode `getDataFromTable2X` exécute la requête SQL et prépare les données à être utilisées dynamiquement.
// Génération de variables dynamiques à partir des données récupérées
$databaseHandler->get_dynamicVariables();
// La méthode `get_dynamicVariables` transforme les données récupérées en variables dynamiques disponibles dans le tableau `$dynamicVariables`.
// Exemple : affichage d'une variable dynamique spécifique


 

 
?>
<div style="background-color: red;padding:10px;color:white;text-align:center">
  TOTAL  : <?= count($dynamicVariables['id_visit'])?>
</div>
<style>
  .tableau2 div {
    border: 1px solid white;
    padding: 10px;
    max-width: 100%;
    margin: auto;
   

  }
</style>
<div  class="tableau2">




  <?php

  for ($i = 0; $i < count($dynamicVariables['id_visit']); $i++) {

 
  ?>
    <div>
      <?= $dynamicVariables['id_visit'][$i] ?>
    </div>
    <div>
      <?= $dynamicVariables['id_ip_0'][$i] ?>
    </div>
    <div>
      <?= $dynamicVariables['id_ip_1'][$i] ?>
    </div>
    <div>
      <?= $dynamicVariables['id_ip_2'][$i] ?>
    </div>
    <div>
      <?= $dynamicVariables['id_ip_3'][$i] ?>
    </div>
    <div>
      <?= $dynamicVariables['id_ip_4'][$i] ?>
    </div>
    <div>
      <?= $dynamicVariables['id_ip_5'][$i] ?>
    </div>
    <div>
      <?= $dynamicVariables['id_ip_6'][$i] ?>
    </div>
    <div>
      <?= $dynamicVariables['id_ip_7'][$i] ?>
    </div>
    <div>
      <?= $dynamicVariables['id_ip_8'][$i] ?>
    </div>
    <div>
      <?= $dynamicVariables['REMOTE_ADDR'][$i] ?>
    </div>
    <div >
      <?= $dynamicVariables['date_inscription_visit'][$i] ?>
    </div>

    <div class="blue__">

    </div>
 

  <?php

  }
  ?>




</div>
 