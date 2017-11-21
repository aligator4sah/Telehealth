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
	
	
    $user = $_POST["username"];
	
	$sql = "select count(*) AS count from userinfo where username = '$user';";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $ctr = $row["count"];
	
	
	
			if($ctr>0){	
				$sql = "SELECT id FROM userinfo WHERE username = '$user';";
				$result = $conn->query($sql);
				$row = $result->fetch_assoc();
				$userid = $row["id"];
			} else {
				echo "User doesn't exist";
				header("Location: individualSearch.php");
				die("Redirecting to indivisual.php");
			}
	

	$vendory = 0;
	$vendorn = 0;
	$vendord = 0;

	$vendor_res = "SELECT COUNT(answers.AnswerID) AS vendor, answers.Answer AS answer
					FROM answers, questions
					WHERE answers.QuestionID = questions.QuestionID 
						  AND answers.UserID = $userid
					GROUP BY answers.Answer; ";
					
	$result = $conn->query($vendor_res);
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $ans = $row["answer"];
			  $vendor = $row["vendor"];
			  if ($ans == "Yes") {
				 $vendory = $vendor;
				} 
			
			 if ($ans == "No") {
				 $vendorn = $vendor;
				} 
				
			 if ($ans == "Dont Know") {
				 $vendord = $vendor;
				} 
      }
	  } 
	  
	  $patienty = 0;
		$patientn = 0;
	 $patientd = 0;
	  
	  $patient_res = "SELECT COUNT(answers.AnswerID) AS patient, answers.Answer AS answer
					FROM answers, patient
					WHERE answers.QuestionID = patient.QuestionID 
						  AND answers.UserID = $userid
					GROUP BY answers.Answer ;";
					
	$result = $conn->query($patient_res);
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $ans = $row["answer"];
			  $patient = $row["patient"];
			  if ($ans == "Yes") {
				 $patienty = $patient;
				} 
			
			 if ($ans == "No") {
				 $patientn = $patient;
				} 
				
			 if ($ans == "Dont Know") {
				 $patientd = $patient;
				} 
      }
	  } 
	  
	  $datay = 0;
	$datan = 0;
	$datad = 0;
	  
	  $data_res = "SELECT COUNT(answers.AnswerID) AS data, answers.Answer AS answer
					FROM answers, data
					WHERE answers.QuestionID = data.QuestionID 
						  AND answers.UserID = $userid
					GROUP BY answers.Answer; ";
					
	$result = $conn->query($data_res);
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $ans = $row["answer"];
			  $data = $row["data"];
			  if ($ans == "Yes") {
				 $datay = $data;
				} 
			
			 if ($ans == "No") {
				 $datan = $data;
				} 
				
			 if ($ans == "Dont Know") {
				 $datad = $data;
				} 
      }
	  } 
	
?>

<!DOCTYPE html><html lang="en">

<head>
	<!-- Basic informations -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Site informations -->
	<title>Survey Result</title>

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
	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
					<script type="text/javascript">
						google.charts.load('current', {'packages':['bar']});
						google.charts.setOnLoadCallback(drawChart);

						function drawChart() {
							var data = google.visualization.arrayToDataTable([
								['Section', 'Yes', 'No', 'Dont know'],
								['Vendor Selection', <?php echo $vendory ?> , <?php echo $vendorn ?>,<?php echo $vendord ?>],
								['Patient Provider', <?php echo $patienty ?>, <?php echo $patientn ?>, <?php echo $patientd ?>],
								['Data Management', <?php echo $datay ?>, <?php echo $datan ?>, <?php echo $datad ?>],
						]);

						var options = {
							chart: {
							    
								title: 'TeleHealth Questionnaire',
								subtitle: 'Yes, No, and Dont know: TeleHealth',
								textStyle : {
									color: '#FFFFFF'
								}
								 
							},
							vAxis: {
							   textStyle: {
									color: "#FFFFFF",
									fontSize : 14
							   }
							},
							hAxis: {
							   textStyle: {
									color: "#FFFFFF"
							   }
							},
							legend :{
								textStyle :{
									color: "#FFFFFF"
						
									
								}
							},
							backgroundColor: 'transparent',
							colors: ['#67BC9A', '13B0A5', 'F8F2AB'],
							bars: 'horizontal' // Required for Material Bar Charts.
							
							};

						var chart = new google.charts.Bar(document.getElementById('barchart_material'));

						chart.draw(data, google.charts.Bar.convertOptions(options));
						}
    </script>
	
	
	<style>
	
	    div.text {
					float: left;
					width: 50%;
					
					line-height: 4
					
				}
				
		div.title {
					font-size: 20px;
					line-height: 2;
					padding-bottom: 3px;
					font-weight: 600;
					color: rgba(255,255,255,0.9);
					border-top: 2px solid rgba(255,255,255,0.1);
					}
					
		div.element {
				display: inline-block;
				width: 80%;
				float: center;
				height: 100px;
				margin-top: 50px;
			}
			
		.button {
		background-color: transparent;
		border: 2px solid #ccc;
		color: white;
		padding: 4px 8px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 1px 1px;
		cursor: pointer;

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
	</header>
	<!-- End Header -->
	
	<!-- "Features" Section -->
		<section id="features" class="features">
			<div class="features__wrapper">
				<div class="section-header">
					<div class="section-header__title  section-header__title--features">Final Result Visualization</div>
				</div>
				<div class="features__elements-wrapper">
				
				<table style = "width:100%">
					<tr>  
					<th rowspan = "3" width = "70%"><div id="barchart_material" style="width: 650px; height: 400px;" align = "center" ></div></th>
					
					<td>
					<form action="vendorResult2.php" method="post">
					<div class="element">
						
						<!--<div class="features__image  features__image--newest">&nbsp;</div> -->
						<img src="feature_vendor.svg" alt="vendor-feature" height = "80" width = "80">
						<div class="text">
							<input class="form-control" type="hidden" name="userid"  value="<?php echo $userid; ?>">
							<div class="title"> <a  href = "vendorResult2.php"> Vendor Selection </a> </div>
							
							<!-- <div class="features__description">Vendor Selection</div> -->
							
						</div>
							<button type="submit" class = "button" name = "searchSubmit" text-align="center"> View </button>
					</div>
					
					</form>
					</td>
					</tr>
					
					<tr> <td>
					<form action="patientResult2.php" method="post">
					<div class="element">
						<!-- <div class="features__image  features__image--fast">&nbsp;</div> --> 
						<img src="feature_patient.svg" alt="patient-feature" height = "70" width = "70"> 
						<div class="text">
							<input class="form-control" type="hidden" name="userid"  value="<?php echo $userid; ?>">
							<div class="title"><a  href = "patientResult1.php"> Patient Provider </a> </div>
							
						</div>
						<button type="submit" class = "button" name = "searchSubmit"> View </button>			
					</div>
								
					</form>
					</td>
					</tr>
					
					<tr> <td> 
					<form action="dataResult2.php" method="post">
					<div class="element">
						<!--<div class="features__image  features__image--browsers">&nbsp;</div>-->
						<img src="feature_data.svg" alt="data-feature" height = "70" width = "70">
						<div class="text">
							<input class="form-control" type="hidden" name="userid"  value="<?php echo $userid; ?>">
							<div class="title"><a  href = "dataResult.php"> Data Management </a> </div>
							
						
						</div>
						<button type="submit" class = "button" name = "searchSubmit" text-align="center"> View </button>
					</div>
						
					</form>
					</td> </tr>
					</table>
					
				</div>
			</div>
		</section>
		<!-- End "Features" Section -->
	
	</body>