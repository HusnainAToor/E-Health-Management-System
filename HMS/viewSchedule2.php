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
     $sql = "SELECT * FROM `createdbookedappointments` WHERE doctorid = '$doctorid' AND  slotdate = '$date' ";
    $result = mysqli_query($conn, $sql);  
if (mysqli_num_rows($result) > 0) {
    // output data of each row 
	
	  while($row = mysqli_fetch_assoc($result)){ 
		  echo'<table style="background-color:lightgrey; width:70%; height:auto;	text-align:center; color:black;">
		  <tr>
		       <td>  '.$row["slottime"].' , '.$row["slotdate"].' <br></td>
		       
		  </tr>	  
		  </table>';
	  }	
    
	  	echo"</form>";
    }	
else{
	
	 echo 'Sorry!, No Schedule for this date';
}
mysqli_close($conn);
?>