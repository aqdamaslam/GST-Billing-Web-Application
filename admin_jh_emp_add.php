<?php

	
	require_once('db/admin_check.php');
	require_once('db/values.php');
	require_once('db/rightclick.php');
 
// Escape user inputs for security
$username = $mysqli->real_escape_string($_REQUEST['username']);
$password = $mysqli->real_escape_string($_REQUEST['password']);
 
// attempt insert query execution
$sql = "INSERT INTO jharkhand (username, password, level) VALUES ('$username', '$password', 'jh')";


if($mysqli->query($sql) === true){
	header("Location: admin_add_emp.php"); /* Redirect browser */
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();

?>

