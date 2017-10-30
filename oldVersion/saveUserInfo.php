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
  $Organization_Name = $_POST['Organization_Name'];
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
        Organization_Name, Organization_Type, Organization_Size, 
        Telehealth_Use_Years, IT_Team_Number, IT_Persons_Number, Articleid)
        VALUES (NULL, '" . $username . "','" . $password . "','" . $Age . 
        "','" . $Gender . "','" . $Education . "','" . $Major . "','". $Job_Title . "','" . 
        $Work_Experience . "','" . $Organization_Name . "','" . $Organization_Type .
        "','" . $Organization_Size . "','" . $Telehealth_Use_Years . "','" . 
        $IT_Team_Number . "','" . $IT_Persons_Number . "','" . $consentChecked . "')";
  
  if (mysqli_query($conn, $query)) {
      echo "Created Successfully";
  } else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
}
?>
 <html>     
  <form action="instructions.php" method="post">
	<br> </br>
	<h1 style = "text-align: center;"> Thank you for registration! </h1>
	<br> </br>
    <p style="text-align: center;"><button type="submit" class="btn btn-default">Continue</button> </p>
  </form>
 </html>