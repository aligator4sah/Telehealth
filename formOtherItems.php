<?php
 session_start();
 $username = $_POST['username'];
 $pw1 = $_POST['password1'];
 $pw2 = $_POST['password2'];

?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <form action="saveUserInfo.php" method="post">
      
        <h1>Sign Up</h1>
		<input class="form-control" type="hidden" name="username" value="<?php echo $username;?>">
        <input class="form-control" type="hidden" name="password1" value="<?php echo $pw1;?>">  
		<input class="form-control" type="hidden" name="password2" value="<?php echo $pw2;?>">  
		<input type="hidden" name="consent" value=1 checked>
       
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
		  <label>Age*:</label> 
		  <input type = "text" name = "age">
          <!--<select class="ui dropdown" name="age">
              <option value=""></option>
              <option value="0">18-25</option>
              <option value="1">26-35</option>
              <option value="2">36-45</option>
              <option value="3">46-55</option>
              <option value="4">56-65</option>
              <option value="5">66+</option>
           </select> -->
		   
          <label>Gender:</label>
		  <select class="ui dropdown" name="gender">
              <option value=""></option>
              <option value="male"> Male </option>
              <option value="female"> Female </option>
           </select>
          
          <label>Education:</label> 
              <select class="ui dropdown" name="education">
                <option value=""></option>
                <option value="Doctoral">Doctoral</option>
                <option value="Master">Masters</option>
                <option value="Professional">Professional</option>
                <option value="Bachelor">Bachelor</option>
                <option value="Associate">Associate</option>
                <option value="High School">High School</option>
                <option value="Below High School">Below High School</option>
                <option value="Other">Other</option>
		      </select>
          
          <label>Major:</label>
                    <select class="ui dropdown" name="Major">
                    <option value=""></option>
                        <option value="Health Care Administration">Health Care Administration</option>
                        <option value="Medical Records Administration">Medical Records Administration</option>
                        <option value="Nursing">Nursing</option>
                        <option value="Health Sciences">Health Sciences</option>
                        <option value="Business Administration">Business Administration</option>
                        <option value="Information Technology">Information Technology</option>
                        <option value="Public Health">Public Health</option>
                        <option value="Other">Other</option>
                        </select> 
        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Your Job</legend>
          <label>Job Title:</label> 
                    <select class="ui dropdown" name="Job_Title">
                    <option value=""></option>
                        <option value="Information Technology Specialist">Information Technology Specialist</option>
                        <option value="Program Manager">Program Manager</option>
                        <option value="Chief Executive Officer (CEO)">Chief Executive Officer (CEO)</option>
                        <option value="Chief Medical Information Officer">Chief Medical Information Officer</option>
                        <option value="Chief Medical Officer">Chief Medical Officer</option>
                        <option value="Chief Nursing Officer">Chief Nursing Officer</option>
                        <option value="Chief Operating Officer">Chief Operating Officer</option>
                        <option value="Telehealth Supervisor">Telehealth Supervisor</option>
                        <option value="Consultant">Consultant</option>
                        <option value="Other">Other</option>
                        </select> 
						
        <label>Work Experience in Information Security and Privacy:</label>
                    <select class="ui dropdown" name="Work_Experience">
                    <option value=""></option>
                        <option value="0">0-2 years</option>
                        <option value="1">3-5 years</option>
                        <option value="2">6-10 years</option>
                        <option value="3">11-15 years</option>
                        <option value="4">16-25 years</option>
                        <option value="5">26+ years</option>                      
                        </select>     
		
		<label>Type of Organization:</label> 
                    <select class="ui dropdown" name="Organization_Type">
                    <option value=""></option>
                        <option value="Hospital">Hospital</option>
                        <option value="Hospital Network">Hospital Network</option>
                        <option value="Physician Group Practice">Physician Group Practice</option>
                        <option value="Group or Ambulatory Surgical Center">Group or Ambulatory Surgical Center</option>
                        <option value="Health Maintenance Organization (HMO)">Health Maintenance Organization (HMO)</option>
                        <option value="Managed Care Organization (MCO)">Managed Care Organization (MCO)</option>
                        <option value="Independent Practice Association (IPA)">Independent Practice Association (IPA)</option>
                        <option value="Physician Sponsored Network (PSN)">Physician Sponsored Network (PSN)</option>
                        <option value="Preferred Provider Organization (PPO)">Preferred Provider Organization (PPO)</option>
                        <option value="Other">Other</option>                        
                        </select>
						
		<label>Organization Name:</label> 
					<input type = "text" name = "Organization_Name">
					
		<label>Size of Organization:</label>
                     <select class="ui dropdown" name="Organization_Size">
                        <option value=""></option>
                        <option value="1-100">1-100</option>
                        <option value="101-200">101-200</option>
                        <option value="201-300">201-300</option>
                        <option value="301-400">301-400</option>
                        <option value="401-500">401-500</option>
                        <option value="501+">501+</option>
                        </select>
		
		<label>Years of Using Telehealth in Practice:</label> 
                    <select class="ui dropdown" name="Telehealth_Use_Years">
                        <option value=""></option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6+</option>
                        </select>
		
		<label>Number of People in IT Team in your organization:</label>
                    <input class="form-control" type="checkbox" name="IT_Team_Number" value ="0"> <label class = "light"> 0 </label><br>
                    <input type="checkbox" name="IT_Team_Number" value="0-3"> <label class = "light"> 0-3 </label> <br>
                    <input type="checkbox" name="IT_Team_Number" value="4-10"> <label class = "light"> 4-10 </label> <br>
                    <input type="checkbox" name="IT_Team_Number" value="11-20"> <label class = "light"> 11-20 </label> <br>
                    <input type="checkbox" name="IT_Team_Number" value="21-50"> <label class = "light"> 21-50 </label> <br>
                    <input type="checkbox" name="IT_Team_Number" value="51-100"> <label class = "light"> 51-100 </label> <br>
                    <input type="checkbox" name="IT_Team_Number" value="101-200"> <label class = "light"> 101-200 </label> <br>
                    <input type="checkbox" name="IT_Team_Number" value="201-500"> <label class = "light"> 201-500 </label> <br>
                    <input type="checkbox" name="IT_Team_Number" value="501+"> <label class = "light"> 501+ </label>
					<br> </br>
					
        
          <label>Number of IT Persons Familiar with Information Security:</label>
                     <input class="form-control" type="checkbox" name="IT_Persons_Number" value ="0"> <label class = "light"> 0 </label> <br>  
                    <input type="checkbox" name="IT_Persons_Number" value="0-3"> <label class = "light"> 0-3 </label> <br>
                    <input type="checkbox" name="IT_Persons_Number" value="4-10"> <label class = "light"> 4-10 </label> <br>
                    <input type="checkbox" name="IT_Persons_Number" value="11-20"> <label class = "light"> 11-20 </label> <br>
                    <input type="checkbox" name="IT_Persons_Number" value="21-50"> <label class = "light"> 21-50 </label><br>
                    <input type="checkbox" name="IT_Persons_Number" value="51-100"> <label class = "light"> 51-100 </label> <br>
                    <input type="checkbox" name="IT_Persons_Number" value="101-200"> <label class = "light"> 101-200 </label> <br>
                    <input type="checkbox" name="IT_Persons_Number" value="201-500"> <label class = "light"> 201-500 </label> <br>
                    <input type="checkbox" name="IT_Persons_Number" value="501+"> <label class = "light"> 501+ </label> <br>
        </fieldset>
        <button type="submit">Sign Up</button>
      </form>
      
    </body>
</html>
  
  
</body>
</html>
