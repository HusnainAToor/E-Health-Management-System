<?php
session_start();
require('sessioncheck.php');
require('DbConnectionNew.php');	
$_SESSION["date"]=""; 
$_SESSION["doctorid"]=""; 	 
	// code to bring data from data base......................................
$conn = mysqli_connect($server, $user, $password, $dbname);
if(!$conn){	
	die("not connection".mysqli_connect_error());	
}	
	$date=$_SESSION["date"]=$_GET["date"];
	 $doctorid=$_SESSION["doctorid"]=$_GET["id"];
     $sql = "SELECT * FROM `createdbookedappointments` WHERE doctorid = '$doctorid' AND  slotdate = '$date' AND  patientid = '0'";
    $result = mysqli_query($conn, $sql);  
if (mysqli_num_rows($result) > 0) {
    // output data of each row 
	echo'<form action="savebookedappointment.php" method="post">';
	  while($row = mysqli_fetch_assoc($result)){ 
		  echo'<table style="background-color:lightgrey; width:70%; height:auto;	text-align:center; color:black;">
		  <tr>
		       <td>  <input type="radio" name="slot" value='.$row["slottime"].'>'.$row["slotdate"].' , '.$row["slottime"].' </input><br></td>
		       
		  </tr>	  
		  </table>';
	  }	
     echo'<button style="width:30%; height:40px; background-color:lightgrey; border: 2px solid #0b396d; ohover:orange;" type="submit">Save Appointments</button>';
	  	echo"</form>";
    }	
else{
	
	 echo 'Sorry!, No appointments for this date';
}
mysqli_close($conn);
?>