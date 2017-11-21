<?php
require("common.php");
	$username = "hsx1";
    $password = "123";
    $servername = "localhost";
    $dbname = "telemed";
	
	$conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        //echo "db is connected";
    }

// This variable will be used to re-display the user's username to them in the 
// login form if they fail to enter the correct password.  It is initialized here 
// to an empty value, which will be shown if the user has not submitted the form. 
$submitted_username = '';

// check to determine whether the login form has been submitted 
// If it has, then the login code is run, otherwise the form is displayed 
if (!empty($_POST)) {
    // This query retreives the user's information from the database using their username. 
    $query = "SELECT username, password FROM adminlogin WHERE username = :username"; 

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
        $check_password = $_POST['password'];
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
        header("Location: adminVisual.php");
        die("Redirecting to: adminlogin1.php");
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

<!DOCTYPE html><html lang="en">

<head>
	<!-- Basic informations -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Site informations -->
	<title>TeleHealth Login</title>
	<meta name="author" content="Sabrina Han">
	

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
		border: none;
		color: whilte;
		padding: 8px 12px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 24px;
		
		cursor: pointer;
    }
	
	input[type=text] {
    width: 80%;
    padding: 12px 18px;
	background-color: transparent;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
	}
	
	input[type=password] {
    width: 80%;
    padding: 12px 18px;
	background-color: transparent;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
	}
	
	img {
    border-radius: 50%;
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

	<section id="hero" class="hero">
		<div class="hero__background">&nbsp;</div>
		<div class="hero__gradient">&nbsp;</div>
		<div class="hero__pattern">&nbsp;</div>
		<div class="hero__content">
			<div class="hero__content-wrapper">
				<div class="hero__title-wrapper">
					<div class="hero__title-large">TeleHealth &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
					<div class="hero__title-small">Log in here</div>
					<!-- <div class="hero__title-small">This is the Aurora Template.</div> -->
				</div>
				
				<div margin-top = "90px" float = "right">
				<div class="hero__photo-wrapper">
					<img src="download.png" alt="healthlog" height = "220px" width = "220px" background-size="cover">
				</div>
				</div>
				
				<form action="adminlogin1.php" method="post"> 
				
				<div class="hero__description">
					<label>Administrator:</label> 
                    <input class="form-control" type="text" name="username" value="<?php echo $submitted_username; ?>" />
					<br> </br>
                    <label>Password: &nbsp &nbsp</label>
                    <input class="form-control" type="password" name="password" />
					<p style="text-align: right;"> <span class="psw"> <a href="keyterms.html">Forgot password?</a></span> </p>
					
				</div>
				<div class="hero__call-to-action">
					<!-- <p style="text-align: center;"> <button type="submit" class="btn btn-default">Submit</button> </p>  
					<p style="text-align: center;"> <button type="submit" class="btn btn-default" onclick = "window.open('signup.php')" >Register</button> </p> --> 
					<a  class="hero__button  ghost-button  ghost-button--hero"> <button type="submit" class = "button"> Submit </button> </a>
					
				</div>
				
				</form>
			</div>
		</div>
	</section>

</body>
</html>