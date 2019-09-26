/*
 This is kissu's very proprietary JS script that requires extensive legality.
 
 GPL 3.0 Liscence terms and conditions
*/

$(document).ready(function(){
	var top_bar = $("#thread-links").clone(true);
	top_bar.find("#thread-return").attr("id", "thread-return-top");
	top_bar.find("#thread-top").attr("id", "thread-top-bottom");
	console.log($("#thread-top-bottom"));
	top_bar.find("#thread-catalog").attr("id", "thread-catalog-top");
	top_bar.insertBefore($("form[name='postcontrols']"));
	$("<br/><hr/>").insertBefore($("form[name='postcontrols']"));
	
	$("#thread-top-bottom").text("[Go to Bottom]");
	$("#thread-top-bottom").attr('href', '#bottom');
});