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

	// on blur validation
	$('.has-feedback .form-control').blur(function(){
		if($(this).val().length > 0) {
			$(this).parent('.has-feedback').addClass('has-success');
			$(this).parent('.has-feedback').removeClass('has-error');
		} else {
			$(this).parent('.has-feedback').removeClass('has-success');
			$(this).parent('.has-feedback').addClass('has-error');
		}
	});

	// login authentification
	$('#login-submit').click(function(e){
		e.preventDefault();
		if($(this).attr('disabled', 'false')) {

			$('#error-message').text('');
			var form = $('#login-form');
			var rememberme;
			if($('#myonoffswitch').is(":checked")){
				rememberme = 1;
			}else{
				rememberme = 0;
			}
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
					}
					
				}
			});

		}		
	});
	
});