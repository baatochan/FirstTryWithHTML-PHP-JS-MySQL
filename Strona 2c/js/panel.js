$(function(){
	$("#panel").css("left","-220px");
	$(".slide_button").toggle(function(){
		$("#panel").animate({left: "0px"}, 500 );
		$(this).addClass("zamknij");
		return false;
	},
	function(){
		$("#panel").animate({left: "-220px"}, 500 );
		$(this).removeClass("zamknij");
		return false;
	});
});