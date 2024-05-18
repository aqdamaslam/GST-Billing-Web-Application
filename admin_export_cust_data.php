<?php  
//export.php  

    require_once('db/admin_check.php');
	require_once('db/connection.php');
	require_once('db/rightclick.php');
	
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM cust_reg ORDER by id ASC";
 $result = mysqli_query($connection, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Bill Party Name</th>  
                         <th>Supplier Name</th>  
                         <th>Bill Party Address</th>  
						 <th>Bill Party GSTIN</th>  
						 <th>Owner</th>  
						 <th>Phone Number 1</th>  
						 <th>Phone Number 2</th>  
						 <th>Phone Number 3</th>  
						 <th>Firm Type</th>  
					</tr> ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<tr>  
                         <td>'.$row["billpartyname"].'</td>  
                         <td>'.$row["suppliername"].'</td>  
                         <td>'.$row["billpartyaddress"].'</td>  
						 <td>'.$row["billpartygstin"].'</td>  
						 <td>'.$row["owner"].'</td>  
						 <td>'.$row["ph_1"].'</td>  
						 <td>'.$row["ph_2"].'</td>  
						 <td>'.$row["ph_3"].'</td>  
						 <td>'.$row["firm_type"].'</td>  
              </tr>';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Customer Data.xls');
  echo $output;
 }
}
?>