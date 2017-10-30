<?php
session_start();
?>

<form method="post" action="signupDetails.php"> 
	<h1> Registration Page </h1>
	
       <label> User Name *</label>
	   <input class="form-control" type="text" name="username">
	   

        <label> Password *</label>
        <input class="form-control" type="password" name="password1">

        <label> Confirm Password * </label>
        <input class="form-control" type="password" name="password2">

  
                
 <h2><p style="text-align: center;">
  Consent
 </p></h2>
  <p style = "text-align:center;"> <input type="checkbox" name="consent" unchecked="unchecked"> I have read the information and agree to the <span class="psw"> 
  <a href="terms.php" style="color:blue;">terms</a></span>. </p>
  <br></br>
  <p style="text-align: center;"> <button type="submit" class="btn btn-default">Submit</button> </p>
 </form> 