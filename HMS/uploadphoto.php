<?php
session_start();
require('sessioncheck.php');
require('DbConnectionNew.php');	

$UserId=$_SESSION['UserId'];
 if($_POST){		
echo "success1";
$f=$_FILES["file"];
$path="images/".$f["name"];
move_uploaded_file($f["tmp_name"],$path);
$path=$f["name"];
		$sql= "UPDATE user SET UserImage='$path' WHERE UserId=$UserId";  
    if (mysqli_query($conn, $sql)) {
	echo'<script> window.history.go(-1);</script>';
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }
mysqli_close($conn);
}
?>