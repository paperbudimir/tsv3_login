$(document).ready(function(){

	// SUPPORT TICKET SCRIPTS
	$(".support-ticket-trigger").click(function(e){
		e.preventDefault();
		$("div.support-ticket-fader, div.support-ticket-box").fadeIn();
	});

	$(".close-support-ticket").click(function(e){
		e.preventDefault();
		$("div.support-ticket-fader, div.support-ticket-box").fadeOut();
	});

	$("#submit-ticket").click(function(e){
		e.preventDefault();
		
		$(this).html('<i class="fa fa-refresh fa-spin"></i>');

		// TEMPORARELY ADDED TO SIMULATE LOADING TIME 
		setTimeout(function(){
			$(".form-step-1").slideUp(200);
			setTimeout(function(){
				$(".form-step-2").slideDown(200);
			}, 200);

			// TEMPORARELY ADDED TO SIMULATE THANKS MESSAGE 
			var form = $("#ticket-form");
			var user = $("[name='user']", form).val();
			if(user.length > 0) {
				$("span.thank-user").html("Thank you " + user + ". ");
			}			
		}, 3000);
	});

	// DROPDOWN SELECTOR STYLE FIX
	$("select.form-control").change(function(){
		$(this).css("color","#555");
	});


	// LOGIN FORM VALIDATION
	$('.has-feedback .form-control').blur(function(){
		var parent = $(this).parent('.has-feedback');
		var fieldname = "Field";

		if (parent.hasClass('user-field')) {
			fieldname = "Username";
		} else if (parent.hasClass('pass-field')) {
			fieldname = "Password";
		}

		if ($(this).val().length == 0) {
			// field empty
			parent.removeClass('has-success').addClass('has-error');
			$("#error-message").html(fieldname + " can't be blank!");
		} else if ($(this).val().length < 6) {
			// field has les than 6 chars
			parent.removeClass('has-success').addClass('has-error');
			$("#error-message").html(fieldname + " must have minimum 6 characters!");
		} else {
			// validation positive
			parent.addClass('has-success').removeClass('has-error');
			$("#error-message").html("");
		}
	});

	function shakeForm() {
		var p = [5, 10, 5, 0, -5, -10, -5, 0];
		var x = $('.shake').offset().left;
		var speed = 12;
		for(var i = 0; i < 2; i++) {
			$.each(p, function() {
				$('.shake').animate({'left': this }, speed);
			});
		}
	}

	$('#login-submit').click(function(e){
		e.preventDefault();
		if($(this).attr('disabled', 'false')) {

			$('#error-message').text('');
			var form = $('#login-form');
			var rememberme;
			($('#myonoffswitch').is(":checked")) ? rememberme = 1 :	rememberme = 0;

			data = {
				username : $("[name='username']", form).val(),
				password : $("[name='password']", form).val(),
				rememberme : rememberme,
			}
			
			$.ajax({
				type: 'POST',
				url: 'http://31.192.124.222/login',
				data: data,
				success: function(data){
					if(data == 1){
						location.reload();						
					}else{
						$('.has-feedback').removeClass('has-success').addClass('has-error');
						$('#error-message').html(data);
						$('#login-submit').removeAttr('disabled');
						shakeForm();
					}
					
				}
			});

		}		
	});
	
});