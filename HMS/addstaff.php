<html>
<head>

<!---JQuery Imports -->



<!---JQuery Imports -->

<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="dashboard.css">
<script src="index.js"></script>
<title>HMS</title>
</head>
    <center><body>
                <header>
                         <div id="header-div1">
                                <img src="images/e-logo.png" id="heaader-logo"> 
	                            <h1 style="font-family:Brush Script MT;">E-Health Management System</h1>
								<a href="logout.php"><button Style="background-color:#0b396d; width:100px; height:50px; float:right; color:white; margin-right:50px;">Logout</button></a>
							    <button onClick="javascript:history.go(-1)" Style="background-color:#0b396d; width:100px; height:50px; float:right; color:white; margin-right:50px;">Main Dashboard</button>

	                    </div>
                </header><br><br>	
				
				
				
		
    <h1>Add Staff</h1>
	<h2 style="background-color:#0b396d; color:red;"id="successfullyedited"></h2>
    <div class="editProfile" style="width:50%; height:auto; background-color:lightgrey; border: 2px solid #0b396d;">

        <form action="addstaff.php" class="form" method="post">
             <br>
	         <label><b>Name</b></label><br><br>
	         <input style="width:50%; height:5%; " type="text" placeholder="Enter First name" name="name" required><br><br>
             <label><b>Contact No:</b></label><br><br>
	         <input style="width:50%; height:5%; " type="text" placeholder="Enter Contact No:" name="number" required><br><br>
             <label><b>Gender</b></label></br></br>
	          <select style="width:50%; height:5%; " name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
					</select><br><br>
	         <label><b>Address</b></label></br></br>
	         <input style="width:50%; height:5%; "  type="text" placeholder="Enter Address" name="address" required><br><br>
			 <label><b>Email</b></label></br></br>
			  <input style="width:50%; height:5%; "  type="text" placeholder="Enter Email" name="email"  required><br><br>
             <label><b>Password</b></label><br><br>
	         <input style="width:50%; height:5%; " type="password" placeholder="Enter Password" name="password" required><br><br><br>
			 <label><b>Type</b></label><br><br>
	          <select style="width:50%; height:5%; " name="staff" required>
                    <option value="doctor">doctor</option>
                    <option value="phlebotomist">phlebotomist</option>
                    <option value="nurse">nurse</option>
					 <option value="receptionist">receptionist</option>
                    <option value="student">student</option>
  </select><br><br>
	         <button style="width:50%; height:5%; background-color:#0b396d; color:white" type="submit">Add Staff!</button><br><br><br>
        </form>
    </div>
											
<?php
session_start();
require('sessioncheck.php');
require('DbConnectionNew.php');	
echo"".$_SESSION['UserId']."";

$UserId=$_SESSION['UserId'];


 if($_POST){	
	$name =$_POST['name'];
	$number=$_POST['number'];
	$gender =$_POST['gender'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	
	$password=$_POST['password'];
    $staff=$_POST['staff'];
	
		$sql= "INSERT INTO `user`(`UserName`, `UserGender`, `UserEmail`, `UserPassword`, `UserNumber`, `UserDiscription`, `UserAddress`, `UserType`, `UserImage`, `UserStatus`)
	                 VALUES ('$name','$gender','$email','$password','$number','','$address','$staff','uploadphoto.jpg','')";
	
    
    if (mysqli_query($conn, $sql)) {

	echo '<script>document.getElementById("successfullyedited").innerHTML="Staff has Successfully added !"</script>';
  
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }
 
mysqli_close($conn);

}

?>			
            </body>
</html>