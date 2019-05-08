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


if($_GET){
$pid=$_GET['pid'];
$pname=$_GET['pname'];

echo'<h2 style="text-align: center; color:red;">Patient:'.$pname.' Medical Tests List<h2>';
$sql = "SELECT * FROM `patienttest` WHERE patientid='$pid' ";
    $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	
    // output data of each row 
	  while($row = mysqli_fetch_assoc($result)){ 
    
   echo'<table class="p-table">
		  <tr>
              <td style="height:30px;"> '.$row["date"].'</td>
			  <td style="height:30px;">'.$pname.'</td>
			  <td style="height:30px;">'.$row["test"].'</td>';
			  
			  if($row["report"]==""){
			  echo'<td style="height:30px; background-color:#0b396d; color:white">Status: Pending</td>';
			  }else{
				echo'<td style="height:30px;"> '.$row["completeddate"].'</td>
				<td style="height:30px; background-color:#0b396d;"><a href="show-test.php?tid='.$row["Id"].'"><button>View</button></a></td> 
				<td style="height:30px; background-color:#0b396d;"><a href='.$row["report"].' download><button>Download</button></a></td> 
				';
			  }
			// Show Medical Test  
			echo'</tr>                                                           
		       <br> 
	   </table> 
	   ';	   
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