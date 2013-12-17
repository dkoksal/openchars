<?php
class image_reference{
  private $img_src;
  private $name;
  private $age;
  private $uid;
  private $license;
  private $tags;
  private $auth;
  private $layer;
  function __construct($list){
	if($list["name"]){
		$this->name=$list["name"];
	}else{
		$this->name=rand(1000000, 9999999) + getdate() + ".png";
	}
	if($list["age"]){
		$this->age=$list["age"];
	}else{
		$this->age=getdate();
	}
	if($list["auth"]){
		$this->auth=$list["auth"];
	}else{
		$this->auth="ano";
	}
	if($list["uid"]){
		$this->uid=$list["uid"];
	}else{
		$this->uid=hash("md5",$this->name+$this->auth+$this->age,false);
	}
	if($list['license']){
		$this->license=$list['license'];
	}else{
		$this->license="License not provided";
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
	//$this->writeout();
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
	$filename = $this->auth + "/" + $this->name;
	$file = fopen($filename, "w");
	if( $file == false ){
	   echo ( "Error in opening new file" );
	   exit();
	}
	fwrite( $file, "<location>" + $this->location + "</location>");
	fwrite( $file, "<name>" + $this->name + "</name>");
	fwrite( $file, "<age>" + $this->age + "</age>");
	fwrite( $file, "<license>" + $this->license + "</license>");
	fwrite( $file, "<tags>" + $this->writetags() + "</tags>");
	fwrite( $file, "<uid>" + $this->uid + "</uid>");
	fwrite( $file, "<auth>" + $this->auth + "</auth>");
	fwrite( $file, "<layer>" + $this->layer + "</layer>" );
	fclose($file);
  }
  function readin($info){

  }
}
?>
