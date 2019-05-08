
<style>
#searchtable{
	
	background-color:lightgrey;
	width:70%;
	height:auto;	
	text-align:left;
}


.viewprofile-table td{
	
	width:20%;
	height:20%;
	border: 2px solid #0b396d;
	text-align:left;
}


</style>

<script>
function(){
	      var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
          document.getElementById("resulttest").innerHTML = this.responseText;
			    }
          };
          xmlhttp.open("GET","testsearch.php?txt="+txt,true);
          xmlhttp.send();	
}

</script>





<?php
session_start();
require('sessioncheck.php');
require('DbConnectionNew.php');	

$output='';


$sql = "SELECT * FROM `tests` WHERE tittle LIKE '%".$_GET["txt"]."%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
	$output .='<table id="searchtable">
	
	      <tr>
		  <th>Id</th>
		  <th>Medical Test</th>
		  <th> Lab</th>
		  <th>Add</th>
		  </tr>';
	
	
	
    // output data of each row 
	  while($row = mysqli_fetch_assoc($result)){ 
	  $output .='
	      <tr>
		  <td>'.$row["Id"].'</td>
		  <td>'.$row["Tittle"].'</td>
		  <td>'.$row["Lab"].'</td>
		  <td><a href="savepatienttest.php?test='.$row["Tittle"].' -- '.$row["Lab"].'"><button>ADD</button></a></td>
		  </tr>';
	  
	  
	}
	 echo $output;
	}
	  else{
		  
		  echo'Data Not Found';
	  }
?>