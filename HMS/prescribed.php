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
							
				<div style="height:15%; width:70%; background-color:white; "> 
				
				<input type="submit" style="height:50%; width:15%; float:left; margin:3%; font-size:20px; background-color:#0b396d; color:white;" value="Add Medicine" onclick="addMeddicine()">
				<input type="submit" style="height:50%; width:15%; float:left; margin:3%; font-size:20px; background-color:#0b396d; color:white;" value="Add Test" onclick="addTest()" >
				<input type="submit" style="height:50%; width:16%; float:left; margin:3%; font-size:20px; background-color:#0b396d; color:white;" value="Add Symptoms" onclick="addSymptoms()">
				<input type="submit" style="height:50%; width:15%; float:left; margin:3%; font-size:20px; background-color:#0b396d; color:white;" value="Add Note"  onclick="addNote()"> 
				</div>	<br>
				
				<div id="prescription" style="height:auto; width:70%; background-color:white; padding:5%; "> 
				
				<div id="profile-div" style="height:auto; width:auto;   "> 
											
    <?php
	session_start();
    require('sessioncheck.php');
    require('DbConnectionNew.php');	
	$_SESSION['patientid']='';
        $patientid=$_SESSION['patientid']=$_GET['patientid'];
          
	 	 
	
	$email=$_SESSION['email'];
	$_SESSION['prescription-date']=$_GET["slotdate"];

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
         $patientid=$_SESSION['patientid'];
		 $date=$_SESSION['prescription-date'];
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
         $patientid=$_SESSION['patientid'];
		  $date=$_SESSION['prescription-date'];
		
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
         $patientid=$_SESSION['patientid'];
		  $date=$_SESSION['prescription-date'];
		
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
         $patientid=$_SESSION['patientid'];
		  $date=$_SESSION['prescription-date'];
		
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
		
	
			
			
	<!-- Main Prescription Div       -->		
	</div>		
			
	<!--  dialogue button script -->
	<script>
	
	function addMeddicine(){
		document.getElementById('medicine-form').reset();
		//$("##profile-div").clone().appendTo($("#medicine-div"));
	
		//$('#medicine-div').=$('#medicine-div').html($('#profile-div').html());
		
		document.getElementById('AddMed').style.display='block';
	}
		function myFunction(){
		
		document.getElementById('AddMed').style.display='none';
		document.getElementById('AddT').style.display='none';
		document.getElementById('AddS').style.display='none';
		document.getElementById('AddN').style.display='none';
	}
		function addTest(){
		
		document.getElementById('AddT').style.display='block';
		
	}
		function addSymptoms(){
		document.getElementById('sym-form').reset();
		document.getElementById('AddS').style.display='block';
	}
        function addNote(){
		document.getElementById('note-form').reset();
		document.getElementById('AddN').style.display='block';
	}
	
	
	
	
	
	//..............Medical Test Search Code............
	$(document).ready(function(){
		$('#search-test').keyup(function(){
			
		var txt=$(this).val();
			if(txt !='')
			{
					var xmlhttp = new XMLHttpRequest();
     
                   xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("resulttest").innerHTML = this.responseText;
          
			}
        };
       xmlhttp.open("GET","testsearch.php?txt="+txt,true);
        xmlhttp.send();
	
				/*$ajax({
					  url:"testsearch.php",
					  method:"POST",
					  data:{txt};
					  dataType:"text",
					  success:function(data)
					  {
						  $('#resulttest').html(data);
					  } */			
			}
			else{
				$('#resulttest').html('');
			}
		});
		
		
	});

	//;;;;;;;;;;;;;;;;;;;;;finished here...............
	
	//.........................................auto fill tag ....................................
	
	
	
	//..................................finish...................................................
	
	
	
	</script>
	
			
<!-- Style Sheet for dialog pop up box    -->         
<style>
.add{
  position:fixed;
  top:20%;
  right:20%;
  left:20%;
  z-index: 1;
  background-color:orange;
  width:60%;
  height:50%;
  overflow: auto;
  display:none;
  box-shadow: 2px 3px 3px 3px red;
}

</style>			
<!--   Dialogue PopUps for Prescription such as add medicine, tests, add symptoms etc -->

         <!-- Add Mediciens Pop up DIV-->
	
		 
		    <div id="AddMed" class="add" >
			
			    
                <h1  style="margin-left:320px; float:left; " >Add Medicines!</h1>
                <button style="margin-left:270px; float:left; font-size:28px; font-weight: bold; background-color:black; color:white;" onclick="myFunction();">X</button> <br> <br></br>
          <form action="savemedicine.php" method="POST" id="medicine-form">
			   <table style="float:left; width:40%; height:auto; margin:20px;">
			   <tr>
			   <td> Medicine</td>
			   <td style=" width:300px; height:40px;"><input  type="text" id="medicine" name="medicine" style="float:left; width:100%; height:70%; margin:10px;" value="" /></td>
			   </tr>
			   <tr>
				 <td>Frequency Per Day</td>
                 <td style=" width:300px; height:40px;">
				 <input list="frequency" name="frequency" style="float:left; width:100%; height:70%; margin:10px;" value="">
                     <datalist id="frequency">
                     <option value="Once">
                     <option value="Twice">
                     <option value="Thrice">
                     <option value="Four time">
                </datalist> </input>
				</td>
				
				</tr>
			   <tr>
	         <td> Till Date</td>
            <td style=" width:300px; height:40px;"><input type="date" name="duration" id="duration" style="float:left; width:100%; height:70%; margin:10px;" value=""></td>
				</tr>
				<tr>
				<td></td>
				<td style=" width:300px; height:40px;"><input type="submit"  style=" width:100%; height:100%; overflow:auto; float:left; margin-left:10px;"></td>
			    </tr>
				  </table> 
    
				 </form>
            </div>
		 
         <!--  -->

         <!-- Add Tests Pop up DIV -->
		     <div id="AddT" class="add" >
                 <h1  style="margin-left:320px; float:left; " >Add Medical Test!</h1>
                <button style="margin-left:270px; float:left; font-size:28px; font-weight: bold; background-color:black; color:white;" onclick="myFunction();">X</button> <br>
                 <input  type="text" style=" width:40%; height:10%; margin:20px;" id="search-test"/>
				 
				 <br><div id="resulttest"></div>
				 
             </div>
         <!--  -->
		 
		 
		 <!-- Add Symptoms Pop Up DIV -->
		     <div id="AddS" class="add" >
			 
			 <h1  style="margin-left:320px; float:left; " >Add Symptoms!</h1>
             
                <button style="color:black; margin-left:270px; float:right; font-size:28px; font-weight: bold; background-color:black; color:white;" onclick="myFunction();">X</button>
                 
				 <form action="savesymptom.php" method="POST" id="sym-form">
				 <input  type="text" style=" width:40%; height:10%; margin:20px;" id="sym" name="sym">  <br>
           
                <button type="submit" style=" width:10%; height:10%; overflow:auto; float:left; margin-left:270px;"> Add</button>
               </form>				
             </div>
         <!--  -->
		 
		 
		 <!-- Add Note Pop Up DIV -->
		     <div id="AddN" class="add" >
			   
                <h1  style="margin-left :250px; float:left; " >Add Note!</h1>
                <button style="margin-left:460px; float:left; font-size:28px; font-weight: bold; background-color:black; color:white;" onclick="myFunction();">X</button> <br>
                 
				 <form action="savenote.php" method="POST" id="note-form">
				 <textarea id="Note-text" name="Note-text" rows="4" cols="50" style=" width:60%; height:40%; overflow:auto; margin:20px;"></textarea><br>
				 <button type="submit"  style=" width:10%; height:10%; overflow:auto; float:right; margin-right:180px;"> Add</button></a>
				 </form>
             </div>
         <!--  -->

				
<!--   Dialogue PopUps for Prescription such as add medicine, tests, add symptoms etc -->

			</body>
            
</html>