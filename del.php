<?php  //********************    del.php    ********************************



// ***********************    MAKE DB CONNECTION    ************************


$conn=mysqli_connect('localhost', 'root', 'Tbone123', 'customers');

?>

<!DOCTYPE HTML>
	<HEAD>
		<meta name="viewport" content="width:device-width, initial-scale=1"> 
		<link rel=stylesheet href="https://www.w3schools.com/w3css/4/w3.css">
	</HEAD>

	<BODY>
		<div class="w3-container">  <!-- outer body div-->
			<h2>Netlink Control</h2>
		
			<div class="w3-panel w3-red">
			<bold><h3>DELETE CUSTOMER</h3></bold></div>
				
<!--*******************************  FORM  ***********************************												-->	
			
		  <form class="w3-container" action="" method="POST">
		     <p>
			<label>Customer ID</label>
			<input  class="w3-input w3-border" name="id"
			onfocus="style.background='#ffffe6'"
			onblur="style.background=''" type="text" required autofocus></p>
		     
		     <input type="submit"  name="submit" value="DELETE"
		     onmouseover="w3-ripple"> 
		     
	 	     <input type="reset"  value="Clear"  
			     onmouseover="w3-ripple">
	
		     <input type="button" id="done" value="Finished"  
			     onmouseover="w3-ripple" onclick="window.close()">

		 </form>
		
		</div>  <!-- close outer body div-->


<?php
	if(isset($_POST['id'])) {
	  $ID = $_POST['id'];	
	

		echo "<h3>You Deleted Customer ID -" .$ID ;

		$q="DELETE FROM cust_list WHERE id = $ID";
		$r=mysqli_query($conn, $q);
		
	}
?>

	</BODY>

</HTML>


<!--***************************  END PROGRAM   *******************************	
