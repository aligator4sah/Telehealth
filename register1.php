<!DOCTYPE html><html lang="en">

<head>
	<!-- Basic informations -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Site informations -->
	<title>Register Form</title>
	

	<!-- Open Graph -->
	<meta property="og:title" content="Free Aurora Template">
	<meta property="og:description" content="Free HTML5 Template created by Dominik Serafin.">
	<meta property="og:url" content="http://serafin.io/aurora-template/">
	<meta property="og:image" content="http://serafin.io/aurora-template/content/og_image.png">



	<!-- Fonts -->
	<link href="style/fonts/webfont-raleway/webfont-raleway.css" rel="stylesheet" type="text/css">
	<link href="style/fonts/webfont-font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">

	<!-- Stylesheets -->
	<link href="style/css/global.css" type="text/css" rel="stylesheet" media="all">

	<!-- Scripts preload -->
	<!--[if lt IE 9]><script src="style/js/html5shiv.js"></script><![endif]-->
	
	<style>
		input[type=checkbox]
			{
			  /* Double-sized Checkboxes */
			  -ms-transform: scale(2); /* IE */
			  -moz-transform: scale(2); /* FF */
			  -webkit-transform: scale(2); /* Safari and Chrome */
			  -o-transform: scale(2); /* Opera */
			  padding: 10px;
			  width: 30px; 
			}

			/* Might want to wrap a span around your checkbox text */
			.checkboxtext
			{
			  /* Checkbox text */
			  font-size: 110%;
			  display: inline;
			}
		
		.button {
			background-color: transparent;
			border: none;
			color: whilte;
			padding: 36px 48px;
			text-align: center;
			display: inline-block;
			cursor: pointer;
			vertical-align:middle;
			font-size: 48px;
		}
		
		th, td {
			padding: 5px;
			text-align: center;    
		}
	
	</style>
</head>

<body>






	<!-- Some Helper Stuff -->
	<div id="start" class="start">&nbsp;</div>
	<div class="maxwidth1050">&nbsp;</div>



	<!-- Header -->
	<header class="header">
		<div class="header__wrapper">
			<div class="header__hamburger">
				<div class="header__hamburger-block">&nbsp;</div>
				<div class="header__hamburger-block">&nbsp;</div>
				<div class="header__hamburger-block">&nbsp;</div>
			</div>
			
			<a href="#start" class="header__title-wrapper  js-smooth-scroll">
				<div class="header__title-main">Tele Health</div>
				<div class="header__title-sub">By School of Health and Rehabilitation</div>
			</a>

		</div>
	</header>
	<!-- End Header -->
	
	
	<section id="contact" class="contact">
			<div class="contact__wrapper">
				<div class="section-header">
					<div class="section-header__title  section-header__title--contact">Register. . .</div>
					<div class="section-header__subtitle">Register with simple information</div>
				</div>

			
				<form class="contact__form" method = "post" action = "register2.php">		

					<div class="contact__bottom-wrapper">
						<div class="contact__sender-info-wrapper">
							<div class="contact__input-wrapper  contact__input-wrapper--name">
								<label for="sender_name" class="contact__label">Username</label>
								<div>&nbsp;</div>
								<input class = "form-control" name="username" type="text" placeholder="Please register with valid email" required>
							</div>
							<div class="contact__input-wrapper  contact__input-wrapper--name">
								<label for="sender_name" class="contact__label">Password</label>
								<div >&nbsp;</div>
								<input class="form-control" name="password1" type="password" placeholder="8 letters mix with numbers" required>
							</div> 
							<div class="contact__input-wrapper  contact__input-wrapper--name">
								<label for="sender_name" class="contact__label">Confirm Password</label>
								<div>&nbsp;</div>
								<input id="password2" name="password2" type="password" placeholder="Confirm your password" required>
							</div>
							
							 <div class="contact__input-wrapper  contact__input-wrapper--name">
							    <label class="contact__label">Consent</label> 
							 	
							    <label class= "contact__label"><input type = "checkbox" name = "consent" unchecked= "unchecked"> <span class = "checkboxtext"> I have read the information and agree to the <a href= "terms1.php" style = "color:burlywood">terms</a></span></label>
						  
							</div>
						</div> 
						
						
						

						<div class="contact__button-wrapper  ghost-button  ghost-button--contact">
							<!-- <div class="contact__paper-plane-wrapper"><i class="fa fa-paper-plane"></i></div> -->
							<button type = "submit" class = "button"> Submit </button>
							<!--<div class="contact__response  contact__response--success">
								<div class="contact__response-title"><i class="fa fa-check"></i> Message was sent.</div>
								
								<div class="contact__response-description  contact__response-description--success">&nbsp;</div>
							</div>
							<div class="contact__response  contact__response--error">
								<div class="contact__response-title"><i class="fa fa-warning"></i> Error.</div>
								<div class="contact__response-description  contact__response-description--error">Message couldn't be sent.</div>
							</div>
							<input id="contact__submit" type="button" value=" "> --> 
						</div>
						
						
						
						
				</div> 
			
				</form>

			</div>
		</section>
		<!-- End "Contact" Section -->














		<!-- Footer -->
		<!-- <footer id="footer" class="footer">
			<div class="footer__wrapper">
				<div class="footer__copyright">Some Rights Reserved &copy; 2017</div>
				<a href="http://serafin.io/?utm_source=Aurora-Template&utm_medium=Footer-Image&utm_campaign=Freebie" target="_blank" class="footer__image">&nbsp;</a>
			</div>
		</footer>
		<!-- End Footer -->








	<!-- Scripts postload -->
	<script src="style/js/dependencies.min.js" type="text/javascript"></script>
	<script src="style/js/global.js" type="text/javascript"></script>

</body>
</html>

