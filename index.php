<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login || Teamskeet.com</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		
		<link rel="stylesheet" href="css/bootstrap.min.css" />	
		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/styles.css" />
		<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
		<link rel="stylesheet" href="css/fancy-checkbox.css" />
		<link rel="stylesheet" type="text/css" href="css/QapTcha.jquery.css" media="screen" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	   	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	   	<!--[if lt IE 9]>
	   		<link rel="stylesheet" href="css/ie8specs.css" />
	   		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	   		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	   	<![endif]-->
	</head>

	<body>
		<!-- Support ticket transparent black fader div -->
		<div class="support-ticket-fader"></div>

		<!-- Support ticket popup box -->
		<div class="support-ticket-box col-xs-12 col-sm-8 col-md-6 col-lg-4">
			<div class="support-ticket-container">

				<i class="fa fa-times-circle fa-2x close-support-ticket hidden-xs"></i>

				<div class="support-ticket-head row form-step-1">
					<h3><center>Sorry you are having issues logging in. Make a ticket and we will solve the problem as soon as possible. :)</center></h3>
				</div>
				<!-- end of .form-step-2 -->
				<div class="support-ticket-head row form-step-2">
					<h3><center><span class="thank-user">&nbsp;</span>We received your ticket.</center></h3>
				</div>
				<!-- end of .form-step-2 -->
				<!-- end of .support-ticket-head -->

				<div class="support-ticket-body col-xs-12 form-step-1">

					<br />

					<form id="ticket-form" action="" method="POST" role="form">
						<div class="form-group">
				        	<div class="input-group">
				          		<div class="input-group-addon">
				          			<i class="fa fa-envelope fa-2x"></i>
				          		</div>
				          		<input type="text" class="form-control input-lg" name="email" placeholder="E-mail">
				        	</div>
							<!-- end of .input-group -->

				        	<div class="input-group">
				          		<div class="input-group-addon">
				          			<i class="fa fa-user fa-2x"></i>
				          		</div>				          	
    							<input type="text" class="form-control input-lg" name="user" placeholder="Username">
				        	</div>
							<!-- end of .input-group -->

				        	<div class="input-group">
				          		<div class="input-group-addon">
				          			<i class="fa fa-question-circle fa-2x"></i>
				          		</div>
								<select class="form-control input-lg" name="subject">
									<option selected="selected" disabled>Subject</option>
									<option>Billing</option>
									<option>Videos and/or Pics are not working</option>
									<option>Other</option>
								</select>
				        	</div>
							<!-- end of .input-group -->

				        	<div class="input-group bottom-border">
				          		<div class="input-group-addon">
				          			<i class="fa fa-comment fa-2x"></i>
				          		</div>
    							<textarea class="form-control input-lg" name="message" placeholder="Messsage"></textarea>
				        	</div>
							<!-- end of .input-group -->
							
							<br />

							<div class="form-group ticket-submit-line">
								<div class="input-group pull-left col-xs-12 col-sm-7 bottom-border">
						          	<div class="input-group-addon">
						          		<i class="fa fa-lock fa-2x"></i>
						          	</div>				          	
						          	<div class="form-control input-lg QapTcha"></div>
					        	</div>

								<button id="submit-ticket" type="submit" class="btn btn-primary btn-lg pull-right col-xs-12 col-sm-3" name="submit" disabled >SUBMIT</button>
								<button class="btn btn-default close-support-ticket col-xs-12 visible-xs">Close</button>
							</div>
							<!-- end of .form-group -->

				      	</div>
						<!-- end of .form-group -->
					</form>

				</div>
				<!-- end of .form-step-1 -->
				<div class="support-ticket-body col-xs-12 form-step-2">
					<br />
					<br />
					<center>
						<p>We will email you with a solution as soon as possible.</p>
						<p>If you do not receive an email, please contact us at <a href="mailto:help@teamskeet.com">help@teamskeet.com</a>.</p>
						<p>Thank you.</p>
					</center>
				</div>
				<!-- end of .form-step-2 -->
				<!-- end of .support-ticket-body -->
			</div>
			<!-- end of .support-ticket-container -->
		</div>
		<!-- end of .support-ticket-box -->

		<!-- .navbar for bigger screens -->
		<nav class="navbar navbar-default navbar-fixed-top hidden-xs" role="navigation">
			<div class="container">
		   	<div class="col-sm-7 navbar-left"><span class="green">Team</span>Skeet.com: We Play Dirty...</div>
		   	<div class="col-sm-5 navbar-right">
				<button type="button" class="btn pull-right btn-default support-ticket-trigger">Create a Support Ticket</button>
				<button type="button" class="btn pull-right btn-link">Help</button>
		   	</div>
			</div>
		</nav>
		
		<!-- .navbar for smaller screens -->
		<nav class="navbar navbar-default navbar-fixed-top visible-xs" role="navigation">
			<div class="container">
		   	<div class="col-xs-8 navbar-left"><span class="green">Team</span>Skeet.com</div>
		   	<div class="col-xs-4 navbar-right">
				<a href="https://www.geckoboard.com/" type="button" class="btn pull-right btn-success" id="topJoinButton" >JOIN NOW!</a>
		   	</div>
			</div>
		</nav>

		<div class="container">
			<div class="row shadow" id="main-content">
				
				<div class="col-sm-6 pull-right cta-area">
					<div class="col-xs-12 cta-heading">
						<center>
							<h1 class="green"><strong>Not a Member?</strong></h1>
							<span>Lorem ipsum dolor sit amer, consectetur adipiscing</span>
						</center>
					</div>

					<div class="col-xs-12 benefits">
						<div class="col-md-6">
							<i class="fa fa-check-square-o green"></i> 
							7 Updates a Week
						</div>

						<div class="col-md-6">
							<i class="fa fa-check-square-o green"></i> 
							Hi Quality Picture Sets
						</div>

						<div class="col-md-6">
							<i class="fa fa-check-square-o green"></i> 
							Unlimited Downloads
						</div>

						<div class="col-md-6">
							<i class="fa fa-check-square-o green"></i> 
							Suggest Your Fantasy
						</div>

						<div class="col-md-6">
							<i class="fa fa-check-square-o green"></i> 
							1000 Porn Stars
						</div>

						<div class="col-md-6">
							<i class="fa fa-check-square-o green"></i> 
							20 Niches
						</div>

						<div class="col-md-6 hidden-xs">
							<i class="fa fa-check-square-o green"></i> 
							24/7 Customer Support
						</div>

						<div class="col-md-6 hidden-xs">
							<i class="fa fa-check-square-o green"></i> 
							1300 Scenes
						</div>

						<div class="col-md-6 hidden-xs">
							<i class="fa fa-check-square-o green"></i> 
							Weekly Giveaways
						</div>

						<div class="col-md-6 hidden-xs">
							<i class="fa fa-check-square-o green"></i> 
							Fast Streaming
						</div>
					</div>
					<!-- end of .benefits -->

					<div class="col-xs-12">
						<a href="#" class="btn btn-success btn-lg btn-block cta-button" role="button">
							Sign Up Here! <!-- <i class="fa fa-arrow-circle-o-right"></i> -->
						</a>
					</div>
				</div>
				<!-- end of .col-sm-6 -->

				<hr class="visible-xs top-divider" />

				<div class="col-sm-6 pull-left">
					<form id="login-form" class="shake" role="form" action="http://members.teamskeet.com/login" method="POST">
						<div class="form-group">
				        	<div class="input-group user-field has-feedback">
				          		<div class="input-group-addon">
				          			<i class="fa fa-user fa-2x"></i>
				          		</div>
				          		<input type="text" class="form-control input-lg login-username" name="username" data-value="Username" value="Username">
				          		<i class="fa fa-2x fa-check form-control-feedback" aria-hidden="true"></i>
    							<i class="fa fa-2x fa-remove form-control-feedback" aria-hidden="true"></i>
				        	</div>
							<!-- end of .input-group -->

				        	<div class="input-group pass-field has-feedback">
				          		<div class="input-group-addon">
				          			<i class="fa fa-key fa-2x"></i>
				          		</div>				          	
    							<input type="text" class="form-control input-lg login-password" name="password" data-value="Password" value="Password">
    							<i class="fa fa-2x fa-check form-control-feedback" aria-hidden="true"></i>
    							<i class="fa fa-2x fa-remove form-control-feedback" aria-hidden="true"></i>
				        	</div>
							<!-- end of .input-group -->
				      	</div>
						<!-- end of .form-group -->
						
						<div id="error-message" class="pull-left text-danger small"></div>
				      	<button type="button" class="btn pull-right btn-link">Forgot Details?</button>

						<div class="form-group">
							<div class="input-group">
					          	<div class="input-group-addon">
					          		<i class="fa fa-lock fa-2x"></i>
					          	</div>				          	
					          	<div class="form-control input-lg QapTcha"></div>
				        	</div>
						</div>
						<!-- end of .form-group -->

						<div class="col-xs-12 login-remember-line">
							<div class="input-group pull-left btn-block submit-line">					          	
								<div class="onoffswitch pull-left">
								    <input type="checkbox" name="remember" class="onoffswitch-checkbox" id="myonoffswitch">
								    <label class="onoffswitch-label" for="myonoffswitch">
									    <span class="onoffswitch-inner"></span>
									    <span class="onoffswitch-switch"></span>
								    </label>
							    </div> 

							    <div class="pull-left remember-label">Remember me</div>

								<button id="login-submit" type="submit" class="btn btn-primary btn-lg pull-right" name="submit" disabled="disabled">Login</button>
							</div>
						</div>
						<!-- end of .login-remember-line -->

				   </form>
					<div class="col-xs-12 form-note"><center class="small text-muted">* NOTE: If you are upgrading or if you have just purchased a membership it may take up to 15 mins for your login to work properly, if there is a problem that persists after the first 15 mins please contact us. Do not attempt to login numerous times as you may get blocked. IP address and access time recorded for security purposes. Unauthorized access attempts will be emailed to your service provider for immediate suspension and cancellation.</center></div>

					<button type="button" class="btn btn-link btn-block visible-xs support-ticket-trigger">Create a Support Ticket</button>
				</div>
				<!-- end of .col-sm-6 -->

			</div>
			<!-- end of .row -->

			<div class="row hidden-xs">
				<div class="col-xs-12 sitelogos shadow" style="background: #fff; margin: 2em 0; padding: 2em;">
					<center>
						<a href="http://www.innocenthigh.com/" alt=""><img src="img/logos/logo_01.png" alt="Innocent High" title="Innocent High"/></a>
						<a href="http://www.oyeloca.com/" alt=""><img src="img/logos/logo_02.png" alt="Oye Loca" title="Oye Loca"/></a>
						<a href="http://www.exxxtrasmall.com/" alt=""><img src="img/logos/logo_03.png" alt="Exxxtra Small" title="Exxxtra Small"/></a>
						<a href="http://www.tittyattack.com/" alt=""><img src="img/logos/logo_04.png" alt="Titty Attack" title="Titty Attack"/></a>
						<a href="http://www.therealworkout.com/" alt=""><img src="img/logos/logo_05.png" alt="The Real Workout" title="The Real Workout"/></a>
						<a href="http://www.povlife.com" alt=""><img src="img/logos/logo_06.png" alt="POV Life" title="POV Life"/></a>
						<a href="http://www.herfreshmanyear.com/" alt=""><img src="img/logos/logo_07.png" alt="Her Freshman Year" title="Her Freshman Year"/></a>
						<a href="http://www.teensdoporn.com/" alt=""><img src="img/logos/logo_08.png" alt="Teens Do Porn" title="Teens Do Porn"/></a>
						<a href="http://www.thisgirlsucks.com/" alt=""><img src="img/logos/logo_09.png" alt="This Girl Sucks" title="This Girl Sucks"/></a>
						<a href="http://www.solointerviews.com/" alt=""><img src="img/logos/logo_10.png" alt="Solo Interviews" title="Solo Interviews"/></a>
						<a href="http://www.teencurves.com/" alt=""><img src="img/logos/logo_11.png" alt="Teen Curves" title="Teen Curves"/></a>
						<a href="http://www.shesnew.com" alt=""><img src="img/logos/logo_12.png" alt="She's New" title="She's New"/></a>
						<a href="http://www.teenyblack.com" alt=""><img src="img/logos/logo_13.png" alt="Teeny Black" title="Teeny Black"/></a>
						<a href="http://www.selfdesire.com" alt=""><img src="img/logos/logo_14.png" alt="Self Desire" title="Self Desire"/></a>
						<a href="http://www.rubteen.com" alt=""><img src="img/logos/logo_15.png" alt="Rub Teen" title="Rub Teen"/></a>
						<a href="http://www.stepsiblings.com" alt=""><img src="img/logos/logo_16.png" alt="Step Siblings" title="Step Siblings"/></a>
						<a href="http://www.lusthd.com" alt=""><img src="img/logos/logo_17.png" alt="Lust HD" title="Lust HD"/></a>
						<a href="#" alt=""><img src="img/logos/logo_18.png" alt="TeamSkeet Extras" title="TeamSkeet Extras"/></a>
						<a href="http://www.teenpies.com" alt=""><img src="img/logos/logo_19.png" alt="Teen Pies" title="Teen Pies"/></a>
						<a href="http://www.teenslovemoney.com" alt=""><img src="img/logos/logo_20.png" alt="Teens Love Money" title="Teens Love Money"/></a>
					</center>
				</div>	
			</div>
			<!-- end of .row (website logos) -->

			<div class="row hidden-xs" id="bottom-banners">

				<div class="col-md-3 col-sm-6">
					<div class="bottom-banner shadow">
						<img src="img/ecg_banner.png" alt="Exploited College Girls" title="Exploited College Girls" />
						<a href="#"><img src="img/ecg_logo.png" alt="Exploited College Girls" title="Exploited College Girls" /></a>
						<h4 class="green">$34.97 Monthly</h4>
						<p class="small">
							All Exclusive Content<br />
							No Hidden Charges<br />
							US Based Texh Support<br />
							Access to network of sites
						</p>
						<a href="#" type="button" class="btn btn-success btn-block">Join now!</a>
					</div>
				</div>
				<!-- end of .col-md-3 .col-sm-6 -->

				<div class="col-md-3 col-sm-6">
					<div class="bottom-banner shadow">
						<img src="img/st_banner.png" alt="Stranded Teens" title="Stranded Teens" />
						<a href="#"><img src="img/st_logo.png" alt="Stranded Teens" title="Stranded Teens" /></a>
						<h4 class="green">$17.95 for 30 days</h4>
						<p class="small">
							All Exclusive Content<br />
							No Hidden Charges<br />
							US Based Texh Support<br />
							Access to network of sites
						</p>
						<a href="#" type="button" class="btn btn-success btn-block">Join now!</a>
					</div>
				</div>
				<!-- end of .col-md-3 .col-sm-6 -->

				<div class="col-md-3 col-sm-6">
					<div class="bottom-banner shadow">
						<img src="img/fhd_banner.png" alt="Fantasy HD" title="Fantasy HD" />
						<a href="#"><img src="img/fhd_logo.png" alt="Fantasy HD" title="Fantasy HD" /></a>
						<h4 class="green">$24.94 / Month</h4>
						<p class="small">
							All Exclusive Content<br />
							No Hidden Charges<br />
							US Based Texh Support<br />
							Access to network of sites
						</p>
						<a href="#" type="button" class="btn btn-success btn-block">Join now!</a>
					</div>
				</div>
				<!-- end of .col-md-3 .col-sm-6 -->

				<div class="col-md-3 col-sm-6">
					<div class="bottom-banner shadow">
						<img src="img/t4k_banner.png" alt="Tiny 4k" title="Tiny 4k" />
						<a href="#"><img src="img/t4k_logo.png" alt="Tiny 4k" title="Tiny 4k" /></a>
						<h4 class="green">$9.96 / Month</h4>
						<p class="small">
							All Exclusive Content<br />
							No Hidden Charges<br />
							US Based Texh Support<br />
							Access to network of sites
						</p>
						<a href="#" type="button" class="btn btn-success btn-block">Join now!</a>
					</div>
				</div>
				<!-- end of .col-md-3 .col-sm-6 -->
			</div>
			<!-- end of .row #bottom-banners -->

			<div class="row mobile-footer visible-xs visible-sm">
				<div class="mobile-banner">
					<a href="">
						<img class="col-xs-12 col-sm-6" src="img/mobilebanner.png" />
					</a>
				</div>

				<div class="col-xs-12 col-sm-6 social-icons">
					<a href="https://www.facebook.com/teamskeet69">
						<img src="img/facebook.png" alt="TeamSkeet on Facebook" tittle="TeamSkeet on Facebook" />
					</a>

					<a href="https://twitter.com/teamskeet">
						<img src="img/twitter.png" alt="TeamSkeet on Twitter" tittle="TeamSkeet on Twitter"/>
					</a>

					<a href="http://instagram.com/skeetteam">
						<img src="img/instagram.png" alt="TeamSkeet on Instagram" tittle="TeamSkeet on Instagram" />
					</a>

					<a href="https://vimeo.com/channels/skeetsociety">
						<img src="img/vimeo.png" alt="TeamSkeet on Vimeo" tittle="TeamSkeet on Vimeo" />
					</a>
					
					<a href="http://www.skeetsociety.com">
						<img src="img/www.png" alt="TeamSkeet on SkeetSociety" tittle="TeamSkeet on SkeetSociety" />
					</a>
				</div>

				<div class="col-xs-12 col-sm-6 footer-credits">
					<small>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.
					</small>
				</div>
			</div>
			<!-- end of .row -->
		</div>
		<!-- end of .container -->

		<!-- start of jQuery, Bootstrap and other JS scripts -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
		<script src="js/jquery.ui.touch-punch.min.js"></script>
		<script type="text/javascript" src="js/QapTcha.jquery.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" src="js/validation.js"></script>
		<script type="text/javascript" src="js/tracking.js"></script>

		<script type="text/javascript">
		  $(document).ready(function(){
		    $('.QapTcha').QapTcha({disabledSubmit:true,autoRevert:true,autoSubmit:false});
		  });
		</script>
		<!-- end of jQuery, Bootstrap and other JS scripts -->
	</body>
</html>