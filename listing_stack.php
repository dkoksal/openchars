<?php
require "image_list.php"
class gallery_stack{
	$figures;
	$head;
	$clothes;
	$shoes;
	$other;
  function __constuct($list){
	if($list["figuresurl"]){
	}else{
		$this->figures=new image_list($blank);
	}
	if($list["headurl"]){
	}else{
		$this->figures=new image_list($blank);
	}
	if($list["clothesurl"]){
	}else{
		$this->figures=new image_list($blank);
	}
	if($list["shoessurl"]){
	}else{
		$this->figures=new image_list($blank);
	}
	if($list["otherurl"]){
	}else{
		$this->figures=new image_list($blank);
	}
  }
}
?>
