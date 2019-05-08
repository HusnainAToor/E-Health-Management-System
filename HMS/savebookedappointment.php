<?php
session_start();
require('sessioncheck.php');
require('DbConnectionNew.php');	

$UserId=$_SESSION['UserId'];	
$slotdate= $_SESSION["date"] ; 	
$slottime=$_POST["slot"]; 
$doctorid=$_SESSION["doctorid"]; 
	// code to bring data from data base......................................




	
			$sql = "SELECT * FROM `createdbookedappointments` WHERE patientid = '$UserId' AND slotdate = '$slotdate'";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
        echo'<script>alert("Sorry! You have Already Created appointment")</script>';
	echo '<script>window.location.href = "Patientdashboard.php";</script>';
    }
 else {
		
	
	
   $sql= "UPDATE createdbookedappointments SET patientid='$UserId' WHERE doctorid='$doctorid' AND slotdate='$slotdate' AND slottime='$slottime'";
 
	 if (mysqli_query($conn, $sql)) {
	  echo'<script>alert("You have Successfully booked Your Appointment !")</script>';
	  echo '<script>window.location.href = "doctorlist.php";</script>';
  
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }
	 
	  
   
 }

mysqli_close($conn);







?>