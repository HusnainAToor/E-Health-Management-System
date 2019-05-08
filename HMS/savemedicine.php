<?php
session_start();
require('sessioncheck.php');
require('DbConnectionNew.php');	
echo $date=date("Y-m-d");
 if($_POST){	
	 echo $medicine=$_POST['medicine'];
	 echo $frequency=$_POST['frequency'];
	 echo $duration=$_POST['duration'];
	echo $doctorid=$_SESSION['UserId'];
	echo $patientid=$_SESSION['patientid'];
	echo $date=date("Y-m-d");
	
    
	$sql="INSERT INTO `patientmedicine`( `patientid`, `doctorid`, `medicine`, `frequency`, `duration`, `date`)
	VALUES ('$patientid','$doctorid','$medicine','$frequency', '$duration', '$date')";
    if (mysqli_query($conn, $sql)) {
	  echo'<script>
	  
	 
	  window.history.go(-1);</script>';
	 
  
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }
 }else{
	 echo $date=date("Y-m-d");
 }
mysqli_close($conn);



?>