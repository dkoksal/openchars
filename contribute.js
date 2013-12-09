//@license magnet:?xt=urn:btih:0b31508aeb0634b347b8270c7bee4d411b5d4109&dn=agpl-3.0.txt AGPL-V3-or-later
function listing(location, name, age, auth, layer){
	this.location=location;
	this.name=name;
	this.age=age;
	this.tags=new Array();
	this.auth=auth;
	this.layer=0;
	console.log("loaded location information for" + this.name + this.location);
};
listing.prototype.render = function() {
	$("#csimg").attr("src",this.location);
	$("#csimg").attr("alt",this.name);
};
function advmeta(){
	$("#loaddialog").addClass("hidden");
	$("#metadialog").removeClass("hidden");
};
function advconf(){
	$("#metadialog").addClass("hidden");
	$("#confdialog").removeClass("hidden");
};
function advupld(){
	$("#confdialog").addClass("hidden");
	$("#loaddialog").removeClass("hidden");
};
//@license-end
