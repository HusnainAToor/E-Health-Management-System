<html>
<head>

<!---JQuery Imports -->



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
							    <a href="Patientdashboard.php"><button Style="background-color:#0b396d; width:100px; height:50px; float:right; color:white; margin-right:50px;">Main Dashboard</button></a>

	                    </div>
                </header><br><br>	
							
<?php
	session_start();
require('sessioncheck.php');
require('DbConnectionNew.php');	
 echo'<div id="dashboard-main-div" class="dashboard-main-div" style="background-color:#0b396d; color:white;">	';	 
		 echo'<h2>List Of Doctors</h2>'; 
		 	 
	// code to bring data from data base......................................
	$email=$_SESSION['email'];

	$sql = "SELECT * FROM `user` WHERE UserType = 'doctor'";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row 
	  while($row = mysqli_fetch_assoc($result)){ 
	  
	  
	      echo'<a href="bookappointment.php?id='. $row["UserId"].'"><div id="dashboard-divs" style="width:220;height:210; "> 
		         <div style="width:220;height:40; background-color:orange; color:black;"><br><b>'. $row["UserDiscription"].'</b></div>
	             <img id="dashboard-img" src="images/'.$row["UserImage"].'" style="width:220;height:110;"><br><br>
                 <p><b>'. $row["UserName"].'</b><br> <div style="width:220;height:40; background-color:orange; color:black;"><br><b>Book Appointments</b></div></p>		  	
	         </div></a>';

	  } 	   
    }	
mysqli_close($conn);
	//...............................................................................	 
	     echo'</div>';
				
	?>				
            </body>
</html>