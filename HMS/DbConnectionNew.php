<?php
$server="127.0.0.1";
   $user="root";
   $password="";
   $dbname = "hms";


$conn = mysqli_connect($server, $user, $password, $dbname);

if(!$conn){
	
	die("not connection".mysqli_connect_error());	
}
?>