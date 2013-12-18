<?php
require "image.php"
class image_list{
  private $name;
  private $managed_list;
  private $url;
  function __construct($list){
	if($list['name']){
		$this->name=$list['name'];
	}else{
		$this->name="unknown or misc";
	}
	if($list['']){
		$this->url=$this['url'];		
	}else{
		$this->url=null;
	}
	if($this->url){
		//$this->managed_list.readin=	
	}else{
		$this->managed_list=[new image_reference($blank)];
	}
  }
  function contribute($list){
	$this->managed_list[$this->managed_list.count()+1]=new image_reference($list);
  }
  function retrieve($index){
	$temp=null;
	if($this->managed_list[$index]){
		$temp = $this->managed_list[$index];
	}
	return temp;
  }
  function reload($list){
	if($list['name']){
		$this->name=$list['name'];
	}else{
		$this->name="unknown or misc";
	}
	if($list['']){
		$this->url=$this['url'];		
	}else{
		$this->url=null;
	}
	if($this->url){
		//$this->managed_list.readin=	
	}else{
		$this->managed_list=[new image_reference($blank)];
	}	
  }
}
?>
