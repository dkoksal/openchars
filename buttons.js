//@license magnet:?xt=urn:btih:0b31508aeb0634b347b8270c7bee4d411b5d4109&dn=agpl-3.0.txt AGPL-V3-or-later
$(document).ready(function(){
	$("#previmg").on("click", function() {
	});
	$("#nextimg").on("click", function() {
		l.render();
	});
	$("#upcat").on("click", function() {
	});
	$("#downcat").on("click", function() {
	});
	$("#filter").on("click", function() {
	});
	$("#saveas").on("click", function() {
	});
	$("#uplayer").on("click", function() {
	});
	$("#downlayer").on("click", function() {
	});
	$("#advancetometa").on("click", function() {
		advmeta();
	});
	$("#advancetoconfirm").on("click", function() {
		advconf();
	});
	$("#advancetoupload").on("click", function() {
		advupld();
	});
	$(".button").mousedown(function(){
		$(this).css("border-color","grey");
	});
	$(".button").mouseup(function(){
		$(this).css("border-color","silver");
	});
});
//license-end
