<?php
 session_start();
 $username = $_POST['username'];
 $pw1 = $_POST['password1'];
 $pw2 = $_POST['password2'];

?>
<form action="saveUserInfo.php" method="post"> 
 
                    <input class="form-control" type="hidden" name="username" value="<?php echo $username;?>">
                    <input class="form-control" type="hidden" name="password1" value="<?php echo $pw1;?>">   
					<input class="form-control" type="hidden" name="password2" value="<?php echo $pw2;?>">   
                    <input type="hidden" name="consent" value=1 checked>
                    <p>
                    *: Required Items:
                    <br />
                    <label>Age*:</label> 
                    <select class="ui dropdown" name="age">
                        <option value=""></option>
                        <option value="0">18-25</option>
                        <option value="1">26-35</option>
                        <option value="2">36-45</option>
                        <option value="3">46-55</option>
                        <option value="4">56-65</option>
                        <option value="5">66+</option>
                        </select>
                    <br /> <br>  <br />
 
                    <label>Gender:</label><br><br>
                    <input class="form-control" type="radio" name="gender" value ="male"> Male <br>  
                    <input type="radio" name="gender" value="female"> Female<br><br>
                   
                    <label>Education:</label> 
                    <select class="ui dropdown" name="education">
                        <option value=""></option>
                        <option value="0">Doctoral</option>
                        <option value="1">Masters</option>
                        <option value="2">Professional</option>
                        <option value="3">Bachelor</option>
                        <option value="4">Associate</option>
                        <option value="5">High School</option>
                        <option value="6">Below High School</option>
                        <option value="7">Other</option>
                    </select>
                    <br />  <br>   <br />

                    <label>Major:</label>
                    <select class="ui dropdown" name="Major">
                    <option value=""></option>
                        <option value="0">Health Care Administration</option>
                        <option value="1">Medical Records Administration</option>
                        <option value="2">Nursing</option>
                        <option value="3">Health Sciences</option>
                        <option value="4">Business Administration</option>
                        <option value="5">Information Technology</option>
                        <option value="6">Public Health</option>
                        <option value="7">Other</option>
                        </select> 
                    <br> <br>  <br />

                    <label>Job Title:</label> 
                    <select class="ui dropdown" name="Job_Title">
                    <option value=""></option>
                        <option value="0">Information Technology Specialist</option>
                        <option value="1">Program Manager</option>
                        <option value="2">Chief Executive Officer (CEO)</option>
                        <option value="3">Chief Medical Information Officer</option>
                        <option value="4">Chief Medical Officer</option>
                        <option value="5">Chief Nursing Officer</option>
                        <option value="6">Chief Operating Officer</option>
                        <option value="7">Telehealth Supervisor</option>
                        <option value="8">Consultant</option>
                        <option value="9">Other</option>
                        </select> 
                    <br />  <br>  <br />
                    
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
                    <br>  <br> <br />
                    
                    <label>Type of Organization:</label> 
                    <select class="ui dropdown" name="Organization_Type">
                    <option value=""></option>
                        <option value="0">Hospital</option>
                        <option value="1">Hospital Network</option>
                        <option value="2">Physician Group Practice</option>
                        <option value="3">Group or Ambulatory Surgical Center</option>
                        <option value="4">Health Maintenance Organization (HMO)</option>
                        <option value="5">Managed Care Organization (MCO)</option>
                        <option value="6">Independent Practice Association (IPA)</option>
                        <option value="7">Physician Sponsored Network (PSN)</option>
                        <option value="8">Preferred Provider Organization (PPO)</option>
                        <option value="9">Other</option>                        
                        </select>
                    <br /> <br>  <br />
					
					 <label>Organization Name:</label> 
					<!-- <select class="text-align" name="Organization_Name"> -->
					<input type = "text" name = "Organization_Name">
					 <!--<input type="text" name="Organization_Name" value="<?php echo $name;?>"> -->
					 <br/> <br> <br/>
					 

                    <label>Size of Organization:</label>
                     <select class="ui dropdown" name="Organization_Size">
                        <option value=""></option>
                        <option value="0">1-100</option>
                        <option value="1">101-200</option>
                        <option value="2">201-300</option>
                        <option value="3">301-400</option>
                        <option value="4">401-500</option>
                        <option value="5">501+</option>
                        </select>
                    <br> <br> <br />

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
                    <br /> <br> <br />

                    <label>Number of People in IT Team in your organization:</label> <br><br>
                    <input class="form-control" type="radio" name="IT_Team_Number" value ="0"> 0 <br>  
                    <input type="radio" name="IT_Team_Number" value="1"> 0-3<br>
                    <input type="radio" name="IT_Team_Number" value="2"> 4-10<br>
                    <input type="radio" name="IT_Team_Number" value="3"> 11-20<br>
                    <input type="radio" name="IT_Team_Number" value="4"> 21-50<br>
                    <input type="radio" name="IT_Team_Number" value="5"> 51-100<br>
                    <input type="radio" name="IT_Team_Number" value="6"> 101-200<br>
                    <input type="radio" name="IT_Team_Number" value="7"> 201-500<br>
                    <input type="radio" name="IT_Team_Number" value="8"> 501+<br>                   
                    <br />
                    
                    <label>Number of IT Persons Familiar with Information Security:</label><br><br>
                     <input class="form-control" type="radio" name="IT_Persons_Number" value ="0"> 0 <br>  
                    <input type="radio" name="IT_Persons_Number" value="1"> 0-3<br>
                    <input type="radio" name="IT_Persons_Number" value="2"> 4-10<br>
                    <input type="radio" name="IT_Persons_Number" value="3"> 11-20<br>
                    <input type="radio" name="IT_Persons_Number" value="4"> 21-50<br>
                    <input type="radio" name="IT_Persons_Number" value="5"> 51-100<br>
                    <input type="radio" name="IT_Persons_Number" value="6"> 101-200<br>
                    <input type="radio" name="IT_Persons_Number" value="7"> 201-500<br>
                    <input type="radio" name="IT_Persons_Number" value="8"> 501+<br>
               
  <p style="text-align: left;"> <button type="submit" class="btn btn-default">Submit</button> </p>
 </form> 