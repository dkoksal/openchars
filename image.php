<?php
class image_reference{
  private $img_src;
  private $name;
  private $age;
  private $uid;
  private $tags;
  private $auth;
  private $layer;
 /* function __construct(){
	  $this->name=rand(1000000, 9999999) + ".png";
	  $this->img_src="charas/"+$this->name;
	  $this->age=getdate();
	  $this->uid=hash("md5",$this->name+$this->auth+$this->age,false);
	  $this->tags[0]="#";
	  $this->auth="anonymous";
	  $this->layer=0;
  } */
  function __construct($list){
	if($list["name"]){
		$this->name=$list["name"];
	}else{
		$this->name=rand(1000000, 9999999) + ".png";
	}
	if($list["age"]){
		$this->age=$list["age"];
	}else{
		$this->age=getdate();
	}
	if($list["auth"]){
		$this->auth=$list["auth"];
	}else{
		$this->auth="anonymous";
	}
	if($list["uid"]){
		$this->uid=$list["uid"];
	}else{
		$this->uid=hash("md5",$this->name+$this->auth+$this->age,false);
	}
	if($list["tags"]){
		$this->tags=$list["tags"];
	}else{
		$this->tags[0]="#";
	}
	if($list["layer"]){
		$this->layer=$list["layer"];
	}else{
		$this->layer=9;
	}
	if($list["img_src"]){
		$this->img_src=$list["img_src"];
	}else{
		$this->img_src=$this->auth+"/"+$this->name;
	}
	$this->writeout();
  }
  function show(){
	                                                     
  }
  function writetags(){
	$temp = null;
	for($i=0;i<count($this->tags);++$i){
		$temp += "<t>" + $this->tags[i] + "</t>";
	}
	return $temp;
  }
  function writeout(){
	$filename = $this->auth + "/" + $this->name + $this.uid;
	$file = fopen($filename, "w");
	if( $file == false )
	{
	   echo ( "Error in opening new file" );
	   exit();
	}
	fwrite( $file, 
		"<location>" + $this->location + "</location>" + 
		"<name>" + $this->name + "</name>" + 
		"<age>" + $this->age + "</age>" + 
		"<tags>" + $this->writetags() + "</tags>" + 
		"<uid>" + $this->uid + "</uid>" + 
		"<auth>" + $this->auth + "</auth>" + 
		"<layer>" + $this->layer + "</layer>" );
	fclose($file);
  }
  function readin($info){

  }
}
?>
