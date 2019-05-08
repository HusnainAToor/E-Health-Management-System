<html>
<head>
<!---JQuery Imports -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!---JQuery Imports -->
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="dashboard.css">
<script src="index.js"></script>
<title>HMS</title>
</head>
<center><body>
  				
	
	<!-- STYLE SHEET CODE-->
  <?php
session_start();
require('sessioncheck.php');
require('DbConnectionNew.php');	
if($_GET){
$tid=$_GET['tid'];
$sql = "SELECT * FROM `patienttest` WHERE Id='$tid' ";
    $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	
    // output data of each row 
	  while($row = mysqli_fetch_assoc($result)){ 
   
          echo'	
          <button style="width:80%; height:10%; background-color:#0b396d; color:white;" onClick="javascript:history.go(-1)"> <h1>Close Medical Test</h1></button><br><br>		  
		  <br><img style="width:80%; height:80%; overflow:auto;" src='.$row["report"].'>
		  
		  
				';			  
}
}else{
	echo"No Record Found";	
}	
mysqli_close($conn);
}//...............................................................................	 	 			
	?>				
</body></center>
</html>