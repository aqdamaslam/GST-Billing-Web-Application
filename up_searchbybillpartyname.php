<?php 
	require_once('db/up_check.php');
	require_once('db/db_connect.php');
	require_once('db/rightclick.php');
	

$search = mysql_real_escape_string($_REQUEST['search']);

$sql= "SELECT * FROM up_bill WHERE billpartyname LIKE '%".$search."%' ORDER BY id ASC";

$records=mysql_query($sql);

	
?>

<!------- Admin Authentication --------->


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hira Coal Mines Pvt Ltd.</title>
  <meta charset="utf-8">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- Favicon -->
<link rel="icon" href="img/favicon.png">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>



<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<style>

.video-container {
position: relative;
padding-bottom: 56.25%;
padding-top: 30px;
height: 0;
overflow: hidden;
}
.video-container iframe,  
.video-container object,  
.video-container embed {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
}

</style>

<!-- Calender --->

<script type="text/javascript">
        $(function () {
            $('#txtDate').datepicker({
                dateFormat: "dd/MM/yy",
                changeMonth: true,
                changeYear: true
            });
        });
</script>

<!--// Calender --->

<!--// Print Code --->

<script>
function myFunction() {
    window.print();
}
</script>

<!--// Print Code --->

</head>
<body>
<style>
table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 6px;
    text-align: center;

}
</style>
	<table align="center">
	<tr>
		<th colspan="10">Search Result Bill Party Name</th>
	</tr>
                          <tr>  
                               <th width="5%">Invoice Number</th>  
                               <th width="5%"> Date Of Invoice</th> 
                               <th width="30%">Bill Party Name</th>  
                               <th width="43%">Ship Party Name</th>  
                               <th width="43%">Truck Or RR Number</th>   
                               <th width="43%">Quantity</th> 
                               <th width="43%">Rate</th>  
                               <th width="43%">Total Amount</th>  
                               <th width="43%">Grand Total</th> 
                          </tr> 
  <?php 
			while($row=mysql_fetch_array($records)){
		?>
                          <tr>  
                               <td><?php echo $row["invoice"]; ?></td>  
                               <td><?php echo $row["dateofinvoice"]; ?></td> 
                               <td><?php echo $row["billpartyname"]; ?></td>  
                               <td><?php echo $row["shippartyname"]; ?></td>
                               <td><?php echo $row["modeoftransport"]; ?></td>
                               <td><?php echo $row["quantity"]; ?></td>
                               <td><?php echo $row["rate"]; ?></td>
                               <td><?php echo $row["totalamount"]; ?></td>
                               <td><?php echo $row["grandtotal"]; ?></td>
                          </tr>  
                     <?php  
                     }  
                     ?>  
					 
	</table>


</br></br></br>
<div class="container"><center>
  <button class="btn btn-success" onclick="myFunction()">Print</button>
  </center>
</div>

</body>
</html>

