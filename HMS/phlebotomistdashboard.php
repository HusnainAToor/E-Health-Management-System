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
			 <a href="phlebotomistdashboard.php"><button Style="background-color:#0b396d; width:100px; height:50px; float:right; color:white; margin-right:50px;">Main Dashboard</button></a>

	    </div>
                </header> <br>
	<div id="dashboard-main-div" class="dashboard-main-div"  style="background-color:#0b396d; color:white; box-shadow: 5px 10px orange;">			
    <?php
	session_start();
   require('sessioncheck.php');

    echo'<h2>Welcome to Phlebotomist Dashboard!<br> Mr.  "'.$_SESSION["UserName"].'"</h2>'; 		    
?>		
</div>
<!--   ---------------------------------------------------------------Search Patient----------------------------------------------------------------------------------->	
<div class="editProfile" style="width:60%; height:auto; background-color:lightgrey; border: 2px solid #0b396d; color:black;">
    <h1 style="text-align: center; color:red;">Search Patient By "Name" OR "Id"<h1>
	<form action="phlebotomistdashboard.php" method="POST">
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
			   <td style="height:30px;"><a href="add-patient-medicaltest.php?pid= '.$row["UserId"].'& pname='.$row["UserName"].'"><button>View Medical Test List</button></td>
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