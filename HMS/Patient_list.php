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
<center><body background="images/background.jpg">
    <header>
         <div id="header-div1">
             <img src="images/e-logo.png" id="heaader-logo"> 
	         <h1 style="font-family:Brush Script MT;">E-Health Management System</h1>
			 <a href="logout.php"><button Style="background-color:#0b396d; width:100px; height:50px; float:right; color:white; margin-right:50px;">Logout</button></a>
			 <a href="Doctordashboard.php"><button Style="background-color:#0b396d; width:100px; height:50px; float:right; color:white; margin-right:50px;">Main Dashboard</button></a>

	    </div>
    </header><br><br>				
	<div class="editProfile" style="width:60%; height:auto; background-color:lightgrey; border: 2px solid #0b396d; color:black;">
    <h1 style="text-align: center; color:red;">Search Patient By "Name" OR "Id"<h1>
	<form action="Patient_list.php" method="POST">
	Enter Name: <input type="text" id="name" name="name" required /> Enter Id: <input type="text" id="p-id" name="p-id" required /> <input type="submit" value="Search" >
	</form> <br>
	<!-- STYLE SHEET CODE-->
<style>
	.p-table{
	
	background-color:white;
	width:90%;
	height:10%;	
	border: 2px solid #0b396d;
	text-align:left;
}


.p-table td{
	
	width:20%;
	height:10%;
	border: 2px solid #0b396d;
	text-align:center;
}
</style>
	
    <?php
session_start();
require('sessioncheck.php');
require('DbConnectionNew.php');	

if($_POST){
$name=$_POST['name'];
$id=$_POST['p-id'];

$sql = "SELECT * FROM `user` WHERE UserType= 'patient' AND ( UserName LIKE '%".$name."%' OR UserId LIKE '%".$id."%') ";
    $result = mysqli_query($conn, $sql);
	


if (mysqli_num_rows($result) > 0) {
	
    // output data of each row 
	  while($row = mysqli_fetch_assoc($result)){ 
   
		  echo'<table class="p-table">
		  <tr>
		     
		       <td style="height:30px;">ID: '.$row["UserId"].'</td>
			   <td style="height:30px;"> Patient: '.$row["UserName"].'</td>
			   <td style="height:30px;"><a href="patient-history.php?pid= '.$row["UserId"].'& pname='.$row["UserName"].'"><button>View Prescription History</button></td>
			   <td style="height:30px;"><a href="patient-medicaltest.php?pid= '.$row["UserId"].'& pname='.$row["UserName"].'"><button>View Medical Test History</button></td>
		  </tr>
		                                                               
		       <br> 
		  </table>';
		  
		  
	  } 
  
}else{
	echo"No Record Found";	
}


}	
mysqli_close($conn);

 
	//...............................................................................	 
	     echo'</div>';
				
	?>	

	
	</div>			
</body></center>
</html>