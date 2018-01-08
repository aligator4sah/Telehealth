<?php
	require("common.php");   

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        //echo "db is connected";
    }
	
 $username = $_POST['username'];
 $pw1 = $_POST['password1'];
 $pw2 = $_POST['password2'];
  
?>


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
	<link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
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
					<div class="section-header__subtitle">Please provide your personal information</div>
				</div>
			
			<form action="instructions2.php" method="post">
				<input class="form-control" type="hidden" name="username" value="<?php echo $username;?>">
				<input class="form-control" type="hidden" name="password1" value="<?php echo $pw1;?>">  
				<input class="form-control" type="hidden" name="password2" value="<?php echo $pw2;?>">  
				<input type="hidden" name="consent" value=1 checked>
				<!--input username and password here> -->
				<fieldset>
					<legen> <span class = "number">1</span>Your basic info</legen>
					<label>Age*:</label>
					<select class = "ui dropdown" name="age">
						<option value=""></option>
						<option value="20">18 - 25</option>
						<option value="30">26 - 35</option>
						<option value="40">36 - 45</option>
						<option value="50">46 - 55</option>
						<option value="60">56 - 65</option>
						<option value="70">66+</option>
					</select>
					
					<label>Gender</label>
					<select class="ui dropdown" name = "gender">
							<option value=""></option>
						  <option value="male"> Male </option>
						  <option value="female"> Female </option>
					</select>
					
					<label>Education:</label>
					<select class="ui dropdown" name="education">
						<option value=""></option>
						<option value="Doctoral">Doctoral</option>
						<option value="Master">Masters</option>
						<option value="Professional">Professional</option>
						<option value="Bachelor">Bachelor</option>
						<option value="Associate">Associate</option>
						<option value="High School">High School</option>
						<option value="Below High School">Below High School</option>
						<option value="Other">Other</option>
						
					</select>
					
					<label> Major: </label>
					<select class = "ui dropdown" name="Major">
						<option value=""></option>
                        <option value="Health Care Administration">Health Care Administration</option>
                        <option value="Medical Records Administration">Medical Records Administration</option>
                        <option value="Nursing">Nursing</option>
                        <option value="Health Sciences">Health Sciences</option>
                        <option value="Business Administration">Business Administration</option>
                        <option value="Information Technology">Information Technology</option>
                        <option value="Public Health">Public Health</option>
                        <option value="Other">Other</option>		
					</select>
				</fieldset>
				
				<fieldset>
					<legend> <span class= "number">2</span>Your Job</legend>
					<label>Job Title</label>
					<select class="ui dropdown" name="Job_Title">
						 <option value=""></option>
                        <option value="Information Technology Specialist">Information Technology Specialist</option>
                        <option value="Program Manager">Program Manager</option>
                        <option value="Chief Executive Officer (CEO)">Chief Executive Officer (CEO)</option>
                        <option value="Chief Medical Information Officer">Chief Medical Information Officer</option>
                        <option value="Chief Medical Officer">Chief Medical Officer</option>
                        <option value="Chief Nursing Officer">Chief Nursing Officer</option>
                        <option value="Chief Operating Officer">Chief Operating Officer</option>
                        <option value="Telehealth Supervisor">Telehealth Supervisor</option>
                        <option value="Consultant">Consultant</option>
                        <option value="Other">Other</option>
					</select>
					
					<label>Work Experience in Information Security and Privacy:</label>
					<select class="ui dropdown" name = "Work_Experience">
						<option value=""></option>
                        <option value="0">0-2 years</option>
                        <option value="4">3-5 years</option>
                        <option value="7">6-10 years</option>
                        <option value="12">11-15 years</option>
                        <option value="20">16-25 years</option>
                        <option value="26">26+ years</option> 
					</select>
					
					<label>Type of Organization:</label>
					<select class="ui dropdown" name="Organization_Type">
						<option value=""></option>
                        <option value="Hospital">Hospital</option>
                        <option value="Hospital Network">Hospital Network</option>
                        <option value="Physician Group Practice">Physician Group Practice</option>
                        <option value="Group or Ambulatory Surgical Center">Group or Ambulatory Surgical Center</option>
                        <option value="Health Maintenance Organization (HMO)">Health Maintenance Organization (HMO)</option>
                        <option value="Managed Care Organization (MCO)">Managed Care Organization (MCO)</option>
                        <option value="Independent Practice Association (IPA)">Independent Practice Association (IPA)</option>
                        <option value="Physician Sponsored Network (PSN)">Physician Sponsored Network (PSN)</option>
                        <option value="Preferred Provider Organization (PPO)">Preferred Provider Organization (PPO)</option>
                        <option value="Other">Other</option> 
						
					</select>
					
					<label>Size of Organization:</label> 
					<select class="ui dropdown" name="Organization_Size">
						<option value=""></option>
                        <option value="50">1-100</option>
                        <option value="150">101-200</option>
                        <option value="250">201-300</option>
                        <option value="350">301-400</option>
                        <option value="450">401-500</option>
                        <option value="501">501+</option>
						
					</select>
					
					<label>Years of Using Telehealth in Practice:</label>
					<select class="ui dropdown" name="Telehealth_Use_Years">
						<option value=""></option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6+</option>
						
					</select>
					
					<label>Number of People in IT Team in your organization</label>
					<select class="ui dropdown" name="IT_Team_Number">
						<option value="0">0</option>
						<option value="3">0-3</option>
						<option value="7">4-10</option>
						<option value="15">11-20</option>
						<option value="25">21-50</option>
						<option value="75">51-100</option>
						<option value="150">101-200</option>
						<option value="250">201-500</option>
						<option value="500">500+</option>					
					</select>
					
					
					<label>Number of IT People Familiar with information Security</label>
					<select class="ui dropdown" name="IT_Persons_Number">
						<option value="0">0</option>
						<option value="3">0-3</option>
						<option value="7">4-10</option>
						<option value="15">11-20</option>
						<option value="25">21-50</option>
						<option value="75">51-100</option>
						<option value="150">101-200</option>
						<option value="250">201-500</option>
						<option value="500">500+</option>		
					</select>
					
					
				</fieldset>
				
				<button type = "submit" >Sign Up</button>
				
			</form>
		</div>

		</section>
		</body>
	</html>