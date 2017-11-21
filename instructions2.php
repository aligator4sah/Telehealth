<?php
 $dbUsername = "hsx1"; 
 $dbPassword = "123"; 
 $dbhost = "localhost"; 
 $dbname = "telemed"; 
 
if( $_POST )  {
  $conn = new mysqli($dbhost,$dbUsername, $dbPassword, $dbname);
  if (!$conn) {
    die('Could not connect: ' . $conn->connect_error);
  }

  $username = $_POST['username'];
  $pw1 = $_POST['password1'];
  $pw2 = $_POST['password2'];
  $Age = $_POST['age'];
  if(empty($_POST["age"])) {
    echo "Age is a required item!";
  }
  else {
    $Age = $_POST['age'];
  }
 # echo $Age;
  $Gender = $_POST['gender'];
  $Education = $_POST['education'];
  $Major = $_POST['Major'];
  $Job_Title = $_POST['Job_Title'];
  $Work_Experience = $_POST['Work_Experience'];
  //$Organization_Name = $_POST['Organization_Name'];
  $Organization_Type = $_POST['Organization_Type'];
  $Organization_Size = $_POST['Organization_Size'];
  $Telehealth_Use_Years = $_POST['Telehealth_Use_Years'];
  $IT_Team_Number = $_POST['IT_Team_Number'];
  $IT_Persons_Number = $_POST['IT_Persons_Number'];
  $consentChecked = isset($_POST['consent']);

  $password = $pw1;
  if ($pw1 == $pw2) {
    $password = $pw1;
  }
 
  $query = "INSERT INTO userinfo (id, username, password, Age,
        Gender, Education, Major, Job_Title, Work_Experience,
        Organization_Type, Organization_Size, 
        Telehealth_Use_Years, IT_Team_Number, IT_Persons_Number, Articleid)
        VALUES (NULL, '" . $username . "','" . $password . "','" . $Age . 
        "','" . $Gender . "','" . $Education . "','" . $Major . "','". $Job_Title . "','" . 
        $Work_Experience . "','" . $Organization_Type .
        "','" . $Organization_Size . "','" . $Telehealth_Use_Years . "','" . 
        $IT_Team_Number . "','" . $IT_Persons_Number . "','" . $consentChecked . "')";
  
  if (mysqli_query($conn, $query)) {
      echo "Created Successfully";
  } else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }
  //mysqli_close($conn);
}

?>
<!DOCTYPE html><html lang="en">

<head>
	<!-- Basic informations -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Site informations -->
	<title>TeleHealth Instruction</title>
	<meta name="author" content="Sabrina Han">
	<meta name="description" content="Free HTML5 Template created by Dominik Serafin.">

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
	.button {
		background-color: transparent;
		 padding: 15px 32px;
		color: white;
		border: 3px solid #ccc;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 24px;
		
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
			<nav class="header__navigation">
				<a href="#start" class="js-smooth-scroll">
					<div class="js-smooth-scroll  header__navigation-element">Start...</div>
				</a>
				<a href="#experience" class="js-smooth-scroll">
					<div class="header__navigation-element  header__navigation-element--experience">Skills...</div>
				</a>
				<a href="#features" class="js-smooth-scroll">
					<div class="header__navigation-element  header__navigation-element--features">Guarantees...</div>
				</a>
				<a href="#realizations" class="js-smooth-scroll">
					<div class="header__navigation-element  header__navigation-element--realizations">Portfolio...</div>
				</a>
				<a href="#contact" class="js-smooth-scroll">
					<div class="header__navigation-element  header__navigation-element--contact">Contact...</div>
				</a>
			</nav>

			<a href="#start" class="header__title-wrapper  js-smooth-scroll">
				<div class="header__title-main">Tele Health</div>
				<div class="header__title-sub">By School of Health and Rehabilitation</div>
			</a>

			
		</div>
	</header>
	<!-- End Header -->

	
	<!-- "Features" Section -->
		<section id="features" class="features">
		<form action="BlankSurvey1.php" method="post">
			<div class="features__wrapper">
				<div class="section-header">
					<div class="section-header__title  section-header__title--features">Instructions </div>
					<div class="section-header__subtitle">1. You will be prompted to answer questions broken down into three privacy and security sections (Vendor Section, Patient Provider Interaction, Data Management) regarding your current telehealth systems, services, or practices. <br> </div>
					<div class="section-header__subtitle">2. Answer these questions to the best of your knowledge by selecting "Yes" or "No". If you are not sure, select "Don't Know". <br> </div>
					<div class="section-header__subtitle">3. Key words are underlined in the question and link to their respective definitions. Question references and citations are underlined after the question. <br> </div>
					<div class="section-header__subtitle">4. Once each question has been answered from every section, click the "Submit" button. <br> </div>
					<div class="section-header__subtitle">5. A report will be generated based on your responses. This will help determine which privacy and security areas you are doing good or needing improvement in regards to your telehealth systems, services, or practices. <br> </div>
				<br> </br>
				</div>
			<p style="text-align: center;"><button type="submit" class = "button" >Continue</button>
			</div>
			</form>
			
<?php
require("common.php");
	
// This variable will be used to re-display the user's username to them in the 
// login form if they fail to enter the correct password.  It is initialized here 
// to an empty value, which will be shown if the user has not submitted the form. 
$submitted_username = '';

// check to determine whether the login form has been submitted 
// If it has, then the login code is run, otherwise the form is displayed 
if (!empty($_POST)) {
    // This query retreives the user's information from the database using their username. 
    $query = "SELECT username, password FROM userinfo WHERE username = :username"; 

    // The parameter values 
    $query_params = array(
        ':username' => $_POST['username']
    );

    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    } catch (PDOException $ex) {
        die("Failed to run query: " . $ex->getMessage());
    }

    // This variable tells us whether the user has successfully logged in or not. 
    $login_ok = false;

    // Retrieve the user data from the database.  If $row is false, then the username is not registered. 
    $row = $stmt->fetch();
    if ($row) {
        $check_password = $_POST['password1'];
        if ($check_password === $row['password']) {
            $login_ok = true;
        }
    }

    // If the user logged in successfully, then we send them to the private members-only page 
    // Otherwise, we display a login failed message and show the login form again 
    if ($login_ok) {
        // Here I am preparing to store the $row array into the $_SESSION by 
        // removing the salt and password values from it.  Although $_SESSION is 
        // stored on the server-side, there is no reason to store sensitive values 
        // in it unless you have to.  Thus, it is best practice to remove these 
        // sensitive values first. 
        //unset($row['salt']);
        unset($row['password']);

        // This stores the user's data into the session at the index 'user'. 
        // We will check this index on the private members-only page to determine whether 
        // or not the user is logged in.  We can also use it to retrieve 
        // the user's details. 
        
        session_start();
        $_SESSION['user'] = $row;
        
        $_SESSION['username'] = $_POST["username"];

        // Redirect the user to the private members-only page. 
        header("Location: instructions1.php");
        die("Redirecting to: instructions1.php");
    } else {
        print("Login Failed.");

        // Show them their username again so all they have to do is enter a new 
        // password.  The use of htmlentities prevents XSS attacks.  You should 
        // always use htmlentities on user submitted values before displaying them 
        // to any users (including the user that submitted them).  For more information: 
        // http://en.wikipedia.org/wiki/XSS_attack 
        $submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');
    }
}
?> 
		</section>
		<!-- End "Features" Section -->