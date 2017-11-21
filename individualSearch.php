<?php
	$servername = "localhost";
    $username = "hsx1";
    $password = "123";
    $dbname = "telemed";      

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        //echo "db is connected";
    }
	
	 session_start();
	 
?>

<!DOCTYPE html><html lang="en">

<head>
	<!-- Basic informations -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Site informations -->
	<title>Administrator Visualization</title>
	

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
		input[type=text] {
			width: 70%;
			padding: 14px 18px;
			background-color: transparent;
			color:white;
			margin: 8px 0;
			box-sizing: border-box;
			border: 3px solid #ccc;
			-webkit-transition: 0.5s;
			transition: 0.5s;
			outline: none;
			top: 50%;
			}
	
	.button {
		background-color: transparent;
		border: 3px solid #ccc;
		color: white;
		padding: 10px 16px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 24px;
		
		cursor: pointer;

    }
	
	
	.a{
		color:white;
		font-size: 22px;
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

			<a href="adminVisual.php">
				<div class="header__title-main">Tele Health</div>
				<div class="header__title-sub">By School of Health and Rehabilitation</div>
			</a>

		</div>
		
	
	
	<style>
		table { border-collapse: collapse; }
		th + th { 
          border-left: 1px solid #cccccc; 
			}
			
			
		a {
			color: white;
		}
	</style>
	</header>
	
	
	<body>
	
	<!----- Individual Search ---->
	<section id="adminSearch" class="experience">
	
			<div class="experience__hollow-arrow">&nbsp;</div>
			<div class="experience__wrapper">
				<div class="section-header">
					<div class="section-header__title  section-header__title--experience">Individual Search</div>
					<div class="section-header__subtitle">Please input username to start search</div>
					
				</div>	
				<br> <br> <br> <br>
			<form action="individualPage.php" method="post"> 
		<div>
			<p>
			<img src="search.svg" alt="searchlog" height = "70px" width = "70px" border-radius = "100px" position = "relative" style="vertical-align:middle">
			<input class="form-control" type="text" name="username"  placeholder = "Username">
			</p>
			<br> <br> <br>
			
			<a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<button type="submit" class = "button" name = "searchSubmit" text-align="center"> Search </button> <a>
			<a href = "adminVisual.php" color = "white" font-size="22px"> &nbsp; &nbsp; &nbsp; Back <a>
			
		
			<br> <br> <br>
		</div>
		
		</form>
				
		</div>
		
		
		
		</section>
		
		</body>
		
		</html>