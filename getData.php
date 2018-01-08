<?php    

    require("common.php");

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        //echo "db is connected";
    }

   
    $user = $_SESSION['username'];
    $sql = "SELECT id FROM userinfo WHERE username = '$user';";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $userid = $row["id"];

    $sql = "SELECT MIN(QuestionID) AS min, MAX(QuestionID) AS max FROM questions;";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $min = $row["min"];
    $max = $row["max"];
	
	$sql4 = "SELECT COUNT(AnswerID) AS number, Answer AS ans FROM answers WHERE UserID = '$userid' GROUP BY Answer;";
	$result4 = $conn->query($sql4);
	
	$emparray = array();
    while($row = mysqli_fetch_assoc($result4))
    {
        $emparray[] = $row;
    }
	
	/*$resultSet = array();
	if ($result4->num_rows > 0) {
          while ($row = $result4->fetch_assoc()) {
              $resultSet[$row['ans']] = $row['number'];
			  
          }
      }
	  
	  //$totalyes = $resultSet['Yes'];
	  //$totalno = $resultSet['No'];
	  //$totaldon = $resultSet['Dont Know'];
	  //echo $totalyes;*/
	  echo json_encode($emparray);
	  
?>