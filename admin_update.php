<?php


	require_once('db/admin_check.php');
	require_once('db/values.php');
	require_once('db/rightclick.php');

 
// Escape user inputs for security
$invoice = $mysqli->real_escape_string($_REQUEST['invoice']);
$placeofsupply = $mysqli->real_escape_string($_REQUEST['placeofsupply']);
$dateofinvoice = $mysqli->real_escape_string($_REQUEST['dateofinvoice']);
$billpartyname = $mysqli->real_escape_string($_REQUEST['billpartyname']);
$billpartyaddress = $mysqli->real_escape_string($_REQUEST['billpartyaddress']);
$billpartygstin = $mysqli->real_escape_string($_REQUEST['billpartygstin']);
$coal = $mysqli->real_escape_string($_REQUEST['coal']);
$quantity = $mysqli->real_escape_string($_REQUEST['quantity']);
$modeoftransport1 = $mysqli->real_escape_string($_REQUEST['modeoftransport1']);
$modeoftransport = $mysqli->real_escape_string($_REQUEST['modeoftransport']);
$shippartyname = $mysqli->real_escape_string($_REQUEST['shippartyname']);
$shippartyaddress = $mysqli->real_escape_string($_REQUEST['shippartyaddress']);
$shippartygstin = $mysqli->real_escape_string($_REQUEST['shippartygstin']);
$rate = $mysqli->real_escape_string($_REQUEST['rate']);
$amount = $mysqli->real_escape_string($_REQUEST['amount']);
$igst = $mysqli->real_escape_string($_REQUEST['igst']);
$cess = $mysqli->real_escape_string($_REQUEST['cess']);
$totalamount = $mysqli->real_escape_string($_REQUEST['totalamount']);
$tcs = $mysqli->real_escape_string($_REQUEST['tcs']);
$othercharges = $mysqli->real_escape_string($_REQUEST['othercharges']);
$grandtotal = $mysqli->real_escape_string($_REQUEST['grandtotal']);


$sql = "UPDATE jh_bill SET 
placeofsupply = '$placeofsupply', 
dateofinvoice = '$dateofinvoice', 
billpartyname = '$billpartyname',
billpartyaddress = '$billpartyaddress',
billpartygstin = '$billpartygstin',
coal = '$coal',
quantity = '$quantity',
modeoftransport1 = '$modeoftransport1',
modeoftransport = '$modeoftransport',
shippartyname = '$shippartyname',
shippartyaddress = '$shippartyaddress',
shippartygstin = '$shippartygstin',
rate = '$rate',
amount = '$amount',
igst = '$igst',
cess = '$cess',
totalamount = '$totalamount',
tcs = '$tcs',
othercharges = '$othercharges',
grandtotal = '$grandtotal'

WHERE invoice = $invoice";
$records=mysql_query($sql);

if($mysqli->query($sql) === true){
	header("Location: adminhome.php"); /* Redirect browser */
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();

?>