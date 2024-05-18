<?php 
	require_once('db/jh_check.php');
	require_once('db/db_connect.php');
	require_once('db/rightclick.php');
	
	
$sql="SELECT * FROM jh_bill ORDER BY id DESC LIMIT 1";
$records=mysql_query($sql);
?>

<!DOCTYPE html>
<html>
<head>

<title>Hira Coal Mines Pvt Ltd.</title>


<!-- Favicon -->
<link rel="icon" href="img/favicon.png">


<style type="text/css">
table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 6px;

}
</style>
<style type="text/css" media="print">
@page {
    size: auto;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}
</style>


<!--// Print Code --->

<script>
function myFunction() {
    window.print();
}
</script>

<!--// Print Code --->
</head>




<body>
<div>
<table width="1000" height="250">
  <tr>
    <th><p style="text-align: center;"><font size="6"><b>TAX INVOICE</b></font></p>
	<p style="text-align: left;"><font size="3"><b>GSTIN No. 20AACCH6287K1ZH</b></font></p>
		<p style="text-align: center;"><font size="5"><u><b>M/s HIRA COAL MINES PVT LTD</b></u></font></p>
		<p style="text-align: center;"><font size="3"><u><b>Plot No. 173, Gupta Market, Thana Chowk, Ramgarh</b></u></font></p>
		<p style="text-align: center;"><font size="3"><u><b>Jharkhand</b></u></font></p></b>
	</th>
  </tr>
</table>
<table width="1000" height="100" style="text-align: center;">
  <tr>
    <th width="485"><b>INVOICE NUMBER:</b></th>
    <th><b>DATE OF SUPPLY:</b></th>
    <th><b>PLACE OF SUPPLY:</b></th>
  </tr>
  <tr>
    <td><input style="border: none; border-color: transparent;" id="invoice" name="invoice" value='<?php while($jh_outside_bill=mysql_fetch_assoc($records)){ echo $jh_outside_bill['id']; } ?>' readonly></td>
    <td><?php echo $_POST['dateofinvoice']; ?></td>
    <td><?php echo $_POST['placeofsupply']; ?></td>
  </tr>
</table>
<table width="1000" height="80">
  <tr height="70">
    <th><b>BILL TO PARTY (RECEIVER)</b></th>
    <th><b>SHIP TO PARTY (CONSIGNEE)</b></th>
  </tr>
  <tr>
    <td align="left-side" width="485" height="80"><b>NAME :-</b> <?php echo $_POST['billpartyname']; ?>
	</td>
    <td align="left-side"><b>NAME :-</b> <?php echo $_POST['shippartyname']; ?>
	</td>
  </tr>
  <tr>
    <td align="left-side" height="80"><b>ADDRESS :-</b> <?php echo $_POST['billpartyaddress']; ?>
	</td>
    <td align="left-side"><b>ADDRESS :-</b> <?php echo $_POST['shippartyaddress']; ?>
	</td>
  </tr>
  <tr>
    <td align="left-side" height="80"><b>GSTIN No. :-</b> <?php echo $_POST['billpartygstin']; ?>
	</td>
    <td align="left-side"><b>GSTIN No. :-</b> <?php echo $_POST['shippartygstin']; ?>
	</td>
  </tr>
</table>

<table align="left" width="1000" height="100" style="text-align: center;">
  <tr>
    <td width="250" height="50"><b>Description OF Goods</b></td>
    <td width="250"><b>Quantity(In M.T)</b></td>
    <td width="250"><b>AMOUNT In Rs)</b></td>
    <td width="250"><?php echo $_POST['amount']; ?></td>
  </tr>
  <tr>
    <td height="50"><?php echo $_POST['coal']; ?></td>
    <td><?php echo $_POST['quantity']; ?></td>
    <td><b>IGST (5%) In Rs</b></td>
    <td><?php echo $_POST['igst']; ?></td>
  </tr>
  <tr>
    <td height="50"><b>HSN CODE</b></td>
    <td><b>Rate(Per M.T)</b></td>
    <td><b>CESS 400/MT In Rs</b></td>
    <td><?php echo $_POST['cess']; ?></td>
  </tr>
  <tr>
    <td height="50">2701</td>
    <td><?php echo $_POST['rate']; ?></td>
    <td><b>TOTAL AMOUNT In Rs</b></td>
    <td><?php echo $_POST['totalamount']; ?></td>
  </tr>
  <tr>
    <td height="50"><b>MODE OF TRANSPORT</b></td>
    <td><?php echo $_POST['modeoftransport1']; ?></td>
    <td><b>TCS (1%) In Rs</b></td>
    <td><?php echo $_POST['tcs']; ?></td>
  </tr>
  <tr>
    <td height="50"><b>TRUCK OR RR NUMBER</b></td>
    <td><?php echo $_POST['modeoftransport']; ?></td>
    <td><b>OTHER CHARGES In Rs</b></td>
    <td><?php echo $_POST['othercharges']; ?></td>
  </tr>
</table>
<table width="1000" height="80" style="text-align: center;">
  <tr>
    <td width="495"><b>TERMS AND CONDITION</b></td>
    <td width="240"><b>GRAND TOTAL In Rs</b></td>
    <td width="240"><?php echo $_POST['grandtotal']; ?></td>
  </tr>
</table>

<table width="1000" height="180">
  <tr>
    <th><p style="text-align: left;"><b>1. E & OE</b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <b>For M/s Hira Coal Mines Pvt. Ltd.</b></font></p>
	<p style="text-align: left;"><b>2. Goods Once Sold will not be taken back.</b></font></p>
	<p style="text-align: left;"><b>3. Interest rate of 18% p.a will be charge on late payment of more than 7 days.</b></u></font></p>
	<p style="text-align: left;"<b>>4. Subject to Allahabad Jurisdiction.</b></u></font></p>
	</th>
  </tr>
</table>
<table width="1000" height="80">
  <tr>
    <th><p style="text-align: right;"><b>Authorized Signature</b></font></p>
	</th>
  </tr>
</table>
<table width="1010">
    <th></th>
</table>
</div>

<form class="form-horizontal" role="form" name="myform" onsubmit="return validateform()" id="jh_outside_bill" method="post" action="jh_submit.php">
      <input type="hidden" name="invoice" value="<?php echo $_POST['invoice'] ?>">
      <input type="hidden" name="placeofsupply" value="<?php echo $_POST['placeofsupply'] ?>">
      <input type="hidden" name="dateofinvoice" value="<?php echo $_POST['dateofinvoice'] ?>">
      <input type="hidden" name="dateofsupply" value="<?php echo $_POST['dateofsupply'] ?>">
      <input type="hidden" name="billpartyname" value="<?php echo $_POST['billpartyname'] ?>">
      <input type="hidden" name="billpartyaddress" value="<?php echo $_POST['billpartyaddress'] ?>">
      <input type="hidden" name="billpartycity" value="<?php echo $_POST['billpartycity'] ?>">
      <input type="hidden" name="billpartystate" value="<?php echo $_POST['billpartystate'] ?>">
      <input type="hidden" name="billpartygstin" value="<?php echo $_POST['billpartygstin'] ?>">
      <input type="hidden" name="coal" value="<?php echo $_POST['coal'] ?>">
      <input type="hidden" name="hsn" value="<?php echo $_POST['hsn'] ?>">
      <input type="hidden" name="quantity" value="<?php echo $_POST['quantity'] ?>">
      <input type="hidden" name="modeoftransport1" value="<?php echo $_POST['modeoftransport1'] ?>">
      <input type="hidden" name="modeoftransport" value="<?php echo $_POST['modeoftransport'] ?>">
      <input type="hidden" name="shippartyname" value="<?php echo $_POST['shippartyname'] ?>">
      <input type="hidden" name="shippartyaddress" value="<?php echo $_POST['shippartyaddress'] ?>">
      <input type="hidden" name="shippartycity" value="<?php echo $_POST['shippartycity'] ?>">
      <input type="hidden" name="shippartystate" value="<?php echo $_POST['shippartystate'] ?>">
      <input type="hidden" name="shippartygstin" value="<?php echo $_POST['shippartygstin'] ?>">
      <input type="hidden" name="rate" value="<?php echo $_POST['rate'] ?>">
      <input type="hidden" name="amount" value="<?php echo $_POST['amount'] ?>">
      <input type="hidden" name="igst" value="<?php echo $_POST['igst'] ?>">
      <input type="hidden" name="cess" value="<?php echo $_POST['cess'] ?>">
      <input type="hidden" name="totalamount" value="<?php echo $_POST['totalamount'] ?>">
      <input type="hidden" name="tcs" value="<?php echo $_POST['tcs'] ?>">
      <input type="hidden" name="othercharges" value="<?php echo $_POST['othercharges'] ?>">
      <input type="hidden" name="grandtotal" value="<?php echo $_POST['grandtotal'] ?>">

      <input type="hidden" name="username" value="<?php echo $_POST['username'] ?>">

</br></br></br>
<div class="container"><center>
  <button class="btn btn-success" onclick="myFunction()">Print</button>
  </center>
</form>
</body>
</html>

