<?php  //*********************    entry.php    *********************************



// ************************    MAKE DB CONNECTION    ***************************


$conn=mysqli_connect('localhost', 'root', 'Tbone123', 'customers');

?>



<!DOCTYPE HTML>
<!--*******************************    HEADER    ******************************** -->
	<HEAD>
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</HEAD>

	<BODY>
		<div class="w3-container">  <!-- outer body div-->
			<h2>Netlink Control</h2>
		
			<div class="w3-panel w3-blue">
			<bold><h3>Customer Entry Form</h3></bold></div>
				
<!--*******************************    FORM    ***********************************-->	
			
		  <form class="w3-container" action="" method="POST">
		     <p>
			<label>First Name</label>
			<input  class="w3-input w3-border" name="first_name"
			onfocus="style.background='#ffffe6'"
			onblur="style.background=''" type="text" required autofocus></p>
		     <p>
			<label>Last Name</label>
			<input class="w3-input w3-border" name="last_name"
			onfocus="style.background='#ffffe6'"
			onblur="style.background=''" type="text" required></p>
		     <p>
			<label>City</label>
			<input class="w3-input w3-border" name="city"
			onfocus="style.background='#ffffe6'"
			onblur="style.background=''" type="text" required></p>
		     
		     <p>	
			<label>State</label>
			<input class="w3-input w3-border" name="state"
			onfocus="style.background='#ffffe6'"
			onblur="style.background=''" type="text" required></p>
		     <p>
			<label>Zip Code</label>
			<input class="w3-input w3-border" name="zip"
			onfocus="style.background='#ffffe6'"
			onblur="style.background=''" type="text" required></p>
		      
		     <input type="submit"  name="submit" value="Create"> 
		     
	 	     <input type="reset"  value="Clear">
	
		     <input type="button" id="done" value="Finished" onclick="window.close()">

		 </form>
		
		</div>  <!-- close outer body div-->

<!--****************************    END FORM    ******************************** -->
	</BODY>

</HTML>
	
	<?php
	
//*****************************    UPDATE MSQL    **************************** -->	
	
	if(isset($_POST['first_name'])) {	
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];  
	
	$q="INSERT INTO cust_list (firstName, lastName, city, state, zip) values ('$first_name', '$last_name', '$city', '$state', '$zip')";
	$r=mysqli_query($conn, $q);
	
	echo "<h3>You entered customer -  </h3><h4>".'  '. $first_name.	' '. $last_name . '     '.$city. ', '.$state.	'   '. $zip . 	"</h4>";
	}
	?>


<!--***************************  END PROGRAM   *******************************	
