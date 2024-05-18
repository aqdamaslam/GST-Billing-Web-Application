<?php

	
	require_once('db/admin_check.php');
	require_once('db/values.php');
	require_once('db/rightclick.php');
 
// Escape user inputs for security
$username = $mysqli->real_escape_string($_REQUEST['username']);
$password = $mysqli->real_escape_string($_REQUEST['password']);
 
// attempt insert query execution
$sql1 = "INSERT INTO admin (username, password, level) VALUES ('$username', '$password', 'admin')";
$sql = "CREATE TABLE $username ( id INT NOT NULL AUTO_INCREMENT ,
invoice INT(100) NOT NULL ,
placeofsupply VARCHAR(255) NOT NULL ,
dateofinvoice TEXT NOT NULL ,
billpartyname TEXT NOT NULL ,
billpartyaddress VARCHAR(255) NOT NULL ,
billpartygstin VARCHAR(255) NOT NULL ,
coal TEXT NOT NULL ,
hsn INT(100) NOT NULL ,
quantity DECIMAL(65,2) NOT NULL ,
modeoftransport1 TEXT NOT NULL ,
modeoftransport VARCHAR(255) NOT NULL ,
shippartyname TEXT NOT NULL ,
shippartyaddress VARCHAR(255) NOT NULL ,
shippartygstin VARCHAR(100) NOT NULL ,
rate DECIMAL(65,2) NOT NULL ,
amount DECIMAL(65,2) NOT NULL ,
igst DECIMAL(65,2) NOT NULL ,
cgst DECIMAL(65,2) NOT NULL ,
sgst DECIMAL(65,5) NOT NULL ,
cess DECIMAL(65,2) NOT NULL ,
totalamount DECIMAL(65,2) NOT NULL ,
tcs DECIMAL(65,2) NOT NULL ,
othercharges DECIMAL(65,2) NOT NULL ,
grandtotal DECIMAL(65,2) NOT NULL ,
PRIMARY KEY (id))";

if($mysqli->query($sql) === true && $mysqli->query($sql1) === true){
	header("Location: add_emp.php"); /* Redirect browser */
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();

?>

