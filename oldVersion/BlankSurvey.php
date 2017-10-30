<!DOCTYPE html>
<html>
<title>Telehealth</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>
 <ul class="w3-navbar w3-blue">
    <li><a href="javascript:void(0)" class="tablink w3-red" onclick="openCity(event, 'vendor');"><h2 id="top"></h2>Vendor Selection</a></li>
    <li><a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'patient');"><h2 id="top"></h2>Patient Provider Interaction</a></li>
    <li><a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Data');"><h2 id="top"></h2>Data Management</a></li>
 </ul>
   
<div id="vendor" class="w3-container city" >
  <h2><p style="text-align: center;">
        Vendor Selection
    </p>
  </h2>
    
<?php
    require("common.php");
    
    if(empty($_SESSION['user'])) {   
        header("Location: index.php");
        die("Redirecting to index.php"); 
    }     
    $query = "SELECT questionid, categoryid, subcategoryid, description, Link FROM questions";     
    try { 
        $stmt = $db->prepare($query); 
        $stmt->execute(); 
    } 
    catch(PDOException $ex) {       
        die("Failed to run query: " . $ex->getMessage()); 
    }          
   $rows = $stmt->fetchAll(); 
?>
    
    <body>
            <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <?php               
                 include("Vendor.php");                 
                ?>                               
            </div>
        </div>
    </body>
</html>
</div>
<h2 id="top"></h2>
<div id="patient" class="w3-container city" style="display:none">
  <h2><p style="text-align: center;">
        Patient Provider Interaction
    </p></h2>
<?php
    $query = "SELECT questionid, categoryid, subcategoryid, description FROM patient";     
    try {       
        $stmt = $db->prepare($query); 
        $stmt->execute(); 
    } 
    catch(PDOException $ex) {         
        die("Failed to run query: " . $ex->getMessage()); 
    }        
    $rows = $stmt->fetchAll(); 
?>
      <body>
            <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <?php
                 include("PatientProvider.php"); 
                ?>
            </div>
        </div>
    </body>
</html>

</div>
<div id="Data" class="w3-container city" style="display:none">
  <h2><p style="text-align: center;">
        Data Management
    </p></h2>
<?php
    $query = "SELECT questionid, categoryid, subcategoryid, description FROM data";     
    try {  
        $stmt = $db->prepare($query); 
        $stmt->execute(); 
    } 
    catch(PDOException $ex) {  
        die("Failed to run query: " . $ex->getMessage()); 
    } 

    $rows = $stmt->fetchAll(); 
?>
    <body>        
        <div class="row">
            <div class="col-md-8 col-md-offset-2">               
            <?php               
                 include("DataManagement.php");                 
                ?>                
            </div>
        </div>
    </body>
</html>

<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>
</body>
</html>