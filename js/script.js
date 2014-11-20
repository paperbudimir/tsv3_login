$(document).ready(function(){

	// popup modal toggler
	$(".support-ticket-trigger").click(function(e){
		e.preventDefault();
		$("div.support-ticket-fader, div.support-ticket-box").fadeIn();
	});
	$(".close-support-ticket").click(function(e){
		e.preventDefault();
		$("div.support-ticket-fader, div.support-ticket-box").fadeOut();
	});

	// dropdown selector style polisher
	$("select.form-control").change(function(){
		$(this).css("color","#555");
	});
	
});