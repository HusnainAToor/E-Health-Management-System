<html>
<head>

<!---JQuery Imports -->



<!---JQuery Imports -->

<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="indexbody.css">
<script src="index.js"></script>
<title>HMS</title>
</head>
<center><body>
<header>
<div id="header-div1">
    <img src="images/e-logo.png" id="heaader-logo">  
	<div id="header-menu1">
                    <ul id="menu-ul">
						<li onclick="
						
						document.getElementById('login').style.display='none'
						document.getElementById('register').style.display='block'
						
						" ><a href="#">Register</a></li>
					    <li onclick="
						document.getElementById('register').style.display='none'
					
						document.getElementById('login').style.display='block'
						"><a href="#">Log In</a></li>	
                        						
				    </ul>
					
					
				</div>
	            <h1 style="font-family:Brush Script MT;">E-Health Management System</h1><tr>
		        <div id="header-menu2">
			        <ul id="menu-ul">
						<li><a href="#">Home</a></li>
					    <li><a href="#">About</a></li>
						<li><a href="#">Doctors</a></li>
						<li><a href="#">Appointments</a></li>
						<li><a href="#">Contact</a></li>
				    </ul>	  
	</div>
</div>
</header>

<!--;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;-->





<div id="main-div">

        <table>
	         <tr> 
                       <td class="main-table"><img class="main-table-image" src="images/about.jpg"></td> 
					   
					   <td class="main-table">
					           <center><h1>About E-Health</h1></center>
							   <p style="padding-left:150px; text-align:justify;">we aim to provide excellence in medical care to all our patients.
							   We are dedicated to listening to you,
							   discussing your mental and physical concerns in an honest and open fashion. We will provide you with up to date, 
							   evidence-based medical advice to make informed choices when it comes to managing your health. </p>
					   </td>		 
		     </tr><br>
		     <tr>
		               <td class="main-table">
					           <center><h1>Doctors</h1></center>
							   <p style="padding-right:150px; text-align:justify;">we aim to provide excellence in medical care to all our patients.
							   We are dedicated to listening to you,
							   discussing your mental and physical concerns in an honest and open fashion. We will provide you with up to date, 
							   evidence-based medical advice to make informed choices when it comes to managing your health. </p>
					   
					   </td>	
					   <td class="main-table"><img class="main-table-image" src="images/doctors.jpg"></td> 
					   	 
		     </tr><br><br>
		     <tr>
		               <td class="main-table"><img class="main-table-image" src="images/appointment.jpg"></td>
					   <td class="main-table">
					           <center><h1>Appointment</h1></center>
							   <p style="padding-left:150px; text-align:justify;">we aim to provide excellence in medical care to all our patients.
							   We are dedicated to listening to you,
							   discussing your mental and physical concerns in an honest and open fashion. We will provide you with up to date, 
							   evidence-based medical advice to make informed choices when it comes to managing your health. </p>
					   </td>		 
		     </tr><br><br>
		   
	    </table><br><br>
		<table>
		     <tr>
			      <td class="main-table-2nd">
				         <div class="main-table-2nd-div">
						      <img class="main-table-2nd-div-image" src="images/blood.jpg"><br>
							  <center><h2>Blood Test</h2></center>
							  <p style="padding:10px; text-align:justify;">We aim to provide excellence in medical care to all our patients.
							  We are dedicated to listening to you,
							  discussing your mental and physical concerns in good fashion. </p>
						 </div>
				  </td>
				  <td class="main-table-2nd">
				         <div class="main-table-2nd-div">
						       <img class="main-table-2nd-div-image" src="images/xray.jpg">
							   <center><h2>Xray</h2></center>
							   <p style="padding:10px; text-align:justify;">We aim to provide excellence in medical care to all our patients.
							   We are dedicated to listening to you,
							   discussing your mental and physical concerns in good fashion. </p>
						 </div>
				  </td>
				  <td class="main-table-2nd">
				         <div class="main-table-2nd-div">
						       <img class="main-table-2nd-div-image" src="images/surgery.jpg">
							   <center><h2>Surgery</h2></center>
							   <p style="padding:10px; text-align:justify;">We aim to provide excellence in medical care to all our patients.
							   We are dedicated to listening to you,
							   discussing your mental and physical concerns in good fashion. </p>
						 </div>
				  </td>
				  <td class="main-table-2nd">
				         <div class="main-table-2nd-div">
						        <img class="main-table-2nd-div-image" src="images/appointment.jpg">
							    <center><h2>Book Appointment</h2></center>
							    <p style="padding:10px; text-align:justify;">We aim to provide excellence in medical care to all our patients.
							    We are dedicated to listening to you,
							    discussing your mental and physical concerns in good fashion. </p>
						 </div>
				  </td>
			 </tr>
		     
		</table>

</div><br><br>





<center><div id="login" class="magadiv">
<h1 style="float:left; margin-left:100; "> Log In </h1><br></br><br>
  <form  action="login.php" class="form" method="post">
  	<button type="button" style="background-color:red; width:50;  border-radius: 100px 100px; "  onclick="document.getElementById('login').style.display='none'">X</button><br><br></br>
    <label><b>Username</b></label><br><br>
	<input type="text" placeholder="Enter Email" name="email" required><br><br><br>
    <label><b>Password</b></label><br><br>
	<input type="password" placeholder="Enter Password" name="password" required><br><br><br>
	<button type="submit">Login</button><br><br><br>
 </form>
</div></center>

<center><div id="register" class="magadiv">
    <h1 style="float:left; margin-left:100;"> Register </h1><br></br><br>
  <form action="register.php" class="form" method="post">
  <button type="submit" style="background-color:red; width:50;  border-radius: 100px 100px; "  onclick="document.getElementById('register').style.display='none'">X</button><br><br></br>

   
	  <label><b>Name</b></label><br><br>
	<input type="text" placeholder="Enter First name" name="name" required><br><br>

	  <label><b>Contact No:</b></label><br><br>
	<input type="text" placeholder="Enter Contact No:" name="number" required><br><br>
	
    <label><b>Email</b></label></br></br>
	<input type="email" placeholder="Enter Username" name="email" required><br><br>
    <label><b>Password</b></label><br><br>
	<input type="password" placeholder="Enter Password" name="password" required><br><br><br>
	<button type="submit">Register Me!</button><br><br><br>
	
  </form>

</div></center>

<!-- ...................................... PHP Code for Registe...........................................................-->



<!--;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;-->
<footer>
<div id="footer-div">
    <div id="footer-content-div">
	    <table id="footer-table-id">
		    <tr> 
			     <td class="footer-table">
				    <ul class="footer-list">
					    <br><br>
					    <li><a href="#">Home</a></li>
					    <li><a href="#">About</a></li>
						<li><a href="#">Doctors</a></li>
						<li><a href="#">Appointments</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				 </td>
				 <td class="footer-table">
				    <ul  class="footer-list">
					    <br><br>
					    <li><a href="#">Home</a></li>
					    <li><a href="#">About</a></li>
						<li><a href="#">Doctors</a></li>
						<li><a href="#">Appointments</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				 </td>
				 <td class="footer-table">
				 	<ul  class="footer-list">
					    <br><br>
					    <li><a href="#"><b>Contact Details</b></a></li>
					    <li><a href="#">E-Health Management System</a></li>
						<li><a href="#">Ph: +353 899659857</a></li>
						<li><a href="#">Email: toorhusnain@gmail.com</a></li>
						<li><a href="#">Address: Dublin, Ireland.</a></li>
					</ul>
				 </td>
			</tr><br>
			
		</table><br>
		<tr><center><h2 style="color:black;">Copy Right 2018  Husnain Azeem Toor </h2><center></tr>
	</div>

</div>
</footer>
</body>
</center>
</html>