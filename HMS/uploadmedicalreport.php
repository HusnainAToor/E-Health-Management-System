<?php
session_start();
require('sessioncheck.php');
require('DbConnectionNew.php');	
$UserId=$_SESSION['UserId'];
 $testid=$_SESSION["testid"];
$date=date("Y-m-d");
 echo $phlebotomist=$_SESSION["UserName"];
 echo $testid;
 if($_POST){		
echo "success1";
$f=$_FILES["file"];
$path="medicalreport/".$f["name"];
move_uploaded_file($f["tmp_name"],$path);

		$sql= "UPDATE patienttest SET phlebotomistid='$phlebotomist', completeddate='$date', report='$path' WHERE Id=$testid";  
    if (mysqli_query($conn, $sql)) {
	echo'<script>
	  
	 
	  window.history.go(-2);</script>';
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }
mysqli_close($conn);
}
?>