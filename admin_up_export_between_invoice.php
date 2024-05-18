<?php  
//export.php  

	require_once('db/admin_check.php');
	require_once('db/connection.php');
	require_once('db/rightclick.php');
	
$output = '';
if(isset($_POST["export"]))
{
	
$firstinvoice = mysql_real_escape_string($_REQUEST['firstinvoice']);
$secondinvoice = mysql_real_escape_string($_REQUEST['secondinvoice']);

 $query = "SELECT * FROM up_bill WHERE invoice BETWEEN '" . $firstinvoice . "' AND  '" . $secondinvoice . "' ORDER by id ASC";
 $result = mysqli_query($connection, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>INVOICE NUMBER</th>  
                         <th>USERNAME</th>  
                         <th>PLACE OF SUPPLY</th>  
						 <th>DATE OF SUPPLY</th>  
						 <th>BILL PARTY NAME</th>  
						 <th>BILL PARTY ADDRESS</th>  
						 <th>BILL PARTY GSTIN</th>  
						 <th>DESCRIPTION OF GOODS</th>  
						 <th>HSN CODE</th>  
						 <th>QUANTITY</th>  
						 <th>MODE OF TRANSPORT</th>  
						 <th>TRUCK OR RR NUMBER</th>  
						 <th>SHIP PARTY NAME</th>  
						 <th>SHIP PARTY ADDRESS</th>  
						 <th>SHIP PARTY GSTIN</th>  
						 <th>RATE</th>  
						 <th>AMOUNT</th>  
						 <th>IGST</th>  
						 <th>CGST</th>  
						 <th>SGST</th>  
						 <th>CESS</th>  
						 <th>TOTAL AMOUNT</th>  
						 <th>TCS</th>  
						 <th>OTHER CHARGES</th>  
						 <th>GRAND TOTAL</th> 
					</tr> ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<tr>  
                         <td>'.$row["invoice"].'</td>  
                         <td>'.$row["username"].'</td>  
                         <td>'.$row["placeofsupply"].'</td>  
						 <td>'.$row["dateofinvoice"].'</td>  
						 <td>'.$row["billpartyname"].'</td>  
						 <td>'.$row["billpartyaddress"].'</td>  
						 <td>'.$row["billpartygstin"].'</td>  
						 <td>'.$row["coal"].'</td>  
						 <td>'.$row["hsn"].'</td>  
						 <td>'.$row["quantity"].'</td>  
						 <td>'.$row["modeoftransport1"].'</td>  
						 <td>'.$row["modeoftransport"].'</td>  
						 <td>'.$row["shippartyname"].'</td>  
						 <td>'.$row["shippartyaddress"].'</td>  
						 <td>'.$row["shippartygstin"].'</td>  
						 <td>'.$row["rate"].'</td>  
						 <td>'.$row["amount"].'</td>  
						 <td>'.$row["igst"].'</td>  
						 <td>'.$row["cgst"].'</td>  
						 <td>'.$row["sgst"].'</td>  
						 <td>'.$row["cess"].'</td>  
						 <td>'.$row["totalamount"].'</td>  
						 <td>'.$row["tcs"].'</td>  
						 <td>'.$row["othercharges"].'</td>  
						 <td>'.$row["grandtotal"].'</td> 
              </tr>';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Between Invoice.xls');
  echo $output;
 }
}
?>