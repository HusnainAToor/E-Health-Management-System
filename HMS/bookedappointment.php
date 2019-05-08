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
   
$_SESSION['appointmentid']='';
$UserId=$_SESSION['UserId'];
$patientName=$_SESSION["UserName"];	
echo'<div id="dashboard-main-div" class="dashboard-main-div" style="background-color:#0b396d; color:white;">	';	 
		 echo'<h2>Booked Appointments</h2>'; 
		 	 
	// code to bring data from data base......................................
$date= date("Y-m-d", strtotime("-1 day"));
$time= date("H:i", strtotime("-1 hour"));
$conn = mysqli_connect($server, $user, $password, $dbname);
if(!$conn){	
	die("not connection".mysqli_connect_error());	
}
$email=$_SESSION['email'];

	$sql = "SELECT * FROM `createdbookedappointments` INNER JOIN user ON createdbookedappointments.doctorid=user.UserId  WHERE  patientid = '$UserId' AND slotdate >= '$date'";
     $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row 
	  while($row = mysqli_fetch_assoc($result)){ 
	$_SESSION['appointmentid']= $row["Id"];
		 echo'<table class="viewprofile-table" style="width:80%;height:auto;  box-shadow: 5px 10px orange;" >	  
		  <tr>
		       <td>Patient Name</td>
		       <td>'.$patientName.'</td>
		  </tr>
		  <tr>
		       <td>Appointment Date</td>
		       <td>  '. $row["slotdate"].'</td>	 
		  </tr><br>
		  <tr>
		       <td>Appointment Time</td>
		       <td>'. $row["slottime"].'</td>
		  </tr>
		   <tr>
		       <td>Doctor</td>
		       <td>'. $row["UserName"].' ('. $row["UserDiscription"].')</td>
		  </tr> 
		  <tr>
		  <td colspan="2"><center><a href="cancelbypatient.php"><button Style="background-color:orange; width:100px; height:50px; color:red; margin-right:50px; "><B>Cancel Appointment</B></button></a></center></td>
		  </tr> 
		  </table>'; 
	  } 	   
    }	
	else{
		echo "You have no appointment";
	}
mysqli_close($conn);
	//...............................................................................	 
	     echo'</div>';
				
	?>				
            </body>
</html>