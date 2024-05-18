<?php  
 
    require_once('db/admin_check.php');
	require_once('db/connection.php');
	
	$sql = "DELETE FROM cust_reg WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($connection, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>