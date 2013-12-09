//@license magnet:?xt=urn:btih:0b31508aeb0634b347b8270c7bee4d411b5d4109&dn=agpl-3.0.txt AGPL-V3-or-later
function list(location, name){
	this.location=location;
	this.name=name;
	this.layer=0;
	this.index=0;
	this.cache=new Array();
};
list.prototype.append = function() {
//	this.cache(this.cache.length+1) = new listing(,,,,,this.layer);
};
list.prototype.render = function(){
	this.cache(index).render();
}

var test = ["pants","male"];
var l=new listing("images/Pants/LthrPlatePantsMale_01.png","Leather Pants 0",2013,"Andrew Friend",1);

function nextimg(){
	l.render();
};
function previmg(){
};
function getlistsegment(){
};
function testrender(){
	$("#csimg").attr("src","images/Pants/LthrPlatePantsMale_01.png");
	$("#csimg").attr("alt","pants2");
};
//license-end
