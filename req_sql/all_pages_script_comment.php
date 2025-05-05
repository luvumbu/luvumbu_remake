<?php

// fichier : creer_fichier_projet.php
$nomFichier = "../all_comment/$id_sha1_comment.php";

 


$contenu = <<<EOT
<?php
\$row_projet = 
array(
    array(
        "id_sha1_user" => "$id_sha1_user",
        "id_comment_text" => "$id_comment_text", 
        "id_sha1_comment" => "$id_sha1_comment", 
        "date_inscription_comment" => "$date_inscription_comment", 
        "id_ip_4" => "$SERVER_ADDR", 
        "id_ip_5" => "$id_ip_5", 
        "id_ip_6" => "$id_ip_6",
    ),
);
EOT;

// Ouvre le fichier en écriture (écrase s’il existe)
$fichier = fopen($nomFichier, "w");

// Écrit le contenu dans le fichier
fwrite($fichier, $contenu);

// Ferme le fichier
fclose($fichier);

echo "Le fichier 'projet.txt' a été créé avec succès.";
