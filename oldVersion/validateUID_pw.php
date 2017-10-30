<?php
 
if( $_POST )  {
   $username = $_POST['username'];
  $pw1 = $_POST['password1'];
  $pw2 = $_POST['password2'];
  $consentChecked = isset($_POST['consent']);
  if($consentChecked != 1) {
?>
 <html>     
  <form action="signup.php" method="post">
    <?php echo "Error: You did not agree on the term of this site!" ?>
    <p style="text-align: left;"><button type="submit" class="btn btn-default">Back</button>
  </form>
 </html>    
 
 <?php
   break;
  }

  $password = $pw1;
  if ($pw1 == $pw2) {
#    $password = md5($pw1);
    $password = $pw1;
?>
 <html>     
  <form action="signupDetails.php" method="post">
     <input class="form-control" type="hidden" name="username" value="<?php echo $username;?>"><br>
     <input class="form-control" type="hidden" name="password1" value="<?php echo $pw1;?>"></br>
     <input class="form-control" type="hidden" name="password2" value="<?php echo $pw2;?>"></br>	 
     <input type="hidden" name="consent" value= 1 checked>
    <p style="text-align: left;"><button type="submit" class="btn btn-default">Continue</button>
  </form>
 </html>
<?php
  }
  else { 
?>
 <html>     
  <form action="signup.php" method="post">
    <?php echo "Error: The two passwords do not match!" ?>
    <p style="text-align: left;"><button type="submit" class="btn btn-default">Back</button>
  </form>
 </html>    
 <?php
  }
}
?>