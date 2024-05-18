<?php 
	require_once('db/admin_check.php');
	require_once('db/connection.php');
$sql = "INSERT INTO jharkhand(username, password) VALUES('".$_POST["username"]."', '".$_POST["password"]."')";  
if(mysqli_query($connection, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>