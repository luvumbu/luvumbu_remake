<?php 
 
require_once "data/all/index_sesstion_start.php";
$url = new Give_url();
// Utilisation de la méthode split_basename pour séparer par "_"
$url->split_basename('__');
$url_ = $url->get_elements()[0];

$url__ = "../blog.php/" . $url_;
header("Location: $url__");
exit();

?>