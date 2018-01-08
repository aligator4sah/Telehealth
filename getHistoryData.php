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
		
		//count how many distinct date need to be displayed on graph
		$getdatecount = "SELECT COUNT(DISTINCT curtime) AS count
						FROM `answers` WHERE UserID = $userid";
		$resdates = $conn->query($getdatecount);
		if ($resdates->num_rows > 0) {
			while($rowdates = $resdates->fetch_assoc()){
			$count = $rowdates["count"];
			}
		}
		
		//echo $count;
		
		
		//get all the date data as an array
		$date = array();
		$getdates = "SELECT DISTINCT curtime
						FROM answers
						WHERE UserID = $userid;";				
		$resdates = $conn->query($getdates);
		
		for($x = 0; $x < $count; $x++) {
			while($rowdates = $resdates->fetch_assoc()){
				$date[$x] = $rowdates["curtime"];
				echo $date[$x];
			}
		}
		

    //count the yes, no and don't number in the array
	//count how many yes in total through three sections
	$yesarray = array();
	$yes = "Yes";
	for ($x = 0; $x < $count; $x++) {
		if ( isset($date[$x])) {
			$getquestionyes = "SELECT COUNT(AnswerID) AS yescount
							FROM answers, questions 
							WHERE answers.UserID = $userid AND answers.QuestionID = questions.QuestionID 
							AND Answer = $yes AND curtime = $date[$x];";
			$resdata = $conn->query($getquestionyes);
			while ($rowdata = $resdata->fetch_assoc()) {
				$questionyes = $rowdata["yescount"];
			}
		}
		
		
		
	}


//create data table


?>

