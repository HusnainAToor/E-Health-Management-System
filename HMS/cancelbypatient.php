<?php

session_start();
require('sessioncheck.php');
require('DbConnectionNew.php');	

$appointmentid=$_SESSION['appointmentid'];
	// code to bring data from data base......................................



$conn = mysqli_connect($server, $user, $password, $dbname);

if(!$conn){
	
	die("not connection".mysqli_connect_error());
	
}else{

   $sql= "UPDATE createdbookedappointments SET patientid='0' WHERE Id='$appointmentid'";
 
	 if (mysqli_query($conn, $sql)) {
	  echo'<script>alert("You have Successfully Cancelled Your Appointment !")</script>';
	  echo '<script>window.location.href = "bookedappointment.php";</script>';
  
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }
 
 }
mysqli_close($conn);
?>