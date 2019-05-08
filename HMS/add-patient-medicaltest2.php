<html>
<head>
<!---JQuery Imports -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!---JQuery Imports -->
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="dashboard.css">
<script src="index.js"></script>
<title>HMS</title>
</head>
<center><body background="images/background.jpg">
    <header>
        <div id="header-div1">
             <img src="images/e-logo.png" id="heaader-logo"> 
	         <h1 style="font-family:Brush Script MT;">E-Health Management System</h1>
			 <a href="logout.php"><button Style="background-color:#0b396d; width:100px; height:50px; float:right; color:white; margin-right:50px;">Logout</button></a>
			 <a href="phlebotomistdashboard.php"><button Style="background-color:#0b396d; width:100px; height:50px; float:right; color:white; margin-right:50px;">Main Dashboard</button></a>

	    </div>
    </header><br><br>				
	<div class="editProfile" style="width:60%; height:auto; background-color:lightgrey; border: 2px solid #0b396d; color:black;">  
	<form action="uploadmedicalreport.php" method="POST" enctype="multipart/form-data">
	<center><input type="file" name="file" id="file" style=" width:20%; height:5%;" required><br>
    <input type="submit" value="Apply" name="submit" style=" width:20%; height:5%; border: 2px solid #0b396d;"> </center><br><br>
	</form>
    </div>	

<?php
session_start();
   require('sessioncheck.php');

$server="127.0.0.1";
$user="root";
$password="";
$dbname = "hms";
$UserId=$_SESSION['UserId'];
 $testid=$_SESSION["testid"]=$_GET["testid"];

?>



	
</body></center>
</html>