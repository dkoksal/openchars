<?php
	require "image.php";
	$ltest = $_POST;
	$newimage = new image_reference($ltest);
	$newimage->writeout();
	return json_encode(array("name"=>"John","tags"=>"2pm","auth"=>"john","license"=>"ccgpla0")); 
//return($ltest);
?>
