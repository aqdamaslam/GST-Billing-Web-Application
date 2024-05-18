<?php  
    require_once('db/admin_check.php');
	require_once('db/connection.php');
	
	$sql = "DELETE FROM up WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($connection, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>