<?php
session_start();
require('sessioncheck.php');
require('DbConnectionNew.php');	
 if($_GET){	
	 echo $test=$_GET['test'];
	echo $doctorid=$_SESSION['UserId'];
	echo $patientid=$_SESSION['patientid'];
	echo $date=date("Y-m-d");
	
    
	$sql="INSERT INTO `patienttest`( `patientid`, `doctorid`, `test`, `phlebotomistid`, `date`, `completeddate`, `bill`, `report`)
	VALUES ('$patientid','$doctorid','$test','','$date','','','')";
    if (mysqli_query($conn, $sql)) {
	  echo'<script>window.history.go(-1);</script>';
	
  
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }
 }
mysqli_close($conn);



?>