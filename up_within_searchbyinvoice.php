<?php 
	require_once('db/up_check.php');
	require_once('db/db_connect.php');
	require_once('db/rightclick.php');
	
	$search = mysql_real_escape_string($_REQUEST['invoice']);

$sql= "SELECT * FROM up_within_bill WHERE invoice LIKE '%".$search."%' LIMIT 1";
$records=mysql_query($sql);

	
?>

<!DOCTYPE html>
<html>
<head>

<title>Hira Coal Mines Pvt Ltd</title>


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


  <?php 
			while($row=mysql_fetch_array($records)){
		?>	



<body>
<div>
<table width="1000" height="250">
  <tr>
    <th><p style="text-align: center;"><font size="6"><b>TAX INVOICE</b></font></p>
	<p style="text-align: left;"><font size="3"><b>GSTIN No. 09AACCH6287K1Z1</b></font></p>
		<p style="text-align: center;"><font size="5"><u><b>M/s HIRA COAL MINES PVT LTD</b></u></font></p>
		<p style="text-align: center;"><font size="3"><u><b>C-C 6 G.T.B NAGAR KARELI</b></u></font></p>
		<p style="text-align: center;"><font size="3"><u><b>ALLAHABAD, U.P.</b></u></font></p></b>
	</th>
  </tr>
</table>
<table width="1000" height="100" style="text-align: center;">
  <tr>
    <th width="485">INVOICE NUMBER:</th>
    <th>DATE OF SUPPLY:</th>
    <th>PLACE OF SUPPLY:</th>
  </tr>
  <tr>
    <td><?php echo $row['invoice']; ?></td>
    <td><?php echo $row['dateofinvoice']; ?></td>
    <td><?php echo $row['placeofsupply']; ?></td>
  </tr>
</table>
<table width="1000" height="80">
  <tr height="70">
    <th>BILL TO PARTY (RECEIVER)</th>
    <th>SHIP TO PARTY (CONSIGNEE)</th>
  </tr>
  <tr>
    <td align="left-side" width="485" height="80">NAME :- <?php echo $row['billpartyname']; ?>
	</td>
    <td align="left-side">NAME :- <?php echo $row['shippartyname']; ?>
	</td>
  </tr>
  <tr>
    <td align="left-side" height="80">ADDRESS :- <?php echo $row['billpartyaddress']; ?>
	</td>
    <td align="left-side">ADDRESS :- <?php echo $row['shippartyaddress']; ?>
	</td>
  </tr>
  <tr>
    <td align="left-side" height="80">GSTIN No. :- <?php echo $row['billpartygstin']; ?>
	</td>
    <td align="left-side">GSTIN No. :- <?php echo $row['shippartygstin']; ?>
	</td>
  </tr>
</table>

<table align="left" width="1000" height="100" style="text-align: center;">
  <tr>
    <td width="245" height="50">DESCRIPTION OF GOODS</td>
    <td width="250">QUANTITY(In M.T)</td>
    <td width="250">AMOUNT In Rs</td>
    <td width="250"><?php echo $row['amount']; ?></td>
  </tr>
  <tr>
    <td height="50"><?php echo $row['coal']; ?></td>
    <td><?php echo $row['quantity']; ?></td>
    <td>CGST (2.5%) In Rs</td>
    <td><?php echo $row['cgst']; ?></td>
  </tr>
  <tr>
    <td height="50">HSN CODE</td>
    <td>Rate(Per M.T)</td>
    <td>SGST (2.5%) In Rs</td>
    <td><?php echo $row['sgst']; ?></td>
  </tr>
  <tr>
    <td height="50">2701</td>
    <td><?php echo $row['rate']; ?></td>
    <td>CESS 400/M.T (Rs)s</td>
    <td><?php echo $row['cess']; ?></td>
  </tr>
  <tr>
    <td height="50">MODE OF TRANSPORT</td>
    <td><?php echo $row['modeoftransport1']; ?></td>
    <td>Total Amount (Rs)</td>
    <td><?php echo $row['totalamount']; ?></td>
  </tr>
  <tr>
    <td height="50">TRUCK OR RR NUMBER</td>
    <td><?php echo $row['modeoftransport']; ?></td>
    <td>TCS 1% (Rs)</td>
    <td><?php echo $row['tcs']; ?></td>
  </tr>
</table>
<table width="1000" height="80" style="text-align: center;">
  <tr>
    <td width="500">TERMS AND CONDITION</td>
    <td width="245">GRAND TOTAL In Rs</td>
    <td width="240"><?php echo $row['grandtotal']; ?></td>
  </tr>
</table>

<table width="1000" height="180">
  <tr>
    <th><p style="text-align: left;">1. E & OE &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; For M/s Hira Coal Mines Pvt. Ltd.</b></font></p>
	<p style="text-align: left;"><b>2. Goods Once Sold will not be taken back.</b></font></p>
	<p style="text-align: left;">3. Interest rate of 18% p.a will be charge on late payment of more than 7 days.</b></u></font></p>
	<p style="text-align: left;">4. Subject to Allahabad Jurisdiction.</b></u></font></p>
	</th>
  </tr>
</table>
<table width="1000" height="80">
  <tr>
    <th><p style="text-align: right;">Authorized Signature</b></font></p>
	</th>
  </tr>
</table>
<table width="1010">
    <th></th>
</table>
</div>


</br></br></br>
<div class="container"><center>
  <button class="btn btn-success" onclick="myFunction()">Print</button>
  </center>
</div>
</body>
</html>


<?php
			}

