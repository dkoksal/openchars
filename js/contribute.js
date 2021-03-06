//@license magnet:?xt=urn:btih:0b31508aeb0634b347b8270c7bee4d411b5d4109&dn=agpl-3.0.txt AGPL-V3-or-later
function imageListing() {
    this.age = new Date(); 
    var t = ((Math.floor((Math.random()*9999999) + 1000000)).toString() + this.age).toString();
    this.name = t; t = 0;
    //console.log(this.name);
    this.tags = ["#"];
    this.license = "No license provided";
    this.auth = "ano";
    this.location = this.auth+"/"+this.name+".png"; t = (this.name + this.auth + this.age).toString();
    this.uid = CryptoJS.MD5(t);
    this.layer = 9;
};
imageListing.prototype.update = function(){
    $("#name").text(this.name);
    $("#tags").text(this.tags);
    $("#auth").text(this.auth);
};
imageListing.prototype.render = function() {
    $("#csimg").attr("src",this.location);
    $("#csimg").attr("alt",this.name);
    this.update();
};
imageListing.prototype.tag = function(tags){
    this.tags = tags.split(', ');
};
imageListing.prototype.tag_list = function(){
	return this.tags.toString();
};
imageListing.prototype.set_name = function(name){ 
    this.name = name; 
};
imageListing.prototype.get_name = function(){ 
    return this.name.toString() + ".png"; 
};
imageListing.prototype.set_location = function(location){ 
    this.location = location; 
};
imageListing.prototype.get_location = function(){ 
    return this.location; 
};
imageListing.prototype.set_age = function(age){ 
    this.age = age; 
};
imageListing.prototype.get_age = function(){ 
    return this.age; 
};
imageListing.prototype.set_auth = function(auth){ 
    this.auth = auth; 
};
imageListing.prototype.get_auth = function(){ 
    return this.auth; 
};
imageListing.prototype.set_license = function(license){ 
    this.license = license; 
};
imageListing.prototype.get_license = function(){ 
    return this.license; 
};
imageListing.prototype.get_uid = function(){ 
    return this.uid.toString(); 
};
imageListing.prototype.submit = function(){
    $.post("contrib.php",{name:this.get_name(), age:this.get_age(), auth:this.get_auth(), uid:this.get_uid(), license:this.license, tags:this.tags, layer:this.layer})
     .done( function(data){
     	  $("#loc").html(data.name);
     	  console.log("done?");
     	  //$("#c_name").html(this.get_name());
     	  //$("#c_tags").html(this.tag_list());
     	  //$("#c_auth").html(this.get_auth());
     	  //$("#c_lice").html(this.get_license());
        alert(data);
     })
     .fail( function(data) {
	     alert( data );
     })
     .fail( function(){
	     alert("no PHP server");
     });
};
var ContributeObject = new imageListing();
function advmeta(){
    $("#loaddialog").addClass("hidden");
    ContributeObject.set_age(new Date());
    $("#i_age").text(ContributeObject.get_age());
//    console.write(get_age());
    $("#metadialog").removeClass("hidden");
};
function advconf(){
    $("#metadialog").addClass("hidden");
    ContributeObject.set_name( $("#i_name" ).val() );
     //$("#c_name").text( ContributeObject.get_name() );
    ContributeObject.tag( $("#i_tags" ).val() );
     //$("#c_tags").text( ContributeObject.tags );
    ContributeObject.set_auth( $("#i_auth" ).val() );
     //$("#c_auth").text( ContributeObject.get_auth() );
    ContributeObject.set_license( $("#i_lice").val() );
     //$("#c_lice").text( ContributeObject.get_license() );
     ContributeObject.submit();
    $("#confdialog").removeClass("hidden");
};
function advupld(){
    $("#confdialog").addClass("hidden");
    $("#loaddialog").removeClass("hidden");
};
//@license-end
