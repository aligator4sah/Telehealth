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

    

?>

<!DOCTYPE html><html lang="en">

<head>
	<!-- Basic informations -->
	<!--<meta charset="utf-8"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Site informations -->
	<title>Answer Detail</title>

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
	  div.patient {
		  margin-top: 2px;
		 font-size: 20px;
		  font-weight: 300;
		  letter-spacing: 0.3px;
		//word-spacing: 0.1px;
		line-height: 1.3;
		color: rgba(255,255,255,0.7);
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
	
	
	<!-- "Realizations" Section - With Projects -->
		<section id="realizations" class="realizations">
			<div class="realizations__wrapper">

				<div class="section-header">
					<div class="section-header__title  section-header__title--realizations">Patient Provider</div>
					<div class="section-header__subtitle">Check the questions by answers category</div>
				</div>

				<div class="showcase">
					<div class="showcase__thumbnails-wrapper">

						<!-- normal -->
						<img data-project="p1" class="showcase__thumb  showcase__thumb--first  showcase__thumb--active" src="content/project01_yes.jpg">
						<img data-project="p2" class="showcase__thumb" src="content/project01_no.jpg">
						<img data-project="p3" class="showcase__thumb" src="content/project01_unknown.jpg">
						
						<!-- blank template
						<div data-project="p5" class="showcase__thumb  showcase__thumb--blank">&nbsp;</div>
						 -->

					</div>



					<div class="showcase__stage-wrapper">
					
						<!-- project 1 -->
						<div data-project="p1" class="showcase__stage  showcase__stage--active" >
							  
							  <div class="showcase__title">
									Questions with YES
						        </div>
								<div class="showcase__point">
									
									<div class="patient">
										<?php

      // how to get the user and question ID from other database 
     session_start();
    $user = $_SESSION['username'];
    $sql = "SELECT id FROM userinfo WHERE username = '$user';";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $userid = $row["id"];

    $sql = "SELECT MIN(QuestionID) AS min, MAX(QuestionID) AS max FROM patient;";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $min = $row["min"];
    $max = $row["max"];
	  
	  $sql = "SELECT answers.Answer AS answer, patient.Description AS des
				FROM answers, patient
				WHERE answers.UserID = $userid AND answers.QuestionID = patient.QuestionID";
	  $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $ans = $row["answer"];
			  $des = $row["des"];
			  if ($ans == "Yes") {
				  echo "<li>";
				  echo $des;
				  echo "</li>";
				  echo "<br>";
          }
      }
	  }
	       
    ?>
									</div>
								</div>
								<a href="finalGraph1.php" class="showcase__button  ghost-button  ghost-button--realizations">Back</a>
						</div>

						<!-- project 2 -->
						<div data-project="p2" class="showcase__stage">
							
								<div class="showcase__title">Questions with No</div>
								<div class="showcase__point">
					  				<div class="patient">
					<?php 
					    $sql = "SELECT id FROM userinfo WHERE username = '$user';";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $userid = $row["id"];

    $sql = "SELECT MIN(QuestionID) AS min, MAX(QuestionID) AS max FROM patient;";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $min = $row["min"];
    $max = $row["max"];
	  
	  $sql = "SELECT answers.Answer AS answer, patient.Description AS des
				FROM answers, patient
				WHERE answers.UserID = $userid AND answers.QuestionID = patient.QuestionID";
	  $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $ans = $row["answer"];
			  $des = $row["des"];
			  if ($ans == "No") {
				  echo "<li>";
				  echo $des;
				  echo "</li>";
				  echo "<br>";
          }
      }
	  }
	       
    ?>
			
									</div>
								</div>
								<a href="finalGraph1.php" class="showcase__button  ghost-button  ghost-button--realizations">Back</a>
							
						</div>

						<!-- project 3 -->
						<div data-project="p3" class="showcase__stage">
								<div class="showcase__title">Questions with Unknown</div>
								<div class="showcase__point">
									<div class="patient">
									<?php 
					    $sql = "SELECT id FROM userinfo WHERE username = '$user';";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $userid = $row["id"];

    $sql = "SELECT MIN(QuestionID) AS min, MAX(QuestionID) AS max FROM patient;";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $min = $row["min"];
    $max = $row["max"];
	  
	  $sql = "SELECT answers.Answer AS answer, patient.Description AS des
				FROM answers, patient
				WHERE answers.UserID = $userid AND answers.QuestionID = patient.QuestionID";
	  $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $ans = $row["answer"];
			  $des = $row["des"];
			  if ($ans == "Dont Know") {
				  echo "<li>";
				  echo $des;
				  echo "</li>";
				  echo "<br>";
          }
      }
	  }
	       
    ?>
									</div>
								</div>
								<a href="finalGraph1.php" class="showcase__button  ghost-button  ghost-button--realizations">Back</a>
						
							
						</div>


					</div>



				</div>
			</div>
		</section>
		<!-- End "Realizations" Section - With Projects -->
		<!-- Scripts postload -->
	<script src="style/js/dependencies.min.js" type="text/javascript"></script>
	<script src="style/js/global.js" type="text/javascript"></script>
		</body>
</html>