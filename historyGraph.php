<?php
		require("common.php");    

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
		
		if(empty($_SESSION['user'])) {   
			header("Location: index1.php");
			die("Redirecting to index1.php"); 
		}     
		//echo $userid;
?>
		
			
<!DOCTYPE html><html lang="en">

<head>
	<!-- Basic informations -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Site informations -->
	<title>History Review</title>

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
			
		
		th, td {
			border: 1px solid white;
			border-collapse: collapse;
			padding: 15px;
			text-align: left;
			color: white;
		}
		
		
		
		tr:hover {background-color: #10816E;}
		
		select {
			width: 75%;
			padding: 16px 20px;
			border: none;
			border-radius: 4px;
			background-color: #f1f1f1;
		}
		
		input[type=submit] {
			padding: 16px 20px;
			border: none;
			border-radius: 4px;
			background-color: #f1f1f1;
		}
			
		
		</style>
		
	
		
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
   google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ['Date', 'YES', 'NO', 'DONT KNOW'],
         ['2017-12-04',  37, 20, 12],
         ['2017-12-05',  30, 25, 15],
         ['2017-12-08',  35, 17, 24],
         ['2017-12-11',  34, 25, 10],
      ]);
	  
    var options = {
      title : 'History record for Telehealth questionnaire',
	  titleTextStyle: {color: '#FFFFFF'},
	  vAxis: {
			title: 'Answer Count',
			titleTextStyle: {color: '#FFFFFF'},
			textStyle: {
					color: "#FFFFFF",
					fontSize : 14
			   }
		},
     
	hAxis: {
			title: 'Date',
			titleTextStyle: {color: '#FFFFFF'},
		   textStyle: {
				color: "#FFFFFF"
		   },
		  
		},
		
	legend :{
			textStyle :{
				color: "#FFFFFF"		
			}
		},
		
	
     backgroundColor: 'transparent',
	 colors: ['F2C4B3', '9BABBF', 'F6EDD3'],
	 //  colors: ['F2C4B3', '9BABBF', 'F2E0DC'],
      seriesType: 'bars',
      series: {4: {type: 'line'}}
	
	  
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
</script>
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
			
			<nav class="header__navigation">
				<a href="instructions1.php">
					<div class="header__navigation-element  header__navigation-element--experience">Instructions</div>
				</a>
				<a href="finalGraph1.php">
					<div class="header__navigation-element  header__navigation-element--realizations">Final Result</div>
				</a>
				<a href="historyGraph.php">
					<div class="header__navigation-element  header__navigation-element--features">History Results</div>
				</a>
				<a href="index1.php">
					<div class="header__navigation-element  header__navigation-element--realizations">Log out</div>
				</a>
			</nav>
			

			<a href="instructions1.php" class="header__title-wrapper  js-smooth-scroll">
				<div class="header__title-main" href="instructions1.php">Tele Health</div>
				<div class="header__title-sub">By School of Health and Rehabilitation</div>
			</a>

		</div>
	</header>
	<!-- End Header -->
	
	<!-- "Features" Section -->
		<section id="features" class="features">
			<div class="features__wrapper">
				<div class="section-header">
					<div class="section-header__title  section-header__title--features">History Result</div>
				</div>
				<div class="features__elements-wrapper">
			
				<div id="chart_div" style="width: 1000px; height: 440px;"></div>
			
				<br>
				
				
<?php
		//search by answer date
		echo "<form action = \"historyGraph.php\" method = \"POST\">";
		
		echo "<select name=\"datearr[]\" >";
			echo "<option value=\"ALL\">SELECT A DATE</option>";
			$getdates = "SELECT DISTINCT curtime
							FROM answers
							WHERE UserID = $userid 
							GROUP BY curtime;";
			$resdates = $conn->query($getdates);
			
			while($rowdates = $resdates->fetch_assoc()){
				$date = $rowdates["curtime"];
				echo "<option value=\"$date\">$date</option>";
			}
			echo str_repeat('&nbsp;', 5); // adds 5 spaces
			echo "<input type = \"submit\" name = \"dateSubmit\" value = \"GO\">";
		echo "</form>";
	?>
	

    <br> <br> 
	
	<?php
	if(isset($_POST["dateSubmit"])) {
				//echo "HERE!! for city :)<br>";
				
				$acity = $_POST["datearr"];
				$n = count($acity);
				//echo $n."<br>";
				if($n== 0 ){
					echo "Please select a date!!!<br>";
				}
				else if($n>1){
					echo "Cannot select more than one date!!!";
				}
				else{
	
				$date_identification = $acity[0];
				$_SESSION['date'] = $acity[0];
				
				$vendory = 0;
				$vendorn = 0;
				$vendord = 0;
				
				$vendor_res = "SELECT COUNT(answers.AnswerID) AS vendor, answers.Answer AS answer
							FROM answers, questions
							WHERE answers.QuestionID = questions.QuestionID 
								  AND answers.UserID = $userid AND answers.curtime = '$date_identification'
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
								  AND answers.UserID = $userid AND answers.curtime = '$date_identification'
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
							WHERE answers.QuestionID = data.QuestionID AND answers.curtime = '$date_identification'
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
				
				}
				
				 echo "<table width='80%' border='1' cellpadding='10'>";
				 echo "<tr> <th>&nbsp;</th> <th>YES</th> <th>NO</th> <th>DONT KNOW</th> <th>DATE</th> </tr>";
				 
				 echo "<tr>";
                    echo '<td> <a href = "vendorResult3.php"> Vendor Selection </a> </td>';
					echo '<td>' .$vendory. '</td>';
					echo '<td>' .$vendorn. '</td>';
					echo '<td>' .$vendord. '</td>';
					echo '<td>' .$date_identification. '</td>';
				 echo "</tr>";
				 
				 echo "<tr>";
				    echo '<td> <a href= "patientResult3.php"> Patient Provider </a> </td>';
					echo '<td>' .$patienty. '</td>';
					echo '<td>' .$patientn. '</td>';
					echo '<td>' .$patientd. '</td>';
					echo '<td>' .$date_identification. '</td>';
				 echo "</tr>";
				   
				 echo "<tr>";
				    echo '<td> <a  href= "dataResult3.php"> Vendor Selection </a> </td>';
					echo '<td>' .$datay. '</td>';
					echo '<td>' .$datan. '</td>';
					echo '<td>' .$datad. '</td>';
					echo '<td>' .$date_identification. '</td>';
				echo "</tr>";
	}		
		?>
				
				</div>
			</div>
		</section>
		<!-- End "Features" Section -->
		<script src="style/js/dependencies.min.js" type="text/javascript"></script>
		<script src="style/js/global.js" type="text/javascript"></script>
	</body>
	
	</html>