<!DOCTYPE html><html lang="en">

<head>
	<!-- Basic informations -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Site informations -->
	<title>TeleHealth Survey</title>

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
	  div.vendor {
		 margin-top: 2px;
		 font-size: 22px;
		 font-weight: 300;
		  letter-spacing: 0.3px;
		//word-spacing: 0.1px;
		line-height: 1.3;
		color: #FFFFFF;
	  }
	  
	  body {
			background-color: #360033;
		}
		
	.experience1 {
	background-color: rgba(#43374c,0.99);
	
	position: relative;

	&::before {
		position: absolute;
		z-index: 100;
		top: 0;
		left: 0;
		display: block;
		width: 100%;
		height: 500px;
		content: " ";
		
	}

	&::after {
		position: absolute;
		z-index: 50;
		bottom: 0;
		left: 0;
		display: block;
		width: 100%;
		height: 1077px;
		content: " ";
		
		opacity: 1;
		background-position: -80px 50px;
	}
}
	  .experience1__hollow-arrow {
		width: 100%;
		height: 40px;
		background-image: url("../img/content_hollow-arrow.png");
		background-position: 50% 50%;
		position: relative;
		top: -40px;
		left: 0;
		opacity: 1;
	}


	.experience1__wrapper {
		position: relative;
		z-index: 200;
		width: 100%;
		max-width: 1200px;
		margin: 0 auto;
		padding-top: 110px;
		padding-bottom: 200px;
	}
	
	.experience1__icons-wrapper {
			margin-bottom: 20px;
			
			//clearfix
			&::after {
				display: table;
				content: " ";
				clear: both;
			}
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
			

			<a href="instructions1.php" class="header__title-wrapper  js-smooth-scroll">
				<div class="header__title-main" href="instructions1.php">Tele Health</div>
				<div class="header__title-sub">By School of Health and Rehabilitation</div>
			</a>

			<div class="header__social-icons"> 
				<ul class="w3-navbar w3-blue">
				<a href="BlankSurvey1.php"><h5>Vendor</h5></a>
				<a > <h5> | </h5></a>
				<a href="BlankSurvey2.php"><h5>Patient</h5></a>
				<a > <h5> | </h5></a>
				<a href="BlankSurvey3.php"><h5>Data Management</h5></a>
				
				</ul>
			</div>
		</div>
	</header>
	<!-- End Header -->
	
	
	<!-- "Experience" Section -->
		<section id="experience" class="experience1">
			<div class="experience1__hollow-arrow">&nbsp;</div>
			<div class="experience1__wrapper">
				<div class="section-header">
					<div class="section-header__title  section-header__title--experience">Data Management</div>
					<div class="section-header__subtitle">Please remember to click "Done" to save your results.</div>
				</div>
<?php
    require("common.php");
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
	
	//session_start();
    $user = $_SESSION['username'];
    $sql = "SELECT id FROM userinfo WHERE username = '$user';";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $userid = $row["id"];
	
	$nextWeek = time() + (7 * 24 * 60 * 60);
	$curtime = date('Y-m-d');
    
    if(empty($_SESSION['user'])) {   
        header("Location: index1.php");
        die("Redirecting to index1.php"); 
    }     
	
    $query = "SELECT questionid, categoryid, subcategoryid, description FROM data";     
    try { 
        $stmt = $db->prepare($query); 
        $stmt->execute(); 
    } 
    catch(PDOException $ex) {       
        die("Failed to run query: " . $ex->getMessage()); 
    }          
   $rows = $stmt->fetchAll(); 
   

    $sql = "SELECT MIN(QuestionID) AS min, MAX(QuestionID) AS max FROM patient;";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $min = $row["min"];
    $max = $row["max"];
	
	if( $_POST )  {
        
        for($x = $min; $x <= $max; $x ++){
            
            if(isset($_POST["optionsRadios$x"])){
            
                $question = $x;
                $answer = $_POST["optionsRadios$x"];
                $sql = "INSERT INTO answers (Answer, UserID, QuestionID, curtime) VALUES ('$answer', $userid, $question, '$curtime')";

                if ($conn->query($sql) === TRUE){
                    //echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                } 
            }
        }
	}		
?>
		<div class="experience1__icons-wrapper">
	          <div class = "vendor">
						
						 <div class = "row">
						     <div class = "col-col-md-8 col-md-offset-2>
							 
							<?php               
								include("DataManagement1.php");                 
							?>   
							
							</div>
						</div>
			</div>
			
			</div>
			
        </div>
					
				</div>
		</div>
		</section>
		<!-- End "Experience" Section -->
		</body>