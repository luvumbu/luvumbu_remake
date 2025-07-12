<?php
require_once "../req_sql/require_once.php";
require_once "../all_projet/1752302357.php";
$json_projet = json_encode($row_projet, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
echo $json_projet;
?>