<?php
require "image_upload.php"
if($_POST('contribute')){
  $image = new image_reference();
  $image->readin($_POST('contribute'));
  $image->writeout();
}
?>