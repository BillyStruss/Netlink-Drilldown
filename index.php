<?php  //*****************    index.php    ***********************



// *******************    MAKE DB CONNECTION    ******************


$conn=mysqli_connect('localhost', 'root', 'Tbone123', 'customers');

?>


<!-- **********************    HTML    *****************************														-->


<!DOCTYPE HTML>
<HTML>    
     <HEAD> 
	  <meta name="viewport" content="width:device-width", initial-scale="1">
	  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css";>
     	  <title>Customer Management</title>
     	  <style> 
		th,td {text-align:right;}
		.header {position:static;}
		
	  </style>

     </HEAD>

     <BODY>
	  <div class='w3-container'><!-- document container div


	   
<!--**********************    PAGE HEADER   ************************													-->

	<div class="header">
	    <h2>Netlink Control</h2>
	    <div class='w3-panel w3-blue'>														
		<bold><h2>Customer Information</h2></bold><t><t>
		  
		  <button onclick= "window.open('entry.php', '_blank', 
			'toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=500,height=650')"
			    >Add Cust</button>

		  <button onclick="window.open('del.php','_blank', 
			'toolbar=yes,scrollbars=yes,resizable=yes,top=250,left=500,width=400,height=400')"
			    >Del Cust</button>

		  <input type="button" value="Show Full List" id="returnBtn" 
			onclick="clearState()"></input>
	
	    </div> <!-- close blue div  -->
	</div><!-- close header div-->


<!--*********************   TABLE AREA    **************************	           											    -->	
	
	
	        <table id='table' class='w3-table w3-table-all w3-hoverable'>			 
		    <tr>
			<th>Cust ID			
			<th>First Name
			<th>Last Name
			<th>City
			<th>State
			<th>Zip Code
		    </tr>
		
	<div id='ajaxArea'>



<?php //*****************  POPULATE FULL TABLE **********************

		 	 
		$sql = 'SELECT * FROM cust_list ORDER BY id'; 
 		$res = mysqli_query($conn, $sql);
	
	 	 if($res->num_rows > 0) {
		     while($row = mysqli_fetch_array($res)){
		       echo
			"<tr>".
			  "<td>"."$row[id]".
			  "<td>"."$row[firstName]".
			  "<td>"."$row[lastName]".
			  "<td>"."$row[city]".
			  "<td onclick='getState(this.firstChild.nodeValue)'>".
			  "$row[state]".
			  "<td>"."$row[zip]".
			"</tr>";
			
			} //  close while
		   } //  close if
	
		echo "</table><br/>". // close id=table
  	'</div>' // close ajaxArea
	
?>



<!--***********************    FUNCTIONS    ***************************													-->


 	<script>
		function getState(pickedState) {
		     
		    var req = new XMLHttpRequest();
		    req.onreadystatechange = function() {
			//if (this.readystate == 4 && this.status == 200) {
         		document.getElementById('ajaxArea').innerHTML = this.responseText;
				
			   // } // close if
			 }; // close anon function()
			
				req.open("GET","makeTable.php?state="+pickedState,true);
				req.send(); 

	 	} // close function getState()
	


		function clearState() {
		document.getElementById('ajaxArea').innerHTML = "";
		}

	</script>


	</div> <!-- close document container -->

     </BODY>
</HTML> 


<!--**********************    END PROGRAM    ****************************	
