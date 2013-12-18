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
	if (!file_exists($this->auth)) {
		mkdir($this->auth, 0755, true);
	}
	$filename = $this->auth + "/" + $this->name + ".xml";
	$file = fopen($filename, "w");
	if( $file == false ){
	   echo ( "Error in opening new file" );
	   exit();
	}
	$temp = "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\" ?>";
	$temp += "<location>" + $this->location + "</location>";
	$temp += "<name>" + $this->name + "</name>";
	$temp += "<age>" + $this->age + "</age>";
	$temp += "<license>" + $this->license + "</license>";
	$temp += "<tags>" + $this->writetags() + "</tags>";
	$temp += "<uid>" + $this->uid + "</uid>";
	$temp += "<auth>" + $this->auth + "</auth>";
	$temp += "<layer>" + $this->layer + "</layer>";
	fwrite( $file, $temp);
	fclose($file);
  }
  function readin($info){

  }
}
?>
