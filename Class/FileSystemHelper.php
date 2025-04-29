<?php
class DirectoryChecker
{
    // Méthode pour vérifier si un dossier existe
    public static function directoryExists($dirPath)
    {
        return is_dir($dirPath); // Retourne vrai si le dossier existe, faux sinon
    }

    // Méthode pour vérifier l'existence de plusieurs dossiers
    public static function checkDirectoriesExist(array $dirPaths, $createIfNotExists = false)
    {
        foreach ($dirPaths as $dirPath) {
            if (self::directoryExists($dirPath)) {
             //   echo "<br/>" ; 
            //    echo "Le dossier '$dirPath' existe.\n"; // Indique que le dossier existe
            } else {
                echo "<br/>" ; 
                echo "Le dossier '$dirPath' n'existe pas.\n"; // Indique que le dossier n'existe pas
                if ($createIfNotExists) {
                    mkdir($dirPath, 0755, true); // Crée le dossier avec des permissions appropriées
                    echo "<br/>" ; 
                    echo "Le dossier '$dirPath' a été créé.\n"; // Confirme la création du dossier
                } else {
                    echo "<br/>" ; 
                    echo "Aucune action effectuée pour '$dirPath'.\n"; // Indique qu'aucune action n'a été prise
                }
            }
        }
    }
}

$dirPaths = [
    // Dossiers src avec des sous-dossiers

    /*
    "src/controllers/userController",
    "src/controllers/productController",
    "src/controllers/orderController",
    "src/models/userModel",
    "src/models/productModel",
    "src/models/orderModel",
    "src/views/userViews",
    "src/views/productViews",
    "src/views/orderViews",
    "src/routes/userRoutes",
    "src/routes/productRoutes",
    "src/routes/orderRoutes",
    "src/helpers/utilities",
    "src/middlewares/authMiddleware",

    // Dossier config avec des sous-dossiers
    "src/config/settings",    // Configuration générale
    "src/config/database",    // Configuration de la base de données
    "src/config/mail",        // Configuration des paramètres d'email

    // Dossier public avec des sous-dossiers
    "src/public/css",         // Feuilles de style
    "src/public/js",          // Scripts JavaScript
    "src/public/images",      // Images publiques

    // Dossiers de tests
    "src/tests/unitTests",        // Tests unitaires
    "src/tests/integrationTests",  // Tests d'intégration
    "src/tests/functionalTests",   // Tests fonctionnels
    "src/tests/e2eTests",         // Tests de bout en bout

    // Autres dossiers avec des sous-dossiers
    "src/logs/applicationLogs",    // Logs d'application
    "src/logs/accessLogs",         // Logs d'accès
    "src/logs/errorLogs",          // Logs d'erreur
    "src/migrations/schema",        // Scripts de migration de schéma
    "src/migrations/data",          // Données de migration
    "src/backup/daily",            // Sauvegardes quotidiennes
    "src/backup/weekly",           // Sauvegardes hebdomadaires
    "src/scripts/cron",            // Scripts cron
    "src/scripts/utils",           // Scripts utilitaires

    // Dossier de documentation
    "src/docs",       
    */
    
    // Documentation du projet
];

// Vérifie l'existence des dossiers et crée ceux qui n'existent pas si nécessaire
DirectoryChecker::checkDirectoriesExist($dirPaths, true); // Passe true pour créer les dossiers
// DirectoryChecker::checkDirectoriesExist($dirPaths, false); // Passe false pour ne rien faire
?>
