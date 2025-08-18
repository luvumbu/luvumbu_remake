<?php
error_reporting(E_ERROR | E_PARSE);
class DatabaseHandler
{    public $servername = "localhost";
    public $username;
    public $password;
    public $verif = true;
    public $connection;
    public $connection_child;
    public $tableList = array();
    public $tableList_child = array();
    public $tableList_child2 = array();
    public $tableList_info = array();
    public $tableList_info2 = [];
    public $table_name_and_child;
    public $table_name_general;
    public $sql_general;
    public $mysql_general;
    public $table_general;
    public $column_names = array();
    public $column_types = array();
    function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->connection = new mysqli($this->servername, $this->username, $this->password);
        if ($this->connection->connect_error) {
            $this->verif = false;
        } else {
            // Create connection
            $conn = new mysqli($this->servername, $this->username, $this->password);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $name_bdd = $this->username;

            // Create database
            $sql = "CREATE DATABASE $name_bdd";
            if ($conn->query($sql) === TRUE) {
            } else {
                //  echo "Error creating database: " . $conn->error;
            }
            $conn->close();
                }
    }
    function function_affiche_all()
    {   
    }
    function set_mysql_general($mysql_general)
    {

        $this->mysql_general = $mysql_general;
    }

    function set_table_general($table_general)
    {
        $this->table_general = $table_general;
    }
    function set_table_name_general($table_name_general)
    {
        $this->table_name_general = $table_name_general;
        return $this->table_name_general;
    }
    function get_table_name_general()
    {

        return $this->table_name_general;
    }

    function set_sql_general($sql_general)
    {
        $this->sql_general  = $sql_general;
    }
    function existance_table($table_a_verifier)
    {
        // Connexion à la base de données
        $connexion = new mysqli($this->servername, $this->username, $this->password, $this->username);

        // Vérification de la connexion
        if ($connexion->connect_error) {
            die("Erreur de connexion à la base de données : " . $connexion->connect_error);
        }

        // Nom de la table à vérifier


        // Requête SQL pour vérifier l'existence de la table
        $sql = "SHOW TABLES LIKE '$table_a_verifier'";
        $resultat = $connexion->query($sql);

        // Vérification du résultat
        if ($resultat->num_rows > 0) {
            return "1";
        } else {
            return "0";
        }
        // Fermeture de la connexion
        $connexion->close();
    }
    function getTables()
    {
        if ($this->verif) {
            $this->connection->select_db($this->username);
            if ($this->connection->error) {
                return;
            }
            $sql = "SHOW TABLES";
            $result = $this->connection->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_array()) {
                    array_push($this->tableList, $row[0]);
                }
            } else {
                $this->tableList = false;
            }
            $this->connection->close();
        }

        return $this->tableList;
    }
    function getListOfTables()
    {
        // Donne la liste de tables dans la Bdd
        // ont peut faire aussi
        //var_dump($this->tableList) ;
        return $this->tableList;
    }
    function general_dynamique()
    {
        $this->getListOfTables_Child($this->table_general);
        $this->getDataFromTable2X($this->mysql_general);
        $this->get_dynamicVariables();
    }
    function getListOfTables_Child($tableName)
    {
        if ($this->verif) {
            $this->connection_child = new mysqli($this->servername,  $this->username, $this->password, $this->username);
            if ($this->connection_child->connect_errno) {
                exit();
            }
            $query = "SHOW COLUMNS FROM $tableName";
            $result = $this->connection_child->query($query);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    array_push($this->tableList_child, $row['Field']);
                }
            }
            $this->connection_child->close();
        }
        return $this->tableList_child;
    }
    function getListOfTables_Child2($tableName)
    {
        if ($this->verif) {
            $this->connection_child = new mysqli($this->servername,  $this->username, $this->password, $this->username);
            if ($this->connection_child->connect_errno) {
                exit();
            }
            $query = "SHOW COLUMNS FROM $tableName";
            $result = $this->connection_child->query($query);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    array_push($this->tableList_child2, $row['Field']);
                }
            }
            $this->connection_child->close();
        }
    }
    function getDataFromTable($sql, $info_recherche)
    {
        $this->tableList_info = array();
        if ($this->verif) {
            $this->connection_child = new mysqli($this->servername,  $this->username, $this->password, $this->username);
            if ($this->connection_child->connect_error) {
                die("Connection failed: " . $this->connection_child->connect_error);
            }
            $result = $this->connection_child->query($sql);
            if ($result->num_rows > 0) {
                $data = array();
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                foreach ($data as $row) {
                    array_push($this->tableList_info, $row[$info_recherche]);
                }
            }
            $this->connection_child->close();
        }
        $this->tableList_info2[] = $this->tableList_info;
    }    function getDataFromTable2X($sql)
    {
        foreach ($this->tableList_child as $row) {
            $this->getDataFromTable($sql, $row);
        }
    }
    function action_sql($sql)
    {
        $this->connection_child = new mysqli($this->servername,  $this->username, $this->password, $this->username);
        if ($this->connection_child->connect_error) {
            die("Connection failed: " . $this->connection_child->connect_error);
        }
        if ($this->connection_child->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $this->connection_child->error;
        }
        $this->connection_child->close();
    }
    function add_table($nom_table)
    {
        if (count($this->column_names) !== count($this->column_types)) {
            die("Erreur : les tableaux de noms de colonnes et de types de données doivent avoir la même longueur.");
        }
        $columns_definitions = array();
        for ($i = 0; $i < count($this->column_names); $i++) {
            $columns_definitions[] = "{$this->column_names[$i]} {$this->column_types[$i]}";
        }
        $this->connection_child = new mysqli($this->servername,  $this->username, $this->password, $this->username);

        if ($this->connection_child->connect_error) {
            die("Échec de la connexion : " . $this->connection_child->connect_error);
        }
        $sql = "CREATE TABLE $nom_table (
            " . implode(", ", $columns_definitions) . "
        )";
        if ($this->connection_child->query($sql) === TRUE) {
            //echo "Table clients créée avec succès.";
        } else {
            echo "Erreur lors de la création de la table : " . $this->connection_child->error;
        }
        $this->connection_child->close();
    }
    function existe_table($dbname)
    {
        // Connexion à MySQL en utilisant les informations d'identification
        // Vérification de la connexion
        if ($this->connection->connect_error) {
            die("La connexion a échoué : " . $this->connection->connect_error);
        }
        // Nom de la base de données à vérifier
        // Requête pour vérifier si la base de données existe
        $sql = "SHOW DATABASES LIKE '$dbname'";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            return true;
        } else {
            return 0;
        }
        // Fermer la connexion
        $this->connection->close();
    }
    function set_column_names($column_names)
    {
        array_push($this->column_names, $column_names);
    }
    function set_column_types($column_types)
    {
        array_push($this->column_types, $column_types);
    }
    function get_servername()
    {
        return $this->servername;
    }
    function get_username()
    {
        return $this->username;
    }
    function get_password()
    {
        return $this->password;
    }
    function get_verif()
    {
        return $this->verif;
    }
    function get_connection()
    {
        return $this->connection;
    }
    function get_connection_child()
    {
        return $this->connection_child;
    }
    function get_tableList()
    {
        return $this->tableList;
    }
    function get_tableList_child()
    {
        return $this->tableList_child;
    }
    function get_tableList_info()
    {
        return $this->tableList_info;
    }
    function get_dynamicVariables()
    {
        global $dynamicVariables; // Rend la variable accessible globalement
        $dynamicVariables = []; // Initialisation

        foreach ($this->tableList_child as $index => $nom) {
            if (isset($this->tableList_info2[$index])) {
                $dynamicVariables[strtolower($nom)] = $this->tableList_info2[$index];
            }
        }
        /*
       // exemple utilisation 
        $databaseHandler->get_dynamicVariables();
        // Utilisation des données dynamiques
       // global $dynamicVariables;
       // var_dump($dynamicVariables['id_sha1_user']);
        */
        /*

        // autre méthode 
// Création des variables dynamiques
foreach ($databaseHandler->tableList_child as $index => $nom) {
    if (isset($databaseHandler->tableList_info2[$index])) { // Vérifie si un fruit existe à cet index
        ${strtolower($nom)} = $databaseHandler->tableList_info2[$index]; // Crée une variable avec le nom en minuscule
    }
}
var_dump($id_sha1_user );
*/
    }
    function get_dynamicVariables_general()
    {
        global $dynamicVariables; // Rend la variable accessible globalement
        $dynamicVariables = []; // Initialisation

        foreach ($this->tableList_child as $index => $nom) {
            if (isset($this->tableList_info2[$index])) {
                $dynamicVariables[strtolower($nom)] = $this->tableList_info2[$index];
            }
        }
    }
}
 
// Configuration de la base de données
$dbname = "u489596434_bokonzi_on";   // Nom d'utilisateur pour la base de données
$username = "v3p9r3e@59A";   // Mot de passe pour la base de données
$nom_table = "info_all_array"; // Nom de la table cible

// Création d'une instance de la classe `DatabaseHandler`
 
$databaseHandler = new DatabaseHandler($dbname, $username);


// Requête SQL pour récupérer toutes les données de la table
$req_sql = "SELECT DISTINCT `get_club_nom_complet_array_2` FROM `info_all_array` WHERE 1 ORDER BY `get_club_nom_complet_array_2`";

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
var_dump($dynamicVariables['get_result_users_nom_1_array_2']);
 
?>