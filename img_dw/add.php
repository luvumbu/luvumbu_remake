<?php
session_start();

// --- Chemins ---
$original_file = '../img_dw/uploads/' . $_SESSION["name"] . $_SESSION["extention_img"]; // fichier original
$copy_dir = '../img_dw/uploads/copy/'; // dossier pour les copies

// Créer le dossier copy s'il n'existe pas
if (!is_dir($copy_dir)) {
    mkdir($copy_dir, 0755, true);
}

// Vérifier que le fichier original existe
if (!file_exists($original_file)) {
    die("Le fichier original n'existe pas !");
}

// --- Fonction de redimensionnement ---
function create_resized_copy($source_file, $destination_file, $max_size) {
    list($width, $height, $type) = getimagesize($source_file);

    if ($width > $height) {
        $new_width = $max_size;
        $new_height = intval($height * $max_size / $width);
    } else {
        $new_height = $max_size;
        $new_width = intval($width * $max_size / $height);
    }

    $new_image = imagecreatetruecolor($new_width, $new_height);

    switch ($type) {
        case IMAGETYPE_JPEG:
            $source_image = imagecreatefromjpeg($source_file);
            break;
        case IMAGETYPE_PNG:
            $source_image = imagecreatefrompng($source_file);
            imagecolortransparent($new_image, imagecolorallocatealpha($new_image, 0, 0, 0, 127));
            imagealphablending($new_image, false);
            imagesavealpha($new_image, true);
            break;
        case IMAGETYPE_GIF:
            $source_image = imagecreatefromgif($source_file);
            break;
        default:
            die("Type d'image non supporté !");
    }

    imagecopyresampled($new_image, $source_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

    switch ($type) {
        case IMAGETYPE_JPEG:
            imagejpeg($new_image, $destination_file, 90);
            break;
        case IMAGETYPE_PNG:
            imagepng($new_image, $destination_file);
            break;
        case IMAGETYPE_GIF:
            imagegif($new_image, $destination_file);
            break;
    }

    imagedestroy($source_image);
    imagedestroy($new_image);

    echo "Copie redimensionnée créée : $destination_file<br>";
}

// --- Tailles à générer ---
//$sizes = array(400, 800, 1200);
$sizes = array(400);


foreach ($sizes as $size) {
    $destination_file = $copy_dir . $_SESSION["name"] . '_' . $size . 'px' . $_SESSION["extention_img"];
    create_resized_copy($original_file, $destination_file, $size);
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
         
            background-color: black;
            margin: 0;
            padding: 0;

       
        }
    </style>
</body>

</html>


<meta http-equiv="refresh" content="1; URL=../index.php">