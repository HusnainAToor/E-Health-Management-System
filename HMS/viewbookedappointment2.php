<?php

session_start();
   require('sessioncheck.php');
$DrId=$_SESSION["UserId"];	
$_SESSION["date"]=""; 	 
	// code to bring data from data base......................................
    // Database Connection..................
	require('DbConnectionNew.php');	
	//...................connection finish..........................
	
	 $date=$_SESSION["date"]=$_GET["date"];
		
 echo'<h2>Booked Appointments for Date = '.$date.' </h2>'; 
     
$sql = "SELECT * FROM `createdbookedappointments` INNER JOIN user ON createdbookedappointments.patientid=user.UserId  WHERE  doctorid = '$DrId' AND slotdate='$date' ";

	

     $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    // output data of each row 
	  while($row = mysqli_fetch_assoc($result)){ 	   
			$_SESSION['appointmentid']= $row["Id"];
		 
		 echo'<table class="viewprofile-table" style="width:80%;height:auto;  box-shadow: 5px 10px orange;" >
		  
		
		  
		  <tr>
		       <td>Patient Name</td>
		       <td> '. $row["UserName"].'</td>
		  </tr>
		 
		 
		   <tr>
		       <td>Appointment Date</td>
		       <td>  '. $row["slotdate"].'</td>
		 
		  </tr><br>
		  
		  <tr>
		       <td>Appointment Time</td>
		       <td>'. $row["slottime"].'</td>
		  </tr>
		 
		 
		  <tr>
		
		  <td colspan="2"><center><a href="prescribed.php?patientid='. $row["UserId"].'&slotdate='. $row["slotdate"].'&slottime='. $row["slottime"].'"><button Style="background-color:orange; width:100px; height:50px; color:red; margin-right:50px; "><B>Prescribed</B></button></a></center></td>
		  </tr>
		  
		  </table><br><br>'; 
	  } 	   
    }	
	else{
		echo "You have no appointment booked by patient";
	}
mysqli_close($conn);
	//...............................................................................	 
	     echo'</div>';
?>