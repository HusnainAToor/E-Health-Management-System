<html>
<head>

<!---JQuery Imports -->
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}


</style>


<!---JQuery Imports -->

<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="dashboard.css">
<script src="index.js"></script>
<title>HMS</title>
</head>
    <center><body background="images/background.jpg">
                <header>
                         <div id="header-div1">
                                <img src="images/e-logo.png" id="heaader-logo"> 
	                            <h1 style="font-family:Brush Script MT;">E-Health Management System</h1>
								<a href="logout.php"><button Style="background-color:#0b396d; width:100px; height:50px; float:right; color:white; margin-right:50px;">Logout</button></a>
							    <a href="Doctordashboard.php"><button Style="background-color:#0b396d; width:100px; height:50px; float:right; color:white; margin-right:50px;">Main Dashboard</button></a>

	                    </div>
                </header><br><br>	
							
<?php
session_start();
require('sessioncheck.php');
require('DbConnectionNew.php');		
	$email=$_SESSION['email'];

	$sql = "SELECT * FROM `user`";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	
	 echo' <div id="dashboard-main-div" class="dashboard-main-div" >	<table class="viewprofile-table">
		  <tr>
		   <th ><h2>Image</th>
		       <th><h2>ID</th>
		       <th><h2>Name</th>
			   <th><h2>Gender</th>
			   <th><h2>Email</th>
			   <th><h2>Number</th>
			   <th><h2>Address</th>
			   <th><h2>Type</th>
			   <th><h2>Discription</th>
			   
			  
			   <th><h2>Status</th>
			 
		  </tr>';
	
    // output data of each row 
	  while($row = mysqli_fetch_assoc($result)){ 
  
	 
	     echo'

		 
		  <tr>
		  			  <td> <img src=images/'.$row["UserImage"].' style=" length:70px; width:70px;  background-color:yellow;" id="uploadphoto" ></image></td>

		         <td>'.$row["UserId"].'</td>                                                             
		       <td>'.$row["UserName"].'</td>

		       <td>'.$row["UserGender"].'</td>
		  
		       <td>'.$row["UserEmail"].'</td>
		  
		      
		       <td>'.$row["UserNumber"].'</td>
		
		       <td>'.$row["UserAddress"].'</td>
		  
		       <td>'.$row["UserType"].'</td>
		 
		       <td>'.$row["UserDiscription"].'</td>
		
		 
		  <td><a href="editProfile.php"><button Style="background-color:#0b396d; width:100px; height:50px;  color:white; margin-right:50px;">Disable</button></a></td>
		  </tr>' ;
		  
		 
		  
		
	  } 	   
    }	
	echo' </table>';


mysqli_close($conn);

 
	//...............................................................................	 
	     echo'</div>';
				
	?>				
            </body>
</html>