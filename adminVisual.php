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
  
  $vendor_res = "SELECT COUNT(answers.AnswerID) AS vendor, answers.Answer AS answer
					FROM answers, questions
					WHERE answers.QuestionID = questions.QuestionID 
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
	  } else {
			$vendory = 0;
			$vendorn = 0;
			$vendord = 0;
	  }
	  
	  
	  
	  $patient_res = "SELECT COUNT(answers.AnswerID) AS patient, answers.Answer AS answer
					FROM answers, patient
					WHERE answers.QuestionID = patient.QuestionID 
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
	  } else {
		  
		  $patienty = 0;
		  $patientn = 0;
		  $patientd = 0;
	  }
	  
	  
	  $data_res = "SELECT COUNT(answers.AnswerID) AS data, answers.Answer AS answer
					FROM answers, data
					WHERE answers.QuestionID = data.QuestionID 
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
	  } else {
			$datay = 0;
			$datan = 0;
			$datad = 0;
	  
	  }
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
				<a href="#start" class="js-smooth-scroll">
					<div class="js-smooth-scroll  header__navigation-element">Overview...</div>
				</a>
				<a href="#experience" class="js-smooth-scroll">
					<div class="header__navigation-element  header__navigation-element--experience">Vendor Selection</div>
				</a>
				<a href="#features" class="js-smooth-scroll">
					<div class="header__navigation-element  header__navigation-element--features">Patient Provider</div>
				</a>
				<a href="#realizations" class="js-smooth-scroll">
					<div class="header__navigation-element  header__navigation-element--realizations">Data Management</div>
				</a>
				<a href="individualSearch.php">
					<div class="header__navigation-element  header__navigation-element--contact">Individual Search</div>
				</a>
			</nav>

			<a href="#start" class="header__title-wrapper  js-smooth-scroll">
				<div class="header__title-main">Tele Health</div>
				<div class="header__title-sub">By School of Health and Rehabilitation</div>
			</a>

		</div>
		
	
	
	<style>
		table { border-collapse: collapse; }
		th + th { 
          border-left: 1px solid #cccccc; 
			}
	</style>
	</header>
	<!-- End Header -->
	
	
	<!--------Overview section----------------->
	<section id="hero" class="hero">
	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Education', 'Number'],
          ['Master',     11],
          ['Professional',      2],
          ['Doctoral',  5],
          ['Bachelor', 8],
          ['Associate',    7],
		  ['High School', 2],
		  ['Below High School', 0],
		  ['Other', 3]
        ]);

        var options = {
          title: 'Education Distribution',
		  
		   titleTextStyle: {
						color: "#FFFFFF"  

					},

			pieSliceTextStyle: {
				color: 'black',
				bold: 'True'
			  },
			 legend :{
				textStyle :{
					color: "#FFFFFF"				
						}
				},
		 backgroundColor: 'transparent',
		  colors: ['#F2D1B3', '#538EA6', '#F28C8C', '#F2B8A2'],
        };

        var chart = new google.visualization.PieChart(document.getElementById('Edupiechart'));

        chart.draw(data, options);
      }
    </script>
	

	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Major', 'Number'],
          ['HealthCare',     7],
          ['Medical Records',      12],
          ['Nursing',  5],
          ['Health Science', 8],
          ['Business Admin',    7],
		  ['IT', 5],
		  ['Public Health', 4],
		  ['Other', 2]
        ]);

        var options = {
          title: 'Major Distribution',
		  
		   titleTextStyle: {
						color: "#FFFFFF"  

					},

			pieSliceTextStyle: {
				color: 'black',
				bold: 'True'
			  },
			 legend :{
				textStyle :{
					color: "#FFFFFF"				
						}
				},
		 backgroundColor: 'transparent',
		  colors: ['#E57661', '#F8C58C', '#86DDB2', '#F8E7A2'],
        };

        var chart = new google.visualization.PieChart(document.getElementById('Majorpiechart'));

        chart.draw(data, options);
      }
    </script>
	
	
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Organization', 'Number'],
          ['Hospital',     7],
          ['Hospital Network',  10],
          ['Physician Group',  15],
          ['Surgical Center', 8],
          ['HMO',    6],
		  ['MCO', 9],
		  ['IPA', 4],
		  ['PSN', 2],
		  ['PPO', 3]
        ]);

        var options = {
          title: 'Organization Distribution',
		  
		   titleTextStyle: {
						color: "#FFFFFF"  

					},

			pieSliceTextStyle: {
				color: 'black',
				bold: 'True'
			  },
			 legend :{
				textStyle :{
					color: "#FFFFFF"				
						}
				},
		 backgroundColor: 'transparent',
		  colors: ['#8F9DB2', '#F8DFBD', '#B0BAC8', '#F3BB9A', '#CD998B'],
        };

        var chart = new google.visualization.PieChart(document.getElementById('Orgpiechart'));

        chart.draw(data, options);
      }
    </script>
	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
			['Org Size', 'IT Team Size', 'Info Security Team'],
			[50, 15, 3],
			[50, 15, 0],
			[150, 7, 0],
			[350, 75, 3],
			[150, 25, 15],
			[250, 150, 25],
			[250, 25, 15],
			
			[350, 250, 150],
			[50, 3, 0],
			[150, 15, 7],
			[150, 25, 15],
			[50, 25, 3]
		  ]);

		  var options = {
			title: 'Organization Histogram',
			titleTextStyle: {
						color: "#FFFFFF"  

					},
			hAxis: {
			  textStyle: {
				color: "#FFFFFF"
			  }
			},
			
			vAxis: {
			  textStyle: {
				color: "#FFFFFF"
			  }
			},

			
			legend :{
				position: 'top', 
				maxLines: 1,
				textStyle :{
					color: "#FFFFFF"				
						}
				},
			backgroundColor: 'transparent',
			colors: ['#B0BAC8', '#F8DFBD', '#F3BB9A', '#CD998B'],
			interpolateNulls: false,
		  };

        var chart = new google.visualization.Histogram(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>


	
	
		<div class="hero__background">&nbsp;</div>
		<div class="hero__gradient">&nbsp;</div>
		<div class="hero__pattern">&nbsp;</div>
		<div class="hero__content">
		<div class="hero__content-wrapper">
			<div class="hero__content-wrapper">
				<!--<div class="hero__title-wrapper">-->
					<div class="hero__title-small">TeleHealth System Data Analysis Dashboard</div>
				<!--</div>-->
				<br> <br>
				<table width="80%" align="center">
				
				<tr>
					<td>
						<div id="Edupiechart" style="width: 440px; height: 230px;"></div>
					</td>
					<th rowspan="2">
						<div id="chart_div" style="width: 850px; height: 460px;"></div>
					</th>
					
				  </tr>
				  <tr>
					<td>
						<div id="Orgpiechart" style="width: 440px; height: 230px;"></div>
					</td>
				  </tr>
				
				</table>
				
			</div>
		
		
	    </div>
     </div>
     </section>
     
     
     
     <!-- Scrollable Content -->
	<div class="content">

     
	<!-- "Vendor Selection" Section --->
	<section id="experience" class="experience">
	
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
				  google.charts.load("current", {packages:["corechart"]});
				  google.charts.setOnLoadCallback(drawChart);
				  function drawChart() {
					var data = google.visualization.arrayToDataTable([
					  ['Answer', 'link', 'Amount'],
					  ['Yes',  'vendory.php',   <?php echo $vendory?>],
					  ['No',   'vendorn.php',   <?php echo $vendorn?>],
					  ['Dont know',  'vendord.php', <?php echo $vendord?>]     
					]);
					
					 var view = new google.visualization.DataView(data);
					 view.setColumns([0, 2]);

					var options = {
					  title: 'Vendor Answer Ratio',
					  titleTextStyle: {
						color: "#FFFFFF"  

					},

					  pieHole: 0.4,
					  pieSliceTextStyle: {
						color: 'black',
						bold: 'True'
					  },
					  legend :{
						textStyle :{
							color: "#FFFFFF"				
									}
							},
					  backgroundColor: 'transparent',
					  colors: ['#F2D1B3', '#538EA6', '#F28C8C'],
					};
					
					
					var chart = new google.visualization.PieChart(document.getElementById('donutchart1'));
					chart.draw(view, options);

					var selectHandler = function(e) {
					 window.location = data.getValue(chart.getSelection()[0]['row'], 1 );
					}

					// Add our selection handler.
					google.visualization.events.addListener(chart, 'select', selectHandler);
					
				  }
		</script>

		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"> </script>
		 <script type="text/javascript">
						google.charts.load('current', {packages: ['corechart', 'bar']});
						google.charts.setOnLoadCallback(drawStacked);

				function drawStacked() {
					  var data = google.visualization.arrayToDataTable([
						['Gerne', 'Yes', 'No', 'Dont know', { role: 'annotation' } ],
						['Q1', 10, 24, 20, ''],
						['Q2', 16, 22, 23, ''],
						['Q3', 28, 19, 29, ''],
						  ['Q4', 28, 19, 29, ''],
						  ['Q5', 18, 19, 29, ''],
						  ['Q6', 28, 16, 29, ''],
						  ['Q7', 28, 19, 29, ''],
						  ['Q8', 28, 19, 59, ''],
						  ['Q9', 28, 19, 29, ''],
						  ['Q10', 36, 34, 29, '']
					  ]);

				  var options = {
					title: 'Vendor Answer Distribution',
					  titleTextStyle: {
						color: "#FFFFFF"  

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
					//width: 600,
					//height: 400,
					legend: { position: 'top', 
								maxLines: 3,
								textStyle: {
								  color: "FFFFFF"
								}},
					backgroundColor: 'transparent',
					colors: ['#F2EBBF', '#F3B562', '#8CBEB2'],
					bar: { groupWidth: '75%' },
					isStacked: true,
				  };

				  var chart = new google.visualization.ColumnChart(document.getElementById('chart_column1'));
				  chart.draw(data, options);
				}
				</script> 
			<div class="experience__hollow-arrow">&nbsp;</div>
			<div class="experience__wrapper">
				<div class="section-header">
					<div class="section-header__title  section-header__title--experience">Vendor Selection</div>
					<div class="section-header__subtitle">&nbsp;</div>
				</div>
				
				<table width = "100%">
				<td>
				<th>
				<div id="donutchart1" style="width: 450px; height: 450px;"></div>
				</th>
				<th>
				<div id="chart_column1"  style="width: 800px; height: 450px;"></div>
				</th>
				</td>
				</table>
			
			
		</div>
		</section>
		
		
		<!--------Patient Provider section -------> 
		<section id="features" class="features">
		
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    	<script type="text/javascript">
		  google.charts.load("current", {packages:["corechart"]});
		  google.charts.setOnLoadCallback(drawChart);
		  function drawChart() {
			var data = google.visualization.arrayToDataTable([
			  ['Answer', 'link', 'Amount'],
			  ['Yes',  'patienty.php',   <?php echo $patienty ?>],
			  ['No',    'patientn.php',   <?php echo $patientn ?>],
			  ['Dont know', 'patientd.php',  <?php echo $patientd ?>]     
			]);
			
			var view = new google.visualization.DataView(data);
			view.setColumns([0, 2]);

			var options = {
			  title: 'Patient Answer Ratio',
			  titleTextStyle: {
				color: "#FFFFFF"  

			},

			  pieHole: 0.4,
			  pieSliceTextStyle: {
				color: 'black',
				bold: 'True'
			  },
			  legend :{
				textStyle :{
					color: "#FFFFFF"				
							}
					},
			  backgroundColor: 'transparent',
			  colors: ['#F2D1B3', '#538EA6', '#F28C8C'],
			};
			
			var chart = new google.visualization.PieChart(document.getElementById('donutchart2'));
			chart.draw(view, options);

			var selectHandler = function(e) {
				window.location = data.getValue(chart.getSelection()[0]['row'], 1 );
			}

			// Add our selection handler.
			google.visualization.events.addListener(chart, 'select', selectHandler);

		  }
    	</script>
	
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"> </script>
	 	<script type="text/javascript">
		 google.charts.load('current', {packages: ['corechart', 'bar']});
		 google.charts.setOnLoadCallback(drawStacked);

		function drawStacked() {
			  var data = google.visualization.arrayToDataTable([
				['Gerne', 'Yes', 'No', 'Dont know', { role: 'annotation' } ],
				['Q1', 10, 24, 20, ''],
				['Q2', 16, 22, 23, ''],
				['Q3', 28, 19, 29, ''],
				  ['Q4', 28, 16, 29, ''],
				  ['Q5', 36, 34, 29, ''],
				  ['Q6', 28, 16, 29, ''],
				  ['Q7', 14, 27, 29, ''],
				  ['Q8', 28, 19, 20, ''],
				  ['Q9', 28, 4, 29, ''],
				  ['Q10', 36, 34, 29, '']
			  ]);

		  var options = {
			title: 'Vendor Answer Distribution',
			  titleTextStyle: {
				color: "#FFFFFF"  

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
			//width: 600,
			//height: 400,
			legend: { position: 'top', 
						maxLines: 3,
						textStyle: {
						  color: "FFFFFF"
						}},
			backgroundColor: 'transparent',
			colors: ['#F2EBBF', '#F3B562', '#8CBEB2'],
			bar: { groupWidth: '75%' },
			isStacked: true,
		  };

      var chart = new google.visualization.ColumnChart(document.getElementById('chart_column2'));
      chart.draw(data, options);
	}
	</script> 
			<div class="features__wrapper">
				<div class="section-header">
					<div class="section-header__title  section-header__title--features">Patient Provider</div>
					<div class="section-header__subtitle">&nbsp;</div>
				</div>
				
				<table width = "100%">
				<td>
				<th>
				<div id="donutchart2" style="width: 450px; height: 450px;"></div>
				</th>
				<th>
				<div id="chart_column2"  style="width: 800px; height: 450px;"></div>
				</th>
				</td>
				</table>
			</div>
	</section>
	
	
	
	<!---------------Data Management section --------------->
	<section id="realizations" class="realizations">
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   		 <script type="text/javascript">
			  google.charts.load("current", {packages:["corechart"]});
			  google.charts.setOnLoadCallback(drawChart);
			  function drawChart() {
				var data = google.visualization.arrayToDataTable([
				  ['Answer', 'link', 'Amount'],
				  ['Yes',   'datay.php',  <?php echo $datay ?>],
				  ['No',    'datan.php',  <?php echo $datan ?>],
				  ['Dont know', 'datad.php',  <?php echo $datad ?>]     
				]);
				
				var view = new google.visualization.DataView(data);
			    view.setColumns([0, 2]);

				var options = {
				  title: 'Data Answer Ratio',
				  titleTextStyle: {
					color: "#FFFFFF"  

				},

				  pieHole: 0.4,
				  pieSliceTextStyle: {
					color: 'black',
					bold: 'True'
				  },
				  legend :{
					textStyle :{
						color: "#FFFFFF"				
								}
						},
				  backgroundColor: 'transparent',
				  colors: ['#F2D1B3', '#538EA6', '#F28C8C'],
				};

				var chart = new google.visualization.PieChart(document.getElementById('donutchart3'));
				chart.draw(view, options);

				var selectHandler = function(e) {
					window.location = data.getValue(chart.getSelection()[0]['row'], 1 );
				}

				// Add our selection handler.
				google.visualization.events.addListener(chart, 'select', selectHandler);
			  }
    	</script>
	
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"> </script>
		 <script type="text/javascript">
			google.charts.load('current', {packages: ['corechart', 'bar']});
			google.charts.setOnLoadCallback(drawStacked);

			function drawStacked() {
				  var data = google.visualization.arrayToDataTable([
					['Gerne', 'Yes', 'No', 'Dont know', { role: 'annotation' } ],
					['Q1', 10, 24, 20, ''],
					['Q2', 16, 22, 23, ''],
					['Q3', 28, 19, 29, ''],
					  ['Q4', 28, 19, 29, ''],
					  ['Q5', 18, 19, 29, ''],
					  ['Q6', 28, 16, 29, ''],
					  ['Q7', 28, 19, 29, ''],
					  ['Q8', 28, 19, 59, ''],
					  ['Q9', 28, 19, 29, ''],
					  ['Q10', 36, 34, 29, '']
				  ]);

				  var options = {
					title: 'Vendor Answer Distribution',
					  titleTextStyle: {
						color: "#FFFFFF"  

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
					//width: 600,
					//height: 400,
					legend: { position: 'top', 
								maxLines: 3,
								textStyle: {
								  color: "FFFFFF"
								}},
					backgroundColor: 'transparent',
					colors: ['#F2EBBF', '#F3B562', '#8CBEB2'],
					bar: { groupWidth: '75%' },
					isStacked: true,
				  };

				  var chart = new google.visualization.ColumnChart(document.getElementById('chart_column3'));
				  chart.draw(data, options);
				}
		</script> 
		
			<div class="realizations__wrapper">

				<div class="section-header">
					<div class="section-header__title  section-header__title--realizations">Data Management</div>
					<div class="section-header__subtitle">&nbsp;</div>
				</div>
				
				<table width = "100%">
				<td>
				<th>
				<div id="donutchart3" style="width: 450px; height: 450px;"></div>
				</th>
				<th>
				<div id="chart_column3"  style="width: 800px; height: 450px;"></div>
				</th>
				</td>
				</table>
				
		</div>
		</section>
		
		
		
		
		
	</div>
		
		
		<!-- Scripts postload -->
	<script src="style/js/dependencies.min.js" type="text/javascript"></script>
	<script src="style/js/global.js" type="text/javascript"></script>
	
	
</body>
</html>
		
		

