<?php
require "image.php";
$list['name'] = $_POST('name');
$list['age'] = $_POST('age');
$list['tags'] = $_POST('tags');
$list['auth'] = $_POST('auth');
$list['layer'] = $_POST('layer');
$newimage = new image_reference($_POST);
?>
