
<?php //************  makeTable.php   **************								
 
 	

//*******  STORE SUBMISSION  ***********************	


	$state = $_GET["state"]; 							



//*******  MAKE CONNECTION  *************************


	$conn = mysqli_connect('localhost','root','Tbone123','customers'); 
	if (!$conn) { die('Could not connect: ' . mysqli_error($conn));}



//*******  QUERY DB  ********************************


	$sql="SELECT * FROM cust_list WHERE state = '" .$state."'". " ORDER BY city";
	$result = mysqli_query($conn,$sql);
	


//*******  DISPLAY STATE TABLE  **********************	
	
	echo "<style>th td{text-align:left}</style>";		
	    echo  "<h3>State of"." " .$state." "."by City</h3>
		<table name='stateTable' class='w3-table w3-table-all w3-hoverable'>			 
		   <tr>
			<th>Cust ID			
			<th>First Name
			<th>Last Name
			<th>City
			<th>State
			<th>Zip Code
		   </tr>";
		   
	


//********  Populate State Table *********************

	 if($result->num_rows > 0) {
	     while($row = mysqli_fetch_array($result)){
	     
		
		  echo '<tr>'.
			'<td>'.$row['id'].
			'<td>'.$row['firstName']. 
			'<td>'.$row['lastName'].
			'<td>'.$row['city'].
			'<td>'.$row['state'].
			'<td>'.$row['zip'].		       
			'</tr>';
				
	     } //  close while
	   } //  close if
	 echo '</table>';
	
    	echo  '<br><br><br><h2>Full Customer List</h2>'; // close stateTable table 
	
	
?> <!--- close php --->



<!--***************************  END PROGRAM   ************************	
