$(function(){
	var sidebar = false;
	$(".sb_btn").click(function(){
		$("#sidebar").toggleClass("sb_show");
	})
	$("#sidebar a").click(function(){
		$("#sidebar").removeClass("sb_show");
		location.reload();
	})
})