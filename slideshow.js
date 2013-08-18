$(document).ready(function(){
	function slideshow(name){
		this.nom = name;
		var g = "cels/" + this.nom + ".xml";
		this.lst = "";
		$.get(g, function(data){
			this.lst = data;
			alert(this.lst);
		});
		this.index = 0;
	};
	slideshow.prototype.gimgsrc = function(){
		alert(this.lst);
		$('#cel').attr("src",this.lst.documentElement.childNodes[i].nodeValue);
	};
	slideshow.prototype.increment = function(){
		alert(this.index);
		alert(this.lst);
		if(this.index<this.lst.childNodes.length){
			this.index++;
		}
	};
	slideshow.prototype.decrement = function(){
		if(this.index>0){
			this.index--;
		}
		alert(this.index);
	};
	var ss = new slideshow("figures");
	$('#cel').click(
		function(){}
	);
	$('#cel').hover(
		function(){$('#celLbl').text(ss.index);},
		function(){$('#celLbl').text(ss.nom);}
	);
	$('#upBtn').click(
		function(){$('#celLbl').text(ss.nom);}
	);
	$('#dnBtn').click(
		function(){$('#celLbl').text(ss.nom);}
	);
	$('#celLbl').hover(
		function(){$('#celLbl').text(" - Activated Cell - ");},
		function(){$('#celLbl').text(ss.nom);}
	);
	$('#bkBtn').click(
		function(){
			ss.decrement();
			ss.gimgsrc();
		}
	);
	$('#fwBtn').click(
		function(){
			ss.increment();
			ss.gimgsrc();
		}
	);
}); 
