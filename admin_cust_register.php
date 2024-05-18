<?php 
    require_once('db/admin_check.php');
	require_once('db/values.php');
	require_once('db/rightclick.php');



 
// Escape user inputs for security
$billpartyname = $mysqli->real_escape_string(strtoupper($_REQUEST['billpartyname']));
$suppliername = $mysqli->real_escape_string(strtoupper($_REQUEST['suppliername']));
$billpartyaddress = $mysqli->real_escape_string(strtoupper($_REQUEST['billpartyaddress']));
$billpartygstin = $mysqli->real_escape_string(strtoupper($_REQUEST['billpartygstin']));
$owner = $mysqli->real_escape_string(strtoupper($_REQUEST['owner']));
$ph1 = $mysqli->real_escape_string($_REQUEST['ph1']);
$ph2 = $mysqli->real_escape_string($_REQUEST['ph2']);
$ph3 = $mysqli->real_escape_string($_REQUEST['ph3']);
$firm_type = $mysqli->real_escape_string(strtoupper($_REQUEST['firm_type']));
 
// attempt insert query execution
$sql = "INSERT INTO cust_reg (billpartyname, suppliername, billpartyaddress, billpartygstin, owner, ph_1, ph_2, ph_3, firm_type ) 
VALUES ('$billpartyname', '$suppliername', '$billpartyaddress', '$billpartygstin', '$owner', '$ph1', '$ph2', '$ph3', '$firm_type' )";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
	header("Location: admin_add_cust.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();

?>

