<?php
class image_reference{
  private $img_src;
  private $name;
  private $creator;
  private $uid;
  private $tags;
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
	}
	if($list['tags']){
		$this->tags=$list['tags'];
	}
	if($list['uid']){
		$this->uid=$list['uid'];
	}
	if($list['tags']){
		$this->tags=$list['tags'];
	}
	if($list['layer']){
		$this->layer=$list['layer'];
	}
  }
  public show(){
    echo("<img src=\"" + $this->img_src + "\"" + "alt=\"" + $this->part +"," + $this->tags + "," + $this->creator + "\"");
  }
  public writeout(){
    $siteversion=fopen("data/site/" + $this->part + ".xml", a+);
    $sitesize=filesize("data/site/" + $this->part + ".xml");
    $sitetext="<ref imgsrc='"+$this->img_src+"' bpart='"+ $this->part + "' uid='" + $this->uid + "' creator='" + $this->creator + "' taglist='" + $this->tags + " >";
    fwrite($this->file1, text1);
    $userversion=fopen("data/user/" + $this->part + ".xml", a+);
    $usersize=filesize("data/user/" + $this->part + ".xml");
    $usertext="<ref bpart='"+ $this->part + "' uid='" + $this->uid + "' taglist='" + $this->tags + " >";
    fwrite($this->file2, text2);
  }
  public readin($info){
    $this->img_src = $info['img'];
    $this->part = $info['part'];
    $this->creator = $info['creator'];
    $this->uid = $info['uid'];
    $this->tags = $info['tags'];
  }
}
?>
