<?php

require('DbConnectionNew.php');	
 if($_POST){	
	$name =$_POST['name'];
	$number=$_POST['number'];
	$email=$_POST['email'];
	$password=$_POST['password'];
    $UserType="patient";	
	
		
	$sql = "SELECT UserName, UserEmail FROM user WHERE UserName = '$name' OR UserEmail = '$email'";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
        echo'<script>alert("You have Already Registered !")</script>';
	echo '<script>window.location.href = "index.php";</script>';
    }
 else {
    
	$sql="INSERT INTO `user`(`UserName`, `UserGender`, `UserEmail`, `UserPassword`, `UserNumber`, `UserDiscription`, `UserAddress`, `UserType`, `UserImage`, `UserStatus`)
	                 VALUES ('$name','','$email','$password','$number','','','$UserType','uploadphoto.jpg','')";
    if (mysqli_query($conn, $sql)) {
	  echo'<script>alert("You have Successfully Registered !")</script>';
	echo '<script>window.location.href = "index.php";</script>';
  
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }
 }
mysqli_close($conn);

}

?>