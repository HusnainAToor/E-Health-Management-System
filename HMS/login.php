<?php
session_start();
require('sessioncheck.php');
require('DbConnectionNew.php');	
 if($_POST){
	 $_SESSION["UserId"]="";
	  $_SESSION["UserName"]="";
	
	$email=$_SESSION['email']=$_POST['email'];
	$password=$_POST['password'];
	$sql = "SELECT * FROM `user` WHERE UserEmail = '$email' AND UserPassword = '$password'";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
       
	  while($row = mysqli_fetch_assoc($result)){
		  
	      $_SESSION["UserId"]=$row["UserId"];
		  $_SESSION["UserName"]=$row["UserName"];
		  if($row["UserType"]=="doctor"){
		  
		  echo '<script>window.location.href = "Doctordashboard.php";</script>';
		  }
		  elseif($row["UserType"]=="patient"){
			  
			  echo '<script>window.location.href = "Patientdashboard.php";</script>';
			  
		  }
		  elseif($row["UserType"]=="admin"){
			  
			   echo '<script>window.location.href = "Admindashboard.php";</script>';
			  
		  }
		  elseif($row["UserType"]=="phlebotomist"){
			  
			  echo '<script>window.location.href = "phlebotomistdashboard.php";</script>';
			  
		  }

			
	  } 
	   
    }
	
	else{
		    echo'<script>alert("Sorry, Please Register Yourself !")</script>';
	echo '<script>window.location.href = "index.php";</script>';
}

mysqli_close($conn);
}



?>