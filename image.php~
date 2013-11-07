<?php
class image_reference{
  private $img_src;
  private $part;
  private $creator;
  private $uid;
  private $tags;
  public show(){
    echo("<img src=\"" + $this->img_src + "\"" + "alt=\"" + $this->part +"," + $this->tags + "," + $this->creator + "\"");
  }
  public writeout(){
    $file1=fopen("data/" + $this->part + ".xml", a+);
    $size1=filesize("data/" + $this->part + ".xml");
    $text1="<ref imgsrc='"+$this->img_src+"' bpart='"+ $this->part + "' uid='" + $this->uid + "' creator='" + $this->creator + "' taglist='" + $this->tags + " >";
    fwrite($this->file1, text1);
    $file2=fopen("data/" + $this->part + ".xml", a+);
    $size2=filesize("data/" + $this->part + ".xml");
    $text2="<ref bpart='"+ $this->part + "' uid='" + $this->uid + "' taglist='" + $this->tags + " >";
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