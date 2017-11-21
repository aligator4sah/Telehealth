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
#  $passwd = $_POST['password'];
  $Age = $_POST['age'];
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

  if($Age == '') {
      $Age = 1;
  }
  
  $password = $pw1;
  if ($pw1 == $pw2) {
    $password = md5($pw1);
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
    <p style="text-align: left;"><button type="submit" class="btn btn-default">Continue</button>
  </form>
 </html>