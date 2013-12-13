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
listing.prototype.update = function(){
	$("#name").text(this.name);
	$("#tags").text(this.tags);
	$("#auth").text(this.auth);
};
listing.prototype.render = function() {
	$("#csimg").attr("src",this.location);
	$("#csimg").attr("alt",this.name);
	this.update();
};
listing.prototype.tag = function(tags){
	this.tags = tags.split(', ');
};
listing.prototype.set_name = function(name){ this.name = name; };
listing.prototype.get_name = function(){ return this.name; };
listing.prototype.set_location = function(location){ this.location = location; };
listing.prototype.get_location = function(){ return this.location; };
listing.prototype.set_age = function(age){ this.age = age; }
listing.prototype.get_age = function(){ return this.age; }
listing.prototype.set_auth = function(auth){ this.auth = auth; }
listing.prototype.get_auth = function(){ return this.auth; }
listing.prototype.submit = function(){
	$.post("contrib.php",{name:this.name, age:this.age, tags:this.tags, auth:this.auth, layer:this.layer}).done( function(data){
});
}
var l = new listing();
$(document).ready(function(){
	$("#i_name").on("keyup", function() {
		
	});
	$("#i_tags").on("keydown", function() {
		
	});
	$("#i_auth").on("keydown", function() {
		
	});
});
function advmeta(){
	$("#loaddialog").addClass("hidden");
	l.set_age(new Date());
	$("#i_age").text(l.get_age());
//	console.write(get_age());
	$("#metadialog").removeClass("hidden");
};
function advconf(){
	$("#metadialog").addClass("hidden");
	l.set_name( $("#i_name" ).val() );
//	console.log(l.get_name());
	 $("#c_name").text( l.get_name() );
	l.tag( $("#i_tags" ).val() );
//	console.log(l.tags);
	 $("#c_tags").text( l.tags );
	l.set_auth( $("#i_auth" ).val() );
//	console.log(l.get_auth());
	 $("#c_auth").text( l.get_auth() );

	$("#confdialog").removeClass("hidden");
};
function advupld(){
	$("#confdialog").addClass("hidden");
	
	$("#loaddialog").removeClass("hidden");
};
//@license-end
