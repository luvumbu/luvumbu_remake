<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Explorateur de fichiers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 40px;
        }
        h1 {
            text-align: center;
        }
        ul {
            list-style: none;
            padding: 0;
            max-width: 800px;
            margin: 0 auto;
        }
        li {
            background: white;
            margin: 10px 0;
            padding: 15px;
            border-left: 5px solid #007BFF;
            transition: background 0.3s;
        }
        li:hover {
            background: #e9f5ff;
        }
        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }
        .folder {
            color: #28a745;
        }
    </style>
</head>
<body>

<h1>Contenu de la racine</h1>
<ul>
<?php
$directory = __DIR__; // Racine (le dossier où est ce fichier)

$items = scandir($directory);

foreach ($items as $item) {
    if ($item === '.' || $item === '..') continue;

    $path = $directory . DIRECTORY_SEPARATOR . $item;
    $isDir = is_dir($path);
    $class = $isDir ? 'folder' : 'file';

    echo "<li><a class='$class' href='$item' target='_blank'>" . htmlspecialchars($item) . "</a></li>";
}
?>
</ul>

</body>
</html>
