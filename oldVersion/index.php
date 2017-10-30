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
        header("Location: instructions.php");
        die("Redirecting to: instructions.php");
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
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8">
        <title>Telehealth Login</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>
    <body>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Login Page</title>
			<link rel="stylesheet" href="css/normalize.css">
			<link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
			<link rel="stylesheet" href="css/main.css">
		</head>
		
		<body
        <!--<div class="row">
            <div class="col-md-4 col-md-offset-4">-->
                 
                <form action="index.php" method="post"> 
				
					<h1>TeleHealth Login</h1>
					<fieldset>
                    <label>Username:</label> 
                    <input class="form-control" type="text" name="username" value="<?php echo $submitted_username; ?>" />
                    <label>Password:</label>
                    <input class="form-control" type="password" name="password" />
					
                    <p style="text-align: right;"> <span class="psw"> <a href="keyterms.html">Forgot password?</a></span> </p>
					<p style="text-align: right;"> <span class="psw"> <a href="adminlogin.php">Log in as Administrator</a></span> </p>
				
                    <p style="text-align: center;"> <button type="submit" class="btn btn-default">Submit</button> </p>  
					<p style="text-align: center;"> <button type="submit" class="btn btn-default" onclick = "window.open('signup.php')" >Register</button> </p>
					     
					</fieldset>
			   </form> 
            <!--</div>
        </div> -->
		</body>
    </body>
</html>