<?php
session_start();
require('sessioncheck.php');
require('DbConnectionNew.php');	
echo $date=date("Y-m-d");
 if($_POST){	
	 echo $sym=$_POST['sym'];
	echo $doctorid=$_SESSION['UserId'];
	echo $patientid=$_SESSION['patientid'];
	echo $date=date("Y-m-d");
	
    
	$sql="INSERT INTO `patientsymptom`( `patientid`, `doctorid`, `date`, `symptoms`)
	VALUES ('$patientid','$doctorid','$date','$sym')";
    if (mysqli_query($conn, $sql)) {
	  echo'<script>window.history.go(-1);</script>';
	
  
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }
 }else{
	 echo $date=date("Y-m-d");
 }
mysqli_close($conn);



?>