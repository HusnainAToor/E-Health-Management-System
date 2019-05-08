<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Dialog - Modal confirmation</title>
 
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#dialog-confirm" ).dialog({
      resizable: false,
      height: "auto",
      width: 400,
      modal: true,
      buttons: {
        "Delete all items": function() {
          $( this ).dialog( "close" );
        },
        Cancel: function() {
          $( this ).dialog( "close" );
        }
      }
    });
  } );
  </script>



<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="dashboard.css">
<script src="index.js"></script>
<title>HMS</title>

    <center><body background="images/background.jpg">
                <header>
                         <div id="header-div1">
                                <img src="images/e-logo.png" id="heaader-logo"> 
	                            <h1 style="font-family:Brush Script MT;">E-Health Management System</h1>
								<a href="logout.php"><button Style="background-color:#0b396d; width:100px; height:50px; float:right; color:white; margin-right:50px;">Logout</button></a>
							    <a href="Doctordashboard.php"><button Style="background-color:#0b396d; width:100px; height:50px; float:right; color:white; margin-right:50px;">Main Dashboard</button></a>

	                    </div>
                </header><br>	
							
				<div style="height:15%; width:70%; background-color:white; "> 
				
				<input type="submit" style="height:50%; width:15%; float:left; margin:3%; font-size:20px; background-color:#0b396d; color:white;" value="Add Medicine" onClick="addMedicine()">
				<input type="submit" style="height:50%; width:15%; float:left; margin:3%; font-size:20px; background-color:#0b396d; color:white;" value="Add Test" onsubmit="addTest()" >
				<input type="submit" style="height:50%; width:16%; float:left; margin:3%; font-size:20px; background-color:#0b396d; color:white;" value="Add Symptoms" onsubmit="addSymptoms()">
				<input type="submit" style="height:50%; width:15%; float:left; margin:3%; font-size:20px; background-color:#0b396d; color:white;" value="Add Note"  onsubmit="addNote()"> 
				</div>	<br>
				
				<div style="height:auto; width:70%; background-color:white; padding:5%; "> 
				
				
											
    <?php
	session_start();
require('sessioncheck.php');
require('DbConnectionNew.php');	

        $patientid=$_GET['patientid'];
          
	 	 
	
	$email=$_SESSION['email'];

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
	<!--            Medicine div here                -->
	<div style="background-color:lightgrey; width:80%; height:auto; margin-top:10px;">
	
	<h2 style="text-align:center;"> Medicines</h2>
    
	
		
	</div>	
 
 
 
 
 
 +
 


 
 
 
 
 
 
 
<div id="dialog-confirm" title="Empty the recycle bin?" style=" display:block; position: fixed; z-index: 1;padding-top: 100px;
			     width:100%;  height: 100%; background-color: rgb(0,0,0); background-color: rgba(0,0,0,0.4); ">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>These items will be permanently deleted and cannot be recovered. Are you sure?</p>
</div>
 
 
 
</body>
</html>