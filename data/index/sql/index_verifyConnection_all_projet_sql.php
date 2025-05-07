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
 
 
    ?>

