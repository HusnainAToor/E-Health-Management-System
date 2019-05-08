<?php

session_start();
require('sessioncheck.php');
require('DbConnectionNew.php');	

$UserId=$_SESSION['UserId'];	
$date= $_SESSION["date"] ; 	 

	
		$sql = "SELECT slotdate, slottime FROM createdbookedappointments WHERE doctorid = '$UserId' AND slotdate = '$date'";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
        echo'<script>alert("You have Already Created appointments for this date!")</script>';
	echo '<script>window.location.href = "selectdate.php";</script>';
    }
 else {
		
	$slot=$_POST["slot"];
	
   foreach($slot as $slottime){

    

	$sql="INSERT INTO `createdbookedappointments`(`slotdate`, `slottime`, `doctorid`, `patientid`)
	                 VALUES ('$date','$slottime', '$UserId', '')";
   
     
	 
	 if (mysqli_query($conn, $sql)) {
	  echo'<script>alert("You have Successfully saved Your available appointment slots !")</script>';
	  echo '<script>window.location.href = "selectdate.php";</script>';
  
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }
	 
	  
   }
 }

mysqli_close($conn);







?>