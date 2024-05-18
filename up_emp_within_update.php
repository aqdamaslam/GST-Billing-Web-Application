<?php


	require_once('db/up_check.php');
	require_once('db/values.php');
	require_once('db/rightclick.php');

 
// Escape user inputs for security
$username = $mysqli->real_escape_string(strtoupper($_REQUEST['username']));
$invoice = $mysqli->real_escape_string($_REQUEST['invoice']);
$placeofsupply = $mysqli->real_escape_string($_REQUEST['placeofsupply']);
$dateofinvoice = $mysqli->real_escape_string($_REQUEST['dateofinvoice']);
$billpartyname = $mysqli->real_escape_string(strtoupper($_REQUEST['billpartyname']));
$billpartyaddress = $mysqli->real_escape_string(strtoupper($_REQUEST['billpartyaddress']));
$billpartygstin = $mysqli->real_escape_string(strtoupper($_REQUEST['billpartygstin']));
$coal = $mysqli->real_escape_string($_REQUEST['coal']);
$quantity = $mysqli->real_escape_string($_REQUEST['quantity']);
$modeoftransport1 = $mysqli->real_escape_string(strtoupper($_REQUEST['modeoftransport1']));
$modeoftransport = $mysqli->real_escape_string(strtoupper($_REQUEST['modeoftransport']));
$shippartyname = $mysqli->real_escape_string(strtoupper($_REQUEST['shippartyname']));
$shippartyaddress = $mysqli->real_escape_string(strtoupper($_REQUEST['shippartyaddress']));
$shippartygstin = $mysqli->real_escape_string(strtoupper($_REQUEST['shippartygstin']));
$rate = $mysqli->real_escape_string($_REQUEST['rate']);
$amount = $mysqli->real_escape_string($_REQUEST['amount']);
$cgst = $mysqli->real_escape_string($_REQUEST['cgst']);
$sgst = $mysqli->real_escape_string($_REQUEST['sgst']);
$cess = $mysqli->real_escape_string($_REQUEST['cess']);
$totalamount = $mysqli->real_escape_string($_REQUEST['totalamount']);
$tcs = $mysqli->real_escape_string($_REQUEST['tcs']);
$othercharges = $mysqli->real_escape_string($_REQUEST['othercharges']);
$grandtotal = $mysqli->real_escape_string($_REQUEST['grandtotal']);


$sql = "UPDATE up_bill SET 
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
cgst = '$cgst',
sgst = '$sgst',
cess = '$cess',
totalamount = '$totalamount',
tcs = '$tcs',
othercharges = '$othercharges',
grandtotal = '$grandtotal'

WHERE invoice = '$invoice' AND username = '$username'";
$records=mysql_query($sql);



$sql1 = "UPDATE up_within_bill SET 
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
cgst = '$cgst',
sgst = '$sgst',
cess = '$cess',
totalamount = '$totalamount',
tcs = '$tcs',
othercharges = '$othercharges',
grandtotal = '$grandtotal'

WHERE invoice = '$invoice'";
$records=mysql_query($sql);

if($mysqli->query($sql) === true $mysqli->query($sql1) === true){
	header("Location: up_old.php"); /* Redirect browser */
} {

// if the 'id' isn't valid, display an error


    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();

?>