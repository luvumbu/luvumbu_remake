<?php
// fichier : creer_fichier_projet.php
$nomFichier = "../all_comment/$id_sha1_comment.php";

// Contenu à ajouter dans le tableau si le fichier existe déjà
$nouveauContenu = <<<EOT
    array(
        "id_sha1_user" => "$id_sha1_user",
        "id_comment_text" => "$id_comment_text", 
        "id_sha1_comment" => "$id_sha1_comment", 
        "date_inscription_comment" => "$date_inscription_comment", 
        "id_ip_4" => "$SERVER_ADDR", 
        "id_ip_5" => "$id_ip_5", 
        "id_ip_6" => "$id_ip_6"
    ),
EOT;

// Si le fichier n'existe pas, on le crée avec tout l'encadrement PHP
if (!file_exists($nomFichier)) {
    $contenuInitial = <<<EOT
<?php
\$row_projet_comment = 
array(
$nouveauContenu
);
?>
EOT;

    file_put_contents($nomFichier, $contenuInitial);
    echo "Fichier créé avec le contenu initial.";
} else {
    // Le fichier existe, on lit son contenu
    $contenu = file_get_contents($nomFichier);

    // On insère juste avant la dernière parenthèse fermante `);`
    $contenu = preg_replace('/\);\s*\?>/', "$nouveauContenu\n); ?>", $contenu);

    file_put_contents($nomFichier, $contenu);
    echo "Contenu ajouté au fichier existant.";
}
?>
