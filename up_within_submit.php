<?php 
	require_once('db/up_check.php');
	require_once('db/values.php');
	require_once('db/rightclick.php');
 

// Escape user inputs for security
$invoice = $mysqli->real_escape_string(strtoupper($_REQUEST['invoice']));
$username = $mysqli->real_escape_string(strtoupper($_REQUEST['username']));
$placeofsupply = $mysqli->real_escape_string($_REQUEST['placeofsupply']);
$dateofinvoice = $mysqli->real_escape_string($_REQUEST['dateofinvoice']);
$billpartyname = $mysqli->real_escape_string($_REQUEST['billpartyname']);
$billpartyaddress = $mysqli->real_escape_string(strtoupper($_REQUEST['billpartyaddress']));
$billpartygstin = $mysqli->real_escape_string(strtoupper($_REQUEST['billpartygstin']));
$coal = $mysqli->real_escape_string(strtoupper($_REQUEST['coal']));
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
$grandtotal = $mysqli->real_escape_string($_REQUEST['grandtotal']);
 
// attempt insert query execution
$sql1 = "INSERT INTO up_bill (invoice, username, placeofsupply, dateofinvoice, billpartyname, billpartyaddress, billpartygstin, coal, hsn, quantity, modeoftransport1, modeoftransport, shippartyname, shippartyaddress, shippartygstin, rate, amount, igst, cgst, sgst, cess, totalamount, tcs, grandtotal) 
VALUES 
('$invoice', '$username', '$placeofsupply', '$dateofinvoice', '$billpartyname', '$billpartyaddress', '$billpartygstin', '$coal', 2701, '$quantity', '$modeoftransport1', '$modeoftransport', '$shippartyname', '$shippartyaddress', '$shippartygstin', '$rate', '$amount', 0, '$cgst', '$sgst', '$cess', '$totalamount', '$tcs', '$grandtotal')";


$sql = "INSERT INTO up_within_bill (invoice, placeofsupply, dateofinvoice, billpartyname, billpartyaddress, billpartygstin, coal, hsn, quantity, modeoftransport1, modeoftransport, shippartyname, shippartyaddress, shippartygstin, rate, amount, cgst, sgst, cess, totalamount, tcs, grandtotal) 
VALUES 
('$invoice', '$placeofsupply', '$dateofinvoice', '$billpartyname', '$billpartyaddress', '$billpartygstin', '$coal', 2701, '$quantity', '$modeoftransport1', '$modeoftransport', '$shippartyname', '$shippartyaddress', '$shippartygstin', '$rate', '$amount', '$cgst', '$sgst', '$cess', '$totalamount', '$tcs', '$grandtotal')";


if($mysqli->query($sql1) === true && $mysqli->query($sql) === true){
	header("Location: up_within.php"); /* Redirect browser */
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();

?>

