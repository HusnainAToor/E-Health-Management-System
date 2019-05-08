<?php
session_start();
require('sessioncheck.php');
require('DbConnectionNew.php');	
$_SESSION["date"]=""; 	 
	// code to bring data from data base......................................

$conn = mysqli_connect($server, $user, $password, $dbname);

if(!$conn){
	
	die("not connection".mysqli_connect_error());
	
}	
	 $_SESSION["date"]=$_GET["date"];

	$sql = "SELECT * FROM `appointments`";
    $result = mysqli_query($conn, $sql);
   echo'<form action="saveavailabilityslots.php" method="post">';
if (mysqli_num_rows($result) > 0) {
    // output data of each row 
	  while($row = mysqli_fetch_assoc($result)){ 
		  echo'<table style="background-color:lightgrey; width:70%; height:auto;	text-align:center;">
		  <tr>
		       <td>  <input type="checkbox" name="slot[]" value='.$row["slot"].'>'.$_SESSION["date"].' , '.$row["slot"].' </input><br></td>	       
		  </tr>  
		  </table>';
	  }	
     echo'<button style="width:30%; height:40px; background-color:lightgrey; border: 2px solid #0b396d; ohover:orange;" type="submit">Save Appointments</button>';
    }	
	echo"</form>";
mysqli_close($conn);
?>