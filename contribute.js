//@license magnet:?xt=urn:btih:0b31508aeb0634b347b8270c7bee4d411b5d4109&dn=agpl-3.0.txt AGPL-V3-or-later
$(document).ready(function(){
	$("#loadimage").mousedown(function(){
		$(this).css("background","silver");
	});
	$("#loadimage").mouseup(function(){
		$(this).css("background","grey");
		$.post("contrib.php",function(data){
			
		});
	});
	$("#filelist").mousedown(function(){
		
	});
	$("#filelist").mouseup(function(){
		$("#file").click();
		    //s("#prev").attr("src",);
	});
});
//@license-end