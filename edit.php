<?php  

	require_once('db/admin_check.php');
	require_once('db/connection.php');
	
	$id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	$sql = "UPDATE cust_reg SET ".$column_name."='".$text."' WHERE id='".$id."'";  
	if(mysqli_query($connection, $sql))  
	{  
		echo 'Data Updated';  
	}  
 ?>