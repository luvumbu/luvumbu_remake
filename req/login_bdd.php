<?php
header("Access-Control-Allow-Origin: *");
require_once '../Class/DatabaseHandler.php';
$servername = "localhost";
$dbname = $_POST["dbname"];
$username = $_POST["username"];
// Create connection
$id_sha1_user = time();
$databaseHandler = new DatabaseHandler($dbname, $username);
if ($databaseHandler->verif != 1) {

    echo 'FAKE';
} else {
    // Nom du fichier que tu veux créer
    $nomFichier = "../Class/dbCheck.php";
    // Utilisation de fopen() pour créer et ouvrir le fichier en mode écriture ('w')
    // Le mode 'w' crée un fichier vide pour l'écriture (ou vide le fichier s'il existe déjà)
    $fichier = fopen($nomFichier, 'w');
    // Vérifie si le fichier a bien été ouvert
    if ($fichier) {
        // Contenu à écrire dans le fichier
        $contenu = "<?php \n";
        $contenu =  $contenu . '$dbname = "' . $dbname . '";' . "\n";
        $contenu =  $contenu . '$username = "' . $username . '";' . "\n";
        $contenu =  $contenu . '$admin_id_sha1_user  = "' . $id_sha1_user . '";' . "\n";
        $contenu = $contenu . "?>\n";
        // Écriture du contenu dans le fichier
        fwrite($fichier, $contenu);
        // Fermeture du fichier après écriture
        fclose($fichier);
        echo "Le fichier a été créé et le contenu a été écrit avec succès.";
        require_once '../Class/dbCheck.php';
        // Initialisation du gestionnaire de base de données
        $databaseHandler = new DatabaseHandler($dbname, $username);

        // Définition des colonnes et de leurs types dans un tableau associatif
        $columns = [
            "id_user" => "INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
            "date_user" => "LONGTEXT NOT NULL",
            "id_sha1_user" => "LONGTEXT NOT NULL",
            "id_parent_user" => "LONGTEXT NOT NULL",
            "description_user" => "LONGTEXT NOT NULL",
            "info_user_1" => "LONGTEXT NOT NULL",
            "info_user_2" => "LONGTEXT NOT NULL",
            "info_user_3" => "LONGTEXT NOT NULL",
            "title_user" => "LONGTEXT NOT NULL",
            "img_user" => "LONGTEXT NOT NULL",
            "img_user2" => "LONGTEXT NOT NULL",
            "nom_user" => "LONGTEXT NOT NULL",
            "prenom_user" => "LONGTEXT NOT NULL",
            "password_user" => "LONGTEXT NOT NULL",
            "email_user" => "LONGTEXT NOT NULL",
            "activation_user" => "LONGTEXT NOT NULL",
            "date_inscription_user" => "TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
        ];
        // Itération sur le tableau pour définir les noms et types de colonnes
        foreach ($columns as $name => $type) {
            $databaseHandler->set_column_names($name);
            $databaseHandler->set_column_types($type);
        }
        // Ajout de la table à la base de données
        $databaseHandler->add_table($dbname);






        $databaseHandler = new DatabaseHandler($dbname, $username);

        // Définition des colonnes et de leurs types dans un tableau associatif
        $columns = [
            "id_user" => "INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
            "date_user" => "LONGTEXT NOT NULL",
            "id_sha1_user" => "LONGTEXT NOT NULL",
            "id_parent_user" => "LONGTEXT NOT NULL",
            "description_user" => "LONGTEXT NOT NULL",
            "title_user" => "LONGTEXT NOT NULL",
            "img_user" => "LONGTEXT NOT NULL",
            "nom_user" => "LONGTEXT NOT NULL",
            "prenom_user" => "LONGTEXT NOT NULL",
            "password_user" => "LONGTEXT NOT NULL",
            "email_user" => "LONGTEXT NOT NULL",
            "activation_user" => "LONGTEXT NOT NULL",
            "date_inscription_user" => "TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
        ];
        // Itération sur le tableau pour définir les noms et types de colonnes
        foreach ($columns as $name => $type) {
            $databaseHandler->set_column_names($name);
            $databaseHandler->set_column_types($type);
        }
        // Ajout de la table à la base de données
        $databaseHandler->add_table("profil_user");






        // Initialisation du gestionnaire de base de données
        $databaseHandler = new DatabaseHandler($dbname, $username);

        // Définition des colonnes et de leurs types dans un tableau associatif
        $columns = [
            "id_projet" => "INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
            "activation_projet" => "LONGTEXT NOT NULL",
            "activate_img" => "LONGTEXT NOT NULL",
            "style_projet" => "LONGTEXT NOT NULL",
            "id_general" => "LONGTEXT NOT NULL",
            "type_projet" => "LONGTEXT NOT NULL",
            "id_user_projet" => "LONGTEXT NOT NULL",
            "id_sha1_user_projet" => "LONGTEXT NOT NULL",
            "id_sha1_projet" => "LONGTEXT NOT NULL",
            "id_sha1_projet_lock" => "LONGTEXT NOT NULL",
            "id_sha1_projet_song" => "LONGTEXT NOT NULL",
            "color_projet" => "LONGTEXT NOT NULL",
            "google_title_projet" => "LONGTEXT NOT NULL",
            "level_urgence_projet" => "LONGTEXT NOT NULL",
            "change_meta_name_projet" => "LONGTEXT NOT NULL",
            "change_meta_name_projet_toggle" => "LONGTEXT NOT NULL",
            "change_meta_content_projet" => "LONGTEXT NOT NULL",
            "change_meta_content_projet_toggle" => "LONGTEXT NOT NULL",
            "id_sha1_parent_projet" => "LONGTEXT NOT NULL",
            "id_sha1_parent_projet2" => "LONGTEXT NOT NULL",
            "cryptage_projet" => "LONGTEXT NOT NULL",
            "html_mode_projet_1" => "LONGTEXT NOT NULL",
            "html_mode_projet_2" => "LONGTEXT NOT NULL",
            "style_pages_projet" => "LONGTEXT NOT NULL",



            "meta_pages_projet" => "LONGTEXT NOT NULL",
            "header_1_pages_projet" => "LONGTEXT NOT NULL",
            "header_2_pages_projet" => "LONGTEXT NOT NULL",
            "header_3_pages_projet" => "LONGTEXT NOT NULL",

            "header_1_pages_projet_check_box" => "LONGTEXT NOT NULL",
            "header_2_pages_projet_check_box" => "LONGTEXT NOT NULL",
            "header_3_pages_projet_check_box" => "LONGTEXT NOT NULL",


            "section_1_pages_projet" => "LONGTEXT NOT NULL",
            "section_2_pages_projet" => "LONGTEXT NOT NULL",
            "section_3_pages_projet" => "LONGTEXT NOT NULL",

            "section_1_pages_projet_check_box" => "LONGTEXT NOT NULL",
            "section_2_pages_projet_check_box" => "LONGTEXT NOT NULL",
            "section_3_pages_projet_check_box" => "LONGTEXT NOT NULL",

            "footer_1_pages_projet" => "LONGTEXT NOT NULL",
            "footer_2_pages_projet" => "LONGTEXT NOT NULL",
            "footer_3_pages_projet" => "LONGTEXT NOT NULL",

            "footer_1_pages_projet_check_box" => "LONGTEXT NOT NULL",
            "footer_2_pages_projet_check_box" => "LONGTEXT NOT NULL",
            "footer_3_pages_projet_check_box" => "LONGTEXT NOT NULL",

            "name_pages_projet" => "LONGTEXT NOT NULL",
            "input_cryptage_projet" => "LONGTEXT NOT NULL",
            "name_projet" => "LONGTEXT NOT NULL",
            "name_extention_projet" => "LONGTEXT NOT NULL",
            "statue_projet" => "LONGTEXT NOT NULL",
            "title_projet" => "LONGTEXT NOT NULL",
            "title_projet_toggle" => "LONGTEXT NOT NULL",
            "description_projet" => "LONGTEXT NOT NULL",
            "description_projet_toggle" => "LONGTEXT NOT NULL",
            "password_projet" => "LONGTEXT NOT NULL",
            "visibility_1_projet" => "LONGTEXT NOT NULL",
            "visibility_2_projet" => "LONGTEXT NOT NULL",
            "screen_shoot_projet" => "LONGTEXT NOT NULL",
            "img_projet_src1" => "LONGTEXT NOT NULL",
            "img_projet_src1_toggle" => "LONGTEXT NOT NULL",
            "total_style_pages" => "LONGTEXT NOT NULL",
            "total_style_parent_pages" => "LONGTEXT NOT NULL",
            "total_style_text_pages" => "LONGTEXT NOT NULL",
            "img_projet_src2" => "LONGTEXT NOT NULL",
            "img_projet_src2_toggle" => "LONGTEXT NOT NULL",
            "img_projet_visibility" => "LONGTEXT NOT NULL",
            "group_projet" => "LONGTEXT NOT NULL",
            "date_debut_projet" => "LONGTEXT NOT NULL",
            "date_fin_projet" => "LONGTEXT NOT NULL",
            "dure_projet" => "LONGTEXT NOT NULL",
            "publication_date_j_projet" => "LONGTEXT NOT NULL",
            "publication_date_h_projet" => "LONGTEXT NOT NULL",
            "publication_password" => "LONGTEXT NOT NULL",
            "shop_projet" => "LONGTEXT NOT NULL",
            "date_inscription_projet" => "TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
        ];
        // Itération sur le tableau pour définir les noms et types de colonnes
        foreach ($columns as $name => $type) {
            $databaseHandler->set_column_names($name);
            $databaseHandler->set_column_types($type);
        }
        // Ajout de la table à la base de données
        $databaseHandler->add_table("projet");






        // ******************************************************************
        $databaseHandler = new DatabaseHandler($dbname, $username);

        // Définition des colonnes et de leurs types dans un tableau associatif
        $columns = [
            "id_visit" => "INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
            "ip" => "LONGTEXT NOT NULL",
            "host" => "LONGTEXT NOT NULL",
            "port" => "LONGTEXT NOT NULL",
            "userAgent" => "LONGTEXT NOT NULL",
            "browser" => "LONGTEXT NOT NULL",
            "os" => "LONGTEXT NOT NULL",
            "language" => "LONGTEXT NOT NULL",
            "referer" => "LONGTEXT NOT NULL",
            "method" => "LONGTEXT NOT NULL",
            "serverIp" => "LONGTEXT NOT NULL",
            "serverName" => "LONGTEXT NOT NULL",
            "uri" => "LONGTEXT NOT NULL",
            "protocol" => "LONGTEXT NOT NULL",
            "https" => "LONGTEXT NOT NULL",
            "visitDate" => "LONGTEXT NOT NULL",

            "id_ip_1" => "LONGTEXT NOT NULL",
            "id_ip_2" => "LONGTEXT NOT NULL",
            "id_ip_3" => "LONGTEXT NOT NULL",
            "id_ip_4" => "LONGTEXT NOT NULL",
            "id_ip_5" => "LONGTEXT NOT NULL",






            "REMOTE_ADDR" => "LONGTEXT NOT NULL",


            "date_inscription_visit" => "TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
        ];
        // Itération sur le tableau pour définir les noms et types de colonnes
        foreach ($columns as $name => $type) {
            $databaseHandler->set_column_names($name);
            $databaseHandler->set_column_types($type);
        }
        // Ajout de la table à la base de données
        $databaseHandler->add_table("visite");








        // ******************************************************************
        $databaseHandler = new DatabaseHandler($dbname, $username);

        // Définition des colonnes et de leurs types dans un tableau associatif
        $columns = [
            "id_style_page" => "INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
            "id_user_style_page" => "LONGTEXT NOT NULL",
            "name_style_page" => "LONGTEXT NOT NULL",
            "info_style_page" => "LONGTEXT NOT NULL",
            "text_style_page" => "LONGTEXT NOT NULL",
            "REMOTE_ADDR" => "LONGTEXT NOT NULL",
            "date_inscription_style_page" => "TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
        ];
        // Itération sur le tableau pour définir les noms et types de colonnes
        foreach ($columns as $name => $type) {
            $databaseHandler->set_column_names($name);
            $databaseHandler->set_column_types($type);
        }
        // Ajout de la table à la base de données
        $databaseHandler->add_table("style_page");








        // ******************************************************************
        $databaseHandler = new DatabaseHandler($dbname, $username);

        // Définition des colonnes et de leurs types dans un tableau associatif
        $columns = [
            "id_mail_user" => "INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
            "id_user_mail_user" => "LONGTEXT NOT NULL",
            "name_mail_user" => "LONGTEXT NOT NULL",
            "info_mail_user" => "LONGTEXT NOT NULL",
            "info_plus_1__mail_user" => "LONGTEXT NOT NULL",
            "info_plus_2__mail_user" => "LONGTEXT NOT NULL",
            "info_plus_3__mail_user" => "LONGTEXT NOT NULL",
            "info_plus_4__mail_user" => "LONGTEXT NOT NULL",
            "info_plus_5__mail_user" => "LONGTEXT NOT NULL",
            "text_mail_user" => "LONGTEXT NOT NULL",
            "activation_mail_user" => "LONGTEXT NOT NULL",

            "REMOTE_ADDR" => "LONGTEXT NOT NULL",
            "date_inscription_mail_user" => "TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
        ];
        // Itération sur le tableau pour définir les noms et types de colonnes
        foreach ($columns as $name => $type) {
            $databaseHandler->set_column_names($name);
            $databaseHandler->set_column_types($type);
        }
        // Ajout de la table à la base de données
        $databaseHandler->add_table("mail_user");










        // ******************************************************************
        $databaseHandler = new DatabaseHandler($dbname, $username);

        // Définition des colonnes et de leurs types dans un tableau associatif
        $columns = [
            "id_send_mail" => "INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
            "id_user_send_mail" => "LONGTEXT NOT NULL",
            "name_send_mail" => "LONGTEXT NOT NULL",
            "info_send_mail" => "LONGTEXT NOT NULL",
            "info_plus_1_send_mail" => "LONGTEXT NOT NULL",
            "info_plus_2_send_mail" => "LONGTEXT NOT NULL",
            "info_plus_3_send_mail" => "LONGTEXT NOT NULL",
            "info_plus_4_send_mail" => "LONGTEXT NOT NULL",
            "info_plus_5_send_mail" => "LONGTEXT NOT NULL",
            "text_send_mail" => "LONGTEXT NOT NULL",
            "activation_send_mail" => "LONGTEXT NOT NULL",
            "REMOTE_ADDR" => "LONGTEXT NOT NULL",
            "date_inscription_send_mail" => "TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
        ];
        // Itération sur le tableau pour définir les noms et types de colonnes
        foreach ($columns as $name => $type) {
            $databaseHandler->set_column_names($name);
            $databaseHandler->set_column_types($type);
        }
        // Ajout de la table à la base de données
        $databaseHandler->add_table("send_mail");















        /*



$databaseHandler = new DatabaseHandler($dbname, $username);

// Définition des colonnes et de leurs types dans un tableau associatif
$columns = [
"id_get_users_nom_complet_array_all" => "INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
"name_get_users_nom_complet_array_all" => "LONGTEXT NOT NULL",
"id_verif_get_users_nom_complet_array_all" => "INT(11)",
"info_style_page" => "LONGTEXT NOT NULL",
"text_style_page" => "LONGTEXT NOT NULL",
"REMOTE_ADDR" => "LONGTEXT NOT NULL",
"date_inscription_style_page" => "TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
];
// Itération sur le tableau pour définir les noms et types de colonnes
foreach ($columns as $name => $type) {
$databaseHandler->set_column_names($name);
$databaseHandler->set_column_types($type);
}
// Ajout de la table à la base de données
$databaseHandler->add_table("get_users_nom_complet_array_all");



*/





        // ******************************************************************
        $databaseHandler = new DatabaseHandler($dbname, $username);

        // Définition des colonnes et de leurs types dans un tableau associatif
        $columns = [
            "id_visit" => "INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
            "showCoords_array_event_clientX" => "LONGTEXT NOT NULL",
            "showCoords_array_event_clientY" => "LONGTEXT NOT NULL",
            "showCoords_array_url" => "LONGTEXT NOT NULL",
            "showCoords_array_ip" => "LONGTEXT NOT NULL",
            "showCoords_array_user_id" => "LONGTEXT NOT NULL",
            "id_ip_1" => "LONGTEXT NOT NULL",
            "id_ip_2" => "LONGTEXT NOT NULL",
            "id_ip_3" => "LONGTEXT NOT NULL",
            "id_ip_4" => "LONGTEXT NOT NULL",
            "id_ip_5" => "LONGTEXT NOT NULL",
            "id_ip_6" => "LONGTEXT NOT NULL",
            "id_ip_7" => "LONGTEXT NOT NULL",
            "REMOTE_ADDR" => "LONGTEXT NOT NULL",


            "date_inscription_showCoords" => "TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
        ];
        // Itération sur le tableau pour définir les noms et types de colonnes
        foreach ($columns as $name => $type) {
            $databaseHandler->set_column_names($name);
            $databaseHandler->set_column_types($type);
        }
        // Ajout de la table à la base de données
        $databaseHandler->add_table("showcoords");









        // ******************************************************************
        $databaseHandler = new DatabaseHandler($dbname, $username);

        // Définition des colonnes et de leurs types dans un tableau associatif
        $columns = [
            "id_info_page" => "INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",

            "id_sha1_projet" => "LONGTEXT NOT NULL",
            "id_sha1_user" => "LONGTEXT NOT NULL",






            "id_ip_0" => "LONGTEXT NOT NULL",
            "id_like" => "LONGTEXT NOT NULL",
            "id_alert" => "LONGTEXT NOT NULL",
            "id_text" => "LONGTEXT NOT NULL",




            "id_ip_1" => "LONGTEXT NOT NULL",
            "id_ip_2" => "LONGTEXT NOT NULL",
            "id_ip_3" => "LONGTEXT NOT NULL",
            "id_ip_4" => "LONGTEXT NOT NULL",
            "id_ip_5" => "LONGTEXT NOT NULL",
            "id_ip_6" => "LONGTEXT NOT NULL",
            "id_ip_7" => "LONGTEXT NOT NULL",
            "REMOTE_ADDR" => "LONGTEXT NOT NULL",


            "date_inscription_visit" => "TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
        ];
        // Itération sur le tableau pour définir les noms et types de colonnes
        foreach ($columns as $name => $type) {
            $databaseHandler->set_column_names($name);
            $databaseHandler->set_column_types($type);
        }
        // Ajout de la table à la base de données
        $databaseHandler->add_table("info_page");


















        // ******************************************************************
        $databaseHandler = new DatabaseHandler($dbname, $username);

        // Définition des colonnes et de leurs types dans un tableau associatif
        $columns = [
            "id_comment" => "INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
            "id_sha1_user" => "LONGTEXT NOT NULL",
            "id_sha1_comment" => "LONGTEXT NOT NULL",
            "id_comment_user_name" => "LONGTEXT NOT NULL",
            "id_comment_text" => "LONGTEXT NOT NULL",
            "id_ip_4" => "LONGTEXT NOT NULL",
            "id_ip_5" => "LONGTEXT NOT NULL",
            "id_ip_6" => "LONGTEXT NOT NULL",
            "id_ip_7" => "LONGTEXT NOT NULL",
            "REMOTE_ADDR" => "LONGTEXT NOT NULL",


            "date_inscription_comment" => "TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
        ];
        // Itération sur le tableau pour définir les noms et types de colonnes
        foreach ($columns as $name => $type) {
            $databaseHandler->set_column_names($name);
            $databaseHandler->set_column_types($type);
        }
        // Ajout de la table à la base de données
        $databaseHandler->add_table("comment");





        // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!






        // ******************************************************************













        // ******************************************************************
        $databaseHandler = new DatabaseHandler($dbname, $username);

        // Définition des colonnes et de leurs types dans un tableau associatif
        $columns = [
            "id_req_quiz" => "INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
            "id_sha1_req_quiz" => "LONGTEXT NOT NULL",
            "id_sha1_projet_user" => "LONGTEXT NOT NULL",
            "id_sha1_child_req_quiz" => "LONGTEXT NOT NULL",
            "id_sha1_child_req_question" => "LONGTEXT NOT NULL",
            "id_sha1_child_req_reponse_1" => "LONGTEXT NOT NULL",
            "id_sha1_child_req_reponse_2" => "LONGTEXT NOT NULL",
            "id_sha1_child_req_reponse_z" => "LONGTEXT NOT NULL",
            "REMOTE_ADDR" => "LONGTEXT NOT NULL",
            "date_inscription_visit" => "TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
        ];
        // Itération sur le tableau pour définir les noms et types de colonnes
        foreach ($columns as $name => $type) {
            $databaseHandler->set_column_names($name);
            $databaseHandler->set_column_types($type);
        }
        // Ajout de la table à la base de données
        $databaseHandler->add_table("req_quiz");

        // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!






        // ******************************************************************



        $databaseHandler = new DatabaseHandler($dbname, $username);

        // Définition des colonnes et de leurs types dans un tableau associatif
        $columns = [
            "id_visit" => "INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
            "id_ip_0" => "LONGTEXT NOT NULL",
            "id_ip_1" => "LONGTEXT NOT NULL",
            "id_ip_2" => "LONGTEXT NOT NULL",
            "id_ip_3" => "LONGTEXT NOT NULL",
            "id_ip_4" => "LONGTEXT NOT NULL",
            "id_ip_5" => "LONGTEXT NOT NULL",
            "id_ip_6" => "LONGTEXT NOT NULL",
            "id_ip_7" => "LONGTEXT NOT NULL",
            "id_ip_8" => "LONGTEXT NOT NULL",
            "REMOTE_ADDR" => "LONGTEXT NOT NULL",


            "date_inscription_visit" => "TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
        ];
        // Itération sur le tableau pour définir les noms et types de colonnes
        foreach ($columns as $name => $type) {
            $databaseHandler->set_column_names($name);
            $databaseHandler->set_column_types($type);
        }
        // Ajout de la table à la base de données
        $databaseHandler->add_table("log");

        // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!









        // Initialisation du gestionnaire de base de données
        $databaseHandler = new DatabaseHandler($dbname, $username);

        // Définition des colonnes et de leurs types dans un tableau associatif
        $columns = [
            "id_projet_img_auto" => "INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
            "id_general" => "LONGTEXT NOT NULL",
            "id_sha1_projet_img" => "LONGTEXT NOT NULL",
            "id_projet_img" => "LONGTEXT NOT NULL",
            "id_user_projet_img" => "LONGTEXT NOT NULL",
            "img_projet_src_img" => "LONGTEXT NOT NULL",
            "extention_img" => "LONGTEXT NOT NULL",
            "img_activate" => "LONGTEXT NOT NULL",
            "date_inscription_projet_img" => "TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
        ];

        // Itération sur le tableau pour définir les noms et types de colonnes
        foreach ($columns as $name => $type) {
            $databaseHandler->set_column_names($name);
            $databaseHandler->set_column_types($type);
        }
        // Ajout de la table à la base de données
        $databaseHandler->add_table("projet_img");
        // Initialisation du gestionnaire de base de données
        $databaseHandler = new DatabaseHandler($dbname, $username);
        // Définition des colonnes et de leurs types dans un tableau associatif
        $columns = [
            "id_social_media" => "INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
            "id_general" => "LONGTEXT NOT NULL",
            "id_user_social_media" => "LONGTEXT NOT NULL",
            "id_sha1_social_media" => "LONGTEXT NOT NULL",
            "name_social_media" => "LONGTEXT NOT NULL",
            "statue_social_media" => "LONGTEXT NOT NULL",
            "title_social_media" => "LONGTEXT NOT NULL",
            "description_social_media" => "LONGTEXT NOT NULL",
            "password_social_media" => "LONGTEXT NOT NULL",
            "visibility_1_social_media" => "LONGTEXT NOT NULL",
            "visibility_2_social_media" => "LONGTEXT NOT NULL",
            "img_projet_src_social_media" => "LONGTEXT NOT NULL",
            "img_projet_visibility_social_media" => "LONGTEXT NULL",
            "date_inscription_social_media" => "TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
        ];
        // Itération sur le tableau pour définir les noms et types de colonnes
        foreach ($columns as $name => $type) {
            $databaseHandler->set_column_names($name);
            $databaseHandler->set_column_types($type);
        }
        // Ajout de la table à la base de données
        $databaseHandler->add_table("social_media");
        $req_sqlxx = 'SELECT * FROM `' . $dbname . '` WHERE `nom_user`="' . $dbname . '" AND `password_user` ="' . $username .
            '" ';
        $databaseHandlerxx = new DatabaseHandler($dbname, $input_2);
        $databaseHandlerxx->getDataFromTable($req_sqlxx, "nom_user");
        if (count($databaseHandlerxx->tableList_info) > 0) {
        } else {
            $databaseHandler->action_sql("INSERT INTO `$dbname` (nom_user,password_user,id_sha1_user) VALUES
('$dbname','$username','$id_sha1_user')");
        }
    } else {
        echo "Erreur lors de la création du fichier.";
    }
}
