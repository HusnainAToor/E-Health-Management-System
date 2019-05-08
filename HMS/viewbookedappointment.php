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
	<div class="editProfile" style="width:50%; height:auto; background-color:lightgrey; border: 2px solid #0b396d;">
         <form>
         <label ><b>Select Date</b></label><br><br>
		 
	     <input style="width:50%; height:5%; background-color:orange; "  type="text"  id="date"  required ><br><br>
		     <button type="button" style="width:30%; height:40px; background-color:lightgrey; border: 2px solid #0b396d;" onclick="myFunction()">Create Slots</button>
  
         </form>


	
    <p id='demo1'></p>
	<p id="demo"></p>
	
	
	<script>
	
		    document.getElementById('date').type = 'date';
			var date=new Date();
			var day=date.getDate();
			var month=date.getMonth()+1;
			var year=date.getFullYear();
			
			if(day<10&&month<10){
			var mindate= year+"-0"+month+"-0"+day;
			document.getElementById('date').min = mindate;
			}
			else if(day<10){
			var mindate= year+"-"+month+"-0"+day;
			document.getElementById('date').min = mindate;	
			}
			else if(month<10){
			var mindate= year+"-0"+month+"-"+day;
			document.getElementById('date').min = mindate;	
			}
			else{
				var mindate= year+"-"+month+"-"+day;
			document.getElementById('date').min = mindate;		
			}
			
			
function myFunction(){
				
				var date= document.getElementById('date').value;
			
				var xmlhttp = new XMLHttpRequest();
     
                   xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","viewbookedappointment2.php?date="+date,true);
        xmlhttp.send();
		
}
  
	
		
		
		 
	</script>
	
	

	
	
	
  		
	</div>			
</body></center>
</html>