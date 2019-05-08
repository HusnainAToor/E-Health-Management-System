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
	                    </div>
                </header> <br>

	<div id="dashboard-main-div" class="dashboard-main-div"  style="background-color:#0b396d; color:white; box-shadow: 5px 10px orange;">			
    <?php
	session_start();
   require('sessioncheck.php');

    echo'<h2>Welcome to Patient Dashboard!<br> Mr.  "'.$_SESSION["UserName"].'"</h2>'; 	
	     echo'<a href="Patientdashboard.php"><div id="dashboard-divs">  	
	             <img id="dashboard-img" src="images/dashboard.jpg"><br><br>
                 <p><b>Back to <br>Dashboard</b></p>		  	
	         </div></a>';
	     echo'<a href="patientviewprofile.php"><div id="dashboard-divs">  	
	             <img id="dashboard-img" src="images/profile.jpg"><br><br>
                 <p><b>View<br>Profile</b></p>		  	
	         </div></a>';
	      echo'<a href="doctorlist.php"><div id="dashboard-divs">  	
	             <img id="dashboard-img" src="images/appointment.jpg"><br><br>
                 <p><b><br>Doctors List &<br> Appointments</b></p>	  	
	         </div>	</a>';

	     echo'<a href="bookedappointment.php"><div id="dashboard-divs">  	
	             <img id="dashboard-img" src="images/bookedappointment.jpg"><br><br>
                 <p><b>Booked <br>Appointments</b></p>		  	
	         </div></a>';
	   
	       	
	    
?>		
</div>
	

				
				
            </body>
</html>