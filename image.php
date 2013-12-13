<?php
class image_reference{
  private $img_src;
  private $name;
  private $age;
  private $uid;
  private $tags;
  private $auth;
  private $layer;
  public __construct($list){
	if($list['img_src']){
		$this->img_src=$list['img_src'];
	}
	if($list['name']){
		$this->name=$list['name'];
	}
	if($list['age']){
		$this->age=$list['age'];
	}else{
		$this->age=getdate();
	}
	if($list['tags']){
		$this->tags=$list['tags'];
	}else{
		$this->tags[0]="#";
	}
	if($list['uid']){
		$this->uid=$list['uid'];
	}
	if($list['auth']){
		$this->auth=$list['auth'];
	}else{
		$this->auth="anonymous";
	}
	if($list['layer']){
		$this->layer=$list['layer'];
	}else{
		$this->layer=9;
	}
	$this->writeout();
  }
  public show(){
	
  }
  private writetags(){
/*
	$temp = null;
	for($i=0;i<count($this->tags);++$i){
		$temp += "<t>" + $this->tags[i] + "</t>";
	}
	return $temp;
*/
  }
  public writeout(){
/*	
$filename=$this->auth + "/" $this->name + $this.uid;
	$file = fopen($filename);
	if( $file == false )
	{
	   echo ( "Error in opening new file" );
	   exit();
	}
	fwrite( $file, 
		"<location>" + + "</location>" + 
		"<name>" + $this->name + "</name>" + 
		"<age>" + $this->age + "</age>" + 
		"<tags>" + $this->writetags() + "</tags>" + 
		"<uid>" + $this->uid + "</uid>" + 
		"<auth>" + $this->auth + "</auth>" + 
		"<layer>" + $this->layer + "</layer>" )
	fclose( $file )
*/
  }
  public readin($info){

  }
}
?>
