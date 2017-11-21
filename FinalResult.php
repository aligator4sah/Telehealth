
<h1><p style="text-align: center;">
Final Results
</p></h1>

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
	
	if( $_POST )  {
        
        for($x = $min; $x <= $max; $x ++){
            
            if($_POST["optionsRadios$x"]){
            
                $question = $x;
                $answer = $_POST["optionsRadios$x"];
                $sql = "INSERT INTO answers (Answer, UserID, QuestionID) VALUES ('$answer', $userid, $question)";

                if ($conn->query($sql) === TRUE){
                    //echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                } 
            }
        }
	}		
	
	$sql4 = "SELECT COUNT(AnswerID) AS number, Answer AS ans FROM answers WHERE UserID = '$userid' GROUP BY Answer;";
	$result4 = $conn->query($sql4);
	$resultSet = array();
	if ($result4->num_rows > 0) {
          while ($row = $result4->fetch_assoc()) {
              $ans = $row["ans"];
			  $num = $row["number"];
			  echo $ans ; 
			  
			  echo $num ;
			  echo "<br>";
			  echo "</br>";
			  
          }
      }
	  
	 


?>


    <?php
	{
    
      // how to get the user and question ID from other database 
      $answerGroup = array("Yes", "No", "Don't Know");
      $answerGroup["Yes"] = array();
      $answerGroup["No"] = array();
      $answerGroup["Don't Know"] = array();

      for ($i = 0; $i < 85; $i++) {
          if (!empty($_POST["optionsRadios" . ($i + 1)])) {
              $ans = $_POST["optionsRadios" . ($i + 1)];
              $answerGroup[$ans][] = ($i + 1);
          }
      }

      $sql1 = "SELECT questionid, description FROM questions";
      $result = $conn->query($sql1);
      $resultSet = array();
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $resultSet[$row['questionid']] = $row['description'];
          }
      }

      $sql2 = "SELECT questionid, description FROM patient";
      $result = $conn->query($sql2);
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $resultSet[$row['questionid']] = $row['description'];
          }
      }

      $sql3 = "SELECT questionid, description FROM data";
      $result = $conn->query($sql3);
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $resultSet[$row['questionid']] = $row['description'];
          }
      }
      //  for showing the page
      $firstYes = 0;
      $firstNo = 0;
      $firstDont = 0;
      $totalSize = count($answerGroup['Yes']) + count($answerGroup['No']) + count($answerGroup["Don't Know"]);
        for ($i = 0; $i < $totalSize; $i++) { 
            if ($i < count($answerGroup['Yes'])) { 
                //yes group
                if ($firstYes == 0) {
                    echo "<h1> Yes </h1>";
                    echo "<ol>";
                }
                $firstYes++;
                echo "<li>";
                echo $resultSet[$answerGroup['Yes'][$i]];
                echo "</li>";
            } 
            else if ($i < count($answerGroup['Yes']) + count($answerGroup['No'])) {
                //no group
                if ($firstNo == 0) {
                    echo "</ol>";
                    echo "<h1> No </h1>";
                    echo "<ol>";
                }
                $firstNo++;
                echo "<li>";
                echo $resultSet[$answerGroup['No'][$i - count($answerGroup['Yes'])]];
                echo "</li>";
            } else {
                //don't know group
                if ($firstDont == 0) {
                    echo "</ol>";
                    echo "<h1> Don't Know </h1>";
                    echo "<ol>";
                }
                $firstDont++;
                echo "<li>";
                echo $resultSet[$answerGroup["Don't Know"][$i - count($answerGroup['Yes']) - count($answerGroup['No'])]];
                echo "</li>";
            }                
        }
        echo "</ol>";
        mysqli_close($conn);
    }?>
<h2><center>Thanks for participating!</center></h2>
<h2><a href="BlankSurvey.php#top">Return to self-assessment form</a></h2>
<html>
<body>
<button onclick="myFunction()">Print this page</button>
<script>
  function myFunction() {
     window.print();
  }
</script>
</body>
</html>