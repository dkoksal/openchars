<?php
require "image.php";
$ltest = $_POST;
$newimage = new image_reference($ltest);
$newimage->writeout();
echo("test");
?>
