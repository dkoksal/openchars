//@license magnet:?xt=urn:btih:0b31508aeb0634b347b8270c7bee4d411b5d4109&dn=agpl-3.0.txt AGPL-V3-or-later
function list(location, name){
	this.cache=new Array();
	this.location=location;
	this.name=name;
	this.index=1
};
list.prototype.append = function(location, name, age, auth, layer) {
	this.cache[this.cache.length+1]=new imageListing(location, name, age, auth, layer);
};
list.prototype.render = function(){
	this.cache[index].render();
};
var FIGURES = new list("images/figures.xml","figures",0);
var EYES = new list("images/Eyes.xml","Eyes",1);
var FACE = new list("images/Face.xml","Face",2);
var HAIR = new list("images/Hair.xml","Hair",3);
var HAT = new list("images/Hat.xml","Hat",4);
var SHIRT = new list("images/Shirts.xml","",5);
var NECK = new list("images/Necklace.xml","",6);
var PANTS = new list("images/Pants.xml","",7);
var RING = new list("images/Ring.xml","",8);
var SHOES = new list("images/Shoes.xml","",9);

var test = ["pants","male"];
var l=new imageListing("images/Pants/LthrPlatePantsMale_01.png","Leather Pants 0",2013,"Andrew Friend",1);

PANTS.append("images/Pants/LthrPlatePantsMale_01.png","Leather Pants 0",2013,"Andrew Friend",1);

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
