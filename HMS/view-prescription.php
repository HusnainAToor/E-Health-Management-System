<html>
<head>

<!---JQuery Imports -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="autofill.js"></script>
<script src="tags.js"></script>
<!---JQuery Imports -->

<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="dashboard.css">
<script src="index.js"></script>
<title>HMS</title>
</head>
    <center>
	<body background="images/background.jpg">
                <header>
                         <div id="header-div1">
                                <img src="images/e-logo.png" id="heaader-logo"> 
	                            <h1 style="font-family:Brush Script MT;">E-Health Management System</h1>
								<a href="logout.php"><button Style="background-color:#0b396d; width:100px; height:50px; float:right; color:white; margin-right:50px;">Logout</button></a>
							    <a href="Doctordashboard.php"><button Style="background-color:#0b396d; width:100px; height:50px; float:right; color:white; margin-right:50px;">Main Dashboard</button></a>

	                    </div>
                </header><br>	
							
				
				
				<div id="prescription" style="height:auto; width:70%; background-color:white; padding:5%; "> 
				
				<div id="profile-div" style="height:auto; width:auto;   "> 
											
    <?php
	session_start();
    require('sessioncheck.php');
    require('DbConnectionNew.php');	
	
        $patientid=$_GET['pid'];
          
	 	 
	
	
	$slotdate=$_GET["slotdate"];

	$sql = "SELECT * FROM `user` WHERE UserId = '$patientid'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
	
    // output data of each row 
	  while($row = mysqli_fetch_assoc($result)){ 
	     echo'<table class="viewprofile-table" style="width:80%;height:auto;">
	             <tr>
		             <td><img src=images/'.$row["UserImage"].' style=" length:100px; width:100px; float:left; background-color:yellow; margin-left:7%;" id="uploadphoto" ></image><br><br></td>
		             <td> Patient: <h2>'.$row["UserName"].'</h2></td> 
		         </tr>
		         <tr>
                     <td> Gender: '.$row["UserGender"].'</td>    
                     <td rowspan="2"> <b> Doctor: '.$_SESSION["UserName"].'</b></td>
                 </tr>
                 <tr>
                     <td>Patient Id: '.$row["UserId"].'</td>  
                 </tr>
                 <tr>
                     <td> Email: '.$row["UserEmail"].'</td>    
                     <td rowspan="3"><center><b> Appointment: </b><br> Date:'.$_GET["slotdate"].'<br>Time:'.$_GET["slottime"].'</center></td>
                 </tr>
                 <tr>
                     <td>Phone#: '.$row["UserNumber"].'</td>
                 </tr>		
                 <tr>
                 <td>Adrress: '.$row["UserAddress"].'</td>
                 </tr>		      
		</table>';
	  } 	   
    }		
    mysqli_close($conn);
	//...............................................................................						
	?>	
	</div>
	<!--            Medicine div here                -->
	<div id="medicine-div" style="background-color:lightgrey; width:80%; height:auto; margin-top:10px;">
	<h2 style="text-align:center;"> Medicines</h2>
	
		<?php
	
    require('sessioncheck.php');
    require('DbConnectionNew.php');
         $patientid=$_GET['pid'];
		 $date=$_GET['slotdate'];
	     $sql = "SELECT * FROM `patientmedicine` WHERE patientid = '$patientid' AND date = '$date'"; 
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
	echo'<table class="viewprofile-table" style="width:80%;height:auto;">
	            
                 <tr>
                     <td style="width:20%;"><b>Medicine</b></td>
					 <td style="width:20%;"><b>Frequency</b></td>
					 <td style="width:20%;"><b>Start Date</b></td>
					 <td style="width:20%;"><b>End Date</b></td>
                 </tr>';
    // output data of each row 
	  while($row = mysqli_fetch_assoc($result)){
 
	     echo'
                 <tr>
                 <td style="width:20%;">'.$row["medicine"].'</td>
				 <td style="width:20%;">'.$row["frequency"].'</td>
				 <td style="width:20%;">'.$row["date"].'</td>
				 <td style="width:20%;">'.$row["duration"].'</td>
                 </tr style="width:20%;">';
	  } 
   echo'</table>';	  
    }		
    mysqli_close($conn);
	//...............................................................................						
	?>	
	
	</div>	
	
	<!-- Medical Tests here   -->
	<div id="medicine-div" style="background-color:lightgrey; width:80%; height:auto; margin-top:10px;">
	<h2 style="text-align:center;"> Medical Tests</h2>
	
	<?php
		
    require('sessioncheck.php');
    require('DbConnectionNew.php');
          $patientid=$_GET['pid'];
		 $date=$_GET['slotdate'];
		
	     $sql = "SELECT * FROM `patienttest` WHERE patientid = '$patientid' AND date = '$date'"; 
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
	echo'<table class="viewprofile-table" style="width:80%;height:auto;">
	            
                 <tr>
                     <td><b>Test Discription</b></td>
					 <td><b>Date</b></td>
                 </tr>';
    // output data of each row 
	  while($row = mysqli_fetch_assoc($result)){
 
	     echo'
                 <tr>
                 <td>'.$row["test"].'</td>
				 <td>'.$row["date"].'</td>
                 </tr>';
	  } 
   echo'</table>';	  
    }		
    mysqli_close($conn);
	//...............................................................................						
	?>	

	</div>
	
	
	<!--           Symptomas                -->
	<div style="background-color:lightgrey; width:80%; height:auto; margin-top:10px;">
	<h2 style="text-align:center;">Symptoms</h2>	
	<?php
		
    require('sessioncheck.php');
    require('DbConnectionNew.php');
       $patientid=$_GET['pid'];
		 $date=$_GET['slotdate'];
		
	     $sql = "SELECT * FROM `patientsymptom` WHERE patientid = '$patientid' AND date = '$date'"; 
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
	 
    // output data of each row 
	  while($row = mysqli_fetch_assoc($result)){
 
	     echo'
                 <tr>
                 <td>'.$row["symptoms"].' , </td>
				
                 </tr>';
	  } 
   echo'</table>';	  
    }		
    mysqli_close($conn);
	//...............................................................................						
	?>	
	
	
	</div>
    <div id="note-div" style="background-color:lightgrey; width:80%; height:auto; margin-top:10px;">
	<h2 style="text-align:center;">Note</h2>
     	<?php
		
    require('sessioncheck.php');
    require('DbConnectionNew.php');
          $patientid=$_GET['pid'];
		 $date=$_GET['slotdate'];
		
	     $sql = "SELECT * FROM `patientnote` WHERE patientid = '$patientid' AND date = '$date'"; 
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
	 
    // output data of each row 
	  while($row = mysqli_fetch_assoc($result)){
 
	     echo'
                 <tr>
                 <td>'.$row["notes"].' , </td>
				
                 </tr>';
	  } 
   echo'</table>';	  
    }		
    mysqli_close($conn);
	//...............................................................................						
	?>		
	</div>	
	<!--            Medicine div Finish here                -->
		
	
			
			
	</div>
	

				
<!--   Dialogue PopUps for Prescription such as add medicine, tests, add symptoms etc -->

			</body>
            
</html>