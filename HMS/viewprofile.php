<html>
<head>

<!---JQuery Imports -->



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

	$sql = "SELECT * FROM `user` WHERE UserEmail = '$email'";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	
    // output data of each row 
	  while($row = mysqli_fetch_assoc($result)){ 
  
	  echo'<div id="dashboard-main-div" class="dashboard-main-div" >	';
	     echo'<img src=images/'.$row["UserImage"].' style=" length:100px; width:100px; float:left; background-color:yellow; margin-left:7%;" id="uploadphoto" ></image><br><br>';

		 echo'<h2 style="float:center;"> Mr. "'.$_SESSION["UserName"].'"</h2><br><br>
		 <form action="uploadphoto.php" method="POST" enctype="multipart/form-data" >
		 <input type="file" name="file" id="file" style="float:left; margin-left:7%;" required>
		 <br><br><input type="submit" value="Apply" name="submit" style="float:left; margin-left:7%; width:9.4%;"></form><br>';
		  echo'<table class="viewprofile-table">
		  <tr>
		       <td>ID</td>
		       <td>'.$row["UserId"].'</td>
		  </tr>
		  <tr>
		       <td>Name</td>                                                               
		       <td>'.$row["UserName"].'</td>
		  

		</tr>                                                              
		  <tr>
		       <td>Gender</td>
		       <td>'.$row["UserGender"].'</td>
		  </tr>
		  <tr>
		       <td>Email</td>
		       <td>'.$row["UserEmail"].'</td>
		  </tr>
		  <tr>
		       <td>Contact Number</td>
		       <td>'.$row["UserNumber"].'</td>
		  </tr>
		  
		   <tr>
		       <td>Address</td>
		       <td>'.$row["UserAddress"].'</td>
		  </tr>
		   <tr>
		       <td>Type</td>
		       <td>'.$row["UserType"].'</td>
		  </tr>
		   <tr>
		       <td>Discription</td>
		       <td>'.$row["UserDiscription"].'</td>
		 
		  </tr><br>
		  <tr>
		  <a href="editProfile.php"><button Style="background-color:#0b396d; width:100px; height:50px; float:right; color:white; margin-right:50px;">Edit Profile</button></a>
		  </tr>
		  
		  </table>';
		  
		  echo'<script>
		document.getElementById("file").value="";
		  </script>';
	  } 	   
    }	
	


mysqli_close($conn);

 
	//...............................................................................	 
	     echo'</div>';
				
	?>				
            </body>
</html>