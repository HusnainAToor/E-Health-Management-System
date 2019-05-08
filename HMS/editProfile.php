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
							    <button onClick="javascript:history.go(-2)" Style="background-color:#0b396d; width:100px; height:50px; float:right; color:white; margin-right:50px;">Main Dashboard</button>

	                    </div>
                </header><br><br>	
				
				
				
		
    <h1>Edit My Profile</h1>
	<h2 style="background-color:#0b396d; color:red;"id="successfullyedited"></h2>
    <div class="editProfile" style="width:50%; height:auto; background-color:lightgrey; border: 2px solid #0b396d;">

        <form action="editProfile.php" class="form" method="post">
             <br>
	         <label><b>Name</b></label><br><br>
	         <input style="width:50%; height:5%; " type="text" placeholder="Enter First name" name="name" required><br><br>
             <label><b>Contact No:</b></label><br><br>
	         <input style="width:50%; height:5%; " type="text" placeholder="Enter Contact No:" name="number" required><br><br>
             <label><b>Gender</b></label></br></br>
	         <input style="width:50%; height:5%; "  type="text" placeholder="Enter Gender" name="gender" required><br><br>
	         <label><b>Address</b></label></br></br>
	         <input style="width:50%; height:5%; "  type="text" placeholder="Enter Address" name="address" required><br><br>
			 <label><b>Email</b></label></br></br>
	         <input style="width:50%; height:5%; "  type="text" placeholder="Email cannot be edited" name="email"  disabled><br><br>
             <label><b>Password</b></label><br><br>
	         <input style="width:50%; height:5%; " type="password" placeholder="Enter Password" name="password" required><br><br><br>
	         <button style="width:50%; height:5%; background-color:#0b396d; color:white" type="submit"> Edit My Profile!</button><br><br><br>
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
	
	$password=$_POST['password'];
    $UserType="patient";	
	
		$sql= "UPDATE user SET UserName='$name', UserGender='$gender', UserPassword=$password, UserNumber=$number, UserAddress='$address' WHERE UserId=$UserId";
	
    
    if (mysqli_query($conn, $sql)) {

	echo '<script>document.getElementById("successfullyedited").innerHTML="Successfully Edited !"</script>';
  
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }
 
mysqli_close($conn);

}

?>			
            </body>
</html>